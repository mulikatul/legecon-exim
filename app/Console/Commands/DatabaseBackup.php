<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\BackupMail;

class DatabaseBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:database';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Email MySQL database backup to user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $database = env('DB_DATABASE');
        $username = env('DB_USERNAME');
        $password = env('DB_PASSWORD');       

        $backupFilename = 'backup_' . date('Y-m-d_H-i-s') . '.sql';
        $backupPath = storage_path('app/' . $backupFilename);

        $exitCode = 0;
        $output = [];
        exec('mysqldump -u '.$username.' -p'.$password.' '.$database.' > ' . $backupPath, $output, $exitCode);
        if ($exitCode === 0) 
        {   
            \Log::channel('backuplog')->info( "Backup created successfully.");     
            $sendEmail = $this->sendEmail($backupPath);
            if ($sendEmail) {
                \Log::channel('backuplog')->info( "Email sent successfully.");
                 unlink($backupPath);
            } else {
                \Log::channel('backuplog')->info( "Failed to send email.");
            }

            //s\Log::channel('backuplog')->info( "SUCCESS");
        }
        else
        {
            \Log::channel('backuplog')->info( "Database backup failed.");
        }
        
    }

    protected function sendEmail($backupPath): bool
    {             
        try {
            $recipient = env('BACKUP_RECIPIENT');
            $maildata = [
                'title' => 'Restaurant DB Backup of '. now()->format('d M Y'),
                'backupPath' => $backupPath,
            ];
            
            Mail::to($recipient)->send(new BackupMail($maildata));
            return true;
        } catch (\Exception $e) {
            \Log::channel('backuplog')->info( $e);
            return false;
        }
    }
    
    protected function log($message, $timestamp, $log_file)
    {
        file_put_contents($log_file, "[$timestamp] $message" . PHP_EOL, FILE_APPEND);
    }
}

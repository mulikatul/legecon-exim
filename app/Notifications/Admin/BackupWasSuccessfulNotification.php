<?php

namespace App\Notifications\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Storage;

use Spatie\Backup\Events\BackupWasSuccessful;

class BackupWasSuccessfulNotification extends Notification
{
    use Queueable;
    protected BackupWasSuccessful $event;

    /**
     * Create a new notification instance.
     */
    public function __construct(BackupWasSuccessful $event)
    {
        $this->event = $event;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $backupDestination = $this->event->backupDestination;
        $backupFile = $backupDestination->newestBackup();
        $backupDisk = $backupDestination->diskName();
        if (!$backupFile) {
            return (new MailMessage)
                ->subject('Backup Completed')
                ->line("Backup created, but no file found.");
        }
        $fullPath = Storage::disk($backupDisk)->path($backupFile->path());
        $fileName = basename($fullPath);

        return (new MailMessage)
            ->subject('Mutefrog DB Backup - '. now()->format('d M Y'))
            ->line('Please find attachment.')
            ->attach($fullPath, [
                'as' => $fileName,
                'mime' => 'application/zip',
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

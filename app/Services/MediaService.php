<?php
namespace App\Services;

use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class MediaService
{
    public function uploadAndCompress($file, $path)
    {
        $allowedExtensions = ['JPG', 'PNG', 'GIF', 'BMP', 'WEBP'];

        if (in_array(strtoupper($file->getClientOriginalExtension()), $allowedExtensions)) {
            $this->createFolderIfNotExists($path);

            $fileNameWithoutExt = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $name = $fileNameWithoutExt . '-' . time() . '.webp';
            $fullPath = public_path("$path/$name");

            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $image->toWebp(100)->save($fullPath);

            return "$path/$name";
        }

        return $this->uploadFile($file, $path);
    }

    public function deleteFile($filePath)
    {
        $fullPath = public_path($filePath);        
        if (File::exists($fullPath)) {            
            File::delete($fullPath);
        }      
    }

    public function uploadFile($file, $path)
    {
        $this->createFolderIfNotExists($path);

        $fileNameWithoutExt = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $ext = $file->getClientOriginalExtension();
        $name = $fileNameWithoutExt . '-' . time() . '.' . $ext;
        $fullPath = "$path/$name";

        $file->move(public_path($path), $name);

        return $fullPath;
    }

    private function createFolderIfNotExists($path)
    {
        $folderPath = public_path($path);

        if (!File::isDirectory($folderPath)) {
            File::makeDirectory($folderPath, 0777, true, true);
        }
    }
}

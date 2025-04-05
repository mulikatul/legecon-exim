<?php
namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class MediaCDNService
{
    public function uploadAndCompress($file, $path)
    {
        $allowedExtensions = ['JPG', 'PNG', 'GIF', 'BMP', 'WEBP'];

        if (in_array(strtoupper($file->getClientOriginalExtension()), $allowedExtensions)) {
            $fileNameWithoutExt = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $name = $fileNameWithoutExt . '-' . time() . '.webp';
            $fullPath = "$path/$name";

            $manager = new ImageManager(new Driver());
            $image = $manager->read($file);
            $compressedImage = $image->toWebp(100); // Compress image with quality 100

            // Store the image in S3/Spaces
            Storage::disk('s3')->put($fullPath, (string) $compressedImage->encode(), 'public');

            return Storage::disk('s3')->url($fullPath);
        }

        return $this->uploadFile($file, $path);
    }

    public function deleteFile($filePath)
    {
        if (Storage::disk('s3')->exists($filePath)) {
            Storage::disk('s3')->delete($filePath);
        }
    }

    public function uploadFile($file, $path)
    {
        $fileNameWithoutExt = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $ext = $file->getClientOriginalExtension();
        $name = $fileNameWithoutExt . '-' . time() . '.' . $ext;
        $fullPath = "$path/$name";

        // Store the file in S3/Spaces
        Storage::disk('s3')->putFileAs($path, $file, $name, 'public');

        return Storage::disk('s3')->url($fullPath);
    }
}

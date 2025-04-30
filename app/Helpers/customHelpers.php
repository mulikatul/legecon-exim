<?php
ini_set('memory_limit', -1);
ini_set('max_execution_time', 0);
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


if (!function_exists('base_url')) {
    function base_url()
    {
        return URL::to('/');
    }
}
if (!function_exists('short_text')) {
    function short_text($content, $no_of_chars, $end_str="...")
    {    	
    	
       //return strlen($content) <= $no_of_chars ? $content : substr($content, 0, $no_of_chars) . $end_str;

       return strlen($content) <= $no_of_chars ? $content : substr($content, 0, stripos($content . ' ', ' ', $no_of_chars)) . $end_str;     	
    }
}
// if (!function_exists('media_upload_compress')) {
//     function media_upload_compress($file, $path, $file_prefix = null)
//     {
//         $list = ['JPG', 'PNG', 'GIF', 'BMP', 'WEBP'];
//         if (in_array(strtoupper($file->getClientOriginalExtension()), $list)) {
//             check_folder_exists($path);
//             //$name = media_unique_name($file_prefix) . '.' . $file->getClientOriginalExtension();        
//             $name =  $file->getClientOriginalName();
//             $fileNameWithoutExt = pathinfo($name, PATHINFO_FILENAME);
//             $completePath = $path . '/' . $fileNameWithoutExt .'-' .time() . '.webp';

//             $manager = new ImageManager(new Driver());
//             $image = $manager->read($file);
//             $image->toWebp(100)->save($completePath);
//             return $completePath;
//         }

//         return media_upload($file, $path, $file_prefix);
//     }
// }

if (!function_exists('media_delete')) {
    function media_delete($data)
    {
        if (File::exists(public_path($data))) {
            File::delete(public_path($data));
        }
        return;
    }
}
if (!function_exists('media_upload')) {
    function media_upload($file, $path, $file_prefix = null)
    {
        check_folder_exists($path);
        $fileNameWithoutExt = pathinfo($file, PATHINFO_FILENAME);
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        //$name = media_unique_name($file_prefix) . '.' . $file->getClientOriginalExtension();
        $name = $fileNameWithoutExt . '-' .time() . '.'.$ext;
        $file->move($path, $name);
        return $path . '/' . $name;
    }
}
if (!function_exists('format_html_tag')) {
    function format_html_tag($value)
    {
        return preg_replace(['/<(|\/)p>/', '~</?strong>~i'], '', $value);
    }
}
if (!function_exists('media_unique_name')) {
    function media_unique_name($file_prefix)
    {
        if (!isset($file_prefix)) {
            $file_prefix = env('APP_NAME');
            $file_prefix .= '-';
        }
        $unique_string = uniqid($file_prefix, true);
        $str = "1234567890abcdefghijklmnopqrstuvwxyz()$";
        $rand_string = substr(str_shuffle($str), 0, 8);
        $unique_string .= $rand_string;
        return $unique_string;
    }
}
if (!function_exists('check_folder_exists')) {
    function check_folder_exists($path)
    {
        $path = public_path($path);

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        return;
    }
}
if (!function_exists('media_file')) {
    function media_file($value)
    {
        if (isset($value)) {

            $extension = get_file_extension($value);

            switch ($extension) {
                case 'pdf':
                    $file = 'admin/images/pdf.png';
                    break;

                default:
                    $file = $value;
                    break;
            }
            return asset($file);
        } else {
            return asset('admin/images/no-image.jpg');
        }
    }
}
if (!function_exists('get_file_extension')) {
    function get_file_extension($path)
    {
        return pathinfo($path, PATHINFO_EXTENSION);
    }
}


if (!function_exists('formatted_date')) {
    function formatted_date($date, $format = 'd M Y')
    {
        return $date ? Carbon\Carbon::parse($date)->format($format) : '';
    }
}



if (!function_exists('slug_format')) {
    function slug_format($slug)
    {
        return strtolower(str_replace(' ', '-', $slug));
    }
}

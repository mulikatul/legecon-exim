<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\MediaService;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class AdminBaseController extends Controller implements HasMiddleware
{
    protected $constants;
    protected $mediaService;
    
	public function __construct(MediaService $mediaService)
    {
        $this->constants = config();
        $this->mediaService = $mediaService;
    }

    public static function middleware(): array
    {
        return []; // Empty array, as base controller doesn't need middleware by default
    }
    

    public function redirectToIndex($indexPage, $message = '')
    {
        return redirect()->route("{$indexPage}.index")->with([
            'message' => $message
        ]);
    }

    public function redirectToIndexError($indexPage, $message = '')
    {
        return redirect()->route("{$indexPage}.index")->with([
            'error' => $message
        ]);
    }

    public function responseToJson($message = '')
    {
        return response()->json([
            'message' => $message
        ]);
    }
}

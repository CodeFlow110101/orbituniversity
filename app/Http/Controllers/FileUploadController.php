<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
        $filePath = $request->file('file')->storePublicly('images');
        $fileUrl = Storage::url($filePath);
        return  ['url' => $fileUrl, 'path' => $filePath];
    }

    public function storeVideo(Request $request)
    {
        $imagePath = $request->file('image')->storePublicly('images');
        $imageUrl = Storage::url($imagePath);

        $videoPath = $request->file('video')->store('videos');

        return ['imageUrl' => $imageUrl, 'imagePath' => $imagePath, 'videoPath' => $videoPath];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function store(Request $request)
    {
        return Storage::url($request->file('file')->storePublicly('images'));
    }
}

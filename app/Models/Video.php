<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "videos";

    protected $fillable = ['program_id', 'video', 'image', 'video_path', 'image_path'];
}

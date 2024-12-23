<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = "videos";

    protected $fillable = ['name', 'description', 'program_id', 'image', 'video_path', 'image_path'];
}

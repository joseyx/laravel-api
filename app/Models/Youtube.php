<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    protected $table = 'youtube_videos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'video_link',
    ];

    use HasFactory;
}

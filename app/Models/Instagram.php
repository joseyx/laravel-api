<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
    protected $table = 'instagram_posts';

    protected $primaryKey = 'id';

    protected $fillable = [
        'post_link',
    ];

    use HasFactory;
}

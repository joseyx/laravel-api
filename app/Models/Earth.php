<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Earth extends Model
{
    protected $table = 'google_earth';

    protected $primaryKey = 'id';

    protected $fillable = [
        'earth_link',
    ];

    use HasFactory;
}

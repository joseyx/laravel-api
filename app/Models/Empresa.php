<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombreEmpresa',
        'rif',
        'email',
        'emailSecondary',
        'phone',
        'phoneSecondary',
        'pais',
        'estado',
        'direccion'
    ];

    use HasFactory;
}

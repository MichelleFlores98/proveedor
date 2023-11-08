<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentasContables extends Model
{
    use HasFactory;
    protected $fillable = [
        'empresa',
        'sitio',
        'cuenta_pasivo',
        'cuenta_anticipo',
    ];
}

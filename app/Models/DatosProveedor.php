<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosProveedor extends Model
{
    use HasFactory;

    //protected $table = 'datosproveedor';

    protected $fillable = [
        'nombre',
        'rfc',
        'calle',
        'colonia',
        'delegacion',
        'cuidad',
        'estado',
        'cp',
        'banco',
        'cuenta',
        'clabe',
        'constancia',
        'cumpli',
        'estado_cuenta',
        'user_id',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}

}

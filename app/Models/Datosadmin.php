<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datosadmin extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_persona',
        'pais_impuesto',
        'rertencion',
        'tipo_retencion',
        'metodo_pago',
        'dias_credito',
        'pago_recepcion',
        'factura_separada',
        'confirmacion',
        'status_confirmacion',
        'id_datos',
        'id_cuentas',
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}

}

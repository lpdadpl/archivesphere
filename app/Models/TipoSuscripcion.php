<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoSuscripcion extends Model
{
    protected $table = 'tipo_suscripción';
    protected $primaryKey = 'IdTipoSuscripción';
    public $timestamps = false;

    protected $fillable = ['Suscripción', 'Descripción', 'Precio'];

    public function suscripciones()
    {
        return $this->hasMany(Suscripcion::class, 'IdTipoSuscripción');
    }
}

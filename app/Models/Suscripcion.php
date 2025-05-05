<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    protected $table = 'suscripción';
    protected $primaryKey = 'IdSuscripción';
    public $timestamps = false;

    protected $fillable = ['IdUsuario', 'IdTipoSuscripción', 'Estado', 'FechaAlta'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'IdUsuario');
    }

    public function tipo()
    {
        return $this->belongsTo(TipoSuscripcion::class, 'IdTipoSuscripción');
    }
}

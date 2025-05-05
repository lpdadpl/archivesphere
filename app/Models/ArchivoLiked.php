<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchivoLiked extends Model
{
    protected $table = 'archivo_liked';
    protected $primaryKey = 'IdLiked';
    public $timestamps = false;

    protected $fillable = ['IdArchivo', 'IdUsuario', 'FechaLiked'];

    public function archivo()
    {
        return $this->belongsTo(Archivo::class, 'IdArchivo');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'IdUsuario');
    }
}

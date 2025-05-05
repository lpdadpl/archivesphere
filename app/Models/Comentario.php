<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';
    protected $primaryKey = 'IdComentario';
    public $timestamps = false;

    protected $fillable = ['IdArchivo', 'IdUsuario', 'Comentario', 'Estado', 'FechaComentario'];

    public function archivo()
    {
        return $this->belongsTo(Archivo::class, 'IdArchivo');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'IdUsuario');
    }
}

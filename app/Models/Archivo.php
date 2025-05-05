<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table = 'archivos';
    protected $primaryKey = 'IdArchivo';
    public $timestamps = false;

    protected $fillable = [
        'NombreArchivo',
        'IdUsuario',
        'FechaAlta',
        'IdTipoArchivo',
        'Descripcion',
        'IdCategoria',
        'Imagen',
        'RutaArchivo',
        'Estado'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'IdUsuario');
    }

    public function tipoArchivo()
    {
        return $this->belongsTo(TipoArchivo::class, 'IdTipoArchivo');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'IdCategoria');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'IdArchivo');
    }

    public function likes()
    {
        return $this->hasMany(ArchivoLiked::class, 'IdArchivo');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoArchivo extends Model
{
    protected $table = 'tipos_archivos';
    protected $primaryKey = 'IdTipoArchivo';
    public $timestamps = false;

    protected $fillable = ['TipoArchivo', 'Descripcion'];

    public function archivos()
    {
        return $this->hasMany(Archivo::class, 'IdTipoArchivo');
    }
}

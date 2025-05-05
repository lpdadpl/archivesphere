<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'IdCategoria';
    public $timestamps = false;

    protected $fillable = ['Categoria', 'Descripcion'];

    public function archivos()
    {
        return $this->hasMany(Archivo::class, 'IdCategoria');
    }
}


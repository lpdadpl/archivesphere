<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioFollow extends Model
{
    protected $table = 'usuario_follow';
    protected $primaryKey = 'IdFollow';
    public $timestamps = false;

    protected $fillable = ['IdUsuarioSeguidor', 'IdUsuarioPerfil', 'FechaFollow'];

    public function seguidor()
    {
        return $this->belongsTo(Usuario::class, 'IdUsuarioSeguidor');
    }

    public function perfil()
    {
        return $this->belongsTo(Usuario::class, 'IdUsuarioPerfil');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'IdUsuario';
    public $timestamps = false;

    protected $fillable = ['CodigoUsuario', 'Email', 'FechaAlta', 'IdRol', 'Estado'];

    public function rol()
    {
        return $this->belongsTo(Role::class, 'IdRol');
    }

    public function archivos()
    {
        return $this->hasMany(Archivo::class, 'IdUsuario');
    }

    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'IdUsuario');
    }

    public function likes()
    {
        return $this->hasMany(ArchivoLiked::class, 'IdUsuario');
    }

    public function seguidores()
    {
        return $this->hasMany(UsuarioFollow::class, 'IdUsuarioPerfil');
    }

    public function seguidos()
    {
        return $this->hasMany(UsuarioFollow::class, 'IdUsuarioSeguidor');
    }

    public function suscripciones()
    {
        return $this->hasMany(Suscripcion::class, 'IdUsuario');
    }
}

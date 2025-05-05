<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'IdRol';
    public $timestamps = false;

    protected $fillable = ['Rol'];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'IdRol');
    }
}

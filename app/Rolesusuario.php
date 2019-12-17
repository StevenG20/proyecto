<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rolesusuario extends Model
{
    //
    protected $table = 'tb_roles_x_usuarios';
    protected $fillable = ['id_rol','id_usuario'];
    protected $primaryKey = 'id_roles_usuarios';

    
}

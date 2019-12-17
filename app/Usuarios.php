<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //
    protected $table = 'tb_usuarios';
    protected $fillable = ['nomb_usuario','apellido_usuario','tipo_docu_usuario',
                           'genero_usuario','id_rol','telefono_usuario','telefono_usuario',
                           'fecha_crea_usuario','fecha_naci_usuario'];
    protected $primaryKey = 'id_usuario';

    
}

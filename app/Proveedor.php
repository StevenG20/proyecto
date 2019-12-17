<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table = 'tb_proveedor';
    protected $fillable = ['nombre_proveedor','apellido_proveedor','correo_proveedor',
                            'telefono_proveedor','genero_proveedor','tipo_docu_proveedor'];
    protected $primaryKey = 'id_proveedor';

    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    //
    protected $table = 'tb_asesor';
    protected $fillable = ['nombre_asesor','apellido_asesor','correo_asesor',
                            'genero','id_local','id_rol','telefono_asesor',
                            'fecha_naci_asesor','tipo_docu_asesor'];
    protected $primaryKey = 'id_asesor';

    
}

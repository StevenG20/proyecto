<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    //
    protected $table = 'tb_movimiento';
    protected $fillable = ['id_producto','fech_entrada','asesor_entrada',
                            'local_entrada','imei','asesor_salida','local_salida',
                            'obser_movimi','id_usuario','id_proveedor','id_asesor','id_local'];
    protected $primaryKey = 'id_movimiento';

    
}

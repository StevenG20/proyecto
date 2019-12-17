<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    //
    protected $table = 'tb_local';
    protected $fillable = ['descripcion_local','id_producto'];
    protected $primaryKey = 'id_local';

    
}

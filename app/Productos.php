<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //
    protected $table = 'tb_productos';
    protected $fillable = ['id_marcas','desc_producto'];
    protected $primaryKey = 'id_producto';

    
}

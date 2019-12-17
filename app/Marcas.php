<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    //
    protected $table = 'tb_marcas';
    protected $fillable = ['descripcion_marca'];
    protected $primaryKey = 'id_marcas';

    
}

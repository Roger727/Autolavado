<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    public $incrementing=false;
    public $fillable=['Id_Producto','Nombre_Producto','Precio','Existencia'];
    protected $table='Producto';
    protected $primaryKey='Id_Producto';
}

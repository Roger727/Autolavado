<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    public $incrementing=false;
    public $fillable=['Id_Producto','Nombre_Producto','Precio'];
    protected $table='Producto';
    protected $primaryKey='Id_Producto';

    public function proveedores ()
    {
    	return $this->belongsToMany(Proveedor::class,'Proveedor_Producto','Id_Producto','Id_Proveedor');
    }
}

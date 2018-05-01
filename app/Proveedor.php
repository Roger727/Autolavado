<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Proveedor','Nombre_Proveedor','Apellido_Paterno_Proveedor','Apellido_Materno_Proveedor','Telefono_Proveedor','RFC'];
    protected $table='Proveedor';
    protected $primaryKey='Id_Proveedor';
}

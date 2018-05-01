<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Administrador','Nombre_Administrador','Apellido_Paterno_Administrador','Apellido_Materno_Administrador','Telefono_Administrador'];
    protected $table='Administrador';
    protected $primaryKey='Id_Administrador';

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Servicio','Nombre_Servicio','Precio'];
    protected $table='Servicio';
    protected $primaryKey='Id_Actividad';    
}

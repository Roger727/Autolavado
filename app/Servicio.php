<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    public $incrementing=false;
    public $fillable=['Id_Servicio','Nombre_Servicio','Precio','Descripcion_Servicio'];
    protected $table='Servicio';
    protected $primaryKey='Id_Servicio';    


    public function automoviles ()
    {
    	return $this->belongsToMany(Automovil::class,'Automovil_Servicio','Id_Servicio','Id_Automovil');
    }
}

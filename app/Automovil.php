<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automovil extends Model
{
    
    public $incrementing=false;
    public $fillable=['Id_Automovil','Matricula','Color','Modelo', 'Fecha','Id_Lavador','Id_Servicio','Pago'];
    protected $table='Automovil';
    protected $primaryKey='Id_Automovil';

    public function lavadores ()
    {
    	return $this->belongsTo(Lavador::class,'Id_Lavador','Id_Lavador');
    }


      public function servicios ()
    {
    	return $this->belongsTo(Servicio::class,'Id_Servicio','Id_Servicio');
    }
}
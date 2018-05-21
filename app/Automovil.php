<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automovil extends Model
{
    
    public $incrementing=false;
    public $fillable=['Id_Automovil','Matricula','Color','Modelo', 'Fecha','Id_Lavador','Id_Servicio','Pago'];
    protected $table='Automovil';
    protected $primaryKey='Id_Automovil';

    public function profile() {
 		 return $this->hasOne('App\Lavador');
	}
}
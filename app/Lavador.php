<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lavador extends Model
{
    public $timestamp=false;
    public $incrementing=false;
    public $fillable=['Id_Lavador','Nombre_Lavador','Apellido_Paterno_Lavador','Apellido_Materno_Lavador','Telefono_Lavador'];
    protected $table='Lavador';
    protected $primaryKey='Id_Lavador';

    public function automoviles ()
    {
    	return $this->belongsToMany(Automovil::class,'Lavador_Automovil','Id_Lavador','Id_Automovil');
    }
}

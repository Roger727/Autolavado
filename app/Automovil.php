<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Automovil extends Model
{
    
    public $incrementing=false;
    public $fillable=['Id_Automovil','Matricula','Color','Modelo', 'Fecha'];
    protected $table='Automovil';
    protected $primaryKey='Id_Automovil';
}

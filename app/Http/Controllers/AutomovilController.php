<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Automovil;
use App\Lavador;
use App\Servicio;

class AutomovilController extends Controller
{
    //
     public function index(Request $request) {
    	if($request->Id_Auto) {
    		$automoviles = Automovil::where('Id_Auto', $request->Id_Auto)->get();
    	} else {
    		$automoviles = Automovil::all();
    	}
    	return view('auto.index',['automoviles' => $automoviles]);
    }

    public function create() {
    	return view('auto.create');
    }


    public function store (Request $request) {
       
            $auto = new Automovil;
            $auto->Matricula = $request->input('Matricula');
            $auto->Color = $request->input('Color');
            $auto->Modelo = $request->input('Modelo');
            $auto->Id_Automovil = $request->input('Matricula') . $request->input('Fecha');

            $auto->save();
            return redirect('/auto');
       
    }

    public function edit($id_Automovil) {
        $auto = Automovil::where('Id_Automovil', $id_Automovil)->first();
        $servicios = Servicio::all();
        $lavadores = Lavador::all();
        return view('auto.edit',['auto' => $auto, 
    								'servicios' => $servicios,
    								'lavadores' => $lavadores]);
    }

	public function update(Request $request, $id_Automovil) {
	    try{
	      $auto = Automovil::where('Id_Automovil', $id_Automovil)->first();
	       $auto->Matricula = $request->input('Matricula');
            $auto->Color = $request->input('Color');
            $auto->Modelo = $request->input('Modelo');
            $auto->Id_Lavador = $request->input('Id_Lavador');
            $auto->Id_Servicio = $request->input('Id_Servicio');

	      $auto->save();
	      return redirect('/auto');
	    } catch (\Illuminate\Database\QueryException $e){
          session()->flash("Error","No es posible Modificar este automovil");
          	return redirect('/auto');
      	}
    }

    public function delete($id_Automovil) {
       try{
            $auto = Automovil::where('Id_Automovil', $id_Automovil)->first();
            $auto->delete();
            session()->flash("Exito","automovil eliminado");
            return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible eliminar ese automovil");
            return redirect()->back();
        }
    }

    public function pago (Request $request, $id_automovil) {
        try{
          $auto = Automovil::where('Id_Automovil', $id_automovil)->first();
          $auto->Pago = 'Pagado';
          $auto->save();
          return redirect('/auto');
        } catch (\Illuminate\Database\QueryException $e){
          session()->flash("Error","No es posible Modificar este automovil");
            return redirect('/auto');
        }        
    }

}

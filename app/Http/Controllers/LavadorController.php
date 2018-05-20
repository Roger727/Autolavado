<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lavador;

class LavadorController extends Controller
{
    public function index(Request $request) {
    	if($request->Id_Lavador) {
    		$lavadores = Lavador::where('Nombre_Lavador', $request->Id_Lavador)->get();
    	} else {
    		$lavadores = Lavador::all();
    	}
    	return view('lavador.index',['lavadores' => $lavadores]);
    }

    public function create() {
    	return view('lavador.create');
    }

    public function store (Request $request) {
        try{
            $lavador = new Lavador;
            $lavador->Nombre_Lavador = $request->input('Nombre');
            $lavador->Apellido_Paterno_Lavador = $request->input('Apellido_Paterno');
            $lavador->Apellido_Materno_Lavador = $request->input('Apellido_Materno');
            $lavador->Telefono_Lavador = $request->input('Telefono');
            $lavador->Id_Lavador = strtoupper(substr($request->input('Nombre'),0,1) . substr($request->input('Apellido_Paterno'),0,1) . substr($request->input('Apellido_Materno'),0,1) . substr($request->input('Telefono'),0,5));
            $lavador->save();
            return redirect('/lavador');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/lavador');
        }
    }

    public function edit($id_lavador) {
        $lavador = Lavador::where('Id_Lavador', $id_lavador)->first();
        return view('Lavador.edit',['lavador' => $lavador]);
    }

	public function update(Request $request, $id_lavador) {
	    try{
	      $lavador = Lavador::where('Id_Lavador', $id_lavador)->first();
	      $lavador->Nombre_Lavador = $request->input('Nombre');
	      $lavador->Apellido_Paterno_Lavador = $request->input('Apellido_Paterno');
          $lavador->Apellido_Materno_Lavador = $request->input('Apellido_Materno');
	      $lavador->Telefono_Lavador = $request->input('Telefono');
	      $lavador->save();
	      return redirect('/lavador');
	    } catch (\Illuminate\Database\QueryException $e){
          session()->flash("Error","No es posible Modificar este Lavador");
          	return redirect('/lavador');
      	}
    }

    public function delete($id_lavador) {
       try{
            $lavador = Lavador::where('Id_Lavador', $id_lavador)->first();
            $lavador->delete();
            session()->flash("Exito","Lavador eliminado");
            return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible eliminar ese Lavador");
            return redirect()->back();
        }
    }
}

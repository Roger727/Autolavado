<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;

class ServicioController extends Controller
{
    public function index(Request $request) {
    	if($request->Id_Servicio) {
    		$servicios = Servicio::where('Nombre_Servicio', $request->Id_Servicio)->get();
    	} else {
    		$servicios = Servicio::all();
    	}
    	return view('Servicio.index',['servicios' => $servicios]);
    }

    public function create() {
    	return view('Servicio.create');
    }

    public function store(Request $request){
        try{
            $servicio = new Servicio;
            $servicio->Nombre_Servicio = $request->input('Nombre_Servicio');
            $servicio->Id_Servicio = strtoupper(substr($request->input('Nombre_Servicio'),0,3) . substr($request->input('Nombre_Servicio'),-3));
            $servicio->Precio = $request->input('Precio');
            $servicio->save();
            return redirect('/servicio');
        } catch (\Illuminate\Database\QueryException $e){
            return redirect('/servicio');
        }
    }

    public function edit($id_servicio) {
        $servicio = Servicio::where('Id_Servicio', $id_servicio)->first();
        return view('Servicio.edit',['servicio' => $servicio]);
    }

	public function update(Request $request, $id_servicio) {
	    try{
	      $servicio = Servicio::where('Id_Servicio', $id_servicio)->first();
	      $servicio->Nombre_Servicio = $request->input('Nombre_Servicio');
	      $servicio->Precio = $request->input('Precio_Producto');
	      $servicio->save();
	      return redirect('/servicio');
	    } catch (\Illuminate\Database\QueryException $e){
          session()->flash("Error","No es posible Modificar este Servicio");
          return redirect('/servicio');
      	}
    }

    public function delete($id_servicio) {
       try{
            $servicio = Servicio::where('Id_Servicio', $id_servicio)->first();
            $servicio->delete();
            session()->flash("Exito","Servicio eliminado");
            return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e){
            session()->flash("Error","No es posible eliminar ese Servicio");
            return redirect()->back();
        }
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;

class ProveedorController extends Controller
{
	public function index (Request $request) {
		if ($request->Id_Proveedor) {
			$proveedores = Proveedor::where('Nombre_Proveedor', $request->Id_Proveedor)->get();
		} else {
			$proveedores = Proveedor::all();
		}
		return view('Proveedor.index',['proveedores' => $proveedores]);
	}

	public function create () {
		return view('Proveedor.create');
	}

	public function store (Request $request) {
		try {
			$proveedor = new Proveedor;
			$proveedor->Id_Proveedor = $request->input('Id_Proveedor');
			$proveedor->Nombre_Proveedor = $request->input('Nombre_Proveedor');
			$proveedor->Apellido_Paterno_Proveedor = $request->input('Apellido_Paterno');
			$proveedor->Apellido_Materno_Proveedor = $request->input('Apellido_Materno');
			$proveedor->Telefono_Proveedor = $request->input('Telefono_Proveedor');
			$proveedor->RFC = $request->input('RFC');
			$proveedor->save();
			return redirect('/proveedor');
		} catch (\Illuminate\Database\QueryException $e) {
            return redirect('/proveedor');
        }
	}

	public function edit ($id_proveedor) {
		$proveedor = Proveedor::where('Id_Proveedor', $id_proveedor)->first();
		return view('Proveedor.edit',['proveedor' => $proveedor]);
	}

	public function update (Request $request, $id_proveedor) {
	    try{
	    	$proveedor = Proveedor::where('Id_Proveedor', $id_proveedor)->first();
		  	$proveedor->Nombre_Proveedor = $request->input('Nombre_Proveedor');
			$proveedor->Apellido_Paterno_Proveedor = $request->input('Apellido_Paterno');
			$proveedor->Apellido_Materno_Proveedor = $request->input('Apellido_Materno');
			$proveedor->Telefono_Proveedor = $request->input('Telefono');
			$proveedor->RFC = $request->input('RFC');
	      	$proveedor->save();
	      return redirect('/proveedor');
	    } catch (\Illuminate\Database\QueryException $e) {
          //session()->flash("Error","No es posible Modificar este Proveedor");
          	return redirect('/proveedor');
      	}
	}

	public function delete ($id_proveedor) {
       try{
            $proveedor = Proveedor::where('Id_Proveedor', $id_proveedor)->first();
            $proveedor->delete();
            session()->flash("Exito","Proveedor eliminado");
            return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e) {
            session()->flash("Error","No es posible eliminar ese Proveedor");
            return redirect()->back();
        }
    }
}

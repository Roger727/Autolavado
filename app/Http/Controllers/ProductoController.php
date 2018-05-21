<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Proveedor;

class ProductoController extends Controller
{

	public function index (Request $request) {
		if ($request->Id_Producto) {
			$productos = Producto::where('Nombre_Producto', $request->Id_Producto)->get();
		} else {
			$productos = Producto::all();
		}
		return view('Producto.index',['productos' => $productos]);
	}

	public function create () {
		$proveedores = Proveedor::all();
		return view('Producto.create',['proveedores' => $proveedores]);
	}

	public function store (Request $request) {
		try {
			$producto = new Producto;
			$producto->Id_Producto = $request->input('Id_Producto');
			$producto->Nombre_Producto = $request->input('Nombre_Producto');
			$producto->Precio = $request->input('Precio_Producto');
			$producto->save();

			$proveedor = Proveedor::find($request->input('Id_Proveedor'));
			$proveedor->productos()->attach($producto->Id_Producto);	
			
			return redirect('/producto');
		} catch (\Illuminate\Database\QueryException $e) {
            return redirect('/producto');
        }
	}

	public function edit ($id_producto) {
		$producto = Producto::where('Id_Producto', $id_producto)->first();
		return view('Producto.edit',['producto' => $producto]);
	}

	public function update (Request $request, $id_producto) {
	    try{
	      $producto = Producto::where('Id_Producto', $id_producto)->first();
	      $producto->Nombre_Producto = $request->input('Nombre_Producto');
	      $producto->Precio = $request->input('Precio');
	      $producto->save();
	      return redirect('/producto');
	    } catch (\Illuminate\Database\QueryException $e) {
          session()->flash("Error","No es posible Modificar este Producto");
          	return redirect('/producto');
      	}
	}

	public function delete ($id_producto) {
       try{
            $producto = Producto::where('Id_Producto', $id_producto)->first();
            $producto->delete();
            session()->flash("Exito","Producto eliminado");
            return redirect()->back();
        }catch (\Illuminate\Database\QueryException $e) {
            session()->flash("Error","No es posible eliminar ese Producto");
            return redirect()->back();
        }
    }

}
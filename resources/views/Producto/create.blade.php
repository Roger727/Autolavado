@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro de productos</h2></center>
      <br>
        <form action="{{url('/producto')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group" >
            <label>ID del producto:</label>
            <input class="form-control" name="Id_Producto">
          </div>
          <div class="form-group" >
            <label>Nombre del producto:</label>
            <input class="form-control" name="Nombre_Producto">
          </div>
          <div class="form-group" >
            <label for="">Proveedor:</label>
           <select class="form-control" name="Id_Proveedor">
              <option> -- Seleccione proveedor -- </option>
              @foreach ($proveedores as $proveedor)
                  <option value="{{$proveedor->Id_Proveedor}}">{{$proveedor->Nombre_Proveedor . " " . $proveedor->Apellido_Paterno_Proveedor . " " . $proveedor->Apellido_Materno_Proveedor}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group" >
            <label>Precio del producto:</label>
            <input class="form-control" name="Precio_Producto">
          </div>
          <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>
        </form>
      </div>
@endsection

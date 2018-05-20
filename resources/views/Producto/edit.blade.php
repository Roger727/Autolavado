@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Actualizar producto:</h2></center>
      </br>
        <form action="{{url('/producto/' . $producto->Id_Producto)}}" method="POST" role="form">
          {{method_field('patch')}}
          {{csrf_field()}}
          <div class="form-group" >
            <label>Id del producto:</label>
            <input readonly class="form-control" name="Id_Producto" value="{{$producto->Id_Producto}}">
          </div>
          <div class="form-group" >
            <label>Nombre del producto:</label>
            <input value="{{$producto->Nombre_Producto}}" class="form-control" name="Nombre_Producto">
          </div>
          <div class="form-group" >
            <label>Precio del producto:</label>
            <input class="form-control" name="Precio" value="{{$producto->Precio}}">
          </div>
          <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>
        </form>
      </div>
@endsection

@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
          <center><h2>Productos</h2></center>
          <form method="get" action="{{url('producto/')}}">
          <div class="form-group">
            <label for="">Nombre del producto:</label>
            <input type="" class="form-control" name="Nombre_Producto" placeholder="Buscar">
            <br>
            <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/producto/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
        </form>
        <div style="overflow-x:auto;"><table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>ID del producto:</th>
      <th>Nombre del producto:</th>
      <th>Precio:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($productos as $producto)
          <td>{{$producto->Id_Producto}}</td>
          <td>{{$producto->Nombre_Producto}}</td>
          <td>{{$producto->Precio}}</td>
          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('/producto/' . $producto->Id_Producto)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
              <input type="hidden" name="Id_Producto" value="{{$producto->Id_Producto}}">

            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
          </form> <a href="{{url('/producto/' . $producto->Id_Producto . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
            </div>
          </td>
        </tr>
        @endforeach
  </tbody>
</table></div>

</div>

@endsection

@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
          <center><h2>Servicios</h2></center>
          <form method="get" action="{{url('servicio/')}}">
          <div class="form-group">
            <label for="">Nombre del servicio:</label>
            <input type="" class="form-control" name="Nombre_Servicio" placeholder="Buscar">
            <br>
            <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/servicio/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
        </form>
        <div style="overflow-x:auto;"><table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Id de servicio:</th>
      <th>Nombre servicio:</th>
      <th>Precio:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($servicios as $servicio)
          <td>{{$servicio->Id_Servicio}}</td>
          <td>{{$servicio->Nombre_Servicio}}</td>
          <td>{{$servicio->Precio}}</td>
          <td>{{$servicio->Descripcion_Servicio}}</td>
          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('/servicio/' . $servicio->Id_Servicio)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
              <input type="hidden" name="Id_Servicio" value="{{$servicio->Id_Servicio}}">

            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
          </form> <a href="{{url('/servicio/' . $servicio->Id_Servicio . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
            </div>
          </td>
        </tr>
        @endforeach
  </tbody>
</table></div>

</div>

@endsection

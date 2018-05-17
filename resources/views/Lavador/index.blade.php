@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
          <center><h2>Lavadores</h2></center>
          <form method="get" action="{{url('lavador/')}}">
          <div class="form-group">
            <label for="">Nombre del lavador:</label>
            <input type="" class="form-control" name="Nombre_Lavador" placeholder="Buscar">
            <br>
            <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/lavador/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
          </div>
        </form>
        <div style="overflow-x:auto;"><table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Nombre lavador:</th>
      <th>Apellido paterno:</th>
      <th>Apellido materno:</th>
      <th>Telefono:</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach($lavadores as $lavador)
          <td>{{$lavador->Nombre_Lavador}}</td>
          <td>{{$lavador->Apellido_Paterno_Lavador}}</td>
          <td>{{$lavador->Apellido_Materno_Lavador}}</td>
          <td>{{$lavador->Telefono_Lavador}}</td>
          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('/lavador/' . $lavador->Id_Lavador)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
              <input type="hidden" name="Id_Lavador" value="{{$lavador->Id_Lavador}}">

            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
          </form> <a href="{{url('/lavador/' . $lavador->Id_Lavador . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
            </div>
          </td>
        </tr>
        @endforeach
  </tbody>
</table></div>

</div>

@endsection

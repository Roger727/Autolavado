@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Actualizar Registro de Servicios</h2></center>
        </br>
        <form action="{{url('/servicio/' . $servicio->Id_Servicio)}}" method="POST" role="form">
          {{method_field('patch')}}
          {{ csrf_field() }}
          <div class="form-group">
            <label for="Servicio">Id del servicio:</label>
            <input readonly class="form-control" type="text" name="Id_Servicio" value= "{{$servicio->Id_Servicio}}">
          </div>
          <div class="form-group">
            <label for="Servicio">Nombre del servicio:</label>
            <input class="form-control" type="text" name="Nombre_Servicio" value= "{{$servicio->Nombre_Servicio}}">
          </div>
          <div class="form-group">
            <label for="Servicio">Precio del servicio:</label>
            <input type="number" name="Precio_Producto" value= "{{$servicio->Precio}}">
          </div>
          <div class="form-group">
            <label for="Descripcion">Descripción del servicio:</label>
            <input class="form-control" type="text" name="Descripcion" value="{{$servicio->Descripcion_Servicio}}">
          </div>          
          <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Actualizar</button>
        </form>
      </div>


@endsection

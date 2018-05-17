@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Actualizar Registro de Lavadores</h2></center>
        </br>
        <form action="{{url('/lavador/' . $lavador->Id_Lavador)}}" method="POST" role="form">
          {{method_field('patch')}}
          {{ csrf_field() }}
          <div class="form-group">
            <label for="Lavador">Id del lavador:</label>
            <input readonly class="form-control" type="text" name="Id_Lavador" value= "{{$lavador->Id_Lavador}}">
          </div>
          <div class="form-group">
            <label for="Lavador">Nombre:</label>
            <input class="form-control" type="text" name="Nombre" value= "{{$lavador->Nombre_Lavador}}">
          </div>
          <div class="form-group">
            <label for="Lavador">Apellido paterno:</label>
            <input class="form-control" type="text" name="Nombre" value= "{{$lavador->Apellido_Paterno_Lavador}}">
          </div>
          <div class="form-group">
            <label for="Lavador">Apellido materno:</label>
            <input class="form-control" type="text" name="Nombre" value= "{{$lavador->Apellido_Materno_Lavador}}">
          </div>
          <div class="form-group">
            <label for="Lavador">Telefono:</label>
            <input class="form-control" type="number" name="Telefono" value= "{{$lavador->Telefono_Lavador}}">
          </div>
          <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Actualizar</button>
        </form>
      </div>


@endsection

@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro de Lavadores</h2></center>
        </br>
        <form action="{{url('/lavador')}}" method="post">
          <div class="form-group">
            <label for="Servicio">Nombre:</label>
            <input class="form-control" type="text" name="Nombre">
          </div>
          <div class="form-group">
            <label for="Servicio">Apellido paterno:</label>
            <input class="form-control" type="text" name="Apellido_Paterno">
          </div>
          <div class="form-group">
            <label for="Servicio">Apellido materno:</label>
            <input class="form-control" type="text" name="Apellido_Materno">
          </div>
          <div class="form-group">
            <label for="Servicio">Telefono:</label>
            <input class="form-control" type="number" name="Telefono">
          </div>
          <br>
          <div align="right">
            <button type="submit" class="btn btn-outline-primary">Registrar</button>
          </div>
        </form>
      </div>
@endsection

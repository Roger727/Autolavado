@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro de Servicios</h2></center>
        </br>
        <form action="{{url('/servicio')}}" method="post">
          <div class="form-group">
            <label for="Servicio">Nombre del servicio:</label>
            <input class="form-control" type="text" name="Nombre_Servicio">
          </div>
          <div class="form-group">
            <label for="Servicio">Precio del servicio:</label>
            <input class="form-control" type="number" name="Precio">
          </div>
          <div class="form-group">
            <label for="Descripcion">Descripción del servicio:</label>
            <input class="form-control" type="text" name="Descripcion">
          </div>
          <br>
          <div align="right">
            <button type="submit" class="btn btn-outline-primary">Registrar</button>
        </form>
      </div>
@endsection

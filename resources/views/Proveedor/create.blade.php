@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Registro de proveedores</h2></center>
      <br>
        <form action="{{url('/proveedor')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group" >
            <label>ID del proveedor:</label>
            <input class="form-control" name="Id_Proveedor">
          </div>
          <div class="form-group" >
            <label>Nombre:</label>
            <input class="form-control" name="Nombre_Proveedor">
          </div>
          <div class="form-group" >
            <label>Apellido paterno:</label>
            <input class="form-control" name="Apellido_Paterno">
          </div>
          <div class="form-group" >
            <label>Apellido materno:</label>
            <input class="form-control" name="Apellido_Materno">
          </div>
          <div class="form-group" >
            <label>Telefono:</label>
            <input class="form-control" name="Telefono_Proveedor">
          </div>
          <div class="form-group" >
            <label>RFC:</label>
            <input class="form-control" name="RFC">
          </div>          
          <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>
        </form>
      </div>
@endsection

@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Actualizar proveedor</h2></center>
      </br>
        <form action="{{url('/proveedor/' . $proveedor->Id_Proveedor)}}" method="POST" role="form">
          {{method_field('patch')}}
          {{csrf_field()}}
          <div class="form-group" >
            <label>Id del proveedor:</label>
            <input readonly class="form-control" name="Id_Proveedor" value="{{$proveedor->Id_Proveedor}}">
          </div>
          <div class="form-group" >
            <label>Nombre:</label>
            <input value="{{$proveedor->Nombre_Proveedor}}" class="form-control" name="Nombre_Producto">
          <div class="form-group" >
            <label>Apellido paterno:</label>
            <input value="{{$proveedor->Apellido_Paterno_Proveedor}}" class="form-control" name="Apellido_Paterno">
          </div>            
          <div class="form-group" >
            <label>Apellido materno:</label>
            <input value="{{$proveedor->Apellido_Materno_Proveedor}}" class="form-control" name="Apellido_Materno">
          </div>                      
          <div class="form-group" >
            <label>Telefono:</label>
            <input value="{{$proveedor->Telefono_Proveedor}}" class="form-control" name="Telefono_Proveedor">
          </div>              
          <div class="form-group" >
            <label>RFC:</label>
            <input value="{{$proveedor->RFC}}" class="form-control" name="RFC">
          </div>                              
          <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>
        </form>
      </div>
@endsection
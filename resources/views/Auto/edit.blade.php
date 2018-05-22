@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
<form action="{{url('/auto/' . $auto->Id_Automovil)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
            <h2>Actualizar Auto</h2>
          <input readonly hidden value="{{$auto->Id_Automovil}}" >
          <div class="form-group">
            <label for="">Fecha:</label>
            <input readonly value="{{$fecha_actual = date('Y-m-d')}}" class="form-control" type="date" name="Fecha">
          </div>        
          <div class="form-group">
            <br>
          <label>Marca:</label>
          <input class="form-control" placeholder="Taxi, Atos, Suburban" name="Modelo" value="{{$auto->Modelo}}" readonly>
          <br>
          <label>Placas:</label>
          <input class="form-control" placeholder="######" name="Matricula" value="{{$auto->Matricula}}" readonly>
          <br>
          <label>Color:</label>
           <input class="form-control" placeholder="######" name="Color" value="{{$auto->Color}}" readonly>
          <br>
         <label>Lavador:</label>
         <select name="Id_Lavador" id="input" class="form-control">
           <option> -- Seleccione el lavador -- </option>
            @foreach ($lavadores as $lavador)
                <option value="{{$lavador->Id_Lavador}}">{{$lavador->Nombre_Lavador . " " . $lavador->Apellido_Paterno_Lavador . " " . $lavador->Apellido_Materno_Lavador}}</option>
            @endforeach  
          </select>     
          <br>
         <label>Servicio:</label>
           <select name="Id_Servicio" id="input" class="form-control" id="IdServicio">
            <option> -- Seleccione el servicio -- </option>
            @foreach ($servicios as $servicio)
                <option value="{{$servicio->Id_Servicio}}">{{$servicio->Nombre_Servicio}}</option>
            @endforeach
        </select>
        <br>
          <div class="form-group">
            <label for="">Descripción</label>
            <input readonly class="form-control" name="Descripción" id="laDescripcion">
          </div>
          <div class="form-group">
            <label for="">Precio</label>
            <input readonly class="form-control" name="Precio" id="elPrecio">
          </div>
          </div>         
          <div align="right">
            <a class="btn btn-outline-secondary" href="{{url('/auto/')}}">Regresar</a>
            <button type="submit" class="btn btn-outline-primary">Enviar Registro</button>
            
          </div>
        </form>

</div>
@endsection


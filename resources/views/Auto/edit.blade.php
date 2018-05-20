@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
<form action="{{url('/auto/' . $auto->Id_Automovil)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
            <h2>Actualizar Auto</h2>
          <div class="form-group">
            <label for="">Fecha:</label>
            <input readonly value="{{$fecha_actual = date('Y-m-d')}}" class="form-control" type="date" name="Fecha">
          </div>        
          <div class="form-group">
            <br>
          <label>Marca:</label>
          <input class="form-control" placeholder="Taxi, Atos, Suburban" name="Modelo" value="{{$auto->Modelo}}">
          <br>
          <label>Placas:</label>
          <input class="form-control" placeholder="######" name="Matricula" value="{{$auto->Matricula}}">
          <br>
          <label>Color:</label>
          <select class="form-control" name="Color" selected="{{$auto->Color}}">
            <option>-- Seleccione --</option>
            <option value="Azul"> Azul </option>
            <option value="Amarillo"> Amarrillo </option>
            <option value="Blanco"> Blanco </option>
             <option value="Negro"> Negro </option>
            <option value="Gris"> Gris </option>
            <option value="verde"> Verde </option> 
            <option value="Rosa"> Rosa </option>
            <option value="Morado"> Morado </option>
            <option value="Cafe"> Cafe </option> 
            <option value="Naranja"> Naranja </option>
            <option value="Rojo"> Rojo </option>
            <option value="Dorado"> Dorado </option>
          </select>
         <br>
          </div>          
          <div align="right">
            <a class="btn btn-outline-secondary" href="{{url('/auto/')}}">Regresar</a>
            <button type="submit" class="btn btn-outline-primary">Enviar Registro</button>
            
          </div>
        </form>

</div>
@endsection


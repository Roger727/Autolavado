@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">"
          <form action="{{url('/auto')}}" method="POST">
            {{ csrf_field() }}
            <h2>Registro De Automovil</h2>
          <div class="form-group">
            <label for="">Fecha:</label>
            <input value="{{$fecha_actual = date('Y-m-d')}}" type="text" class="form-control" name="Fecha" readonly>
          </div>        
          <div class="form-group">
            <br>
          <label>Marca:</label>
          <input class="form-control" placeholder="Taxi, Atos, Suburban" name="Modelo">
          <br>
          <label>Placas:</label>
          <input class="form-control" placeholder="######" name="Matricula">
          <br>
          <label>Color:</label>
          <select class="form-control" name="Color">
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

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
          <input class="form-control" placeholder="Taxi, Atos, Suburban" name="Modelo" value="{{$auto->Modelo}}" readonly>
          <br>
          <label>Placas:</label>
          <input class="form-control" placeholder="######" name="Matricula" value="{{$auto->Matricula}}" readonly>
          <br>
          <label>Color:</label>
           <input class="form-control" placeholder="######" name="Color" value="{{$auto->Color}}" readonly>
          <br>
         <br>
         <label>Servicio:</label>
           <input class="form-control" placeholder="######" name="Id_Servicio" value="{{$auto->Id_Servicio}}" readonly>
          <br>
         <label>Lavador:</label>
         <input class="form-control" placeholder="######" name="Id_Lavador" value="{{$auto->Id_Lavador}}" readonly>
          <br>
          <label>Servicio:</label>
           <select name="Id_Servicio" id="input" class="form-control">
            <option> -- Seleccione el servicio -- </option>
                <option value="Pagado">Pagado</option>
                <option value="NULL">No Pagado</option>
        </select>
          </div>         
          <div align="right">
            <a class="btn btn-outline-secondary" href="{{url('/auto/')}}">Regresar</a>
            <button type="submit" class="btn btn-outline-primary">Realizar Pago</button>
            
          </div>
        </form>

</div>
@endsection


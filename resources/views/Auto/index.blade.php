@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
            <h2>Inicio Registro Diario</h2>
          <div class="form-group">
            <label for="">Fecha:</label>
            <input type="" class="form-control" name="Automovil" placeholder="Buscar auto">
            <br>
          <div align="right">  <button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/auto/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
            </div>
          </div>
        </form>

        <div style="overflow-x:auto;">
           <div class="form-group">
            <label for="">Fecha:</label>
            <input value="{{$fecha_actual = date('Y-m-d')}}" type="text" class="form-control" name="Fecha" readonly>
          </div>        
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Marca</th>
      <th>Color</th>
      <th>Placas</th>
      <th>Status</th>
      <th>Servicio</th>
      <th>Lavador</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
       @foreach($automoviles as $automovil)
          @if(substr($automovil->created_at,0,10) == $fecha_actual = date('Y-m-d'))
              <td>{{$automovil->Modelo}}</td>
          <td>{{$automovil->Color}}</td>
          <td>{{$automovil->Matricula}}</td>
          <td>{{$automovil->Pago}}</td>
          <td>{{$automovil->servicios->Nombre_Servicio}}</td>
          <td>{{$automovil->lavadores->Nombre_Lavador}}</td>
          <td>
            
          
          @if($automovil->Pago != 'Pagado')
          <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('/auto/' . $automovil->Id_Automovil)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
              <input type="hidden" name="Id_Producto" value="{{$automovil->Id_Automovil}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
          </form> 
          <a  href="{{url('/auto/' . $automovil->Id_Automovil . '/pago')}}" class="btn btn-secondary btn-outline-info">Pago</a>
          @endif
          <a href="{{url('/auto/' . $automovil->Id_Automovil . '/edit')}}" class="btn btn-secondary btn-outline-info">Servicio</a>
            </div>
          </td>
        </tr>
          @endif
          
        @endforeach
    </tr>
  </tbody>
</table>
</div>
</div>
@endsection

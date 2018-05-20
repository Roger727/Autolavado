@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
            <h2>Inicio Registro Diario</h2>
          <div class="form-group">
            <label for="">Fecha de Monta:</label>
            <input type="" class="form-control" name="Automovil" placeholder="Buscar auto">
            <br>
          <div align="right">  <button type="submit" class="btn btn-outline-primary">Buscar</button>
            <a href="{{url('/auto/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
            </div>
          </div>
        </form>
        <div style="overflow-x:auto;">
        <table class="table table-sm table-responsive">
  <thead class="thead-default">
    <tr>
      <th>Marca</th>
      <th>Color</th>
      <th>Placas</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
       @foreach($automoviles as $automovil)
          <td>{{$automovil->Modelo}}</td>
          <td>{{$automovil->Color}}</td>
          <td>{{$automovil->Matricula}}</td>
          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('/auto/' . $automovil->Id_Automovil)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
              <input type="hidden" name="Id_Producto" value="{{$automovil->Id_Automovil}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
          </form> <a href="{{url('/auto/' . $automovil->Id_Automovil . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
          <a href="{{url('/auto/' . $automovil->Id_Automovil . '/edit')}}" class="btn btn-secondary btn-outline-info">Servicio</a>
            </div>
          </td>
        </tr>
        @endforeach
    </tr>
  </tbody>
</table>
</div>
</div>
@endsection

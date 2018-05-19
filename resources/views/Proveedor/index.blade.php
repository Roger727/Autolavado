@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
    <center><h2>Proveedores</h2></center>
    <form method="get" action="{{url('proveedor/')}}">
      <div class="form-group">
        <label for="">Nombre:</label>
        <input type="" class="form-control" name="Nombre_Proveedor" placeholder="Buscar">
        <br>
        <div align="right"><button type="submit" class="btn btn-outline-primary">Buscar</button>
        <a href="{{url('/proveedor/create')}}" type="submit" class="btn btn-outline-success">Agregar</a>
      </div>
    </form>
    <div style="overflow-x:auto;"><table class="table table-sm table-responsive">
    <thead class="thead-default">
      <tr>
        <th>Nombre:</th>
        <th>Apellido P:</th>
        <th>Apellido M:</th>
        <th>Telefono:</th>
        <th>RFC:</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <tr>
      @foreach($proveedores as $proveedor)
          <td>{{$proveedor->Nombre_Proveedor}}</td>
          <td>{{$proveedor->Apellido_Paterno_Proveedor}}</td>
          <td>{{$proveedor->Apellido_Materno_Proveedor}}</td>
          <td>{{$proveedor->Telefono_Proveedor}}</td>
          <td>{{$proveedor->RFC}}</td>
          <td>
            <div class="btn-group btn-group-sm" role="group" aria-label="">
              <form method="POST" action="{{url('/proveedor/' . $proveedor->Id_Proveedor)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
              <input type="hidden" name="Id_Producto" value="{{$proveedor->Id_Proveedor}}">
            <button type="submit" class="btn btn-secondary btn-outline-danger ">Eliminar</button>
          </form> <a href="{{url('/proveedor/' . $proveedor->Id_Proveedor . '/edit')}}" class="btn btn-secondary btn-outline-info">Modificar</a>
            </div>
          </td>
        </tr>
        @endforeach
  </tbody>
</table>
</div>

</div>

@endsection

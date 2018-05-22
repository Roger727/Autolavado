@section('menu')
<div class="contenedor-menu">
    <a href="#" class="btn-menu">Menu<i class="icono fa fa-bars" aria-hidden="true"></i></a>
    <ul class="menu">
        <li><a href="{{url('/home')}}"><i class="icono izquierda fa fa-home" aria-hidden="true"></i>Inicio</a></li>

         <li> <a href="{{url('/auto/')}}">Registro Diario<i class="icono izquierda fa fa-clone" aria-hidden="true"></i></a></li>
        
        <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i> Catalogos<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
          <ul>
              <li> <a href="{{url('/servicio/')}}">Servicios</a></li>
              <li> <a href="{{url('/lavador/')}}">Lavadores</a></li>
              <li> <a href="{{url('/producto/')}}">Productos</a></li>
              <li> <a href="{{url('/proveedor/')}}">Proveedores</a></li>
          </ul>
        </li>      
            </ul>

</div>
@endsection
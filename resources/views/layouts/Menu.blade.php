@section('menu')
<div class="contenedor-menu">
    <a href="#" class="btn-menu">Menu<i class="icono fa fa-bars" aria-hidden="true"></i></a>
    <ul class="menu">
        <li><a href="{{url('/home')}}"><i class="icono izquierda fa fa-home" aria-hidden="true"></i>Inicio</a></li>

        <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Opción principal 1<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
          <ul>
              <li> <a href="{{url('/#/')}}">Opcion secundaria 1</a></li>
              <li> <a href="{{url('/#/')}}">Opcion secundaria 2</a></li>
              <li> <a href="{{url('/#/')}}">Opcion secundaria 3</a></li>
          </ul>
        </li>

        <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Opción principal 2<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
          <ul>
              <li> <a href="{{url('/servicio/')}}">Servicios</a></li>
              <li> <a href="{{url('/lavador/')}}">Lavadores</a></li>
              <li> <a href="{{url('/producto/')}}">Productos</a></li>
              <li> <a href="{{url('/proveedor/')}}">Proveedores</a></li>
          </ul>
        </li>        
{{--               <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><i class="icono izquierda fa fa-lock" aria-hidden="true"></i>
                    Cerrar Sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </li>
 --}}              <li><a href="{{url('/acercaDe')}}"><i class="icono izquierda fa fa-address-card-o" aria-hidden="true"></i>Acerca de</a></li>
            </ul>

</div>
@endsection


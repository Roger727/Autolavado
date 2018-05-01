@section('menu')
<div class="contenedor-menu">

    <a href="#" class="btn-menu">Menu<i class="icono fa fa-bars" aria-hidden="true"></i></a>

    <ul class="menu">

        <li><a href=""><i class="icono izquierda fa fa-home" aria-hidden="true"></i>Opcion 1</a>
        </li>

        <li><a href=""><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Opcion 2<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
          <ul>
            <li> <a href="">Submenu</a> </li>
          </ul>
        </li>      
        
        <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Opcion 3<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a></li>
              
        <li><a href="{{url('/acercaDe')}}"><i class="icono izquierda fa fa-address-card-o" aria-hidden="true"></i>Acerca de</a>
        </li>
    </ul>
</div>
@endsection

@section('menu')
<div class="contenedor-menu">
    <a href="#" class="btn-menu">Menu<i class="icono fa fa-bars" aria-hidden="true"></i></a>
    <ul class="menu">
        <li><a href="{{url('/home')}}"><i class="icono izquierda fa fa-home" aria-hidden="true"></i>Inicio</a></li>
@if(Auth::user()->tieneRol('ROLADM'))

              <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Administrador<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul>
                    <li> <a href="{{url('/cuentas/')}}">Gestionar roles</a> </li>
                  </ul>
              </li>
@endif        
@if(Auth::user()->tieneRol('ROLALU'))
        <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>
          Alumno<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
            <ul>
              @if(Auth::user()->tienePerfil("Alumno"))
              <li> <a href="{{url('/alumno/edit')}}">Actualiza tus datos personales</a> </li>
              <li> <a href="{{url('/solicitudHoras')}}">Solicitar horas practicas </a> </li>
              <li> <a href="{{url('/horas')}}">Registro de horas cumplidas </a> </li>
              @else
              <li> <a href="{{url('/alumno/create')}}">Completa tus datos personales</a> </li>
              @endif
          </ul>
          </li>
@endif
@if(Auth::user()->tieneRol('ROLPRO'))

           <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Producción<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
            <ul>
              <li> <a href="{{url('/monta/')}}">Supervisión de la monta</a> </li>
              <li> <a href="{{url('/parto/')}}">Supervisión del parto</a> </li>
              <li> <a href="{{url('/donacion/')}}">Donación de conejos</a> </li>
              <li> <a href="{{url('/destete/')}}">Destete de gazapos</a> </li>
              <li> <a href="{{url('/tatuaje/')}}">Tatuado de conejos </a> </li>
              {{-- <li> <a href="{{url('/engorda/')}}">Conejos de engorda </a> </li> --}}
              <li> <a href="{{url('/enfermo/')}}">Conejos enfermos</a> </li>
           </ul>
          </li>
@endif
@if(Auth::user()->tieneRol('ROLEMO'))
              <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Encargado Modulo<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul>
                    <li> <a href="{{url('/adquirido/')}}">Registro de conejo adquirido</a> </li>
                    <li> <a href="{{url('/cemental/')}}">Registro de conejos sementales</a> </li>
                    <li> <a href="{{url('/productora/')}}">Registro de conejas productoras</a> </li>
                    <li> <a href="{{url('/jaula/')}}">Registro de jaulas</a> </li>
                    <li> <a href="{{url('/area/')}}">Registro áreas de destino</a> </li>
                    <li> <a href="{{url('/adquisicion/')}}">Registro de tipo de adquisición</a> </li>
                    <li> <a href="{{url('/raza/')}}">Registro de razas</a> </li>
                    <li> <a href="{{url('/enfermedad/')}}">Registro de enfermedades</a> </li>
                    <li> <a href="{{url('/medicamento/')}}">Registro de medicamentos</a>
                   </li>
                   <li> <a href="{{url('/periodo/')}}">Registro de periodos</a> </li>
                    <li> <a href="{{url('/carrera/')}}">Registro de carreras</a> </li>
                    
                  </ul>
              </li>
@endif
@if(Auth::user()->tieneRol('ROLPEN'))
              <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Profesor Encargado<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul>
                    <li> <a href="{{url('/validacion/')}}">Validar practica</a> </li>
                    <li> <a href="{{url('/transferencia/')}}">Baja de conejos por transferencia</a> </li>
                    <li> <a href="{{url('/censo-general-vivos/')}}">Censo General Vivos</a> </li>
                    <li> <a href="{{url('/censo-general-muertos/')}}">Censo General Muertos</a> </li>
                    <li> <a href="{{url('/censo-jaulas/')}}">Censo de jaulas</a> </li>
                  </ul>
              </li>
@endif

@if(Auth::user()->tieneRol('ROLPRF'))
              <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Profesor<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul>
                    <li> <a href="{{url('/grupo/')}}">Registro de Grupos</a> </li>
                    <li> <a href="{{url('/materia/')}}">Registro de Materias</a> </li>

                    @if(Auth::user()->tienePerfil("Profesor"))
                    <li> <a href="{{url('/profesor/edit')}}">Actualiza tus datos personales</a> </li>
                    @else
                    <li> <a href="{{url('/profesor/create')}}">Completa tus datos personales</a> </li>
                    @endif
                  </ul>
              </li>
@endif
              <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><i class="icono izquierda fa fa-lock" aria-hidden="true"></i>
                    Cerrar Sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </li>
              <li><a href="{{url('/acercaDe')}}"><i class="icono izquierda fa fa-address-card-o" aria-hidden="true"></i>Acerca de</a></li>
            </ul>

</div>
@endsection

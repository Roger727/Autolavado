<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Autolvado | Principal</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu vertical</title>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formato2.css') }}">

  </head>
  <body>

    <header class="menuHorizontal">

      <div class="botonMenu"></div>
      <figure>
        <img src="{{asset('images/elefante.jpg')}}" alt="">
      </figure>
      <figure>
        <img src="{{asset('images/logo_fesc.jpg')}}" alt="">
      </figure>
      <figure>
        <img src="{{asset('images/logo_fesc.jpg')}}" alt="">
      </figure>
    </header>

    <section class="contenedorPrincipal2">
      @yield('content')

    </section>

    <nav class="menuNavegacion">
      @yield('menu')
</nav>
    
  </body>
</html>

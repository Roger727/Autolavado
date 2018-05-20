@extends('layouts.Menu')
@extends('layouts.Principal')
@section('content')
<section>
  <div class="container">
    <form class="formulario" method="">
      <h1 align="center">Nuevo Registro</h1>
      
      <label>Tipo de servicio:</label>
      <select class="form-control" name="Servicio">
        <option>-- Seleccione --</option>
        <option value="Servicio Completo"> Servicio completo </option>
        <option value="Servicio medio"> Servicio medio </option>
        <option value="Servicio basico"> Servicio basico </option>
      </select>
      <br>
       <label>Observaciónes:</label>
      <input class="form-control" placeholder="Nombre, Apellidos" name="Propietario">
      <br>
      <button type="submit" class="btn btn-outline-primary">Enviar Registro</button>
    </form>
  </div>
</section>
@endsection

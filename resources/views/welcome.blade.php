@extends('layouts.menu')
@extends('layouts.Principal')
@section('content')
  <div class="container">
    <form class="formulario" method="">
      <h1 align="center">Nuevo Registro</h1>
      <br>
      <label>Matricula del auto:</label>
      <input class="form-control" placeholder="######" name="Matricula">
      <br>
      <label>Propietario:</label>
      <input class="form-control" placeholder="Nombre, Apellidos" name="Propietario">
      <br>
      <label>Tipo de servicio:</label>
      <select class="form-control" name="Servicio">
        <option>-- Seleccione --</option>
        <option value="Servicio Completo"> Servicio completo </option>
        <option value="Servicio medio"> Servicio medio </option>
        <option value="Servicio basico"> Servicio basico </option>
      </select>
      <br>
      <button type="submit" class="btn btn-outline-primary">Enviar Registro</button>
    </form>
  </div>
</section>
@endsection

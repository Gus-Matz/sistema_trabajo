@extends('layouts.layout')
@section('content')
<div class="jumbotron text-center">
  <h1>FORMULARIO DE REGISTRO</h1>
</div>

<div class="row justify-content-center">
  <div class="col-md-4 offset-md-4">
  </div>
  <div class="col-md-4 offset-md-4">
    <form action="/action_page.php" autocomplete="on">
      <div class="form-group">
        <label for="nombre">Nombre Del Empleado:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="sexo">Sexo:</label>
      <select class="form-control" id="sexo" name="sexo">
        <option>Hombre</option>
        <option>Mujer</option>
      </select>
      </div>
      <div class="form-group">
        <label for="telefono">Telefono:</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
      </div>
      <div class="form-group">
        <label for="fecha_nacimiento">Fecha De Nacimiento:</label>
        <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha">
      </div>

      <button type="submit" class="btn btn-primary">ENVIAR</button>
    </form>
  </div>
</div>


@endsection
@extends('layouts.layout')
@section('content')
<div class="jumbotron text-center">
  <h1>FORMULARIO DE REGISTRO</h1>
</div>

<div class="row justify-content-center">
  <div class="col-md-4 offset-md-4">
  </div>
  <div class="col-md-4 offset-md-4">

     <!-- evalua las variables requeridas, si traen datos, si no se ingreso un dato, se muestran los registros -->
     @if (count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Error!</strong> Revise por favor, todos los campos son obligatorios.<br><br>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <!-- envia los datos ingresados en a la uirl "registro" mediante POST al controlador "store" en este caso -->
    <form action="registro" method="POST" autocomplete="off">
      @csrf
      <div class="form-group">
        <label for="nombre">Nombre Del Empleado:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="sexo">Sexo:</label>
        <select class="form-control" id="sexo" name="sexo">
          <option>[Seleciona]</option>
          <option>Hombre</option>
          <option>Mujer</option>
        </select>
      </div>
      <div class="form-group">
        <label for="telefono">Telefono:</label>
        <input type="text" class="form-control" id="tel" name="tel" placeholder="Telefono">
      </div>
      <div class="form-group">
        <label for="fecha_nacimiento">Fecha De Nacimiento:</label>
        <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha">
      </div>
      <!-- -->
      <button type="submit" class="btn btn-primary">ENVIAR</button>

    </form>
  </div>
</div>

@endsection
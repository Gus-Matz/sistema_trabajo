@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">


      <div class="row justify-content-center">
        <div class="col-md-4 offset-md-4">
          <!-- avisa al usuario que se ha guardado exitosamente -->
          @if(Session::has('success'))
          <div class="alert alert-info">
              {{Session::get('success')}}
          </div>
          @endif
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Empleados Registrados</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{action('EmpleadoController@create')}}" class="btn btn-info" >Añadir Nuevo Empleado</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>ID</th>
               <th>Nombre</th>
               <th>Sexo</th>
               <th>Telefono</th>
               <th>Fecha De Nacimiento</th>
             </thead>
             <tbody>

              <!-- Ciclo donde se hace referencia a la variable "$empleados" declarada en el index del "EmpleadoController", en el foreach se le asigna los datos que tiene la posicion i que trae la variable y la muestra en pantalla, asi hasta llegar al ultimo registro -->
              @if($empleados->count())
              @foreach($empleados as $empleado)  
              <tr>
                <td>{{$empleado->id}}</td>
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->sexo}}</td>
                <td>{{$empleado->tel}}</td>
                <td>{{$empleado->fecha_nacimiento}}</td>

                <!---->
                <td>
                  <form action="{{action('EmpleadoController@show', $empleado->id)}}" method="GET">
                  {{csrf_field()}}
                    <input name="_method" type="hidden" value="SHOW">
                    <button class="btn btn-success btn-xs" type="submit"><span class="glyphicon glyphicon-list"></span></button>
                 </td>

                <td>
                  <a class="btn btn-primary btn-xs" href="" ><span class="glyphicon glyphicon-pencil"></span></a>
                </td>

                <td>
                  <form action="" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                </td>
              </tr>
               @endforeach 
               @else <!-- sino hay ningun registro, manda un mensaje -->
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif

            </tbody>
 
          </table>
        </div>
      </div>
      {{ $empleados->links() }} <!-- esta direccionando al "paginate(3)" declarado en el index del Controlador -->
    </div>
  </div>
</section>
 
@endsection
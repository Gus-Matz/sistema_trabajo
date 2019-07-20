@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="row justify-content-center">
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
              <!--  -->
              <tr>
                <td>{{$empleado->id}}</td>
                <td>{{$empleado->nombre}}</td>
                <td>{{$empleado->sexo}}</td>
                <td>{{$empleado->tel}}</td>
                <td>{{$empleado->fecha_nacimiento}}</td>

                <td>
                  <a class="btn btn-primary btn-xs" href="{{action('EmpleadoController@index')}}" ><span class="glyphicon glyphicon-arrow-left"></span></a>
                </td>

              </tr>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </section>
</div>
@section('content')
@extends('layout.master')
<h1 class="card-title " align="center"> Datos de la busqueda</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOmbres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">No. Documento</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
        </tr>
    </thead>
    <tbody>

      
            <tr>
            <td> {{ $estudiantes->id }} </td>
            <td> {{ $estudiantes->nombreEstudiante }} </td>
            <td> {{ $estudiantes->apellidoEstudiante }}</td>
            <td> {{ $estudiantes->cedulaEstudiante }}</td>
            <td> {{ $estudiantes->direccionEstudiante }}</td>
            <td> {{ $estudiantes->telefonoEstudiante }}</td>
            <td> {{ $estudiantes->correoEstudiante }}</td>
            
            
            </tr>
        
    </tbody>
</table>
<br>
<div class="container" align="center">
                                  <a href="{{route('listadoEstudiantes')}}" class="btn btn-success" >Volver </a>
                            </div>
<br><br><br><br><br><br>
@stop
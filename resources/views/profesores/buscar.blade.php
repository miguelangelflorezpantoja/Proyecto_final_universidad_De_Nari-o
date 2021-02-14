@section('content')
@extends('layout.master')
<h1 class="card-title " align="center"> Datos de la busqueda</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Categoria</th>
            <th scope="col">No. Documento </th>
            <th scope="col">Dirccion </th>
            <th scope="col">Telefono </th>
            <th scope="col">Correo </th>
        </tr>
    </thead>
    <tbody>

      
            <tr>
            <td> {{ $profesores->id }} </td>
            <td> {{ $profesores->nombrepro }} </td>
            <td> {{ $profesores->cedulapro }}</td>
            <td> {{ $profesores->direccionpro }}</td>
            <td> {{ $profesores->telefonopro }}</td>
            <td> {{ $profesores->correopro }}</td>
            
            
            </tr>
        
    </tbody>
</table>
<br>
<div class="container" align="center">
                                  <a href="{{route('listadoProfesores')}}" class="btn btn-success" >Volver </a>
                            </div>
<br><br><br><br><br><br>
@stop
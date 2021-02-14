@section('content')
@extends('layout.master')
<h1 class="card-title " align="center"> Datos de la busqueda</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Categoria</th>
            <th scope="col">Descripción </th>
        </tr>
    </thead>
    <tbody>

      
            <tr>
            <td> {{ $carreras->id }} </td>
            <td> {{ $carreras->nombrecar }} </td>
            <td> {{ $carreras->descripcion }}</td>
            
            
            </tr>
        
    </tbody>
</table>
<br>
<div class="container" align="center">
                                  <a href="{{route('listadoCarreras')}}" class="btn btn-success" >Volver </a>
                            </div>
<br><br><br><br><br><br>
@stop
@section('content')
@extends('layout.master')
<body background="{{url('imag/es5.jpg')}}" >
@if(count($estudiantes)==0)
<br><br><br><br><br><br>


<div class="container" align="center"> 
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 70rem;">
                <div class="card-body">
                    <h1 class="card-title"> No hay estudiantes registrados aun</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
@else

<div class="container" align="center"> 
<h1><p><em>Estudiantes</em></p></h1> 

    <div class="row">
   
    <div class="container" style="color: white; background: rgba(5, 5, 5, 0.349)" >
        <form action="{{route('buscar')}}" method= "POST" class="form-inline md-form mr-auto mb-8">
                                    @csrf
                                    <input  class="form-control mr-sm-2" type="number" name="busqueda" id="busqueda" placeholder="Buscar por cedula" aria-label="Search" required>
                                    <button class="btn btn-primary" type="submit" value="Buscar">Buscar</button>
        </form> 
    </div>
 
    
<table class="table" style="color: white; background: rgba(5, 5, 5, 0.349)">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">No. Documento </th>
            <th scope="col">Direccion </th>
            <th scope="col">Telefono </th>
            <th scope="col">Opcion </th>
        </tr>
    </thead>
    <tbody>
    @foreach($estudiantes as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->nombreEstudiante }} </td>
            <td> {{ $c->apellidoEstudiante }} </td>
            <td> {{ $c->cedulaEstudiante }} </td>
            <td> {{ $c->direccionEstudiante }} </td>
            <td> {{ $c->telefonoEstudiante }} </td>
            <td>  <a href="{{route('detalleEstudiante', $c->id)}}" class="btn btn-primary" > Ver detalles </a> </td>
            
            </tr>
        
    @endforeach
    </tbody>
</table>
</div></div>            </div>
        </div>
@endif
@stop

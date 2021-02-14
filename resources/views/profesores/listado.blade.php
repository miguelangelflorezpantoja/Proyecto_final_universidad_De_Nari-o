@section('content')
@extends('layout.master')


@if(count($profesores)==0)
<br><br><br><br><br><br>
<div class="container" align="center"> 
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 70rem;">
                <div class="card-body">
                    <h1 class="card-title"> No hay profesores registrados</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
@else
<body background="{{url('imag/pro1.jpeg')}}" >
<div class="container" align="center" > 
    <div class="row">
<h1> Listado de Profesores </h1>

<div class="container" style="color: white; background: rgba(5, 5, 5, 0.349)">
        <form action="{{route('buscarPro')}}" method= "POST" class="form-inline md-form mr-auto mb-8">
                                    @csrf
                                    <input  class="form-control mr-sm-2" type="text" name="busqueda" id="busqueda" placeholder="Buscar por nombre" aria-label="Search" required>
                                    <button class="btn btn-primary" type="submit" value="Buscar">Buscar</button>
        </form> 
    </div>


<table class="table" style="color: white; background: rgba(5, 5, 5, 0.349)">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col"> Apellidos</th>
            <th scope="col"> No. Documento</th>
            <th scope="col"> Direccion</th>
            <th scope="col"> Telefono</th>
            <th scope="col"> Correo</th>
            <th scope="col">Opciones </th>
        </tr>
    </thead>
    <tbody>
    @foreach($profesores as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->nombrepro }} </td>
            <td> {{ $c->apellidopro }}</td>
            <td> {{ $c->cedulapro }}</td>
            <td> {{ $c->direccionpro }}</td>
            <td> {{ $c->telefonopro }}</td>
            <td> {{ $c->correopro }}</td>
            <td> 
                <a href="{{route('form_actualizaProfesor', $c->id)}}" class="btn btn-primary" > Editar </a>
                
                
                                <!-- Last name -->
                                <div class="btn-group pull-right">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                    <i class="fa fa-question-circle"></i> Eliminar
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                                <b>Esta seguro de eliminar?</b>
                                        </div>
                                        <div class="modal-footer" >
                                        <a href="{{route('eliminarProfesor', $c->id)}}"  class="btn btn-danger" > Si </a>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
            </td>
            
            </tr>
        
    @endforeach
    </tbody>
</table>
</div>
                                    </div>
@endif
@stop

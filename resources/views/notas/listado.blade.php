@section('content')
@extends('layout.master')


@if(count($notas)==0)
<br><br><br><br><br><br>
<div class="container" align="center"> 
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 70rem;">
                <div class="card-body">
                    <h1 class="card-title"> No hay notas registradas aun</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
@else


<body background="{{url('imag/notas.jpg')}}" >

<div class="container" align="center"> 

    <div class="row">
<h1 style="color: white;"> Listado de Notas </h1>

<div class="form-row mb-4">


    <div class="col">
            <div class="container" >
                <div class="form-row mb-4">
                            <div class="col">
                            <a href="{{url('/notas/registro')}}" class="btn btn-success" > Registrar </a>
                            </div>
                            <div class="col">
                            
                            </div>
                </div>


                </div>


<table class="table" >
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres estudiante</th>
            <th scope="col"> Apellidos estudiante</th>
            <th scope="col"> Nombres Profesor</th>
            <th scope="col"> Apellidos Profesor</th>
            <th scope="col"> Materia</th>
            <th scope="col"> Nota</th>
            <th scope="col">Opciones </th>
        </tr>
    </thead>
    <tbody>
    @foreach($notas as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->nombreEstudiante }} </td>
            <td> {{ $c->apellidoEstudiante }} </td>
            <td> {{ $c->nombrepro }} </td>
            <td> {{ $c->apellidopro }} </td>
            <td> {{ $c->nombrecar }} </td>
 
            <td> {{ $c->nota }} </td>

            <td> 
                <a href="{{route('form_actualizaNota', $c->id)}}" class="btn btn-primary" > Editar </a>
                
                
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
                                        <a href="{{route('eliminarNota', $c->id)}}"  class="btn btn-danger" > Si </a>
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
</div></div></div></div>
@endif
@stop

@section('content')
@extends('layout.master')
<body background="{{url('imag/estu.jpg')}}" >
<br>
<div class="container"> 
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h4 class="alert alert-warning" align="center"> Detalles del Estudiante </h4>
                    <p class="card-title"> Codigo: {{$estudiantes->id}} </p>
                    <p class="card-text"> NOmbres: {{ $estudiantes->nombreEstudiante}} </p>
                    <p class="card-text"> Apellidos: {{ $estudiantes->apellidoEstudiante}} </p>
                    <p class="card-text"> Cedula: {{$estudiantes->cedulaEstudiante}} </p>
                    <p class="card-text"> Direccion: {{$estudiantes->direccionEstudiante}} </p>
                    <p class="card-text"> Teléfono: {{$estudiantes->telefonoEstudiante}} </p>
                    <p class="card-text"> Genero: {{$estudiantes->generoEstudiante}} </p>
                    <p class="card-text"> Correo: {{$estudiantes->correoEstudiante}} </p>

                </div>
                <div class="form-row mb-4">
                            <div class="col">
                                <!-- First name -->
                                <a href="{{route('form_actualizaEstudiante', $estudiantes->id)}}" class="btn btn-primary" > Editar </a>
                            </div>
                            <div class="col">
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
                                        <a href="{{route('eliminarEstudiante', $estudiantes->id)}}" class="btn btn-danger" > Si </a>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                  <a href="{{route('listadoEstudiantes')}}" class="btn btn-success" >Volver </a>
                            </div>
                </div>

                
            </div>
           
        </div>
    </div>
</div>
<br>
@stop
@section('content')
@extends('layout.master')
<body background="{{url('imag/pe3.png')}}" >

<br><br><br><br><br><br>
<div class="container" align="center"> 
    <div class="row">
    <div class="col-md-2">
    </div>
        <div class="col-md-4">
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h1 class="card-title "> Formulario de Actualizacion Profesores</h1>
                </div>
                <form action="{{route('actualizarProfesor', $profesor->id )}}" method= "POST">
                    @csrf
                    <!-- Etiquetas de tipo text con un value asignado -->
                    <div class="form-row mb-4">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="form-group">
                                            <label for="nombrePro">Nombres </label>
                                            <input type="text" id="nombrepro" name="nombrepro" value="{{$profesor->nombrepro}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="form-group">
                                            <label for="cantidadPro">Apellidos </label>
                                            <input type="text" id="apellidopro" name="apellidopro" value="{{$profesor->apellidopro}}"  class="form-control" placeholder="Cantidad">
                                        </div>
                                    </div>
                    </div>
                    <div class="form-row mb-4">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="form-group">
                                            <label for="nombrePro">Cedula </label>
                                            <input type="text" id="cedulapro" name="cedulapro" value="{{$profesor->cedulapro}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="form-group">
                                            <label for="cantidadPro">Direccion </label>
                                            <input type="text" id="direccionpro" name="direccionpro" value="{{$profesor->direccionpro}}"  class="form-control" placeholder="Cantidad">
                                        </div>
                                    </div>
                    </div>
                    <div class="form-row mb-4">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="form-group">
                                            <label for="nombrePro">Telefono  </label>
                                            <input type="text" id="telefonopro" name="telefonopro" value="{{$profesor->telefonopro}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="form-group">
                                        <label for="materialRegisterFormFirstName">Genero</label>

                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="generopro" id="m"  value="m" />
                                            <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="generopro" id="f" value="f"/>
                                            <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                            </div>
                                        </div>
                                    </div>
                    </div>

                    <div class="form-row mb-4">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="form-group">
                                            <label for="nombrePro">Correo </label>
                                            <input type="text" id="correopro" name="correopro" value="{{$profesor->correopro}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        </div>
                                    </div>
                                    <div class="col">

                                    </div>
                    </div>
                    <!-- Etiquetas de tipo number -->


                    <br> <br>
                    <!-- Etiquetas de tipo button -->
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <button type="button" class="btn btn-info btn-xs"  ><a class="dropdown-item" href="{{url('/profesores')}}">volver</a></button>
                    
                </form>

            </div>
        </div>
        
    </div>
</div>
<br><br><br><br><br><br>
@stop
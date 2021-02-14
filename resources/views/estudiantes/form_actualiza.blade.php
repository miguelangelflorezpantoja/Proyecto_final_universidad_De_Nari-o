@section('content')
@extends('layout.master')
<img src='{{url("/imag/a.jpg")}}' class="card-img-top" alt="...">
<h1> Formulario de Actualizacion </h1>

<form action="{{route('actualizarEstudiante', $estudiantes->id )}}" method= "POST">
    @csrf

    <div class="form-group">
        <label for="nombre">Nombre </label>
        <input type="text" id="nombreEst" name="nombreEst" value="{{$estudiantes->nombreEstudiante}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre </label>
        <input type="text" id="apellidoEst" name="apellidoEst" value="{{$estudiantes->apellidoEstudiante}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    <div class="form-group">

        <label for="materialRegisterFormFirstName">Tipo Documento</label>

        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipoEst" id="t"  value="t" />
        <label class="form-check-label" for="inlineRadio1">Tarjeta</label>
        </div>

        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipoEst" id="c" value="c"/>
        <label class="form-check-label" for="inlineRadio2">cedula</label>
        </div>

        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="tipoEst" id="p" value="p"/>
        <label class="form-check-label" for="inlineRadio2">pasaporte</label>
        </div>
    </div>
    <div class="form-group">
        <label for="cedula">Cedula </label>
        <input type="text" id='cedulaEst' name='cedulaEst' value="{{$estudiantes->cedulaEstudiante}}"  class="form-control" placeholder="Cantidad">
    </div>
     <div class="form-group">
        <label for="direccion">Direccion </label>
        <input type="text" id='direccionEst' name='direccionEst' value="{{$estudiantes->direccionEstudiante}}"   class="form-control" placeholder="Cantidad">
    </div>
    <div class="form-group">
        <label for="telefono">Teléfono </label>
        <input type="text" id='telefonoEst' name='telefonoEst' value="{{$estudiantes->telefonoEstudiante}}"   class="form-control" placeholder="Cantidad">
    </div>

    <div class="form-group">

        <label for="materialRegisterFormFirstName">Genero</label>

        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="generoEst" id="m"  value="m" />
        <label class="form-check-label" for="inlineRadio1">Masculino</label>
        </div>

        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="generoEst" id="f" value="f"/>
        <label class="form-check-label" for="inlineRadio2">Femenino</label>
        </div>
    </div>
    <div class="form-group">
        <label for="direccion">Correo </label>
        <input type="correo" id='correoEst' name='correoEst' value="{{$estudiantes->correoEstudiante}}"   class="form-control" placeholder="Cantidad">
    </div>


    <br> <br>
     <!-- Etiquetas de tipo button -->
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <button type="reset" class="btn btn-secondary">Limpiar</button>
    <button type="button" class="btn btn-danger">Cancelar</button>
</form>


@stop
@section('content')
@extends('layout.master')
<body background="{{url('imag/pe.jpg')}}" >
<h1> Formulario de Actualizacion </h1>

<form action="{{route('actualizarNota', $notas->id )}}" method= "POST">
    @csrf
    <!-- Etiquetas de tipo text con un value asignado -->
    <div class="form-group">
    <label for="productos">estudiante {{$notas->cursos}}</label> 
    <select class="custom-select" id="estudiante" name="estudiante">
        @foreach($estudiantes as $c)
        <option value="{{$c->id}}">{{$c->id}} {{$c->nombreEstudiante}}</option>
        @endforeach
    </select>
    </div>

     <!-- Etiquetas de tipo number -->
    <div class="form-group">
        <label for="productos">Profesor:</label> 
        <label >{{$notas->profesor}}</label>
        <select class="custom-select" id="profesor" name="profesor">
            @foreach($profesores as $c)
            <option value="{{$c->id}}">{{$c->id}} {{$c->nombrepro}}</option>
            @endforeach
        </select>
    </div>

     <!-- Etiquetas de tipo number -->
     <div class="form-group">

        <label for="productos">materia {{$notas->cursos}}</label> 
        <select class="custom-select" id="materia" name="materia">
            @foreach($carreras as $c)
            <option value="{{$c->id}}">{{$c->id}} {{$c->nombrecar}}</option>
            @endforeach
        </select>
    </div>

<div>
<label for="precioPro">Calificación </label>
        <input type="number" id='nota' step="any"s name='nota' value="{{$notas->nota}}" min='0' max="5"  class="form-control" placeholder="Cantidad">

</div>
    <br> <br>
     <!-- Etiquetas de tipo button -->
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <button type="reset" class="btn btn-secondary">Limpiar</button>
    <button type="button" class="btn btn-danger">Cancelar</button>
</form>


@stop
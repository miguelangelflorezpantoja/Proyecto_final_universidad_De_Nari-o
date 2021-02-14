@section('content')
@extends('layout.master')
<body background="{{url('imag/ca2.jpg')}}" >

<form class="text-center border border-light p-5" action="{{route('registrarNota')}}" method= "POST"> 
        @csrf

    <p class="h4 mb-4">Formulario  Registro de notas</p>
    <div class="form-row mb-4">
                <div class="col">
                <select class="custom-select custom-select-sm" name="materia">
                        <option selected>Materias</option>
                        @foreach($carreras as $p)
                        <option value="{{$p->id}}">{{$p->nombrecar}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col">
                    <!-- First name -->
                    <select class="custom-select custom-select-sm" name="estudiante">
                        <option selected>Estudiantes</option>
                        @foreach($estudiantes as $p)
                        <option value="{{$p->id}}">{{$p->nombreEstudiante}}</option>
                        @endforeach

                    </select>
                </div>

    </div>
    <div class="form-row mb-4">
                <div class="col">
                <select class="custom-select custom-select-sm" name="profesor">
                        <option selected>Profesores</option>
                        @foreach($profesores as $p)
                        <option value="{{$p->id}}">{{$p->nombrepro}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input required type="number" id="nota" step="any" max="5" min="0" name="nota" class="form-control">
                        <label for="materialRegisterFormLastName">Calificacion</label>
                    </div>
                </div>
    </div>

    <div class="form-row mb-4">
                <div class="col"></div>
                <div class="col">
                     <button class="btn btn-info my-4 btn-block" type="submit">Registar</button>
                </div>
                <div class="col"></div>
    </div>    
    </form>
@stop
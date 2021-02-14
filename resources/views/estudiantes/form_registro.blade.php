@section('content')
@extends('layout.master')
<img src='{{url("/imag/e1.jpg")}}' class="card-img-top" alt="...">
<form class="text-center border border-light p-5" action="{{route('registrarEstudiante')}}" method= "POST"> 
        @csrf

    <p class="h4 mb-4">Formulario de Registro</p>
    <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input required type="text" id="nombreEst" name="nombreEst" class="form-control">
                        <label for="materialRegisterFormFirstName">Nombres</label>
                    </div>
                </div>
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input required type="text" id="apellidoEst" name="apellidoEst" class="form-control">
                        <label for="materialRegisterFormFirstName">Apellidos</label>
                    </div>
                </div>

    </div>
    <div class="form-row mb-4">
                <div class="col">
                <div class="md-form">
                    <label for="materialRegisterFormFirstName">Tipo de Documento:</label>

                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipoEst" id="t"  value="t" />
                    <label class="form-check-label" for="inlineRadio1">TC</label>
                    </div>

                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipoEst" id="c" value="c"required/>
                    <label class="form-check-label" for="inlineRadio2">CC</label>
                    </div>

                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tipoEst" id="p" value="p"required/>
                    <label class="form-check-label" for="inlineRadio2">P</label>
                    </div></div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input required type="number" id="cedulaEst" name="cedulaEst" class="form-control">
                        <label for="materialRegisterFormLastName">Numero del documento</label>
                    </div>
                </div>
    </div>
    <div class="form-row mb-4">
                <div class="col">
                    <div class="md-form">
                        <input required type="text" id="direccionEst" name="direccionEst" class="form-control">
                        <label for="materialRegisterFormFirstName">Direccion</label>
                    </div>
                </div>
                <div class="col">
                    <div class="md-form">
                        <input required type="number" id="telefonoEst" name="telefonoEst" class="form-control">
                        <label for="materialRegisterFormLastName">Teléfono</label>
                    </div>
                </div>
    </div>
    <div class="form-row mb-4">
                <div class="col">
                <div class="md-form">
                    <label for="materialRegisterFormFirstName">Genero</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="generoEst" id="m"  value="m" />
                    <label class="form-check-label" for="inlineRadio1">Masculino</label>
                    </div>

                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="generoEst" id="f" value="f"required/>
                    <label class="form-check-label" for="inlineRadio2">Femenino</label>
                    </div>
                    
                </div>
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input required type="coreo" id="correoEst" name="correoEst" class="form-control">
                        <label for="materialRegisterFormFirstName">     Correo electronico</label>
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
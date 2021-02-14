@section('content')
@extends('layout.master')
<img src='{{url("/imag/p.png")}}' class="card-img-top" alt="...">
<div class="container" align="center">

    <br><br><br>
<div class="container" align="center"> 
    <div class="row">
    <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h1 class="card-title "> Registro de Profesores</h1>

                    <form action ="{{url('profesores/registro')}}" method="POST">
                        @csrf
                        <div class="form-row mb-4">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="md-form">
                                            <input required type="text" id="nombrepro" name="nombrepro" class="form-control">
                                            <label for="materialRegisterFormFirstName">Nombres</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="md-form">
                                            <input required type="text" id="apellidopro" name="apellidopro" class="form-control">
                                            <label for="materialRegisterFormFirstName">Apellidos</label>
                                        </div>
                                    </div>
                        </div>
                        <div class="form-row mb-4">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="md-form">
                                            <input required type="number" id="cedulapro" name="cedulapro" class="form-control">
                                            <label for="materialRegisterFormFirstName">Cedula</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="md-form">
                                            <input required type="text" id="direccionpro" name="direccionpro" class="form-control">
                                            <label for="materialRegisterFormFirstName">Direccion</label>
                                        </div>
                                    </div>
                        </div>  
                        <div class="form-row mb-4">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="md-form">
                                            <input required type="tel" id="telefonopr" name="telefonopro" class="form-control">
                                            <label for="materialRegisterFormFirstName">Telefono</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="md-form">
                                            <label for="materialRegisterFormFirstName">Genero</label>
                                        </div>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="generopro" id="m"  value="m" />
                                            <label class="form-check-label" for="inlineRadio1">M</label>
                                            </div>

                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="generopro" id="f" value="f"required/>
                                            <label class="form-check-label" for="inlineRadio2">F</label>
                                            </div>
                                            
                                        
                                    </div>
                        </div>                    
                        <div class="form-row mb-4">
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="md-form">
                                            <input required type="email" id="correopro" name="correopro" class="form-control">
                                            <label for="materialRegisterFormFirstName">Correo</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- First name -->
                                        <div class="md-form">
                                          
                                        </div>
                                    </div>
                        </div> 
                       

                        <button type="submit" class="btn btn-success"> Registrar </button>

                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
<br><br><br>
</div>
@stop
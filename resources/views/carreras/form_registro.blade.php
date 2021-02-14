@section('content')
@extends('layout.master')
<body background="{{url('imag/as.jpg')}}" >
<div class="container" align="center">

    <br><br><br>
<div class="container" align="center"> 
    <div class="row">
    <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <h1 class="card-title "> Registro de Materias </h1>

                    <form action ="{{url('carreras/registro')}}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Materia" aria-label="nombre" aria-describedby="basic-addon1" id="nombrecar" name="nombrecar" required>
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
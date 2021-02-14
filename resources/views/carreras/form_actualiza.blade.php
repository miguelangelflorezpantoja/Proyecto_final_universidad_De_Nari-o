@section('content')
@extends('layout.master')
<body background="{{url('imag/ac.jpg')}}" >
<br><br><br><br><br><br>
<div class="container" align="center"> 
    <div class="row">
    <div class="col-md-2">
    </div>
        <div class="col-md-4">
            <div class="card" style="width: 40rem;">
                <div class="card-body">
                    <h1 class="card-title "> Formulario de Actualizacion</h1>
                </div>
                <form action="{{route('actualizarCarrera', $carrera->id )}}" method= "POST">
                    @csrf
                    <!-- Etiquetas de tipo text con un value asignado -->
                    <div class="form-group">
                        <label for="nombrePro">Nombre </label>
                        <input type="text" id="nombrecar" name="nombrecar" value="{{$carrera->nombrecar}}" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    </div>


                    <br> <br>
                    <!-- Etiquetas de tipo button -->
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <button type="reset" class="btn btn-secondary">Limpiar</button>
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </form>

            </div>
        </div>
        
    </div>
</div>
<br><br><br><br><br><br>
</body>
@stop
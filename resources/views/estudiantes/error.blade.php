@section('content')
@extends('layout.master')

<body background="{{url('imag/no.jpg')}}" >
<br><br><br><br><br><br>
<div class="container" align="center"> 
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 70rem;">
                <div class="card-body">
                    <h1 class="card-title "> Dato no encontrado</h1>
                </div>
                <div class="container">
                    <a class="btn btn-primary" href='{{url()->previous()}}'> Regresar </a>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>

@stop
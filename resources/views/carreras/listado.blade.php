@section('content')
@extends('layout.master')

<body background="{{url('imag/ma1.jpg')}}" >
@if(count($carreras)==0)
<br><br><br><br><br><br>
<div class="container" align="center"> 
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 70rem;">
                <div class="card-body">
                    <h1 class="card-title"> No hay categorias registradas aun</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
@else
<div class="container" align="center" style="color: white; background: rgba(5, 5, 5, 0.349)">
<br><br><br><br><br>

<div class="container"  >
        <form action="{{route('buscarCar')}}" method= "POST" class="form-inline md-form mr-auto mb-8" style="color: white; ">
                                    @csrf
                                    <input  class="form-control mr-sm-2" type="text" name="busqueda" id="busqueda" placeholder="Buscar por nombre" aria-label="Search" required style="color: white; ">
                                    <button class="btn btn-primary" type="submit" value="Buscar">Buscar</button>
        </form> 
</div>


<div class="container" align="center"style="color: white; ">
<table class="table" style="color: white; ">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre Asignatura</th>
            <th scope="col">Opciones </th>
        </tr>
    </thead>
    <tbody>
    @foreach($carreras as $c)
      
            <tr>
            <td> {{ $c->id }} </td>
            <td> {{ $c->nombrecar }} </td>
            

            <td> 
                <a href="{{route('form_actualizaCarrera', $c->id)}}" class="btn btn-primary" > Editar </a>
                
                
                                <!-- Last name -->
                                <div class="btn-group pull-right">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                    <i class="fa fa-question-circle"></i> Eliminar
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitleEl" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-body">
                                                <h1>Esta seguro de eliminar?</h1>
                                        </div>
                                        <div class="modal-footer" >
                                        <a href="{{route('eliminarCarrera', $c->id)}}"  class="btn btn-danger" > Si </a>
                                        
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
            </td>
            
            </tr>
        
    @endforeach
    </tbody>
</table>
</div>
                                </div>
@endif
@stop

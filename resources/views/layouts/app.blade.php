<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/bootstrap/css/style.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/bootstrap/css/mdb.min.css') }}" rel="stylesheet">

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

        <!--Navbar -->

<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-success">
 <img src="https://www.udenar.edu.co/recursos/wp-content/uploads/2016/09/vertical.fw_-e1476916579853.png">
  <a class="navbar-brand" href="{{url('/')}}">
  
  <em>Universidad de Nariño     </em>
  
  <br>     <em> Sistema  integrado de registro     </em> </br> </a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
       <p><em>Estudiantes</em></p>
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="{{url('/estudiantes')}}"><em>listado</em> </a>
            <a class="dropdown-item" href="{{url('/estudiantes/registro')}}"><em>Registrar</em></a>
           
          </div>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <p><em>Materias</em></p>
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="{{url('/carreras')}}"><em>listado</em> </a>
            <a class="dropdown-item" href="{{url('/carreras/registro')}}"><em>Registrar</em></a>
            
          </div>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <p><em>Profesores</em></p>
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="{{url('/profesores')}}"><em>listado</em> </a>
            <a class="dropdown-item" href="{{url('/profesores/registro')}}"><em>Registrar</em></a>
            
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <em>Notas</em>
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="{{url('/notas')}}"><em>listado</em><em> </a>
            <a class="dropdown-item" href="{{url('/notas/registro')}}"><em>Registrar</em></a>
            
          </div>
        </li>






      <li class="nav-item">
        <a class="nav-link" href="{{url('')}}"><em>Nosotros</em></a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="{{url('login')}}">Iniciar Sesión</a>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->


<div class="container">       

@yield('content')



 </div>


        </div>

        <footer class="page-footer font-small black special-color- bg-indigo">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <h5 class="text-uppercase">     <em>Presentado a:     </em></h5>
                <a href="#!"> Ing. Sandra Marcela Guerrero </a>
           
            </div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
                <h5>Realizado por:</h5>
                <ul class="list-unstyled">
                    <li>
                         <a href="#!">Miguel Angel Florez</a>
                         <br><a href="#!">Yasmani Alexander </a>
                    </li>
                    <li>
                       
                     
                    </li>

                </ul>

            </div>
        </div>
    </div>

    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> </a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
       <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>

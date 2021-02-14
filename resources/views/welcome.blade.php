<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    

        <!-- Fonts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/bootstrap/css/style.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/bootstrap/css/mdb.min.css') }}" rel="stylesheet">
    </head>
  
    <body class="antialiased">


        <!--navegacion-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
       


      
            <div class="container-fluid">

            <img src="https://www.udenar.edu.co/recursos/wp-content/uploads/2016/09/vertical.fw_-e1476916579853.png">

                <a class="navbar-brand" href="#"><em>Universidad De Nariño</em>
             <br> <em>Sistema Integrado de registro  </em></br>
           
                </a>
            
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    
                @if (Route::has('login'))
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                @auth
                @else
                    <a href="{{ route('login') }}" class="nav-link active" aria-current="page"><em>Iniciar sesion</em></a>
                </li>
                     @if (Route::has('register'))
                <li class="nav-item">
                       <!--navegacion <a class="nav-link" href="{{ route('register') }}">Registro</a>-->
                    
                   
                </li>
                   
                                @endif
                            @endauth
                        </div>
                    @endif
                    
                    
                    <li class="nav-item">
                 <!--end--navegation      <a class="nav-link" href="#">BIENVENIDOS!!!</a>-->     
                    </li>
                </ul>
              
                </div>
            </div>
            </nav>
        <!--end--navegation-->
        
<!--cuerpo-->

<!--<h1>COLOCAR IMAGEN</h1>
cuerpo<img class="d-block w-100" src="{{ url('/imag/bg.jpg') }}" height="550" alt="First slide">-->

<center><img src="https://www.udenar.edu.co/recursos/wp-content/uploads/2020/02/udenar.jpg"></center>


<!--end-cuerpo-->
<!--foooter-->
<br></br>
<br></br>

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






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
       <script type="text/javascript" src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
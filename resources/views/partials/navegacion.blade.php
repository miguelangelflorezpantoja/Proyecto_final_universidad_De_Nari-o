<!--Navbar -->

<nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-success">
<img src="https://www.udenar.edu.co/recursos/wp-content/uploads/2016/09/vertical.fw_-e1476916579853.png">
  <a class="navbar-brand" href="{{url('dashboard')}}">
  
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

    <li class="nav-item" >
      <a class="nav-link" href="{{url('dashboard')}}"><em>Nosotros</em></a>
    </li>

    

    <li class="nav-item dropdown" style="margin-left: 700px;">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <em>{{Auth::user()->name}}</em>
      </a>
      <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a class="dropdown-item" style="width: 200px;" href="{{url('logout')}}" onclick="event.preventDefault();
          this.closest('form').submit();">Cerrar Sesión </a>
      </form>
        
       
        
      </div>
    </li>
      
      
    </ul>
  </div>
</nav>
<!--/.Navbar -->
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index"><img src="{{asset('public/img/logo3.png')}}" alt="" class="img-fluid"></a>

      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ url('index') }}">Home</a></li>
          @if(session('tipoUsuario')=='admin')
          <li><a class="nav-link scrollto" href="{{ url('mascotas#bienvenida') }}">Mascotas</a></li>
          @else
          <li><a class="nav-link scrollto" href="{{ url('adopta#adopta') }}">Adopta</a></li>
          @endif
          <li><a class="nav-link scrollto" href="{{ url('transito#transito') }}">Transito</a></li>
          <li><a class="nav-link scrollto" href="{{ url('index#consejos') }}">Consejos</a></li>

          <li><a class="nav-link scrollto" href="{{ url('dona#dona') }}">Dona</a></li>
          <li><a class="nav-link scrollto" href="{{ url('index#adoptados') }}">Adoptados</a></li>

          @if (session('tipoUsuario')=='usuario')
            <li><a class="nav-link scrollto" href="{{ url('#contacto') }}">Contactanos</a></li>
          @endif
          @if (!session('alias'))
            <li><a class="nav-link scrollto" href="{{ url('login') }}" id="login">Login</a></li>
            <li><a class="nav-link scrollto" href="{{ url('registro') }}" id="registro">Registro</a></li>
          @else
            <li><a class="nav-link scrollto" href="{{ url('logout') }}"  id="logout">Logout</a></li>
          @endif

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index"><img src="{{asset('public/img/logo3.png')}}" alt="" class="img-fluid"></a>

      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index">Home</a></li>
          @if(session('tipoUsuario')=='admin')
          <li><a class="nav-link scrollto" href="adopta#adopta">Mascotas</a></li>
          @else
          <li><a class="nav-link scrollto" href="adopta#adopta">Adopta</a></li>
          @endif
          <li><a class="nav-link scrollto" href="transito#transito">Transito</a></li>
          <li><a class="nav-link scrollto" href="index#consejos">Consejos</a></li>

          <li><a class="nav-link scrollto" href="dona#dona">Dona</a></li>
          <li><a class="nav-link scrollto" href="index#adoptados">Adoptados</a></li>
          <li><a class="nav-link scrollto" href="#contacto">Contactanos</a></li>
          @if (!session('alias'))
            <li><a class="nav-link scrollto" href="login" id="login">Login</a></li>
          @else
            <li><a class="nav-link scrollto" href="logout"  id="logout">Logout</a></li>
          @endif

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

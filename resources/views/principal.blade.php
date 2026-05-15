<!DOCTYPE html>
<html lang="en">

@include('head')

<body>

  @include('header')

  @include('encabezado')

  <main id="main">
    @yield('contenido')
    @if (!session('tipoUsuario')=='admin')
        @include('formContactanos')
    @endif
  </main><!-- End #main -->

  @include('footer')



</body>

</html>

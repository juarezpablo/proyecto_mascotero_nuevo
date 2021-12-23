<!DOCTYPE html>
<html lang="en">

@include('head')

<body>

  @include('header')

  @include('encabezado')

  <main id="main">
    @yield('contenido')
    @include('formContactanos')
  </main><!-- End #main -->

  @include('footer')



</body>

</html>

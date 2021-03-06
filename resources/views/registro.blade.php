<!DOCTYPE html>
<html lang="en">

@include('head')

<body>

    <!-- =============== Modal de errores =============== -->
    @if ($errors->any())

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" 
        id="botonModal" style="display:none">
    
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Errores</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger">
                                        <h6>Por favor corrige los errores:</h6>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- <script defer >setTimeout(()=>document.getElementById('botonModal').click(), 2000);</script> -->
    @endif
    <!-- =============== Fin modal de errores =============== -->



  @include('header')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="heroRegistro" style="margin-bottom: 10px;">
        <div class="hero-container" data-aos="fade-up" id="login">
            <div class="wrapper fadeInDown">
                <div id="formContent" class="p-2">

                    <div class="fadeIn first">
                        <img src="{{asset('public/img/logo_solo.png')}}" id="icon" alt="User Icon m-5" style="width: 250px;" />
                    </div>
                    <form method="POST" id="formLogin">
                        @csrf

                        @if ($errors->any())

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" 
    id="botonModal" style="display:none">
  
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Errores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      
        <div class="alert alert-danger">
                            <h6>Por favor corrige los errores:</h6>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<!-- <script defer>document.getElementById('botonModal').click();</script> -->
                        @endif

                        <input type="text" id="alias" class="fadeIn first" name="alias" placeholder="Usuario" >
                        <input type="password" id="contrasena" class="fadeIn second"
                            name="contrasena" placeholder="Contrase??a" minlength="4" maxlength="12" >
                        <input type="password" id="contrasena2" class="fadeIn third"
                            name="contrasena2" placeholder="Repetir contrase??a" minlength="4" maxlength="12" >
                        <input type="text" id="nombre" class="fadeIn fourth" name="nombre" placeholder="Nombre" >
                        <input type="text" id="apellido" class="fadeIn fourth" name="apellido" placeholder="Apellido" >
                        <input type="tel" id="telefono" class="fadeIn fourth" name="telefono" placeholder="Telefono" >
                        <div class="d-flex">
                            <select class="form-select form-select-lg mb-3" id="localidad" name="localidad" aria-label=".form-select-lg example" id_ubicacion="" >
                                <option value="" selected>Localidad</option>
                            </select>

                            <select class="form-select form-select-lg mb-3 disabled" id="barrio" name="barrio"  aria-label=".form-select-lg example" id_ubicacion="">
                                <option value="" selected>Barrio</option>
                            </select>
                        </div>
                        <input name="ubicacion" style="display:none" value="" id="ubicacion" id_ubicacion="">
                        <button type="submit" id="botonRegistrar"  class="fadeIn fourth">Registrar</button>

                    </form>

                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    @include('footer')

<script type="text/javascript" src="{{ asset('public/js/ubicaciones.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/registro.js') }}"></script>

@if ($errors->any())
<script defer> $( document ).ready(function() {
    document.getElementById('botonModal').click();
    }); </script>
@endif
</body>

</html>

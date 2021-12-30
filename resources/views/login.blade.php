<!DOCTYPE html>
<html lang="en">

@include('head')

<body>

  @include('header')
    <!-- ======= Hero Section ======= -->
    <section id="hero" style="margin-bottom: 10px;">
        <div class="hero-container" data-aos="fade-up" id="login">
            <div class="wrapper fadeInDown">
                <div id="formContent">

                    <div class="fadeIn first">
                        <img src="{{asset('public/img/logo_solo.png')}}" id="icon" alt="User Icon m-5" style="width: 250px;" />
                    </div>
                    <form method="POST" id="formLogin">
                        @csrf
                        <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="Usuario">
                        <input type="password" id="contrasena" class="fadeIn third" name="contrasena" placeholder="Contraseña">
                        <button type="submit"  class="fadeIn fourth">Ingresar</button>
                        <!--     <p class="message">Not registered? <a href="#">Create an account</a></p> -->
                        @if(Session::has('errorLogin'))
                        <div class="alert alert-danger">
                            {{Session::get('errorLogin')}}
                        </div>
                        @endif

                    </form>

                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    @include('footer')



</body>

</html>

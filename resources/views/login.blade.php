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
                    <form method="POST">
                        @csrf
                        <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="Usuario">
                        <input type="password" id="contraseña" class="fadeIn third" name="contraseña" placeholder="Contraseña">
                        <button type="submit"  class="fadeIn fourth">Ingresar</button>
                        <!--     <p class="message">Not registered? <a href="#">Create an account</a></p> -->
                    </form>

                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    @include('footer')



</body>

</html>

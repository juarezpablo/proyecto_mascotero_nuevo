@extends('principal')

@section('contenido')
      <!-- ======= Requisitos ======= -->
      <span id='sect'></span>
      <section id="requisitos" class="requisitos">
        <div class="container">

          <div class="row no-gutters">
            <div class="content col-xl-9 d-flex align-items-stretch" data-aos="fade-up">
              <div class="content">
                <h3>Como postularse para la adopcion?</h3>
                <p>
                  Solo tenes que loguearte y completas el formulario pre-adopcion.
                </p>
                <a href="adopta" class="about-btn">Adopta<i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>

        </div>
      </section><!-- End About Section -->

      <section id="consejos" class="about">
        <div class="container">

          <div class="row no-gutters">
            <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
              <div class="content">
                <h3>Consejos</h3>
                <p>
                  El amor incondicional que te puede dar un animalito puede ser de gran ayuda para tu vida, tu autoestima
                  y tu percepcion del mundo. Sin embargo, antes de traer a un pequeño amigo peludo a tu hogar, debes tener
                  en cuenta algunas cosas clave para que todo salga bien.
                </p>
                <ul>
                  <li> Responsabilidad, ya que debes cuidar la vida de este nuevo integrante. Esto significa llevarlo al
                    veterinatio, darle la mejor comida y atender sus diversas necesidades.</li>
                  <li> Adopta dependiendo tu situacion, tu disponibilidad de tiempo, si vivis en un espacio acorde.</li>
                  <li> Prepara todo para su llegada, dependiendo de la mascota necesitan diferentes elementos.</li>
                  <li> Recorda que es super importante contar con las protecciones de red o mosquitero.</li>
                  <li> Y lo mas importante, mucho amor!!</li>
                </ul>
              </div>
            </div>
            <div class="col-xl-7 d-flex align-items-stretch">
              <div class="d-flex flex-column justify-content-center">
                <div class="row ml-5">
                  <img
                    src="https://www.supportdogcertification.org/storage/app/media/uploaded-files/adorable-3344414_1920.jpg"
                    alt="">
                </div><!-- End .content-->
              </div>
            </div>

          </div>
      </section>

      <!-- ======= Adoptados Section ======= -->
      <section id="adoptados" class="mascotas section-bg">
        <div class="container">

          <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Mascotas recientemente adoptadas</h2>
          </div>

          <div class="mascotas-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="mascotas-item">
                  <img src="{{asset('public/img/shiro.jpg')}}" class="mascotas-img" alt="">
                  <h3>Shiro</h3>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="mascotas-item">
                  <img src="{{asset('public/img/circe.jpg')}} " class="mascotas-img" alt="">
                  <h3>Circe</h3>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="mascotas-item">
                  <img src="{{asset('public/img/baku.jpg')}} " class="mascotas-img" alt="">
                  <h3>Baku</h3>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="mascotas-item">
                  <img src="{{asset('public/img/isis.jpg')}} " class="mascotas-img" alt="">
                  <h3>Isis</h3>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="mascotas-item">
                  <img src="{{asset('public/img/gandalf.jpg')}} " class="mascotas-img" alt="">
                  <h3>Gandalf</h3>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="mascotas-item">
                  <img src="{{asset('public/img/friza.jpg')}} " class="mascotas-img" alt="">
                  <h3>Frieza</h3>
                </div>
              </div><!-- End adoptados item -->

            </div>
            <div class="swiper-pagination"></div>
          </div>

        </div>
      </section><!-- End adoptados Section -->



@endsection

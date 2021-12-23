@extends('principal')

@section('contenido')

    <section id="transito" class="about mb-5">
        <div class="container">

            <div class="row no-gutters mb-5">
                <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="content">
                        <h5> Los hogares de transito son el puente entre una vida llena de abandono y desidia a una vida
                            digna, que todo ser vivo merece. Son el eslabon mas importante en esta cadena de ayuda,
                            quizas no puedas adoptar a un animal de forma definitiva pero si brindarle un lugar
                            provisorio hasta su adopcion.
                        </h5>
                    </div>
                </div>

                <div class="col-xl-7 d-flex align-items-stretch">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="row ml-5">
                            <img src="{{asset('/public/img-transito/TRANSITO2.jpg')}}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-xl-7 d-flex align-items-left">
                    <div class="d-flex flex-column justify-content-center">
                        <div class="row mr-5">
                            <img src="{{ asset('public/img-transito/transito.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="content col-xl-5 d-flex mt-5 align-items-stretch" data-aos="fade-up">
                    <div class="content ">
                        <h5>Que se necesita?</h5>
                        <ul>
                            <li>
                                <h5>Residir en Floresta, CABA o barrios aleñados, salvo que cuentes con behiculo para su
                                    traslado.</h5>
                            </li>
                            <li>
                                <h5>Dependiendo de la especie y la edad que puedas transitar, no estar mucho fuera de tu
                                    hogar principalmente si son cachorros, en cambio los gatos pueden estar solos muchas
                                    horas.</h5>
                            </li>
                            <li>
                                <h5>Si queres transitar gatos o gatitos contar con las protecciones correspondientes,
                                    paciencia, ganas, amor y empatia!</h5>
                            </li>
                        </ul>
                        <h5 class="mt-5">Nos hacemos cargo de sus gastos y sus adopciones.</h5>
                        <h5>Si queres ser parte de ese maravilloso eslabon de ayuda, completa el formulario de
                            contacto y nos comunicaremos con vos.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

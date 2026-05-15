@extends('principal')

@section('contenido')

    <section class="dona row d-flex mb-5">
        <div class="info p-4" style="text-align: center;" id="dona">
            <div class="title">
                <h2>Tu donacion nos ayuda a ayudar</h2>
            </div>
            <div class="bajada mt-5">
                <h5>Nuestro trabajo es imposible sin ayuda. Te agradecemos desde ya tu volutad de colaborar con nuestra
                    mision de rescate y de encontrarles un hogar digno para siempre.</h5>
            </div>
        </div>
        <div class="donaciones col d-flex mb-2 pt-2 justify-content-center">
            <div class="box">
                <a href="#"><img src="{{ asset('public/img-donaciones/50.png') }}"  alt="" class="donacion-img"></a>
            </div>
            <div class="box 1 ">
                <a href="#"><img src="{{ asset('public/img-donaciones/100.png') }}"  alt="" class="donacion-img"></a>
            </div>
            <div class="box 2 ">
                <a href="#"><img src="{{ asset('public/img-donaciones/200.png') }}"  alt="" class="donacion-img"></a>
            </div>
            <div class="box 3 ">
                <a href="#"><img src="{{ asset('public/img-donaciones/500.png') }}"  alt="" class="donacion-img"></a>
            </div>
        </div>
    </section>
    <div class="qr row d-flex" style="text-align: center;">
        <h4>Para donaciones de alimento, camas y ropa, contactanos.</h4>
    </div>

@endsection

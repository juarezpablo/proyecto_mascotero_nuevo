@extends('principal')

@section('contenido')
<section class="adopcion d-flex mt-5 w-100" >
    <div class="grid d-flex w-100" id="grid">
        <div class="row d-flex justify-content-center w-100" id="bienvenida" >


            <h1 class="col-mt-5 mt-5 offset-2">Bienvenida {{session('alias')}}</h1>

            @foreach ($usuariosSolicitantes as $usuarioSolicitante)

            <div class="card -ms-5 me-5 mt-5" style="width: 20rem; height: 35rem;">
                <div id="{{'carouselExampleFade' . $loop->index}}" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="card-body">
                        <h5 class="card-title">{{ucfirst($usuarioSolicitante->nombre)}}</h5>
                        <p class="alias"> Alias/usuario: {{$usuarioSolicitante->alias}} </p>
                        <p class="telefono"> Telefono: {{$usuarioSolicitante->telefono}} </p>

                    </div>
                </div>
            </div>

            @endforeach
        </div>

    </div>

</section>

@endsection

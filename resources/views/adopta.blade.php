@extends('principal')

@section('contenido')
<section class="adopcion d-flex mt-5">
    <div class="grid d-flex" id="grid">
        <div class="row d-flex justify-content-center" id="adopta">
            <h1 class="col-mt-5 mb-5 offset-2">Adopta a tu mascota</h1>

                        @foreach ($mascotasEnAdopcion as $mascotaEnAdopcion)

                        <div class="card -ms-5 me-5 mt-5" style="width: 20rem; height: 35rem;">
                            <div id="{{'carouselExampleFade' . $loop->index}}" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{$mascotaEnAdopcion->imagen_1}}" class="d-block w-100" alt="image pet 1">
                                    </div>
                                    @if(isset($mascotaEnAdopcion->imagen_2))

                                    <div class="carousel-item">
                                        <img src="{{$mascotaEnAdopcion->imagen_2}}" class="d-block w-100" alt="image pet 2">
                                    </div>
                                    @endif

                                    @if(isset($mascotaEnAdopcion->imagen_3))
                                    <div class="carousel-item">
                                        <img src="{{$mascotaEnAdopcion->imagen_3}}" class="d-block w-100" alt="image pet 3">
                                    </div>
                                    @endif

                                    @if(isset($mascotaEnAdopcion->imagen_4))
                                    <div class="carousel-item">
                                        <img src="{{$mascotaEnAdopcion->imagen_4}}" class="d-block w-100" alt="image pet 4">
                                    </div>
                                    @endif

                                    @if(isset($mascotaEnAdopcion->imagen_5))
                                    <div class="carousel-item">
                                        <img src="{{$mascotaEnAdopcion->imagen_5}}" class="d-block w-100" alt="image pet 5">
                                    </div>
                                    @endif
                                </div>
                                <a class="carousel-control-prev" href="{{'#carouselExampleFade' . $loop->index}}" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="{{'#carouselExampleFade' . $loop->index}}" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">{{ucfirst($mascotaEnAdopcion->nombre)}}</h5>
                                    <p class="localidad">@php if(!strcmp($mascotaEnAdopcion->localidad, 'c.a.b.a.')){
                                                                echo strtoupper($mascotaEnAdopcion->localidad);
                                                                echo ' - ' . ucfirst($mascotaEnAdopcion->barrio);
                                                                }
                                                                else echo ucfirst($mascotaEnAdopcion->localidad);
                                                         @endphp
                                    </p>
                                    <p class="animal observaciones">{{ucfirst($mascotaEnAdopcion->observaciones)}}</p>
                                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeW53wZLNa2CLOfWaCSpM2gZwlgYO4kaZw7fvxXRR4U31ZuiA/viewform" target="_blank" class="btn btn-dark">Adopta</a>
                                </div>
                            </div>
                        </div>

                        @endforeach
        </div>

    </div>

</section>

@endsection

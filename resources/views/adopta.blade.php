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
{{--
            <div class="card -ms-5 me-5 mt-5" style="width: 20rem; height: 35rem;">
                <div id="carouselExampleFade2" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('public/img-adopta/foto4.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('public/img-adopta/foto5.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('public/img-adopta/foto6.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Canela</h5>
                        <p class="localidad">Zona Norte</p>
                        <p class="animal">Perrita de 4 meses, tiene vacunas y esta desparasitada.</p>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeW53wZLNa2CLOfWaCSpM2gZwlgYO4kaZw7fvxXRR4U31ZuiA/viewform" target="_blank" class="btn btn-dark">Adopta</a>
                    </div>
                </div>
            </div>

            <div class="card -ms-5 me-5 mt-5" style="width: 20rem; height: 35rem;">
                <div id="carouselExampleFade3" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('public/img-adopta/foto11.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('public/img-adopta/foto12.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('public/img-adopta/foto13.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade3" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade3" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Jazz</h5>
                        <p class="localidad">CABA</p>
                        <p class="animal">Gatito de 7 meses, tiene vacunas y esta desparasitado.</p>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScIqY2UPYi8fsktq8pef_Lg0nIHP5AYvUyN-bqNKRaGaOUzew/viewform" target="_blank" class="btn btn-dark">Adopta</a>
                    </div>
                </div>
            </div>

            <div class="card -ms-5 me-5 mt-5" style="width: 20rem; height: 35rem;">
                <div id="carouselExampleFade4" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('public/img-adopta/foto9.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('public/img-adopta/foto10.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade4" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade4" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Zeus</h5>
                        <p class="localidad">Zona Sur</p>
                        <p class="animal">Perro de 3 años, tiene vacunas y esta desparasitado.</p>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeW53wZLNa2CLOfWaCSpM2gZwlgYO4kaZw7fvxXRR4U31ZuiA/viewform" target="_blank" class="btn btn-dark">Adopta</a>
                    </div>
                </div>
            </div>

            <div class="card -ms-5 me-5 mt-5" style="width: 20rem; height: 35rem;">
                <div id="carouselExampleFade5" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('public/img-adopta/foto20.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('public/img-adopta/foto21.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('public/img-adopta/foto22.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade5" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade5" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Kira</h5>
                        <p class="localidad">Zona Sur</p>
                        <p class="animal">Gatita de 4 meses, tiene vacunas y esta desparasitada.</p>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScIqY2UPYi8fsktq8pef_Lg0nIHP5AYvUyN-bqNKRaGaOUzew/viewform" target="_blank" class="btn btn-dark">Adopta</a>
                    </div>
                </div>
            </div>

            <div class="card -ms-5 me-5 mt-5" style="width: 20rem; height: 35rem;">
                <div id="carouselExampleFade6" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('public/img-adopta/foto16.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('public/img-adopta/foto17.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade6" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade6" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Toby</h5>
                        <p class="localidad">Zona Norte</p>
                        <p class="animal">Gato de 1 año y 5 meses, tiene vacunas y esta desparasitado.</p>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScIqY2UPYi8fsktq8pef_Lg0nIHP5AYvUyN-bqNKRaGaOUzew/viewform" target="_blank" class="btn btn-dark" data-toggle="modal" data-target="myModal">Adopta</a>
                    </div>
                </div>
            </div>

            <div class="card -ms-5 me-5 mt-5" style="width: 20rem; height: 35rem;">
                <div id="carouselExampleFade8" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('public/img-adopta/foto18.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('public/img-adopta/foto19.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade8" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade8" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Mia</h5>
                        <p class="localidad">Zona Oeste</p>
                        <p class="animal">Gatita de 1 año, tiene vacunas y esta desparasitada.</p>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScIqY2UPYi8fsktq8pef_Lg0nIHP5AYvUyN-bqNKRaGaOUzew/viewform" target="_blank" class="btn btn-dark">Adopta</a>
                    </div>
                </div>
            </div>

            <div class="card -ms-5 me-5 mt-5" style="width: 20rem; height: 35rem;">
                <div id="carouselExampleFade9" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('public/img-adopta/foto1.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('public/img-adopta/foto2.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade9" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade9" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Alma</h5>
                        <p class="localidad">Zona Oeste</p>
                        <p class="animal">Perrita de 3 meses, tiene vacunas y esta desparasitada.</p>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeW53wZLNa2CLOfWaCSpM2gZwlgYO4kaZw7fvxXRR4U31ZuiA/viewform" target="_blank" class="btn btn-dark">Adopta</a>
                    </div>
                </div>
            </div>

            <div class="card -ms-5 me-5 mt-5" style="width: 20rem; height: 35rem;">
                <div id="carouselExampleFade1" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('public/img-adopta/foto23.jpeg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('public/img-adopta/foto24.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Adolf</h5>
                        <p class="localidad">CABA</p>
                        <p class="animal">Perrito de 1 año, tiene vacunas y esta desparasitada.</p>
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSeW53wZLNa2CLOfWaCSpM2gZwlgYO4kaZw7fvxXRR4U31ZuiA/viewform" target="_blank" class="btn btn-dark">Adopta</a>
                    </div>
                </div>
            </div>

 --}}
        </div>

    </div>

</section>

@endsection

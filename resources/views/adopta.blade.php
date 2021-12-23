@extends('principal')

@section('contenido')
<section class="adopcion d-flex mt-5 w-100" >
    <div class="grid d-flex w-100" id="grid">
        <div class="row d-flex justify-content-center w-100" id="adopta" >

            @if(session('tipoUsuario')=='admin')
            <h1 class="col-mt-5 offset-2">Bienvenida {{session('alias')}}</h1>

            <!-- ======= Sección formulario añadir mascota  ======= -->
            <section class="hero-container" data-aos="fade-up">
                <div class="wrapper fadeInDown">
                    <div id="formContent" class="p-2">
                        <form id="formAdoptaCrear" action="{{route('agregarMascota')}}" method="POST" enctype='multipart/form-data' >
                            @csrf
                            <div class="d-flex justify-content-around">
                                <select name="formTipoMascota" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Tipo de mascota</option>
                                    <option value="perro">Perro</option>
                                    <option value="gato">Gato</option>
                                </select>

                                <select name="formSexo" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Sexo</option>
                                    <option value="hembra">Hembra</option>
                                    <option value="macho">Macho</option>
                                </select>
                            </div>

                            <div class="input-group  d-flex justify-content-center">
                                <div class="d-flex">
                                    <label for="formEdad" class="form-control  w-auto">Edad (años)</label>
                                    <span id="formEdadSpan" name="formEdadSpan"
                                        class="form-control  w-auto">
                                    </span>
                                </div>
                                <input  id="formEdadInputRange" name="formEdadInputRange"
                                    type="range" class="form-range" min="0" max="15" step="1"
                                    oninput="formEdadSpan.innerHTML=formEdadInputRange.value">
                            </div>

                            <div class="d-flex justify-content-around">
                                <input type="text" id="formNombre" class="fadeIn second" name="formNombre" placeholder="nombre">
                            </div>

                            <div class="d-flex justify-content-around">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="formDesparasitado" name="formDesparasitado">
                                    <label class="form-check-label" for="flexCheckDefault"> Desparasitado </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="formCastrado" name="formCastrado">
                                    <label class="form-check-label" for="flexCheckDefault"> Castrado </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="formVacunado" name="formVacunado">
                                    <label class="form-check-label" for="flexCheckDefault"> Vacunado </label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="formImagen1" name="formImagen1" accept=".jpg, .jpeg, .png">
                                <label class="input-group-text" for="formImagen1">Subir</label>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="formImagen2" name="formImagen2" accept=".jpg, .jpeg, .png">
                                <label class="input-group-text" for="formImagen2">Subir</label>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="formImagen3" name="formImagen3" accept=".jpg, .jpeg, .png">
                                <label class="input-group-text" for="formImagen3">Subir</label>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="formImagen4" name="formImagen4" accept=".jpg, .jpeg, .png">
                                <label class="input-group-text" for="formImagen4">Subir</label>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="formImagen5" name="formImagen5" accept=".jpg, .jpeg, .png">
                                <label class="input-group-text" for="formImagen5">Subir</label>
                            </div>

                            <div class="input-group">
                                <span class="input-group-text">Observaciones</span>
                                <textarea class="form-control" aria-label="Observaciones"  id="formObservaciones" name="formObservaciones" maxlength="50"></textarea>
                            </div>

                            <div class="d-flex">
                                <select class="form-select form-select-lg mb-3" id="formLocalidad" name="formLocalidad" aria-label=".form-select-lg example">
                                    <option selected>Localidad</option>
                                    <option value="c.a.b.a.">C.A.B.A</option>
                                    <option value="lanus">Lanus</option>
                                    <option value="quilmes">Quilmes</option>
                                </select>

                                <select class="form-select form-select-lg mb-3 disabled" id="formBarrio" name="formBarrio"  aria-label=".form-select-lg example">
                                    <option selected>Barrio</option>
                                    <option value="caballito">Caballito</option>
                                    <option value="palermo">Palermo</option>
                                    <option value="barracas">Barracas</option>
                                </select>
                            </div>
                            <button type="submit"  class="fadeIn fourth">Agregar mascota</button>

                        </form>
                    </div>
                </div>
            </section>
            @else
            <h1 class="col-mt-5 mb-5 offset-2">Adopta a tu mascota {{session('alias')}}!!</h1>
            @endif
                        @foreach ($mascotasEnAdopcion as $mascotaEnAdopcion)

                        <div class="card -ms-5 me-5 mt-5" style="width: 20rem; height: 35rem;">
                            <div id="{{'carouselExampleFade' . $loop->index}}" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('public/archivos/'.$mascotaEnAdopcion->imagen_1)}}" class="d-block w-100" alt="image pet 1">
                                    </div>
                                    @if(isset($mascotaEnAdopcion->imagen_2))

                                    <div class="carousel-item">
                                        <img src="{{asset('public/archivos/'.$mascotaEnAdopcion->imagen_2)}}" class="d-block w-100" alt="image pet 2">
                                    </div>
                                    @endif

                                    @if(isset($mascotaEnAdopcion->imagen_3))
                                    <div class="carousel-item">
                                        <img src="{{asset('public/archivos/'.$mascotaEnAdopcion->imagen_3)}}" class="d-block w-100" alt="image pet 3">
                                    </div>
                                    @endif

                                    @if(isset($mascotaEnAdopcion->imagen_4))
                                    <div class="carousel-item">
                                        <img src="{{asset('public/archivos/'.$mascotaEnAdopcion->imagen_4)}}" class="d-block w-100" alt="image pet 4">
                                    </div>
                                    @endif

                                    @if(isset($mascotaEnAdopcion->imagen_5))
                                    <div class="carousel-item">
                                        <img src="{{asset('public/archivos/'.$mascotaEnAdopcion->imagen_5)}}" class="d-block w-100" alt="image pet 5">
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

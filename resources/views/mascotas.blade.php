@extends('principal')

@section('contenido')
<section class="adopcion d-flex mt-5 w-100" >
    <div class="grid d-flex w-100" id="grid">
        <div class="row d-flex justify-content-center w-100" id="bienvenida" >


            <h1 class="col-mt-5 mt-5 offset-2">Bienvenida {{session('alias')}}</h1>

            <!-- ======= Sección formulario añadir mascota  ======= -->
            <section class="hero-container pt-0" data-aos="fade-up">
                <div class="wrapper fadeInDown">
                    <div id="formContent" class="p-2">

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <h6>Por favor corrige los errores:</h6>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form id="formAdoptaCrear" action="{{route('agregarMascota')}}" method="POST" enctype='multipart/form-data' >
                            @csrf
                            <input name="ubicacion" style="display:none" value='' id='ubicacion' id_ubicacion=''>
                            <div class="d-flex justify-content-around">
                                <select name="tipoMascota" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option value="" selected>Tipo de mascota</option>
                                    <option value="perro">Perro</option>
                                    <option value="gato">Gato</option>
                                </select>

                                <select name="sexo" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option value="" selected>Sexo</option>
                                    <option value="hembra">Hembra</option>
                                    <option value="macho">Macho</option>
                                </select>
                            </div>

                            <div class="input-group  d-flex justify-content-center">
                                <div class="d-flex">
                                    <label for="edad" class="form-control  w-auto">Edad (años)</label>
                                    <span id="edadSpan" name="edadSpan"
                                        class="form-control  w-auto">
                                    </span>
                                </div>
                                <input  id="edadInputRange" name="edadInputRange"
                                    type="range" class="form-range" min="0" max="15" step="1"
                                    oninput="edadSpan.innerHTML=edadInputRange.value">
                            </div>

                            <div class="d-flex justify-content-around">
                                <input type="text" id="nombre" class="fadeIn second" name="nombre" placeholder="nombre">
                            </div>

                            <div class="d-flex justify-content-around">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="desparasitado" name="desparasitado">
                                    <label class="form-check-label" for="flexCheckDefault"> Desparasitado </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="castrado" name="castrado">
                                    <label class="form-check-label" for="flexCheckDefault"> Castrado </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="vacunado" name="vacunado">
                                    <label class="form-check-label" for="flexCheckDefault"> Vacunado </label>
                                </div>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="imagen1" name="imagen1" accept=".jpg, .jpeg, .png">
                                <label class="input-group-text" for="imagen1">Subir</label>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="imagen2" name="imagen2" accept=".jpg, .jpeg, .png">
                                <label class="input-group-text" for="imagen2">Subir</label>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="imagen3" name="imagen3" accept=".jpg, .jpeg, .png">
                                <label class="input-group-text" for="imagen3">Subir</label>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="imagen4" name="imagen4" accept=".jpg, .jpeg, .png">
                                <label class="input-group-text" for="imagen4">Subir</label>
                            </div>

                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="imagen5" name="imagen5" accept=".jpg, .jpeg, .png">
                                <label class="input-group-text" for="imagen5">Subir</label>
                            </div>

                            <div class="input-group">
                                <span class="input-group-text">Observaciones</span>
                                <textarea class="form-control" aria-label="Observaciones"  id="observaciones" name="observaciones" maxlength="1000"></textarea>
                            </div>

                            <div class="d-flex">
                                <select class="form-select form-select-lg mb-3" id="localidad" name="localidad" aria-label=".form-select-lg example" id_ubicacion="">
                                    <option value="" selected>Localidad</option>
                                </select>

                                <select class="form-select form-select-lg mb-3 disabled" id="barrio" name="barrio"  aria-label=".form-select-lg example" id_ubicacion="">
                                    <option value="" selected>Barrio</option>
                                </select>
                            </div>
                            <button type="submit"  class="fadeIn fourth">Agregar mascota</button>

                        </form>
                    </div>
                </div>
            </section>

            <script defer type="text/javascript" src="{{ asset('public/js/ubicaciones.js') }}"></script>

            <script>
                adminCargaMascota();

                function adminCargaMascota(){
                    imagen1=document.getElementById("imagen1");
                    if(imagen1){
                        document.getElementById('edadSpan').innerHTML=document.getElementById('edadInputRange').value;
                        document.getElementById("imagen2").disabled=true;
                        document.getElementById("imagen3").disabled=true;
                        document.getElementById("imagen4").disabled=true;
                        document.getElementById("imagen5").disabled=true;
                        imagen1.addEventListener('change',()=>{
                            if(imagen1.value!='' && imagen1)
                            {
                                document.getElementById("imagen2").disabled=false;
                                document.getElementById("imagen3").disabled=false;
                                document.getElementById("imagen4").disabled=false;
                                document.getElementById("imagen5").disabled=false;
                            }
                        })
                        edad=document.getElementById('edadInputRange');
                        edadSpan=document.getElementById('edadSpan');
                        edad.addEventListener('input',()=>{
                            if(edad.value=='0')
                                edadSpan.innerHTML='<=1';
                                else if(edad.value=='15')
                                    edadSpan.innerHTML='>=15';
                        })
                    }
                }
            </script>
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
                                    {{-- <a id_mascota="{{$mascotaEnAdopcion->id_mascota}}" href="https://docs.google.com/forms/d/e/1FAIpQLSeW53wZLNa2CLOfWaCSpM2gZwlgYO4kaZw7fvxXRR4U31ZuiA/viewform" target="_blank" class="btn btn-dark">Adopta</a> --}}
                                </div>
                                <div class="card-footer">
                                    <form method="GET" id="formAdopcion" action="{{ url('mascotas',
                                    ['tipoMascota' => $mascotaEnAdopcion->tipo_mascota,
                                    'id' => $mascotaEnAdopcion->id_mascota])}}">
                                        @csrf
                                        <input type="text" class="id_mascota" id="id_mascota" name="id_mascota" value="{{$mascotaEnAdopcion->id_mascota}}">
                                        <input type="text" class="tipo_mascota" name="tipo_mascota" value="{{$mascotaEnAdopcion->tipo_mascota}}">
                                        {{-- <input type="text" class="" name="tipo_mascota" value="{{$gatosAdopcionSolicitada[0]->id_mascota}}"> --}}
                                        @php
                                        $solicitado=false;
                                        if(!strcmp($mascotaEnAdopcion->tipo_mascota,"perro")){
                                            for($i=0;$i<count($solicitudPendientePerros);$i++){
                                                if($solicitudPendientePerros[$i]->id_mascota==$mascotaEnAdopcion->id_mascota){
                                                $solicitado=true;
                                                }
                                            }
                                        }
                                        else{
                                            for($i=0;$i<count($solicitudPendienteGatos);$i++){
                                            if($solicitudPendienteGatos[$i]->id_mascota==$mascotaEnAdopcion->id_mascota){
                                            $solicitado=true;
                                                }
                                            }
                                        }

                                        @endphp
                                        @if ($solicitado)
                                            <button type="submit"  class="fadeIn fourth solicitado">Solicitud pendiente</button>
                                            @else
                                            <button type="submit"  class="fadeIn fourth" disabled>Sin solicitudes</button>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>

                        @endforeach
        </div>

    </div>

</section>

@endsection

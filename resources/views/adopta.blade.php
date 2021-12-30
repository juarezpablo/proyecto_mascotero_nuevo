@extends('principal')

@section('contenido')
<section class="adopcion d-flex mt-5 w-100" >
    <div class="grid d-flex w-100" id="grid">
        <div class="row d-flex justify-content-center w-100" id="adopta" >
            <h1 class="col-mt-5 mt-5 offset-2">Adopta a tu mascota {{session('alias')}}!!</h1>

            @foreach ($mascotasEnAdopcion as $mascotaEnAdopcion)

            <div class="card -ms-5 me-5 mt-5 cardAdop" style="width: 20rem; height: 35rem;">
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
                    <div class="card-body" >
                        <h5 class="card-title">{{ucfirst($mascotaEnAdopcion->nombre)}}</h5>
                        <p class="localidad">@php if(!strcmp($mascotaEnAdopcion->localidad, 'c.a.b.a.')){
                                                    echo strtoupper($mascotaEnAdopcion->localidad);
                                                    echo ' - ' . ucfirst($mascotaEnAdopcion->barrio);
                                                    }
                                                    else echo ucfirst($mascotaEnAdopcion->localidad);
                                                @endphp
                        </p>
                        <p class="animal observaciones">{{ucfirst($mascotaEnAdopcion->observaciones)}}</p>

                    </div>
                    <div class="card-footer">
                        <!-- ====== Formulario para añadir una solicitud de adopcion ====== -->
                        <form method="POST" class="formAdopcion">
                            @csrf
                            <input type="text" class="id_mascota" id="id_mascota" name="id_mascota" value="{{$mascotaEnAdopcion->id_mascota}}">
                            <input type="text" class="id_usuario" name="id_usuario" value="{{session('id')}}">
                            <input type="text" class="tipo_mascota" name="tipo_mascota" value="{{$mascotaEnAdopcion->tipo_mascota}}">
                            {{-- <input type="text" class="" name="tipo_mascota" value="{{$gatosAdopcionSolicitada[0]->id_mascota}}"> --}}
                            @php
                             $solicitado=false;
                             for($i=0;$i<count($gatosAdopcionSolicitada);$i++){
                                 if($gatosAdopcionSolicitada[$i]->id_mascota==$mascotaEnAdopcion->id_mascota){
                                    $solicitado=true;
                                 }
                             }
                             for($i=0;$i<count($perrosAdopcionSolicitada);$i++){
                                 if($perrosAdopcionSolicitada[$i]->id_mascota==$mascotaEnAdopcion->id_mascota){
                                    $solicitado=true;
                                 }
                             }
                            @endphp
                            @if ($solicitado)
                                 <button type="submit"  class="fadeIn fourth solicitado m-0" disabled>Solicitado</button>
                                @else

                                 <button type="submit"  class="fadeIn fourth  m-0">Adopta</button>
                            @endif
                        </form>
                        <!-- ====== Fin de formulario para añadir una solicitud de adopcion ====== -->

                        <!-- ====== Formulario para eliminar una solicitud de adopcion ====== -->
                        <form method="POST" action="{{ url('adopta',
                            ['id_mascota' => $mascotaEnAdopcion->id_mascota,
                            'id_usuario' => session('id'),
                            'tipo_mascota' => $mascotaEnAdopcion->tipo_mascota])}}" class="formCancAdopcion">
                            @method("DELETE")
                            @csrf
                            @php
                                $value = session('id') . '+' . $mascotaEnAdopcion->tipo_mascota . '+' . $mascotaEnAdopcion->id_mascota;
                            @endphp
                            <input type="text" class="id_usuario" name="idu_tm_idm" value="{{$value}}">
                            @if ($solicitado)
                                <button type="submit" class="fadeIn fourth cancelar m-0 mt-1">Cancelar</button>
                            @endif

                        </form>
                        <!-- ====== Fin de formulario para eliminar una solicitud de adopcion ====== -->

                        </div>
                </div>
            </div>

            @endforeach
        </div>

    </div>

</section>

@endsection

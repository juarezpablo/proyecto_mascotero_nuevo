<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Usuario</title>
</head>
<body>
    View usuario

<h2> Nombre de usuario es {{ session('alias') }}  password es {{ session('pass') }}</h2>


{{--

@foreach ($mascota as $mascotas)
   <table>
        <thead>
            <tr>
                <th>Nombre de mascota</th>
                <th>Tipo de Mascota</th>
                <th>Sexo</th>
                <th>Edad</th>

            </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $mascotas->nombre }}</td>
            <td>{{ $mascotas->tipo_mascota }}</td>
            <td>{{ $mascotas->sexo }}</td>
            <td>{{ $mascotas->edad }}</td>

        </tr>
       </tbody>
   </table>
   <a href="" class="btn btn-success">Adoptame</a>
   <br><br><br>
@endforeach
--}}

@foreach ($mascota as $mascotas)
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Hola soy {{ $mascotas->nombre }}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">An item</li>
      <li class="list-group-item">Soy {{ $mascotas->sexo }}</li>
      <li class="list-group-item"> Tengo {{ $mascotas->edad }} añitos</li>
    </ul>
    <div class="card-body">
        <a href="" class="btn btn-success">Adoptame</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>

  @endforeach














  <section class="adopcion d-flex mt-5">
    <div class="grid d-flex" id="grid">
        <div class="row d-flex justify-content-center" id="adopta">
            <h1 class="col-mt-5 mb-5 offset-2">Adopta a tu mascota</h1>

                        @foreach ($mascota as $mascotaEnAdopcion)

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
                                    <p class="localidad">


                                    </p>
                                    <p class="animal observaciones">{{ucfirst($mascotaEnAdopcion->observaciones)}}</p>
                                    <a href="" target="_blank" class="btn btn-dark">Adopta</a>
                                </div>
                            </div>
                        </div>

                        @endforeach

    </div>

    </div>

</section>




</body>
</html>




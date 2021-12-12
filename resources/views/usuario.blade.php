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

<h2> Nombre de usuario es {{$user }}  password es {{$pass}}</h2>


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
</body>
</html>




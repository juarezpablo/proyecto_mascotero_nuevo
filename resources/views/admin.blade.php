<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
   <h1>Bienvenido {{ session('alias') }}  </h1> 

Nombre de Admin es {{ session('alias') }} y su password es {{ session('pass') }}


<br>

<a href="{{ route('admin.conseguir_usuarios') }}" id="lista_usuarios"  class="btn btn-success">Ver lista de Usuarios  </a>
<a href="{{route("mascotas.index")}}" id="lista_mascotas" class="btn btn-success" >Ver lista de Mascotas    </a>
<br>
<a href="{{ route('formularios.index')}}" id="forms"  class="btn btn-success">Ver Formularios  </a>

</body>
</html>
<script>

</script>
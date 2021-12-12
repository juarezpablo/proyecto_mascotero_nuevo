<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Bienvenido {{ session('alias') }}  </h1> 

Nombre de Admin es {{ session('alias') }} y su password es {{ session('pass') }}




<a href="{{ route('admin.lista_usuarios') }}" id="lista_usuarios">Ver lista de Usuarios  </a>


</body>
</html>
<script>

</script>
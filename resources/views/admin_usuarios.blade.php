<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Gestion de Usuarios</title>
</head>
<body>

    <h1>Vista de lista de usuarios</h1>
    <table class="table ">
        <thead class="thead-dark" >
            <tr>
                <th>ID</th>
                <th class="">Alias</th>
                <th class="">Contraseña</th>
                <th>Nombre</th>
                <th>Apellido</th>
                    
            </tr>
        </thead>
        <tbody>
            @foreach ($Tabla as $usuario)
            <tr class="">
                <th scope="row">{{$usuario->id_usuario}}</th>
                 <td class="">{{ $usuario->alias }}</td>
                <td >{{ $usuario->contrasena }}</td>
                 <td >{{ $usuario->nombre }}</td>
                <td >{{ $usuario->apellido }}</td>
            </tr>
     
            @endforeach

        </tbody>
    </table>
    <a href="" class=""></a>
    <br><br><br>    
</body>
</html>





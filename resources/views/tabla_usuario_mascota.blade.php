<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Datos Adoptante y Mascota</title>
</head>
<body>
  <h1 class=" d-flex justify-content-center"> Relacion Usuario Mascota</h1> 
{{--
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
            @foreach ($datosUsuario as $usuario)
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
    --}}
    <div class="container">
        <div class="row">
                <div id="tabla_user" class="col-sm">   
                    <h2>Usuario</h2>
                    <table class="table table-bordered" >
                        @foreach ($datosUsuario as $usuario)
                            <tr>
                                <th>ID</th>
                                <th>{{$usuario->id_usuario}}</th>
                            </tr>
                            <tr>    
                                <th class="">Alias</th>
                                <td class="">{{ $usuario->alias }}</td>
                            </tr>
                            <tr>
                                <th class="">Contraseña</th>
                                <td >{{ $usuario->contrasena }}</td>
                            </tr>
                            <tr>    
                                <th>Nombre</th>
                                <td>{{$usuario->nombre}}</td>
                            </tr>
                            <tr>    
                                <th>Apellido</th>
                                <td>{{$usuario->apellido}}</td>
                            </tr>        
                            <tr>    
                                <th class="">Barrio</th>
                                <td class="">{{ $usuario->barrio }}</td>
                            </tr>
                            <tr>    
                                <th class="">Localidad</th>
                                <td class="">{{ $usuario->localidad }}</td>
                            </tr>
                            <tr>    
                                <th class="">Telefono</th>
                                <td class="">{{ $usuario->telefono }}</td>
                            </tr>
                            <tr>    
                                <th class="">Vivienda</th>
                                <td class="">{{ $usuario->tipo_vivienda }}</td>
                            </tr>
                            <tr>    
                                <th class="">Propietario</th>
                                <td class="">{{ $usuario->propietario_vivienda }}</td>
                            </tr>
                            <tr>    
                                <th class="">Mascotas actuales</th>
                                <td class="">{{ $usuario->mascotas_actuales }}</td>
                            </tr>
                            <tr>    
                                <th class="">Numero de Convivientes</th>
                                <td class="">{{ $usuario->cantidad_personas_convivencia }}</td>
                            </tr>
                            <tr>    
                                <th class="">Instagram</th>
                                <td class="">{{ $usuario->instagram }}</td>
                            </tr>
                            <tr>    
                                <th class="">Facebook</th>
                                <td class="">{{ $usuario->facebook }}</td>
                            </tr>
                            <tr>    
                                <th class="">Edades de Mascotas</th>
                                <td class="">{{ $usuario->edades_mascotas }}</td>
                            </tr>
                            <tr>    
                                <th class="">Alimento de Mascotas</th>
                                <td class="">{{ $usuario->alimento_mascotas_actuales }}</td>
                            </tr>
                            <tr>    
                                <th class="">Mascotas Castradas</th>
                                <td class="">{{ $usuario->castrados_vacunados }}</td>
                            </tr>
                            <tr>    
                                <th class="">Ambientes</th>
                                <td class="">{{ $usuario->ambientes }}</td>
                            </tr>
                            <tr>    
                                <th class="">Vacaciones</th>
                                <td class="">{{ $usuario->vacaciones }}</td>
                            </tr>
                            <tr>    
                                <th class="">Opinion de Castracion</th>
                                <td class="">{{ $usuario->opinion_castracion }}</td>
                            </tr>
                            <tr>    
                                <th class="">Problemas de conducta</th>
                                <td class="">{{ $usuario->problemas_conducta }}</td>
                            </tr>
                            <tr>    
                                <th class="">Compromiso a castracion</th>
                                <td class="">{{ $usuario->compromiso_castracion }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div id="tabla_mascota" class="col-sm" >
                    <h2>Mascota</h2>
                    <table class="table table-bordered">
                        @foreach ($datosMascota as $mascota)
                            <tr>
                                <th>ID</th>
                                <th>{{$mascota->id_mascota}}</th>
                            </tr>
                            <tr>    
                                <th class="">Tipo de Mascota</th>
                                <td class="">{{ $mascota->tipo_mascota }}</td>
                            </tr>
                            <tr>
                                <th class="">Nombre</th>
                                <td >{{ $mascota->nombre }}</td>
                            </tr>
                            <tr>    
                                <th>Sexo</th>
                                <td>{{$mascota->sexo}}</td>
                            </tr>
                            <tr>    
                                <th>Edad</th>
                                <td>{{$mascota->edad}}</td>
                            </tr>        
                            <tr>    
                                <th class="">Desparasitado</th>
                                <td class="">{{ $mascota->desparasitado }}</td>
                            </tr>
                            <tr>    
                                <th class="">Castrado</th>
                                <td class="">{{ $mascota->castrado }}</td>
                            </tr>
                            <tr>    
                                <th class="">Vacunado</th>
                                <td class="">{{ $mascota->vacunado }}</td>
                            </tr>
                            <tr>    
                                <th class="">Observaciones</th>
                                <td class="">{{ $mascota->observaciones }}</td>
                            </tr>
                            <tr>    
                                <th class="">Adoptado</th>
                                <td class="">{{ $mascota->adoptado}}</td>
                            </tr>
                            <tr>    
                                <th class="">Fecha de adopcion</th>
                                <td class="">{{ $mascota->fecha_adoptado }}</td>
                            </tr>
                            <tr>    
                                <th class="">Fecha de publicacion</th>
                                <td class="">{{ $mascota->fecha_publicacion }}</td>
                            </tr>
                            
                        @endforeach
                    </table>       
                </div>  
        </div>
    </div>             
</body>
</html>
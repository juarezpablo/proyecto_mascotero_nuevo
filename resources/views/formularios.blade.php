<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios</title>
</head>
<body>
        <div> <h1>Formularios Perros</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Proteccion Balcon</th>
                        <th>pileta cercada</th>
                        <th>Donde dormira</th>
                        <th>Opinion cachorros</th>
                        <th>Estado de la adopcion</th>
                        <th>Adopción</th>
                        <th>Info Mascota/Usuario</th>
                        
                            
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formulariosPerro as $formulario)
                    <tr>
                        <td>{{ $formulario->fecha }}</td>
                        <td>{{ $formulario->proteccion_balcon }}</td>
                        <td>{{ $formulario->pileta_cercada }}</td>
                        <td>{{ $formulario->donde_dormira }}</td>
                        <td>{{ $formulario->opinion_cachorros_energia_romper }}</td>
                        <td>{{ $formulario->proceso_adopcion }}</td>
                        
                        {{--Campo invisible,cada boton Asgnar va a ser un metodo put a la ruta formularios
                            con el parametro id_formulario para luego modificar un atributo en la base de datos--}}
                        
                        @php   (   $id_usuariox=$formulario->id_usuario)
                          
                          
                        

                        <td>
                            <form action="{{ route('formularios.update',$id_usuariox) }}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_formulariox" value="{{ $formulario->id_formulario_perro}}">
                            <input type="hidden" name="id_mascotax" value="{{$formulario->id_mascota}}">
                            <button type="submit" value="Asignar" class="btn-success">Asignar</button>
                            
                            </form>
                            <form action="{{ route('formularios.rechazar_adopcion',$id_usuariox) }}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_formulariox" value="{{ $formulario->id_formulario_perro}}">
                            <input type="hidden" name="id_mascotax" value="{{$formulario->id_mascota}}">
                            <button type="submit"  value="Rechazar" class="btn-success">Rechazar</button>
                            
                            </form>
                        </td>
                        <td>
                        </td>   

                    </tr>
            
                    @endforeach

                </tbody>
            </table>
        </div>
        <br><br><br>
        
        
        <div> <h1>Formularios Gatos</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Alergia en la familia</th>
                        <th>Protecciones Ventanas</th>
                        <th>Protecciones balcon</th>
                        <th>Paredes altas</th>
                        <th>Convivencias con embarazada</th>
                        <th>Opinion paseo gatuno callejero</th>
                        <th>Pelos/Rasguños</th>
                        <th>Proceso de Adopcion</th>
                        <th>Acciones</th>
                            
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formulariosGato as $formulario)
                    <tr>
                        <td>{{ $formulario->fecha }}</td>
                        <td>{{ $formulario->alergia_familia }}</td>
                        <td>{{ $formulario->proteccion_red_ventanas }}</td>
                        <td>{{ $formulario->proteccion_red_balcon }}</td>
                        <td>{{ $formulario->patio_paredes_altas }}</td>
                        <td>{{ $formulario->convivencia_embarazadas_bebe}}</td>
                        <td>{{ $formulario->opinion_gatos_paseen_en_calle_techo}}</td>
                        <td>{{ $formulario->pelos_rasguños }}</td>
                        <td>{{ $formulario->proceso_adopcion}}</td>
                        
                    </tr>
            
                    @endforeach

                </tbody>
            </table>
        </div>
    
</body>
</html>
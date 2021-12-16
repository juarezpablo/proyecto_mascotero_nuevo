<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../resources/js/formularios.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios</title>
</head>
<body>

    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('admin.index') }}">Atras</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#!">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#!">adelante</a>
        </li>
      </ul>


        <div> <h2>Formularios Perros</h1>
            <table class="table   table-hover ">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Proteccion Balcon</th>
                        <th>pileta cercada</th>
                        <th>Donde dormira</th>
                        <th>Opinion cachorros</th>
                        <th>Estado de la adopcion</th>
                        <th>Mascota ID</th>
                        <th>Usuario ID</th>
                        <th>Adopción</th>
                        <th>Info Mascota/Usuario</th>
                        
                            
                    </tr>
                </thead>
                <tbody>
                    @foreach ($formulariosPerro as $formulario)
                    <tr >
                        <th scope="row">{{$formulario->id_formulario_perro}}</th>
                        <td>{{ $formulario->fecha }}</td>
                        <td>{{ $formulario->proteccion_balcon }}</td>
                        <td>{{ $formulario->pileta_cercada }}</td>
                        <td>{{ $formulario->donde_dormira }}</td>
                        <td>{{ $formulario->opinion_cachorros_energia_romper }}</td>
                        <th>{{ $formulario->proceso_adopcion }}</th>
                        <th>{{ $formulario->id_mascota }}</th>
                        <td>{{ $formulario->id_usuario }}</td>
                        
                        {{--Campo invisible,cada boton Asignar va a ser un metodo put al metodo update del formulario controler
                            con el parametro id_formulario e id mascota, para luego modificar un atributo en la base de datos--}}
                        
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
                                <button type="submit"  value="Rechazar" class="btn-danger">Rechazar</button>
                            
                            </form>
                        </td>
                        <td>
                            
                           <a href="formularios/relacion?usuario={{$formulario->id_usuario}}&mascota={{$formulario->id_mascota}}"    target="_blank" class="" >Ver Usuario/Mascota</a>
                          {{--Tratando de reemplazar el tag a por un boton y usar la funcion window.open de js para abrir una ventana nueva
                           en vez de una pestaña nueva, pero no logro hacerlo funcionar--}}
                           <button type="button" id="boton_relacion"> Boton </button>
                        </td>   

                    </tr>
            
                    @endforeach

                </tbody>
            </table>
        </div>
        <br><br><br>
        
        
        <div> <h2>Formularios Gatos</h1>
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
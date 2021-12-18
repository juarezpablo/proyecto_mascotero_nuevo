<!DOCTYPE html>
<html lang="en">
<head>
    <meta id="token" name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="{{ asset('/css/mascotas.css') }}" rel="stylesheet">
    <script src="{{asset('/js/mascotas.js')}}"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mascotas</title>
</head>
<body>

    view mascotas
    <table class="table" id="tabla_primigenia">
        <thead>
            <tr>
                <th>ID</th>
                <th class="">Tipo de Mascota</th>
                <th class="">Nombre</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th class="">Desparasitado</th>
                <th class="">Castrado</th>
                <th class="">Vacunado</th>
                <th class="">Observaciones</th>
                <th class="">Adoptado</th>
                <th class="">Fecha de adopcion</th>
                <th class="">Fecha de publicacion</th>
                <th>Eliminar Mascota</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($tablaMascota as $mascota)
            <tr>
                    <th>{{$mascota->id_mascota}}</th>
                    <td class="">{{ $mascota->tipo_mascota }}</td>
                    <td >{{ $mascota->nombre }}</td>
                    <td>{{$mascota->sexo}}</td>
                    <td>{{$mascota->edad}}</td>
                    <td class="">{{ $mascota->desparasitado }}</td>
                    <td class="">{{ $mascota->castrado }}</td>
                    <td class="">{{ $mascota->vacunado }}</td>
                    <td class="">{{ $mascota->observaciones }}</td>
                    <td class="">{{ $mascota->adoptado}}</td>
                    <td class="">{{ $mascota->fecha_adoptado }}</td>
                    <td class="">{{ $mascota->fecha_publicacion }}</td>


                    @php   (   $id_mascotax=$mascota->id_mascota)

                    <td>
                        <form action="{{ route('mascotas.destroy',$id_mascotax )}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_mascotax" value="{{ $mascota->id_mascota}}">

                            <button type="submit" value="Asignar" class="btn-danger">Eliminar</button>

                        </form>
                    </td>
                    <td>
                       {{-- <a href="formularios/relacion?mascota={{$mascota->id_mascota}}"    target="_blank" class="" >Ver Usuario/Mascota</a> --}}
                        {{--Tratando de reemplazar el tag a por un boton y usar la funcion window.open de js para abrir una ventana nueva
                        en vez de una pestaña nueva, pero no logro hacerlo funcionar--}}
                        <input type="hidden" name="id_mascota"  id="mascotaId" value="{{$mascota->id_mascota}}">
                        <button type="button" id="boton_relacion"> Boton </button>
                    </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <div id="form-ingreso-mascota">
        <button id="boton_escape">Salir</button>
        <form action="{{route("mascotas.store")}}" method="POST">
            @csrf
            <label for="">Nombre:</label><br>
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese Nombre"><br>
            <label for="">Tipo de Mascota:</label><br>
         {{--  <input type="radio" name="tipo_mascota" id="" value="gato" checked> Gato
             <input type="radio" name="tipo_mascota" value="perro">Perro<br>
         --}}
         <select name="tipo_mascota" id="tipo_mascota">
            <option>gato</option>
            <option>perro</option>

          </select>
            <label for="">Sexo:</label><br>
        {{--    <input type="radio" name="sexo" value="macho" checked> Macho
            <input type="radio" name="sexo" value="hembra">Hembra <br>
          --}}
            <select name="sexo" id="sexo">
                <option>macho</option>
                <option>hembra</option>
            </select>
            <label for="">Edad :</label><br>
            <input type="number" name="edad" placeholder="Ingrese Edad" id="edad"><br>
            <input type="checkbox" name="desparasitado"  id="desparasitado" >Desparasitado<br>
            <input type="checkbox" name="castrado"  id="castrado">Castrado<br>
            <input type="checkbox" name="vacunado"  id="vacunado">Vacunado<br>
            <label for="">Observaciones :</label><br>
            <textarea name="observaciones" rows="10" cols="50" id="observaciones">Informacion adicional de la mascota</textarea><br>
            <button type="submit" value="Asignar" class="" id="boton_cargar">Cargar</button>

        </form>

    </div>
<button id="ingresoMascota">Ingresar Mascota</button>



</body>
</html>

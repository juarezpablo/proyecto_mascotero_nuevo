<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Str;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Session;



/**
 * Guarda una imagen en un fichero. Recibe el atributo name del input
 * type=file. Retorna el nombre del archivo.
 * @param  string  $formName
 * @return string fileName
 */
function guardarImagen(Request $request, $formName){
    // ===== Almacenamiento de la imagen =====
    $file = $request->file($formName);
    if(is_null($file))
        return NULL;
        else{
            // Obtengo el nombre del archivo
            $formImagen1 = $file->getClientOriginalName();
            // Genero un inditificador unico para evitar archivos con el mismo nombre
            $imgAux =  Str::uuid()->toString() . $formImagen1;
            // Almaceno en el disco la imagen
            Storage::disk('local')->put($imgAux, File::get($file));
            // Retorno nombre del archivo
            return ($imgAux);
        }
}

class MascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if((session('tipoUsuario')=='admin')){
        // Devuelve lista completa de mascotas en adopcion
        $mascotasEnAdopcionQuery=DB::select("SELECT * FROM mascota
                                    INNER JOIN ubicacion
                                    on mascota.id_ubicacion=ubicacion.id_ubicacion
                                    WHERE adoptado='no'");
        // Devuelve la lista de perros que poseen alguna solicitud de adopcion pendiente
        $solicitudPendientePerros=DB::select("SELECT id_formulario_perro,formulario_perro.id_mascota,formulario_perro.proceso_adopcion
                                    FROM formulario_perro
                                    INNER JOIN mascota
                                    ON mascota.id_mascota=formulario_perro.id_mascota
                                    WHERE formulario_perro.proceso_adopcion='solicitado'
                                    GROUP BY mascota.id_mascota");
        // +---------------------+------------+------------------+
        // | id_formulario_perro | id_mascota | proceso_adopcion |
        // +---------------------+------------+------------------+
        // |                   8 |          2 | solicitado       |
        // |                   7 |          3 | solicitado       |
        // |                   6 |          7 | solicitado       |
        // +---------------------+------------+------------------+
        // Devuelve la lista de perros que poseen alguna solicitud de adopcion pendiente
        $solicitudPendienteGatos=DB::select("SELECT id_formulario_gato,formulario_gato.id_mascota,formulario_gato.proceso_adopcion
                                    FROM formulario_gato
                                    INNER JOIN mascota
                                    ON mascota.id_mascota=formulario_gato.id_mascota
                                    WHERE formulario_gato.proceso_adopcion='solicitado'
                                    GROUP BY mascota.id_mascota");
        // +--------------------+------------+------------------+
        // | id_formulario_gato | id_mascota | proceso_adopcion |
        // +--------------------+------------+------------------+
        // |                  1 |          2 | solicitado       |
        // |                  2 |          3 | solicitado       |
        // |                 10 |          5 | solicitado       |
        // |                  8 |          6 | solicitado       |
        // |                  7 |          8 | solicitado       |
        // +--------------------+------------+------------------+

        return view('mascotas')
                ->with('mascotasEnAdopcion', $mascotasEnAdopcionQuery)
                ->with('solicitudPendientePerros', $solicitudPendientePerros)
                ->with('solicitudPendienteGatos', $solicitudPendienteGatos);
       }
       else{
        Session::forget('alias');
        Session::forget('tipoUsuario');
        Session::forget('id');
        Session::flush();
        return redirect()->action([LoginController::class, 'login']);
       }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre= $request->post("nombre");
        $edad=$request->post("edad");
        $tipo_mascota= $request->post("tipo_mascota");
        $sexo=$request->post("sexo");
        $desparasitado= $request->post("desparasitado");
        $vacunado=$request->post("vacunado");
        $castrado=$request->post("castrado");
        $observaciones=$request->post("observaciones");


        DB::table("mascota")->insert([
            "tipo_mascota" => $tipo_mascota,
            "nombre" => $nombre,
            "sexo" => $sexo,
            "edad" => $edad,
            "desparasitado" => $desparasitado,
            "castrado" => $castrado,
            "vacunado" => $vacunado,
            "imagen_1" => "1",
            "imagen_2" => "2",
            "imagen_3" => "3",
            "imagen_4" => "4",
            "imagen_5" => "5",

            "observaciones" => $observaciones,
            "adoptado" => "no",
            "fecha_adoptado" => "2021-12-11",
            "fecha_publicacion" => "2021-12-11",
            "id_moderador" => "1",
        ]);

        $tablaMascotas=DB::select("SELECT * FROM mascota");
        $parametroMascotas=[
            "Mascotas" => $tablaMascotas
        ];


        return response()->json($parametroMascotas);

    }

    // Cumple la funcion de store, almacena una nueva mascota en adopcion
    public function agregarMascota(Request $request){
        $this->validate($request, [
            'tipoMascota'=>'required',
            'sexo'=>'required',
            'edadInputRange'=>'required',
            'nombre'=>'required',
            'imagen1' => 'required|image|mimes:jpg,png',
            // Excluye la verificaci??n si es que formImage1 existe
            'imagen2' => 'image|mimes:jpg,jpeg,png',
            'imagen3' => 'image|mimes:jpg,jpeg,png',
            'imagen4' => 'image|mimes:jpg,jpeg,png',
            'imagen5' => 'image|mimes:jpg,jpeg,png',
            'ubicacion' => 'required',
            'barrio' => Rule::requiredIf($request->localidad=='c.a.b.a.'),
        ]);
        $img1 = guardarImagen($request,'imagen1');
        $img2 = guardarImagen($request,'imagen2');
        $img3 = guardarImagen($request,'imagen3');
        $img4 = guardarImagen($request,'imagen4');
        $img5 = guardarImagen($request,'imagen5');

        $tipoMascota = $request->post("tipoMascota");
        $nombre = $request->post("nombre");
        $sexo = $request->post("sexo");
        $edad = $request->post("edadInputRange");
        $desparasitado = $request->has("desparasitado");
        $castrado = $request->has("castrado");
        $vacunado = $request->has("vacunado");
        $observaciones = $request->post('observaciones');
        $adoptado = 'no';
        $fechaAdoptado = NULL;
        $fechaPublicacion = date("Y-m-d");
        $id_moderador = session('id');
        $id_ubicacion = $request->post('ubicacion');


        DB::table("mascota")->insert([
            "tipo_mascota" => $tipoMascota,
            "nombre" => $nombre,
            "sexo" => $sexo,
            "edad" => $edad,
            "desparasitado" => $desparasitado,
            "castrado" => $castrado,
            "vacunado" => $vacunado,
            "imagen_1" => $img1,
            "imagen_2" => $img2,
            "imagen_3" => $img3,
            "imagen_4" => $img4,
            "imagen_5" => $img5,
            "observaciones" => $observaciones,
            "adoptado" => $adoptado,
            "fecha_adoptado" => $fechaAdoptado,
            "fecha_publicacion" => $fechaPublicacion ,
            "id_moderador" => $id_moderador,
            "id_ubicacion" => $id_ubicacion,
        ]);

        return redirect()->action([MascotasController::class, 'index'],'#bienvenida');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tipoMascota,$id)
    {
        if((session('tipoUsuario')=='admin')){
            if(!strcmp($tipoMascota,"perro")){
                $usuariosSolicitantes=DB::select("SELECT *
                                                    FROM formulario_perro
                                                    INNER JOIN usuario
                                                    ON formulario_perro.id_usuario=usuario.id_usuario
                                                    WHERE id_mascota=$id
                                                ");

            }
            else{
                $usuariosSolicitantes=DB::select("SELECT *
                                                    FROM formulario_gato
                                                    INNER JOIN usuario
                                                    ON formulario_gato.id_usuario=usuario.id_usuario
                                                    WHERE id_mascota=$id
                                                ");

            }
                return view('mascotaListadoSolicitud')
                ->with('usuariosSolicitantes', $usuariosSolicitantes);
           }
           else{
            Session::forget('alias');
            Session::forget('tipoUsuario');
            Session::forget('id');
            Session::flush();
            return redirect()->action([LoginController::class, 'login']);
           }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id_mascotaEliminar=$request->get("id_mascotax");
      /*  DB::delete("UPDATE `proyecto_huellitas`.`mascota` DELETE ")*/
        return redirect ()->route("mascotas.index");
    }

    /**
     * Return all pets for adoption
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Cumple la funcion de index, almacena una nueva mascota en adopcion

    public function adopta()
    {

        $mascotasEnAdopcionQuery=DB::select("SELECT * FROM mascota
                                    INNER JOIN ubicacion
                                    on mascota.id_ubicacion=ubicacion.id_ubicacion
                                    WHERE adoptado='no'");
        if(session('id')){
            $id_usuario = session('id');
            $gatosAdopcionSolicitada=DB::select("SELECT * FROM usuario
                                        INNER JOIN formulario_gato
                                        ON formulario_gato.id_usuario=usuario.id_usuario
                                        INNER JOIN mascota
                                        ON mascota.id_mascota=formulario_gato.id_mascota
                                        WHERE usuario.id_usuario=$id_usuario");
            $perrosAdopcionSolicitada=DB::select("SELECT * FROM usuario
                                        INNER JOIN formulario_perro
                                        ON formulario_perro.id_usuario=usuario.id_usuario
                                        INNER JOIN mascota
                                        ON mascota.id_mascota=formulario_perro.id_mascota
                                        WHERE usuario.id_usuario=$id_usuario");
            return view('adopta')
                        ->with('mascotasEnAdopcion', $mascotasEnAdopcionQuery)
                        ->with('gatosAdopcionSolicitada', $gatosAdopcionSolicitada)
                        ->with('perrosAdopcionSolicitada', $perrosAdopcionSolicitada);

        }
        else return view('adopta', ['mascotasEnAdopcion' => $mascotasEnAdopcionQuery]);
    }

}

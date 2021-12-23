<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Str;


class MascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if((session('rol')=='admin')){
            $tablaMascotas=DB::select("SELECT * FROM mascota");


            $dataMascota=[
            "tablaMascota" => $tablaMascotas,
             ];

           return view('mascotas', $dataMascota);
       }
       else{
           return redirect ()->route("registro.index");
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

        var_dump($castrado);

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
            'formTipoMascota'=>'required',
            'formSexo'=>'required',
            'formEdadInputRange'=>'required',
            'formNombre'=>'required',
            'formImagen1' => 'image|mimes:jpg,png',
            // Excluye la verificación si es que formImage1 existe
            'formImagen2' => 'exclude_if:formImagen1,true|image|mimes:jpg,jpeg,png',
            'formImagen3' => 'exclude_if:formImagen1,true|image|mimes:jpg,jpeg,png',
            'formImagen4' => 'exclude_if:formImagen1,true|image|mimes:jpg,jpeg,png',
            'formImagen5' => 'exclude_if:formImagen1,true|image|mimes:jpg,jpeg,png',
            'formLocalidad' => 'required',
        ]);

        // ===== Almacenamiento de la imagen 1 =====
        $file = $request->file('formImagen1');
        // Obtengo el nombre del archivo
        $formImagen1 = $file->getClientOriginalName();
        // Genero un inditificador unico para evitar archivos con el mismo nombre
        $imgAux1 =  Str::uuid()->toString() . $formImagen1;
        // Almaceno en el disco la imagen
        Storage::disk('local')->put($imgAux1, File::get($file));

        // ===== Almacenamiento de la imagen 2 =====
        $file = $request->file('formImagen2');
        // Obtengo el nombre del archivo
        $formImagen2 = $file->getClientOriginalName();
        // Genero un inditificador unico para evitar archivos con el mismo nombre
        $imgAux2 =  Str::uuid()->toString() . $formImagen2;
        // Almaceno en el disco la imagen
        Storage::disk('local')->put($imgAux2, File::get($file));

        // ===== Almacenamiento de la imagen 3 =====
        $file = $request->file('formImagen3');
        // Obtengo el nombre del archivo
        $formImagen3 = $file->getClientOriginalName();
        // Genero un inditificador unico para evitar archivos con el mismo nombre
        $imgAux3 =  Str::uuid()->toString() . $formImagen3;
        // Almaceno en el disco la imagen
        Storage::disk('local')->put($imgAux3, File::get($file));

        // // ===== Almacenamiento de la imagen 4 =====
        // $file = $request->file('formImagen4');
        // // Obtengo el nombre del archivo
        // $formImagen4 = $file->getClientOriginalName();
        // // Genero un inditificador unico para evitar archivos con el mismo nombre
        // $imgAux4 =  Str::uuid()->toString() . $formImagen4;
        // // Almaceno en el disco la imagen
        // Storage::disk('local')->put($imgAux4, File::get($file));

        // // ===== Almacenamiento de la imagen 5 =====
        // $file = $request->file('formImagen5');
        // // Obtengo el nombre del archivo
        // $formImagen5 = $file->getClientOriginalName();
        // // Genero un inditificador unico para evitar archivos con el mismo nombre
        // $imgAux5 =  Str::uuid()->toString() . $formImagen5;
        // // Almaceno en el disco la imagen
        // Storage::disk('local')->put($imgAux5, File::get($file));

        // ===== Inserción de datos en la base de datos =====
        // INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`, `nombre`, `sexo`, `edad`, `desparasitado`, `castrado`, `vacunado`, `imagen_1`, `imagen_2`, `imagen_3`, `imagen_4`, `imagen_5`, `observaciones`, `adoptado`, `fecha_adoptado`, `fecha_publicacion`, `id_moderador`, `id_ubicacion`) VALUES ('perro', 'manteca', 'macho', '1', 'si', 'no', 'no', 'img1', 'img2', 'img3', 'img4', 'img5', 'obsejemplo', 'no', '2021-12-23', '2021-12-23', '1', '25');

        $tipoMascota = $request->post("formTipoMascota");
        $nombre = $request->post("formNombre");
        $sexo = $request->post("formSexo");
        $edad = $request->post("formEdadInputRange");
        $desparasitado = $request->post("formDesparasitado");
        $castrado = $request->post("formCastrado");
        $vacunado = $request->post("formVacunado");
        $imagen1 = $imgAux1;
        $imagen2 = $imgAux2;
        $imagen3 = $imgAux3;
        // $imagen4 = $imgAux4;
        // $imagen5 = $imgAux5;
        $observaciones = $request->post('formObservaciones');
        $adoptado = 'no';
        $fechaAdoptado = '';
        //$fechaPublicacion = date("Y-m-d");
        $fechaPublicacion = date("Y-m-d");


        DB::table("mascota")->insert([
            "tipo_mascota" => $tipoMascota,
            "nombre" => $nombre,
            "sexo" => $sexo,
            "edad" => $edad,
            "desparasitado" => 'si',
            "castrado" => 'si',
            "vacunado" => $vacunado,
            "imagen_1" => $imagen1,
            "imagen_2" => $imagen2,
            "imagen_3" => $imagen3,
            // "imagen_4" => $imagen4,
            // "imagen_5" => $imagen5,
            "observaciones" => $observaciones,
            "adoptado" => $adoptado,
            "fecha_publicacion" => '2021-09-09',
            "id_moderador" => session('id'),
            "id_ubicacion" => '2',
        ]);

        return redirect()->action([MascotasController::class, 'adopta'],'#adopta');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function adopta()
    {

        $mascotasEnAdopcionQuery=DB::select("SELECT * FROM mascota
                                    INNER JOIN ubicacion
                                    on mascota.id_ubicacion=ubicacion.id_ubicacion
                                    WHERE adoptado='no'");
        return view('adopta', ['mascotasEnAdopcion' => $mascotasEnAdopcionQuery]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

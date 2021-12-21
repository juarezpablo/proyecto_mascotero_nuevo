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

           return view('mascotas',$dataMascota);
           /*return response()
            ->view('mascotas', $dataMascota)
            ->json('dataM', $dataMascota);*/
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
        $imagen_1=$request->post("imagen_1");
      /*  Tratamiento de imagen
        $imagen_1=$request->file("imagen_1");

        $nombreImagen =  time()."_".$imagen_1->getClientOriginalName();
        $destino= public_path('img');
        $imagen_1->move($destino,$nombreImagen);*/




        var_dump($castrado);

        DB::table("mascota")->insert([
            "tipo_mascota" => $tipo_mascota,
            "nombre" => $nombre,
            "sexo" => $sexo,
            "edad" => $edad,
            "desparasitado" => $desparasitado,
            "castrado" => $castrado,
            "vacunado" => $vacunado,
            "imagen_1" => $imagen_1,
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


      return response()->json($parametroMascotas,200);
        /*return redirect()->route("mascotas.index");*/

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id_mascotaEliminar=$request->get("id_mascotax");
        DB::table("mascota")->select("*")->where("id_mascota",$id_mascotaEliminar)->delete();
        return redirect ()->route("mascotas.index");
    }
}

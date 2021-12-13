<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulariosPerros = DB::select("SELECT * FROM formulario_perro");
        $formulariosGatos = DB::select("SELECT * FROM formulario_gato");
        $dataFormularios=[
            "formulariosPerro" => $formulariosPerros,
            "formulariosGato" => $formulariosGatos
           /* "ids"=> $formulariosPerros->$id_formulario_perro,*/
        ];

        return view('formularios', $dataFormularios);
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
    public function asignar_adopcion(){


    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $x)
    {
        DB::insert("UPDATE `proyecto_huellitas`.`formulario_perro` SET `proceso_adopcion` = 'aceptado' WHERE (`id_formulario_perro` = '$x')");   
        return redirect ()->route("formularios.index");
    
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

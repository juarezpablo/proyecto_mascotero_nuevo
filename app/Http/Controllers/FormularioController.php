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
        if((session('rol')=='admin')){
             $formulariosPerros = DB::select("SELECT * FROM formulario_perro");
            $formulariosGatos = DB::select("SELECT * FROM formulario_gato");
            $dataFormularios=[
            "formulariosPerro" => $formulariosPerros,
            "formulariosGato" => $formulariosGatos
           
               ];
            /*Envio los datos de las tablas formulario gato y perro a la view */   
            return view('formularios', $dataFormularios);
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
    public function usuario_mascota(Request $request){
        $idMascota=$request->get("mascota");
        $idUsuario=$request->get("usuario");



        
        return view("tabla_usuario_mascota");
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
    public function update(Request $request)
    {
       /*recibo los parametros de identificacion del formulario y mascota a asignar*/
         
         $id_form_perro= $request->post("id_formulariox");
         $id_form_mascota=$request->post("id_mascotax");
        
         /*cargo tabla de formularios y de mascotas para luego verificar que la mascota no haya sido adoptada*/
        $tabla_formularios=DB::select("SELECT * FROM formulario_perro");
        $tabla_mascotas=DB::select("SELECT * FROM mascota");
           /*REcorro con un foreach toda la tabla formularios y verifico con un if que el atributo "proceso_adopcion" del formulario a asignar tenga 
           el valor "solicitado" */
           foreach($tabla_formularios as $formulario){
                if($formulario->id_formulario_perro == $id_form_perro && $formulario->proceso_adopcion == "solicitado"){
                    foreach($tabla_mascotas as $mascota){
                        if($mascota->id_mascota == $id_form_mascota && $mascota->adoptado == "no"){
                            /*Asignacion de adopcion*/ 
                            DB::insert("UPDATE `proyecto_huellitas`.`formulario_perro` SET `proceso_adopcion` = 'aceptado' WHERE (`id_formulario_perro` = '$id_form_perro')");   
        
        
                            DB::insert("UPDATE `proyecto_huellitas`.`mascota` SET `adoptado` = 'si' WHERE (`id_mascota` = '$id_form_mascota')");
        

                            return redirect ()->route("formularios.index");
                        }/*estos else estan mal, no me dejan iterar todos los elementos
                        else{
                            return redirect ()->route("formularios.index"); 
                        }*/
                    }
                }/*
                else{
                    return redirect ()->route("formularios.index");
                }*/
           }
         
         
        return redirect ()->route("formularios.index");            
    
    }
    public function rechazar_adopcion(Request $request)
    {
        $id_form_perro= $request->post("id_formulariox");
        $id_form_mascota=$request->post("id_mascotax");
         /*Proceso de verificacion de rechazo de adopcion, para que no se pueda rechazar una adopcion ya asignada
         El siguiente codigo verifica que solo se produzca el rechazo cuando el atributo "proceso_adopcion sea "solicitado"*/   
        $tabla_formularios=DB::select("SELECT * FROM formulario_perro");
        foreach($tabla_formularios as $formulario){
            if($formulario->id_formulario_perro == $id_form_perro && $formulario->proceso_adopcion == "solicitado"){


                DB::insert("UPDATE `proyecto_huellitas`.`formulario_perro` SET `proceso_adopcion` = 'rechazado' WHERE (`id_formulario_perro` = '$id_form_perro')");   
        
        
                DB::insert("UPDATE `proyecto_huellitas`.`mascota` SET `adoptado` = 'no' WHERE (`id_mascota` = '$id_form_mascota')");

                return redirect ()->route("formularios.index");
            }
        }
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

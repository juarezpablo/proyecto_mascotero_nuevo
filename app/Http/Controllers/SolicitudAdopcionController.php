<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitudAdopcionController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_mascota'=>'required',
            'id_usuario'=>'required',
            'tipo_mascota'=>'required',
        ]);

        $id_mascota = $request->post("id_mascota");
        $id_usuario = $request->post("id_usuario");
        $tipo_mascota = $request->post("tipo_mascota");
        $proceso_adopcion = "solicitado";

        if(!strcmp($tipo_mascota,"gato"))
            $tabla = "formulario_gato";
            else
                $tabla = "formulario_perro";

        DB::table($tabla)->insert([
            "id_mascota" => $id_mascota,
            "id_usuario" => $id_usuario,
            "proceso_adopcion" => $proceso_adopcion,
        ]);

        return redirect()->action([MascotasController::class, 'adopta'],'#adopta');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_mascota, $id_usuario, $tipo_mascota)
    {
        if(session('id')){
            if(!strcmp($tipo_mascota,'perro')){
                DB::select("DELETE
                FROM formulario_perro
                WHERE id_usuario=$id_usuario and id_mascota=$id_mascota
                ");
            }
            else{
                DB::select("DELETE
                FROM formulario_gato
                WHERE id_usuario=$id_usuario and id_mascota=$id_mascota
                ");
            }
            return redirect()->action([MascotasController::class, 'adopta'],'#adopta');
        }
        else return redirect()->action([LoginController::class, 'login']);
    }
}

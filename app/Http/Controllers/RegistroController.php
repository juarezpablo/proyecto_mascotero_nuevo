<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// Para encriptar contraseñas
// use Illuminate\Support\Facates\Hash;

// Para compartir errores detectados en la validacion al front
use Illuminate\View\Middleware\ShareErrorsFromSession;


class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validacion de campos del registro
        $this->validate($request,[
            'alias' => 'required|unique:usuario',
            'contrasena' => 'required|digits_between:5,12',
            'nombre' => 'required',
            'contrasena' => 'required',
            'apellido' => 'required',
            'telefono' => 'required|integer',
            'ubicacion' => 'required',
        ]);
        // Si pasa la validacion almaceno en variables lo capturado
        $alias = $request->post("alias");
        $contrasena = $request->post("contrasena");
        $nombre = $request->post("nombre");
        $apellido = $request->post("apellido");
        $telefono = $request->post("telefono");
        $id_ubicacion = $request->post("ubicacion");
        // Almaceno en la base de datos
        DB::table("usuario")->insert([
            "alias" => $alias,
            "contrasena" => $contrasena,
            "nombre" => $nombre,
            "apellido" => $apellido,
            "telefono" => $telefono,
            "id_ubicacion" => $id_ubicacion,
        ]);
        // Redirige a la seccion adopta
        return redirect()->action([LoginController::class, 'login']);

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
    public function destroy($id)
    {
        //
    }
}

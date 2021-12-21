<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Para encriptar contraseñas
use Illuminate\Support\Facates\Hash;
// Uso de session para enviar mensajes
use Session;
// Uso de DB
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
   public function login(){
       return view('login');
   }

   public function ingresar(Request $request){

    $usuarioAlias = $request->post("usuario");
    $usuarioContrasena=$request->post("contrasena");

    session(['alias' => $usuarioAlias]);

    // Verifico si existe algun admin con el alias y contraseña capturados
    $isAdmin = DB::table("moderador")->select("*")
            ->where("alias", $usuarioAlias)
            ->where("contrasena",$usuarioContrasena)
            ->get();
    //$isAdmin = json_decode($isAdmin);
    if(isset($isAdmin[0]->nombre)){
        session(['tipoUsuario' => 'admin']);
        }
        else
            echo "ningun admin detectado";

    // Verifico si existe algun usuario estandar con el alias y contraseña capturados
    $isUsuario= DB::table("usuario")->select("*")
            ->where("alias", $usuarioAlias)
            ->where("contrasena",$usuarioContrasena)
            ->get();
    //$isAdmin = json_decode($isAdmin);
    if(isset($isUsuario[0]->nombre)){
        session(['tipoUsuario' => 'usuario']);
        }
        else
            echo "ningun usuario detectado";

    }

}




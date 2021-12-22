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

    $alias = $request->post("usuario");
    $contrasena=$request->post("contrasena");
    $isLogged = false;

    // Verifico si existe algun admin con el alias y contraseña capturados
    $isAdmin = DB::table("moderador")->select("*")
            ->where("alias", $alias)
            ->where("contrasena",$contrasena)
            ->get();
    //$isAdmin = json_decode($isAdmin);
    if(isset($isAdmin[0]->nombre)){
        session(['tipoUsuario' => 'admin']);
        session(['alias' => $alias]);
        session(['id' => $isAdmin[0]->id_moderador]);
        $isLogged = true;
        }
        else{
            // Verifico si existe algun usuario estandar con el alias y contraseña capturados
            $isUsuario= DB::table("usuario")->select("*")
            ->where("alias", $alias)
            ->where("contrasena",$contrasena)
            ->get();
            //$isAdmin = json_decode($isAdmin);
            if(isset($isUsuario[0]->nombre)){
                session(['tipoUsuario' => 'usuario']);
                session(['alias' => $alias]);
                session(['id' => $isUsuario[0]->id_usuario]);
                $isLogged = true;
            }
        }



    if($isLogged==true)
        return redirect()->action([MascotasController::class, 'adopta'],'#adopta');
        else {
            Session::flash('errorLogin', 'El usuario o contraseña no son validos');
            return redirect()->route('login');
        }
    }


    public function logout(){
        Session::forget('alias');
        Session::forget('tipoUsuario');
        Session::forget('id');
        Session::flush();
        var_dump('afuera');
        return redirect()->route('login');
    }
}




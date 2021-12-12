<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request )
    {
        
        
        return view("Login");
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
    {   /*Recibo el usuario y la contraseña enviada desde el formulario login*/
        $usuarioNombre = $request->post("usuario");
        $usuarioContraseña=$request->post("contraseña");
        
        $arraySesion = [
            "usuario" => $usuarioNombre,
            "contraseñaUsuario" => $usuarioContraseña,
        ];
            /*cargo la tabla admin, para comparar con el usuario ingresado, si es valido lo manda a una vista admin*/ 
        $adminsTabla = DB::select("SELECT * FROM moderador");
             /*recorro la tabla admin y lo guardo en el objeto usuario, cada objeto usuario tiene un atributo nombre, password etc*/

            foreach ( $adminsTabla  as $admin ){ 
            
                 
                     if (( $admin->alias == $usuarioNombre) && ($admin->contrasena == $usuarioContraseña)){   
        
                                var_dump($admin->contrasena);
                                var_dump($admin->alias);

                                 $arraySesion = [
                                "aliasAdmin" => $usuarioNombre,
                                "contraseñaAdmin" => $usuarioContraseña,
                                /*
                                "aliasAdmin"=>$admin->alias,
                                "contrasenaAdmin"=>$admin->contrasena
                                */
                                           ];

                                /*return view('admin' , $arraySesion);*/
                                return redirect ()->route("admin.store", $arraySesion);
                         
                        }  /*cierro el if*/  
            } /*cierro el for*/
            /*Si ningun usuario ingresado pertenece a la tabla admin, ahora verifico si pertenece a la tabla usuarios*/
        $usuariosTabla = DB::select("SELECT * FROM usuario");

            foreach ($usuariosTabla as $usuario){
                if(( $usuario->alias == $usuarioNombre) && ($usuario->contrasena == $usuarioContraseña)){
                    var_dump($usuario->contrasena);
                    var_dump($usuario->alias);

                     $arraySesion = [
                    "user" => $usuarioNombre,
                    "pass" => $usuarioContraseña,/*
                    "usuariotabla"=>$candidato->alias,             No es necesario
                    "usuariopassword"=>$candidato->contrasena*/
                               ];                                              /*Si el usuario y la pass son validos*/    
                    return redirect ()->route("usuario.index", $arraySesion); /*Redirecciono al metodo index del controlador usuario*/
                }
            }  
                    return view('registro');
                
            
             
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

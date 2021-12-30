<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UbicacionRestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ubicacion = DB::table('ubicacion')
                        ->select('*')
                        ->get();
        return  response()->json($ubicacion);
    }

    public function list(Request $request, $list)
    {
        if(strcmp($list,'localidades')==0){
            $localidades = DB::table('ubicacion')
                            ->select('id_ubicacion', 'localidad')
                            ->get();
            return  response()->json($localidades);

        }
        if(strcmp($list,'barrios')==0){
            $barrios = DB::table('ubicacion')
                            ->select('id_ubicacion','barrio')
                            ->get();
            return  response()->json($barrios);

        }
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

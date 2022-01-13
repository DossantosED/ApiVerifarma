<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmacia;
use Illuminate\Support\Facades\Log;
use stdClass;

class FarmaciaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $farmacia = new Farmacia();
        $farmacia->nombre = $request->nombre;
        $farmacia->direccion = $request->direccion;
        $farmacia->longitud = $request->longitud;
        $farmacia->latitud = $request->latitud;
        try {
            $farmacia->save();
            return response()->json(['message'=>'Farmacia creada con éxito!'], 200);
        } catch (\Throwable $th) {
            Log::debug($th->getMessage());
            return response()->json(['Error al crear farmacia: '=>$th->getMessage()], 500);
        }
    }

    /**
     * obtenerFarmaciasCercanas.
     *
     * @param  $lat, $lon
     * @return \Illuminate\Http\Response
    */
    public function obtenerFarmaciasCercanas($lat, $lon)
    {
        try {
            $farmacias = Farmacia::all();
        } catch (\Throwable $th) {
            return response()->json(['message'=> 'Error al obtener farmacias: '.$th->getMessage()], 500);
            Log::debug($th->getMessage());
        }
        $farmaciasCercanas = [];
        foreach ($farmacias as $f) {

            $km = 111.302;
            
            //1 Grado = 0.01745329 Radianes    
            $degtorad = 0.01745329;
            
            //1 Radian = 57.29577951 Grados
            $radtodeg = 57.29577951; 

            $dlong = ($lon - $f->longitud); 
            $dvalue = (sin($lat * $degtorad) * sin($f->latitud * $degtorad)) + (cos($lat * $degtorad) * cos($f->latitud * $degtorad) * cos($dlong * $degtorad)); 
            $ditancia = acos($dvalue) * $radtodeg; 
            $ditancia = round(($ditancia *$km), 2);
            if($ditancia <= $km){ // Asumiendo que las farmacias mas cercanas estan a menos de 1km                                                                                                                                   
                array_push($farmaciasCercanas, $f);
            }
        }
        if(count($farmaciasCercanas) == 0){
            return response()->json(['message'=> 'No se encontraron farmacias cercanas'.$ditancia], 200);
        }else{
            return response()->json(['farmacias cercanas'=> $farmaciasCercanas], 200);
        }
    }

    /**
     * Show.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        try {
            $farmacia = Farmacia::find($id);
            if($farmacia){
                return response()->json(['farmacia'=>$farmacia], 200);
            }else{
                return response()->json(['message'=>'No se econtró la farmacia'], 200);
            }
        } catch (\Throwable $th) {
            Log::debug($th->getMessage());
            return response()->json(['Error al obtener farmacia: '=>$th->getMessage()], 500);
        }
    }
}

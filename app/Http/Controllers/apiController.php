<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;

class apiController extends Controller
{

    function inventario(request $request){
        if(Auth::check()){
            $perfil=Auth::user();

            $carros=DB::table('carros')
                ->join('modelos', 'carros.idModelo', '=', 'modelos.id')
                ->join('tipos', 'carros.idTipo', '=', 'tipos.id')
                ->join('marcas', 'modelos.idMarca', '=', 'marcas.id')
                ->select('carros.*', 'tipos.nombre as tipo', 'marcas.nombre as marca', 'modelos.nombre as modelo')
                ->where('carros.idUser', $perfil->id)
                ->orderby('carros.estado')
                ->paginate(6);

            return json_encode($carros);
        }
        else{
            return "";
        }
    }
    
}

<?php

namespace App\Http\Controllers;
use Auth;
use \App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
//use Illuminate\Http\Response;
//use Illuminate\Contracts\Routing\ResponseFactory;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;


class SystemController extends Controller
{
   function verificarLogin(){
        if(Auth::check()){
            return true;
        }
        return false;
    }

    function index(){
        if ($this->verificarLogin()) {
            return redirect('/home');
        }
        return redirect('/login');
         
        
    }




    function logout(){
        Auth::logout();
        return Redirect('/login');
    }

    function login(){

        return view('login');

    }

    function home(){
         if($this->verificarLogin()){
            $datos=[];
            $perfil=Auth::user();

            $carros=DB::table('carros')
                ->join('modelos', 'carros.idModelo', '=', 'modelos.id')
                ->join('tipos', 'carros.idTipo', '=', 'tipos.id')
                ->join('marcas', 'modelos.idMarca', '=', 'marcas.id')
                ->select('carros.*', 'tipos.nombre as tipo', 'marcas.nombre as marca', 'modelos.nombre as modelo')
                ->where('carros.idUser', $perfil->id)
                ->where(function($query){
                    $query->where('carros.estado', '1')
                    ->orwhere('carros.estado', '2');
                })->orderby('carros.estado')
                ->paginate(6);
            $datos['perfil']=$perfil;
            $datos['carros']=$carros;
            //$respuesta=$carros->toJson();
            return view('home', $datos); 
            return response()->json( $carros );
         }
         return redirect('/login');
        
        }

    function perfil(){
        if ($this->verificarLogin()) {
            return view('perfil');
        }
        return redirect('/login');
    }


       


}

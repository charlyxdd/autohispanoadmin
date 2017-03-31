<?php

namespace App\Http\Controllers;


use Auth;
use \Stripe;
use \App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsersController extends Controller {

    private $k="sk_test_cwGiWUDvgJ2zVKRD9SBsNIRB";


	function loginU(request $request){
    	/*$u=new User();
        $u->nombre="itachi";
        $u->apellido="uchiha";
        $u->tel1="";
        $u->email="itachi@correo.com";
        $u->username="itachi2";
        $u->password=Hash::make("pass123");
        $u->foto="";
        $u->fb="";
        $u->twitter="";
        $u->tipo=1;
        $u->ciudad="";
        $u->contacto=1;
        $u->status=1;
        $u->autopago=0;
        $u->verificado=1;
        $u->save();
        */

        $chkRemember=$request->get('chkRemember') ? 1 : 0;

        if(Auth::attempt(['username'=>$request->get('txtCorreo'), 'password'=>$request->get('txtPass')],$chkRemember) || Auth::attempt(['email'=>$request->get('txtCorreo'), 'password'=>$request->get('txtPass')],$chkRemember)){

            /*$u=Auth::user();
            if ($u->tipo==1 || $u->tipo==2) {
                return redirect('/home');
            } else{
                return view('login');
            }*/
            return redirect('/home');
            
        }else{
            return view('login');
        }
    }

        function cobrar(request $request){

        \Stripe\Stripe::setApiKey($this->k);

        $u=Auth::user();
        if($u->idStripe!=""){
            $cliente=\Stripe\Customer::create(array(
                "description" => Auth::user()->email,
                "source" => $request->get('stripeToken') // obtained with Stripe.js
            ));


            $u->idStripe=$cliente->id;

        }


        $pago=new Pago();

        $pago->fecha=date("Y") . "/" . date("m") . "/" . date("d");

        $u=Auth::user();

        if($u->tipo==1){
            $pago->monto=30;
            $u->status=1;
            $u->fechacorte=date("d");
        }
        else{
            $pago->monto=4.99;
        }

        $pago->idUser=$u->id;

        $pago->save();
        $u->save();

        /*if($request->exists('idCarro')){
            $carro=Carros::find($request->get('idCarro'));
            $carro->estado=1;
            $carro->save();

            return redirect('/carro/view/'.$carro->id);
        }
        */


        return redirect('/home');

    }

   // function perfilPublico($idUs){
        $datos=[];
        $perfil=User::find($idUs);

        $carros=DB::table('carros')
            ->join('modelos', 'carros.idModelo', '=', 'modelos.id')
            ->join('tipos', 'carros.idTipo', '=', 'tipos.id')
            ->join('marcas', 'modelos.idMarca', '=', 'marcas.id')
            ->select('carros.*', 'tipos.nombre as tipo', 'marcas.nombre as marca', 'modelos.nombre as modelo')
            ->where('carros.idUser', $idUs)
            ->where(function($query){
                $query->where('carros.estado', '1')
                ->orwhere('carros.estado', '2');
            })->orderby('carros.estado')
            ->paginate(10);
        $datos['perfil']=$perfil;
        $datos['carros']=$carros;
         if(Auth::check()){
            $u=Auth::user();
            $datos['user']=$u;
        }
        return view('home', $datos);

    //}

}

<?php

namespace App\Http\Controllers;
use Auth;
use \App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    function home(){
    	return view('home');
    }

//    function nuevo(request $request){

       

    function login(request $request){
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
            //$usuario=User::where('username', 'txtCorreo')->orwhere('email', 'txtCorreo');
            //if ($usuario->tipo==1 || $usuario->tipo==2) {
            //	return redirect('/home');
            //}
            return redirect('/home');
            
        }else{
            return view('login',['error'=>'a']);
        }
    }
}

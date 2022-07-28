<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;


class MainController extends Controller{
//Login do Sistema
    function login()
    {
        return view('login');
    }
    //Checar e os dados são válidos;
    function check(Request $request){
        //validar pedidos de login
        $request->validate([
            'email'=>'required|email',
            'senha'=>'required|min:5|max:15'
        ]);

        $userInfo = users::where('email', '=', $request->email)->first();

        if(!$userInfo){
            return back()->with('fail', 'Email não Reconhecido');
        }else{
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('users/dashboard');

           }else{
                return back()->with('fail', 'Senha Errada');
           }
        }
   }
}

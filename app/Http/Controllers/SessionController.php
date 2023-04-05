<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class SessionController extends Controller
{
    public function create(){


        return view('login.login');
    }

    public function store(){

        if(auth()->attempt(request(['email','password']))== false){

            return back()->withErrors([

                'message' => 'El email o contraseñas son incorrectos'
            ]);
        }
        else{

            if(auth()->user()->role == 'admin'){
                return redirect()->route('admin.index');
            }
            else
            {
                return redirect()->to('/');
            }
        }

       
    }


    #Session end 
    public function destroy(){

        auth()->logout();
        return redirect()->to('/login');
    }

    public function prueba(Request $request){

      #  $datos=request()->all();
       # print_r($datos);
       return "hola controler prueba";
    }
}

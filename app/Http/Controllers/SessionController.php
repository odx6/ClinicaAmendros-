<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cita;
use App\Models\Paciente;
class SessionController extends Controller
{
    public function create(){


        return view('login.login');
        
    }

    public function store(){
      

     //prueba del paciente 

     
        if(auth()->attempt(request(['email','password']))== false){

          
            return back()->withErrors([

                'message' => 'El email o contraseñas son incorrectos'
            ]);
        
        }
            
        else{

            if(auth()->user()->role == 'director'){
                
                return redirect()->route('admin.index');

            }else if(auth()->user()->role == 'medico'){
                

                return redirect()->route('Doctor.index' );
            }
            else
            {
                    
              //  return redirect()->to('/');
              return view('Home');
              //return $nombre;  
            }
        }

       
    }


    #Session end 
    public function destroy(){

        auth()->logout();
       return redirect()->to('/login');
    }

    public function prueba(Request $request){

       $datos=request()->all();
       $datos2=request('id');
      // return "hola controler prueba";
      return $datos2;
    }
}

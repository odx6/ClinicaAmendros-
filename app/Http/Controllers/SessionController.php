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
       $all_events=Cita::all();
     $events=[];

     foreach($all_events as $event){

        $events[]=[
            'title'=>$event->fk_dc,
            'start'=>$event->inicio_c,
            'end'=>$event->inicio_c,

        ];
     }

     //prueba del paciente 

     $paciente= Paciente::findOrFail(1);
     $nombre=$paciente->Nombre.' '.$paciente->Apellido;
        if(auth()->attempt(request(['email','password']))== false){

          
            return back()->withErrors([

                'message' => 'El email o contraseñas son incorrectos'
            ]);
        
        }
            
        else{

            if(auth()->user()->role == 'admin'){
                
                return redirect()->route('admin.index');

            }else if(auth()->user()->role == 'medico'){

                return redirect()->route('Doctor.index');
            }
            else
            {
                    
              //  return redirect()->to('/');
              return view('Home',compact('events'));
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

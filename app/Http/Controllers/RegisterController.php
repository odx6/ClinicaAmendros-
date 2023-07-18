<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;

class RegisterController extends Controller
{

     public function index(){

        $Users=User::all();

        return view('Usuarios.index',compact('Users'));
    }
    public function create (){


        return view('Usuarios.create');
    }

    public function store (){

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ]
        
    
    );

        $user= new User;
        $user->name=request('name');
        $user->email=request('email');
        $user->password=request('password');
        $user->role=request('role');
        $user->save();
        return redirect()->route('index.Usuarios')->with('mensaje', '¡Usuario Agregado correctamente!');

    }

    public function show(Request $request)
    {
        $Usuario=User::find(request('id'));
        return view('Usuarios.edit',compact('Usuario'));

    }
    public function update(Request $request)
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
            'id' => 'required',

        ]
        
    
    );

        $user=User::find(request('id'));
        $user->name=request('name');
        $user->email=request('email');
        $user->password=request('password');
        $user->role=request('role');
        $user->save();
        return redirect()->route('index.Usuarios')->with('mensaje', '¡Usuario Agregado correctamente!');
    }



    public function destroy(Request $request)
    {
        $id=request('id');
        $dato =User::Find($id);

        if ($dato) {
            $dato->delete();

        }else{}
        
     
        return redirect()->route('index.Usuarios')->with('mensaje', '¡Usuario eliminado correctamente!');
    }

}

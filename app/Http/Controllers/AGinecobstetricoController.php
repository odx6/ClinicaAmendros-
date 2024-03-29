<?php

namespace App\Http\Controllers;

use App\Models\a_ginecobstetrico;
use Illuminate\Http\Request;

class AGinecobstetricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id=request('id');
         return view('Ginecopstetricos.index',compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $gineco = new a_ginecobstetrico;
        $gineco->fk_ag=request('id');
        $gineco->Menarca=request('Menarca');
        $gineco->Ivsa=request('IVSA');
        $gineco->Gesta=request('gestas');
        $gineco->Cesareas=request('Cesareas');

        $gineco->Aborto=request('Abortos');
        $gineco->Paras=request('Partos');
        $gineco->save();
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\a_ginecobstetrico  $a_ginecobstetrico
     * @return \Illuminate\Http\Response
     */
    public function show(a_ginecobstetrico $a_ginecobstetrico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\a_ginecobstetrico  $a_ginecobstetrico
     * @return \Illuminate\Http\Response
     */
    public function edit(a_ginecobstetrico $a_ginecobstetrico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\a_ginecobstetrico  $a_ginecobstetrico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $gineco =a_ginecobstetrico::find(request('IDAG'));
        $gineco->fk_ag=request('IDPA');
        $gineco->Menarca=request('Menarca');
        $gineco->Ivsa=request('IVSA');
        $gineco->Gesta=request('gestas');
        $gineco->Gesta=request('Cesareas');
        $gineco->Aborto=request('Abortos');
        $gineco->Paras=request('Partos');
        $gineco->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\a_ginecobstetrico  $a_ginecobstetrico
     * @return \Illuminate\Http\Response
     */
    public function destory(Request $request)
    {
        $id=request('id');
        $dato =a_ginecobstetrico::find(request('id'));
  
        if ($dato) {
          
  
            $dato->delete();
            
        } else {
            
        }
       return view('Doctor.index');
        
    }
}

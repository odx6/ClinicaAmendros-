<?php

namespace App\Http\Controllers;

use App\Models\Movimiento;
use App\Models\Paciente;
use App\Models\Prueba_Ms;
use App\Models\Dedos;
use Illuminate\Http\Request;

class MovimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id=request('id');
        $paciente=Paciente::find($id);
        $idDoc=$paciente->PacienteDoctor;
    

        return view('Fisioterapia.Movimiento.index',compact('id','idDoc'));
    }
    public function index2()
    {
        //
        $id=request('id');
        $paciente=Paciente::find($id);
        $idDoc=$paciente->PacienteDoctor;
    

        return view('Fisioterapia.Movimiento.inferiores',compact('id','idDoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        $Prueba = new Prueba_Ms;
        $Prueba->fk_prueba=$data['id'];
       
        $Prueba->Observaciones_prue=$data['observaciones'];
         $Prueba->Tipo=$data['TipoM'];
        $Prueba->Save();
        $Movimiento= new movimiento;
        $Movimiento->fk_movimiento=$Prueba->pk_prueba;
        $Movimiento->titulo1=$data['Tipo'];
        $Movimiento->ValorT1=$data['valor1'];
        $Movimiento->titulo2=$data['Tipo1'];
        $Movimiento->ValorT2=$data['valor2'];
        $Movimiento->NombreMovi=$data['Nombre'];
        $Movimiento->save();
          $Movimiento1= new movimiento;
        $Movimiento1->fk_movimiento=$Prueba->pk_prueba;
        $Movimiento1->titulo1=$data['Tipo2'];
        $Movimiento1->ValorT1=$data['valor1'];
        $Movimiento1->titulo2=$data['Tipo3'];
        $Movimiento1->ValorT2=$data['valor2'];
        $Movimiento1->NombreMovi=$data['Nombre1'];
        $Movimiento1->save();

        return response()->json($data);
    }
     public function Dedos(Request $request)
    {
        $data = $request->all();
        $Prueba = new Prueba_Ms;
        $Prueba->fk_prueba=$data['id'];
         $Prueba->Tipo=$data['TipoM'];
        $Prueba->Observaciones_prue=$data['observaciones'];
        $Prueba->Save();
        $Movimiento= new movimiento;
        $Movimiento->fk_movimiento=$Prueba->pk_prueba;
        $Movimiento->titulo1=$data['Tipo'];
        $Movimiento->ValorT1=$data['valor1'];
        $Movimiento->titulo2=$data['Tipo1'];
        $Movimiento->ValorT2=$data['valor2'];
        $Movimiento->NombreMovi=$data['Nombre'];
        $Movimiento->save();
        if($request->input('Dedos')){
foreach ($request->input('Dedos') as $DedosData) {
            //Busca el moviemiento
            $Dedo = new Dedos;

            $Dedo->create([
                'fk_dedos' => $Prueba->pk_prueba,
                'Nombre' => $DedosData['Nombre'],
                'MCF' => $DedosData['MCF'],
                'IFP' => $DedosData['IFP'],  
                'IFD' => $DedosData['IFD'],
                'ABD' => $DedosData['ABD'],
                // Otros campos de cliente que desees actualizar
            ]);
        }        
}
        return response()->json($data);
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
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Movimiento $movimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Movimiento $movimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $data = $request->all();
        
        // busca la prueba para editar
        $prueba = Prueba_Ms::findOrFail($data['id']);
        $prueba->Observaciones_prue=$data['observaciones'];
        $prueba->save();

         // Actualizar los datos de los clientes
        foreach ($request->input('movimiento') as $movimientoData) {
            //Busca el moviemiento
            $movimiento = $prueba->Movimientos()->findOrFail($movimientoData['IDM']);

            $movimiento->update([
                'titulo1' => $movimientoData['Tipo'],
                'ValorT1' => $movimientoData['valor1'],
                'titulo2' => $movimientoData['Tipo1'],
                'valorT2' => $movimientoData['valor2'],
                'NombreMovi' => $movimientoData['Nombre'],
                // Otros campos de cliente que desees actualizar
            ]);
        }
        //Dedos

        if($request->input('Dedos')){
            foreach ($request->input('Dedos') as $DedosData) {
            //Busca el moviemiento
            $Dedo = $prueba->Dedos()->findOrFail($DedosData['IDEDO']);

            $Dedo->update([
                'Nombre' => $DedosData['Nombre'],
                'MCF' => $DedosData['MCF'],
                'IFP' => $DedosData['IFP'],
                'IFD' => $DedosData['IFP'],
                'ABD' => $DedosData['ABD'],
                // Otros campos de cliente que desees actualizar
            ]);
        }
        }
        

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movimiento  $movimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id=request('id');
        $dato =Prueba_Ms::find(request('id'));
  
        if ($dato) {
          $dato->Movimientos()->where('fk_movimiento', $dato->pk_prueba)->delete();
          $dato->Dedos()->where('fk_dedos', $dato->pk_prueba)->delete();
  
            $dato->delete();
            
        } else {
            
        }
    }
}

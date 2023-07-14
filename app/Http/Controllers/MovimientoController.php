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
        $Prueba->NombrePrueba=$data['NombreMiembro'];
        $Prueba->Observaciones_prue=$data['observaciones'];
         $Prueba->Tipo=$data['TipoM'];
        $Prueba->Save();


         foreach ($request->input('Movimientos') as $movimientoData) {
            //Busca el moviemiento
            $movimiento = new Movimiento;

            $movimiento->create([
                'fk_movimiento' => $Prueba->pk_prueba,
                'NombreMovi' => $movimientoData['Nombre'],
                'valor' => $movimientoData['Valor'],
                // Otros campos de cliente que desees actualizar
            ]);
        }

        //return response()->json($data);
         $paciente=$data['id'];
     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Prueba de movimiento agregada  correctamente!');
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
        $prueba->NombrePrueba=$data['NombreMiembro'];
        $prueba->Observaciones_prue=$data['observaciones'];
        $prueba->save();

         // Actualizar los datos de los clientes
        foreach ($request->input('Movimientos') as $movimientoData) {
            //Busca el moviemiento
            $movimiento = $prueba->Movimientos()->findOrFail($movimientoData['idMovi']);

            $movimiento->update([
                'fk_movimiento' => $prueba->pk_prueba,
                'NombreMovi' => $movimientoData['Nombre'],
                'valor' => $movimientoData['Valor'],
                // Otros campos de cliente que desees actualizar
            ]);
        }
        //Dedos

       
        
        

       // return response()->json($data);
         $paciente=$prueba->fk_prueba;
     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Prueba de movimiento actualizada  correctamente!');
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
         $paciente=$dato->fk_prueba;
        if ($dato) {
          $dato->Movimientos()->where('fk_movimiento', $dato->pk_prueba)->delete();
          $dato->Dedos()->where('fk_dedos', $dato->pk_prueba)->delete();
  
            $dato->delete();
            
        } else {
            
        }

     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Prueba de movimiento eliminada  correctamente!');
    }
}

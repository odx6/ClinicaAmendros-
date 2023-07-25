<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\Doctor;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pagos.index');
    }
     public function index2()
    {
        $Pagos=Pago::all();
        return view('Pagos.DirectorIndex',compact('Pagos'));
    }
     public function Cobro(Request $request)
    {
         $data = $request->all();

         $Consulta=Consulta::find($data['id']);
         $Paciente=Paciente::find($Consulta->fk_paciente);
         $Doctor=Doctor::find($Consulta->fk_doctor);


         //return response()->json($data);
        return view('Pagos.Cobros', compact('Consulta','Paciente','Doctor'));
    }

     public function Cobro2()
    {
         


         //return response()->json($data);
        return view('Pagos.DirectorCreate');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $data = $request->all();

        $pago = new Pago;
        $pago->fk_consulta=$data['id'];
        $pago->fk_secre=$data['secretaria'];

        $pago->monto=$data['Monto'];
        $pago->TipoPago=$data['TipoPago'];
        $pago->save();
        $Consulta=Consulta::find($data['id']);
        if($Consulta->monto== $pago->monto){

            $Consulta->Estado="Pagado";
            $Consulta->save();
        }

        //return response()->json($data);
        return redirect()->route('index.Pagos')->with('mensaje', '¡Pago agregado correctamente!');
        
    }
    public function create2(Request $request)
    {
        //
        $data = $request->all();

        $pago = new Pago;
        $pago->fk_consulta=$data['consulta'];
        $pago->fk_secre=$data['secretaria'];

        $pago->monto=$data['Monto'];
        $pago->TipoPago=$data['TipoPago'];
        $pago->save();
        $Consulta=Consulta::find($data['consulta']);
        if($Consulta->monto== $pago->monto){

            $Consulta->Estado="Pagado";
            $Consulta->save();
        }

        //return response()->json($data);
        return redirect()->route('index.PagosD')->with('mensaje', '¡Pago agregado correctamente!');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        return view('Pagos.Pagos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

            $data = $request->all();
            $Pago=Pago::Find($data['id']);
             $consulta=Consulta::find($Pago->fk_consulta);
         $Paciente=Paciente::find($consulta->fk_paciente);
         $Doctor=Doctor::find($consulta->fk_doctor);
          return view('Pagos.Edit', compact('consulta','Paciente','Doctor','Pago'));

        

    }
     public function show2(Request $request)
    {

            $data = $request->all();
            $Pago=Pago::Find($data['id']);
             
          return view('Pagos.DirectorEdit', compact('Pago'));

        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit(Pago $pago)
    {


    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
        $pago =Pago::find($data['id']);
        $pago->fk_secre=$data['secretaria'];
        $pago->monto=$data['Monto'];
        $pago->TipoPago=$data['TipoPago'];
        $pago->save();
        $Consulta=Consulta::find($pago->fk_consulta);
        if($Consulta->monto<= $pago->monto){

            $Consulta->Estado="Pagado";
            $Consulta->save();
        }else{
            $Consulta->Estado="Pendiente";
            $Consulta->save();
        }

        //return response()->json($data);
        return redirect()->route('index.PagosD')->with('mensaje', '¡Pago actualizado correctamente!');
    }
    public function update2(Request $request)
    {
        $data = $request->all();
        $pago =Pago::find($data['id']);
        $pago->fk_secre=$data['secretaria'];
        $pago->monto=$data['Monto'];
        $pago->TipoPago=$data['TipoPago'];
        $pago->save();
        $Consulta=Consulta::find($pago->fk_consulta);
        if($Consulta->monto<= $pago->monto){

            $Consulta->Estado="Pagado";
            $Consulta->save();
        }else{
            $Consulta->Estado="Pendiente";
            $Consulta->save();
        }

        //return response()->json($data);
        return redirect()->route('index.PagosD')->with('mensaje', '¡Pago actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id=request('id');
        $dato =Pago::Find($id);
    

        if ($dato) {
          
            $dato->delete();

        }else{}
        
     
         return redirect()->route('store.Pagos')->with('mensaje', '¡Pago eliminado  correctamente!');
    
    }
    public function destroy2()
    {
        $id=request('id');
        $dato =Pago::Find($id);
    

        if ($dato) {
          
            $dato->delete();

        }else{}
        
     
         return redirect()->route('index.PagosD')->with('mensaje', '¡Pago eliminado  correctamente!');
    
    }
}

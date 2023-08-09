<?php

namespace App\Http\Controllers;

use App\Models\Salida;
use App\Models\Area;
use App\Models\Producto;
use App\Models\Doctor;
use Illuminate\Http\Request;

class SalidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Salidas=Salida::all();
         return view('Salidas.index', compact('Salidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Areas=Area::all();
        $Productos=Producto::all();
        return view('Salidas.create', compact('Areas','Productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $Salida= new Salida;
        $Salida->fk_area=$data['Area'];
        $Salida->fk_doctor= $data['Doctor'];
        $Salida->fk_producto= $data['producto'];
        $Salida->cantidad= $data['cantidad'];
        $Salida->save();

        $StockActual=$data['Stock']-$data['cantidad'];
        if($StockActual>=0){

             $Producto=Producto::find($data['producto']);
             $Producto->Cantidad=$StockActual;
             $Producto->Save();
        }
       


        return redirect()->route('index.Salidas')->with('mensaje', '¡Salida de producto  correctamente!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $Salida=Salida::find(request('id'));

        $Producto=Producto::find($Salida->fk_producto);
        $Doctor=Doctor::find($Salida->fk_doctor);

        $Stock=$Producto->Cantidad;
        $Areas=Area::all();
        $Productos=Producto::all();
        return view('Salidas.edit', compact('Areas','Productos','Salida','Stock','Doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function edit(Salida $salida)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();

        $Salida=Salida::find($data['id']);
        $OldCantidad=$Salida->cantidad;
        $Salida->fk_area=$data['Area'];
        $Salida->fk_doctor= $data['Doctor'];
        $Salida->fk_producto= $data['producto'];
        $Salida->cantidad= $data['cantidad'];
        $Salida->save();
        if($OldCantidad >$data['cantidad']){
         $cantidad=$OldCantidad-$data['cantidad'];
        $StockActual=$data['Stock']+$cantidad;

    }elseif ($OldCantidad <$data['cantidad']) {
          $cantidad=$data['cantidad']-$OldCantidad;
        $StockActual=$data['Stock']-$cantidad;
    }else{
         $StockActual=$data['Stock'];
    }
        if($StockActual>=0){

             $Producto=Producto::find($data['producto']);
             $Producto->Cantidad=$StockActual;
             $Producto->Save();
        }
       


        return redirect()->route('index.Salidas')->with('mensaje', '¡Salida de producto Actualizada correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salida $salida)
    {
        

        $id=request('id');
        $dato =Salida::Find($id);
        $Cantidad=$dato->cantidad;
        $Producto=Producto::find($dato->fk_producto);


        if ($dato) {
           
            $dato->delete();
            $Producto->Cantidad= $Producto->Cantidad+$Cantidad;
            $Producto->save();

        }else{}
        
     
        return redirect()->route('index.Salidas')->with('mensaje', '¡Salida eliminada correctamente!');
    }
}

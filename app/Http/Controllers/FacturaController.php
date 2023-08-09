<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Facturas=Factura::paginate(20);

        return view('Facturas.index',compact('Facturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Facturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $data = $request->all();
        //return response()->json($data);
         $request->validate([
            'archivo' => 'required|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $path = $file->store('pdfs', 'public');


            $Factura = new Factura;
            $Factura->Nombre=request('Nombre');
            $Factura->fk_proveedor=request('Proveedor');
            $Factura->url=$path;
            $Factura->save();

             return redirect()->route('index.Facctura')->with('mensaje', '¡Factura agregada correctamente!');
        }
             return redirect()->route('index.Facctura')->with('mensaje', '¡Factura agregada incorrectamente correctamente!');


    }




                  
        
    
      
       
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $Factura=Factura::find(request('id'));
         return view('Facturas.Edit',compact('Factura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $data=$request->all();
         $request->validate([
            'archivo' => 'required|mimes:pdf|max:2048',
        ]);

         $Factura=Factura::find($data['id']);
         $oldpath=$Factura->url;
           if (Storage::disk('public')->exists($oldpath)) {
             Storage::disk('public')->delete($oldpath);
            
    // El archivo se ha eliminado correctamente
           } else {
                  }


         if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $path = $file->store('pdfs', 'public');
            $Factura->Nombre=$data['Nombre'];
             $Factura->fk_proveedor=$data['Proveedor'];
            $Factura->url=$path;
            $Factura->save();






             return redirect()->route('index.Facctura')->with('mensaje', '¡Factura actualizada correctamente!');
        }
             return redirect()->route('index.Facctura')->with('mensaje', '¡Factura  actualizada incorrectamente correctamente!');



          

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id=request('id');
        $dato =Factura::find(request('id'));
        $path=$dato->url;
        if (Storage::disk('public')->exists($path)) {
             Storage::disk('public')->delete($path);
             $dato->proveedores()->detach();
             $dato->facturas()->detach();
             $dato->delete();
            
         return redirect()->route('index.Facctura')->with('mensaje', '¡Factura eliminada correctamente!');
    // El archivo se ha eliminado correctamente
    } else {
    // El archivo no existe en el almacenamiento
    return redirect()->route('index.Facctura')->with('mensaje', '¡Factura no  eliminada correctamente!');
    }


    }
     public function Facturas(Request $request)
    {
        $id = Request('area');
        $Medicos = Factura::where('fk_proveedor', '=', $id)->get();
        $MedicosJson = json_encode($Medicos);
        //return $MedicosJson;
        //Para mostrar los datos con javaScript

        return response()->json($Medicos);
    }
}


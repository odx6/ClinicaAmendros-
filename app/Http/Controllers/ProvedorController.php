<?php

namespace App\Http\Controllers;

use App\Models\Provedor;
use Illuminate\Http\Request;

class ProvedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $proveedores=Provedor::paginate(20);

         return view('Proveedor.index',compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Proveedor.create');
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
         $Provedor= new Provedor;
         $Provedor->Nombre=$data['Nombre'];
         $Provedor->Apellidos=$data['Apellidos'];
         $Provedor->Telefono=$data['Telefono'];
         $Provedor->Direccion=$data['Direccion'];
         $Provedor->Correo=$data['Correo'];
         $Provedor->Empresa=$data['Empresa'];
         $Provedor->Save();

        //return response()->json($data);
         return redirect()->route('index.Preveedor')->with('mensaje', '¡Proveedor agregado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
            $data = $request->all();
            $Provedor=Provedor::find($data['id']);

            return view('Proveedor.Edit',compact('Provedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
         $Provedor= Provedor::find($data['id']);
         $Provedor->Nombre=$data['Nombre'];
         $Provedor->Apellidos=$data['Apellidos'];
         $Provedor->Telefono=$data['Telefono'];
         $Provedor->Direccion=$data['Direccion'];
         $Provedor->Correo=$data['Correo'];
         $Provedor->Empresa=$data['Empresa'];
         $Provedor->Save();

        //return response()->json($data);
         return redirect()->route('index.Preveedor')->with('mensaje', '¡Proveedor acualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provedor $provedor)
    {
         $id=request('id');
        $dato =Provedor::Find($id);

        if ($dato) {
          $dato->proveedores()->detach();
           $dato->facturas()->detach();
            $dato->delete();

        }else{}
        
     
        return redirect()->route('index.Preveedor')->with('mensaje', '¡Proveedor eliminado correctamente!');
    }
}

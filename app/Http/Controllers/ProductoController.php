<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Productos=Producto::paginate(10);
        return view('Productos.index',compact('Productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Productos.create');
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
        $Producto = new Producto;
        $Producto->Nombre =$data['Nombre']; 
        $Producto->Cantidad =$data['Cantidad']; 
        $Producto->Precio_compra =$data['Precio_compra']; 
        $Producto->Precio_venta =$data['Precio_venta'];
        $Producto->save();
         $Producto->proveedores()->attach($Producto->pk_producto,['precio'=>$data['Precio_compra'],'fk_proveedor'=>$data['Proveedor']]);
          $Producto->facturas()->attach($Producto->pk_producto,['precioUnitario'=>$data['Precio_venta'],'Cantidad'=>$data['Cantidad'],'fk_factura'=>$data['Factura']]);

        return redirect()->route('index.Productos')->with('mensaje', '¡Producto Agregado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $Producto=Producto::find(request('id'));

        return view('Productos.Edit',compact('Producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function Stock(Request $request)
    {
        $data = $request->all();

        $Producto=Producto::find($data['producto']);
        $Cantidad=$Producto->Cantidad;

        // $datosJson = json_encode($Producto);
         //return response()->json($datosJson);
        return $Cantidad;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $data = $request->all();
        $Producto =Producto::find($data['id']);
        $Producto->Nombre =$data['Nombre']; 
        $Producto->Cantidad =$data['Cantidad']; 
        $Producto->Precio_compra =$data['Precio_compra']; 
        $Producto->Precio_venta =$data['Precio_venta'];
        $Producto->save();
         $Producto->proveedores()->sync([$Producto->pk_producto=>['precio'=> $Producto->Precio_compra,'fk_proveedor'=>$data['Proveedor']]]);
          $Producto->facturas()->sync([$Producto->pk_producto=>['precioUnitario'=>$data['Precio_venta'],'Cantidad'=>$data['Cantidad'],'fk_factura'=>$data['Factura']]]);

        return redirect()->route('index.Productos')->with('mensaje', '¡Producto Actualizados correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $id=request('id');
        $dato =Producto::Find($id);

        if ($dato) {
           $dato->proveedores()->detach();
           $dato->facturas()->detach();
            $dato->delete();

        }else{}
        
     
        return redirect()->route('index.Productos')->with('mensaje', '¡Producto eliminado correctamente!');
    }
}

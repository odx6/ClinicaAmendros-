<?php

namespace App\Http\Controllers;

use App\Models\Habitos_salud;
use App\Models\Paciente;
use Illuminate\Http\Request;

class HabitosSaludController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id=request('id');
        $paciente=Paciente::find($id);
        $idDoc=$paciente->PacienteDoctor;
    

        return view('Fisioterapia.Habitos.index',compact('id','idDoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        $this->agregar($data['id'],'Tabaquismo',$data['Tabaquismo'],$data['ETabaquismo']);
        $this->agregar($data['id'],'Actividad física',$data['Actividad-física'],$data['EActividad-física']);
        $this->agregar($data['id'],'Alcholismo',$data['Alcholismo'],$data['EAlcholismo']);
        $this->agregar($data['id'],'Se Automedica',$data['Se-Automedica'],$data['ESe-Automedica']);
        $this->agregar($data['id'],'Drogas',$data['Drogas'],$data['EDrogas']);
        $this->agregar($data['id'],'Pasa tiempo',$data['Pasatiempo'],$data['EPasatiempo']);
        
       // return response()->json($data);
        $paciente=$data['id'];
     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Habitos de la salud agregados  correctamente!');
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
     * @param  \App\Models\Habitos_salud  $habitos_salud
     * @return \Illuminate\Http\Response
     */
    public function show(Habitos_salud $habitos_salud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habitos_salud  $habitos_salud
     * @return \Illuminate\Http\Response
     */
    public function edit(Habitos_salud $habitos_salud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habitos_salud  $habitos_salud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
        $this->Actualizar($data['IDTabaquismo'],'Tabaquismo',$data['Tabaquismo'],$data['ETabaquismo']);
        $this->Actualizar($data['IDActividad_física'],'Actividad física',$data['Actividad_física'],$data['EActividad_física']);
        $this->Actualizar($data['IDAlcholismo'],'Alcholismo',$data['Alcholismo'],$data['EAlcholismo']);
        $this->Actualizar($data['IDSe_Automedica'],'Se Automedica',$data['Se_Automedica'],$data['ESe_Automedica']);
        $this->Actualizar($data['IDDrogas'],'Drogas',$data['Drogas'],$data['EDrogas']);
        $this->Actualizar($data['IDPasa_tiempo'],'Pasa tiempo',$data['Pasa_tiempo'],$data['EPasa_tiempo']);
       // return response()->json($data);
        $paciente=$this->Actualizar($data['IDPasa_tiempo'],'Pasa tiempo',$data['Pasa_tiempo'],$data['EPasa_tiempo']);
     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Habitos de la salud actualizados correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habitos_salud  $habitos_salud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $data = $request->all();
        $here=$data['id'];
         $paciente='';
        foreach($here as $her){
             $dato =Habitos_salud::find($her);
            $paciente=$dato->fk_Habitos;
        if ($dato) {
          
  
            $dato->delete();
            
        } else {
            
        }}
        //return response()->json($data);
        return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Habitos de la salud eliminados correctamente!');
    }
    public function agregar($id,$nombre, $valor,$Especificacion){
        
        $Habitos= new Habitos_salud;
        $Habitos->fk_Habitos=$id;
        $Habitos->Nombre=$nombre;
        if(isset($valor)){ $Habitos->Valor=$valor; } else{; $Habitos->Valor="no";
        }
        $Habitos->Especificacion=$Especificacion;
        $Habitos->save();


   }
   public function Actualizar($id,$nombre, $valor,$Especificacion){
    $Habitos=Habitos_salud::find($id);
    $Habitos->Nombre=$nombre;
    if(isset($valor)){ $Habitos->Valor=$valor; } else{; $Habitos->Valor="no";
   }
    $Habitos->Especificacion=$Especificacion;
    $Habitos->save();
    return $Habitos->fk_Habitos;

}
}

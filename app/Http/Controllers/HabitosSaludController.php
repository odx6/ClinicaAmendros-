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
       
        $this->agregar($data['id'],'Tabaquismo',(isset($data['Tabaquismo'])) ? $data['Tabaquismo']:  "no",$data['ETabaquismo']);
        $this->agregar($data['id'],'Actividad física',(isset($data['Actividad-física'])) ? $data['Actividad-física']:  "no",$data['EActividad-física']);
        $this->agregar($data['id'],'Alcoholismo',(isset($data['Alcholismo'])) ? $data['Alcholismo']:  "no",$data['EAlcholismo']);
        $this->agregar($data['id'],'Se Automedica',  (isset($data['Se-Automedica'])) ? $data['Se-Automedica']:  "no",$data['ESe-Automedica']);
        $this->agregar($data['id'],'Drogas', (isset($data['Drogas'])) ? $data['Drogas']:  "no",$data['EDrogas']);
        $this->agregar($data['id'],'Pasa tiempo',(isset($data['Pasatiempo'])) ? $data['Pasatiempo']:  "no",$data['EPasatiempo']);
        
       // return response()->json($data);
        $paciente=$data['id'];
     
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Hábitos de la salud agregados  correctamente!');
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
        $this->Actualizar($data['IDTabaquismo'],'Tabaquismo',(isset($data['Tabaquismo'])) ? $data['Tabaquismo']:  "no",$data['ETabaquismo']);
        $this->Actualizar($data['IDActividad_física'],'Actividad física',(isset($data['Actividad_física'])) ? $data['Actividad_física']:  "no",$data['EActividad_física']);
        $this->Actualizar($data['IDAlcholismo'],'Alcholismo',(isset($data['Alcholismo'])) ? $data['Alcholismo']:  "no",$data['EAlcholismo']);
        $this->Actualizar($data['IDSe_Automedica'],'Se Automedica',(isset($data['Se_Automedica'])) ? $data['Se_Automedica']:  "no",$data['ESe_Automedica']);
        $this->Actualizar($data['IDDrogas'],'Drogas',(isset($data['Drogas'])) ? $data['Drogas']:  "no",$data['EDrogas']);
        $this->Actualizar($data['IDPasa_tiempo'],'Pasa tiempo',(isset($data['Pasatiempo'])) ? $data['Pasatiempo']:  "no",$data['EPasa_tiempo']);
       // return response()->json($data);
        $paciente=$this->Actualizar($data['IDPasa_tiempo'],'Pasa tiempo',(isset($data['Pasa_tiempo'])) ? $data['Pasa_tiempo']:  "no",$data['EPasa_tiempo']);
     
        return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Hábitos de la salud actualizados correctamente!');
        
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
        return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Hábitos de la salud eliminados correctamente!');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Antecedentes_Ph;
use App\Models\Signos_Vitales;
class AntecedentesPhController extends Controller
{

    public function index()
    {
        $id=request('id');
        $paciente=Paciente::find($id);
        $idDoc=$paciente->PacienteDoctor;
    

        return view('Fisioterapia.Antecedentes.index',compact('id','idDoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $data = $request->all();

        $this->agregar($data['id'],'Diabetes',(isset($data['Diabetes'])) ? $data['Diabetes']:  "no",$data['EDiabetes']);
        $this->agregar($data['id'],'Enf.Reumáticas', (isset($data['EnfReumaticas'])) ? $data['EnfReumaticas']:  "no",$data['EEnf']);
        $this->agregar($data['id'],'Alergias',(isset($data['Alergias'])) ? $data['Alergias']:  "no",$data['EAlergias']);
        $this->agregar($data['id'],'Encames',(isset($data['Encames'])) ? $data['Encames']:  "no",$data['EEncames']);
        $this->agregar($data['id'],'HTA',(isset($data['HTA'])) ? $data['HTA']:  "no"
,$data['ETA']);
        $this->agregar($data['id'],'Accidentes',(isset($data['Accidentes'])) ? $data['Accidentes']:  "no",$data['EAccidentes']);
        $this->agregar($data['id'],'Cáncer', (isset($data['Cáncer'])) ? $data['Cáncer']:  "no",$data['ECancer']);
        $this->agregar($data['id'],'Cardiopatías',(isset($data['Cardiopatias'])) ? $data['Cardiopatias']:  "no",$data['ECardiopatias']);
        $this->agregar($data['id'],'Transfusiones',(isset($data['Transfusiones'])) ? $data['Transfusiones']:  "no",$data['ETransfunciones']);
        $this->agregar($data['id'],'Cirugías', (isset($data['Cirugías'])) ? $data['Cirugías']:  "no",$data['ECirugias']);
        $this->agregar($data['id'],'Fracturas',(isset($data['Fracturas'])) ? $data['Fracturas']:  "no",$data['EFracturas']);
        $this->agregar($data['id'],'Espasmos',(isset($data['Espasmos'])) ? $data['Espasmos']:  "no",$data['EEspasmos']);
        
         $SignosVitales= new Signos_Vitales;
        $SignosVitales->fk_Signos=$data['id'];
        $SignosVitales->TA=$data['TA'];
        $SignosVitales->Temp=$data['Temp'];
        $SignosVitales->FC=$data['FC'];
        $SignosVitales->FR=$data['FR'];
        $SignosVitales->save();

        $paciente=$data['id'];
       // return response()->json($data);
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Antecedentes Patológicos agregados  correctamente!');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();
        $this->Actualizar($data['IDDiabetes'],'Diabetes',(isset($data['Diabetes'])) ? $data['Diabetes']:  "no",$data['EDiabetes']);
        $this->Actualizar($data['IDEnf_Reumáticas'],'Enf.Reumaticas',(isset($data['Enf_Reumáticas'])) ? $data['Enf_Reumáticas']:  "no",$data['EEnf_Reumáticas']);
        $this->Actualizar($data['IDAlergias'],'Alergias',(isset($data['Alergias'])) ? $data['Alergias']:  "no",$data['EAlergias']);
        $this->Actualizar($data['IDEncames'],'Encames',(isset($data['Encames'])) ? $data['Encames']:  "no",$data['EEncames']);


        $this->Actualizar($data['IDHTA'],'HTA',(isset($data['HTA'])) ? $data['HTA']:  "no"
,$data['EHTA']);
        $this->Actualizar($data['IDAccidentes'],'Accidentes',(isset($data['Accidentes'])) ? $data['Accidentes']:  "no",$data['EAccidentes']);
        $this->Actualizar($data['IDCáncer'],'Cáncer',(isset($data['Cáncer'])) ? $data['Cáncer']:  "no",$data['ECáncer']);
        $this->Actualizar($data['IDCardiopatías'],'Cardiopatías',(isset($data['Cardiopatias'])) ? $data['Cardiopatias']:  "no",$data['ECardiopatías']);
        $this->Actualizar($data['IDTransfusiones'],'Transfusiones',(isset($data['Transfusiones'])) ? $data['Transfusiones']:  "no",$data['ETransfusiones']);
        $this->Actualizar($data['IDCirugías'],'Cirugías',(isset($data['Cirugías'])) ? $data['Cirugías']:  "no",$data['ECirugías']);
        $this->Actualizar($data['IDFracturas'],'Fracturas',(isset($data['Fracturas'])) ? $data['Fracturas']:  "no",$data['EFracturas']);
        $this->Actualizar($data['IDEspasmos'],'Espasmos',(isset($data['Espasmos'])) ? $data['Espasmos']:  "no",$data['EEspasmos']);

           
        $SignosVitales=Signos_Vitales::find($data['IDSignos']);
       
        $SignosVitales->TA=$data['TA'];
        $SignosVitales->Temp=$data['Temp'];
        $SignosVitales->FC=$data['FC'];
        $SignosVitales->FR=$data['FR'];
        $SignosVitales->save();
        $paciente=$SignosVitales->fk_Signos;
        //return response()->json($data);
        return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Antecedentes Patológicos Actualizados  correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $data = $request->all();

        $here=$data['id'];
        $signos=$data['id'];
         $paciente='';
        foreach($here as $her){
             $dato =Antecedentes_Ph::find($her);
  
        if ($dato) {
          
            $paciente=$dato->fk_Antecedentes_ph;
            $dato->delete();
            
        } else {
            
        }



        }
        // signos

         foreach($signos as $signo){
             $dato =Signos_Vitales::find($signo);
           
        if ($dato) {
          
  
            $dato->delete();
            
        } else {
            
        }
        


        }


        //return response()->json($data);
          return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Antecedentes Patológicos Eliminados  correctamente!');
    }
    public function agregar($id,$nombre, $valor,$Especificacion){
        $Antecedente= new Antecedentes_Ph;
        $Antecedente->fk_Antecedentes_ph=$id;
        $Antecedente->Nombre_Antecedente=$nombre;
        if(isset($valor)){  $Antecedente->valor=$valor; } else{
       $Antecedente->valor="no"; }
        $Antecedente->Especificacion=$Especificacion;
        $Antecedente->save();

   }
   public function Actualizar($id,$nombre, $valor,$Especificacion){
    $Antecedente=Antecedentes_Ph::find($id);
   
    $Antecedente->Nombre_Antecedente=$nombre;
    if(isset($valor)){ $Antecedente->valor=$valor; } else{; $Antecedente->valor="no";
   }
    $Antecedente->Especificacion=$Especificacion;
    $Antecedente->save();

}
}

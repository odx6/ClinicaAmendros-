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

        $this->agregar($data['id'],'Diabetes',$data['Diabetes'],$data['EDiabetes']);
        $this->agregar($data['id'],'Enf.Reumaticas',$data['EnfReumaticas'],$data['EEnf']);
        $this->agregar($data['id'],'Alergias',$data['Alergias'],$data['EAlergias']);
        $this->agregar($data['id'],'Encames',$data['Encames'],$data['EEncames']);
        $this->agregar($data['id'],'HTA',$data['HTA'],$data['ETA']);
        $this->agregar($data['id'],'Accidentes',$data['Accidentes'],$data['EAccidentes']);
        $this->agregar($data['id'],'Cáncer',$data['Cáncer'],$data['ECancer']);
        $this->agregar($data['id'],'Cardiopatías',$data['Cardiopatias'],$data['ECardiopatias']);
        $this->agregar($data['id'],'Transfusiones',$data['Transfusiones'],$data['ETransfunciones']);
        $this->agregar($data['id'],'Cirugías',$data['Cirugías'],$data['ECirugias']);
        $this->agregar($data['id'],'Fracturas',$data['Fracturas'],$data['EFracturas']);
        $this->agregar($data['id'],'Espasmos',$data['Espasmos'],$data['EEspasmos']);
        
         $SignosVitales= new Signos_Vitales;
        $SignosVitales->fk_Signos=$data['id'];
        $SignosVitales->TA=$data['TA'];
        $SignosVitales->Temp=$data['Temp'];
        $SignosVitales->FC=$data['FC'];
        $SignosVitales->FR=$data['FR'];
        $SignosVitales->save();

        $paciente=$data['id'];
       // return response()->json($data);
         return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Antecedentes Patologicos agregados  correctamente!');

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
        $this->Actualizar($data['IDDiabetes'],'Diabetes',$data['Diabetes'],$data['EDiabetes']);
        $this->Actualizar($data['IDEnf_Reumaticas'],'Enf.Reumaticas',$data['Enf_Reumaticas'],$data['EEnf_Reumaticas']);
        $this->Actualizar($data['IDAlergias'],'Alergias',$data['Alergias'],$data['EAlergias']);
        $this->Actualizar($data['IDEncames'],'Encames',$data['Encames'],$data['EEncames']);
        $this->Actualizar($data['IDAccidentes'],'Accidentes',$data['Accidentes'],$data['EAccidentes']);
        $this->Actualizar($data['IDCáncer'],'Cáncer',$data['Cáncer'],$data['ECáncer']);
        $this->Actualizar($data['IDCardiopatías'],'Cardiopatías',$data['Cardiopatías'],$data['ECardiopatías']);
        $this->Actualizar($data['IDTransfusiones'],'Transfusiones',$data['Transfusiones'],$data['ETransfusiones']);
        $this->Actualizar($data['IDCirugías'],'Cirugías',$data['Cirugías'],$data['ECirugías']);
        $this->Actualizar($data['IDFracturas'],'Fracturas',$data['Fracturas'],$data['EFracturas']);
        $this->Actualizar($data['IDEspasmos'],'Espasmos',$data['Espasmos'],$data['EEspasmos']);

           
        $SignosVitales=Signos_Vitales::find($data['IDSignos']);
       
        $SignosVitales->TA=$data['TA'];
        $SignosVitales->Temp=$data['Temp'];
        $SignosVitales->FC=$data['FC'];
        $SignosVitales->FR=$data['FR'];
        $SignosVitales->save();
        $paciente=$SignosVitales->fk_Signos;
        //return response()->json($data);
        return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Antecedentes Patologicos Actualizados  correctamente!');
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
          return redirect()->route('Doctor.histo', compact('paciente'))->with('mensaje', '¡Antecedentes Patologicos Eliminados  correctamente!');
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

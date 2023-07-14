<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\F_ExploracionFisica;
use App\Models\Tratamientos_p;
use App\Models\Antecedentes_Ph;
use App\Models\Habitos_salud;
use App\Models\Signos_Vitales;
use App\Models\Estado_ingravidez;
use App\Models\DIME_Rehabilitacion;
use App\Models\Cicatriz_Q;
use App\Models\Traslados;
use App\Models\Marcha_Deambulacion;
use App\Models\Escala_dolor;
use App\Models\Evaluacion;
use App\Models\Prueba_Ms;
use App\Models\Movimiento;
use App\Models\VistaPostura;
use App\Models\Evaluacion_postura;
use App\Models\Formulario_Valoracion;
use App\Models\Plan_Analitico;
use App\Models\Analisis_marcha;
use App\Models\nota;

class ControllerFHistorial extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();

        if(isset($data['FisioExploraciones'])){

            $Exploracion = new F_ExploracionFisica;
             
               $Exploracion->create([
                'fk_Exploracion_ff' => $data['id'],
                'Peso' => $data['Peso'],
                'Estatura' => $data['Estatura'],
                'IMC' => $data['IMC'],
                'Etnia' => $data['Etnia'],
                'Motivo' => $data['Motivo'],
            ]);

        }

      if(isset($data['FisioTrata'])){

          $Tratamiento = new Tratamientos_p;
             
               $Tratamiento->create([
                 'fk_tratamientos_p'=>$data['id'],
                'des_tratamiento'=>$data['Tratamiento'],
            ]);

      }  


       if(isset($data['FisioAnte'])){

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
        

       } 
        if(isset($data['FisioHabitos'])){

        $this->agregar2($data['id'],'Tabaquismo',$data['Tabaquismo'],$data['ETabaquismo']);
        $this->agregar2($data['id'],'Actividad física',$data['Actividad-física'],$data['EActividad-física']);
        $this->agregar2($data['id'],'Alcholismo',$data['Alcholismo'],$data['EAlcholismo']);
        $this->agregar2($data['id'],'Se Automedica',$data['Se-Automedica'],$data['ESe-Automedica']);
        $this->agregar2($data['id'],'Drogas',$data['Drogas'],$data['EDrogas']);
        $this->agregar2($data['id'],'Pasa tiempo',$data['Pasatiempo'],$data['EPasatiempo']);

        }
        if(isset($data['FisioIngra'])){

        $Estado= new Estado_ingravidez;
        $Estado->fk_ingravidez=$data['id'];
        $Estado->Embarazada=$data['embarazada'];
        $Estado->Especificacion=$data['Especificacion'];
        $Estado->Numero_hijos=$data['hijos'];
        $Estado->save();

        } 
        if(isset($data['FisioDiagnostico'])){
             $Diagnostico =new DIME_Rehabilitacion;
        $Diagnostico->fk_dmi =$data['id'];
        $Diagnostico->Reflejos =$data['Reflejos'];
        $Diagnostico->Sensibilidad =$data['Sensibilidad'];
        $Diagnostico->LenguajeOrientacion=$data['LeOr'];
        $Diagnostico->Otros=$data['Otros'];
        $Diagnostico->save();


        } 
        if(isset($data['FisioCica'])){
        $Cicatriz = new Cicatriz_Q;
        $Cicatriz->fk_cicatriz = $data['id'];
        (isset($data['Sitio'])) ? $Cicatriz->sitio = $data['Sitio']: $Cicatriz->sitio = "no";
        (isset($data['Abierta'])) ? $Cicatriz->abierta = $data['Abierta']: $Cicatriz->abierta = "no";
        (isset($data['Queloide'])) ? $Cicatriz->queloide = $data['Queloide']: $Cicatriz->queloide = "no";
        (isset($data['Retractil'])) ? $Cicatriz->Retractil = $data['Retractil']: $Cicatriz->Retractil = "no";
        (isset($data['Con-Aderencia'])) ? $Cicatriz->Con_Adherencia = $data['Con-Aderencia']: $Cicatriz->Con_Adherencia = "no";
        (isset($data['Hipertrófica'])) ? $Cicatriz->Hipertrofica = $data['Hipertrófica']: $Cicatriz->Hipertrofica = "no";
        $Cicatriz->save();

        } 
        if(isset($data['FisioTraslados'])){

            $Traslado= new traslados;
         $Traslado->fk_traslados=$data['id'];
         $Traslado->Val_inicial=$data['Inicial'];
         $Traslado->Val_final=$data['Final'];
         $Traslado->save();
        } 
        if(isset($data['FisioDeam'])){
            $Marcha = new Marcha_Deambulacion;
        $Marcha->fk_marcha=$data['id'];
        (isset($data['Libre'])) ? $Marcha->libre = $data['Libre']: $Marcha->libre = "no";
        (isset($data['Claudicante'])) ? $Marcha->Claudicante = $data['Claudicante']: $Marcha->Claudicante= "no";
        (isset($data['Con-ayuda'])) ? $Marcha->Con_ayuda = $data['Con-ayuda']: $Marcha->Con_ayuda= "no";
        (isset($data['Espasticas'])) ? $Marcha->Espastica = $data['Espasticas']: $Marcha->Espastica= "no";
        (isset($data['Ataxica'])) ? $Marcha->Alaxicas    = $data['Ataxica']: $Marcha->Alaxicas  = "no";
        (isset($data['DeamOtros'])) ? $Marcha->Otros    = $data['Otros']: $Marcha->Otros  = "no";
        (isset($data['Observaciones'])) ? $Marcha->Observaciones_marcha    = $data['Observaciones']: $Marcha->Observaciones_marcha  = "no";

        $Marcha->save();

        } 
        if(isset($data['FisioDolor'])){

              $Escala= new Escala_dolor;
         $Escala->fk_escala=$data['id'];
         $Escala->Escala=$data['Escala'];
         $Escala->save();
        } 
        if(isset($data['FisioMuscular'])){

             $Evalauciaon= new Evaluacion;
         $Evalauciaon->fk_evaluacion=$data['id'];
         $Evalauciaon->Nombre_miembro=$data['Nombre'];
         $Evalauciaon->Tipo='Muscular';
         $Evalauciaon->Val_iquierda=$data['izquierda'];
         $Evalauciaon->Val_derecha=$data['Derecha'];
         $Evalauciaon->save();
        } 
        if(isset($data['FisioNota'])){
              $Nota= new  nota;
        $Nota->fk_n=request('id');
        $Nota->Nota=request('NOT');
        $Nota->Tipo=request('TIPO');
        $Nota->save();
        }
        if(isset($data['FisioSuperiores'])){
              $Prueba = new Prueba_Ms;
        $Prueba->fk_prueba=$data['id'];
        $Prueba->NombrePrueba=$data['NombreMiembro'];
        $Prueba->Observaciones_prue=$data['observaciones'];
       //  $Prueba->Tipo=$data['TipoM'];
         $Prueba->Tipo='Superior';
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

        }
        if(isset($data['FisioFrontal'])){
              $Vista= new VistaPostura;
        $Vista->fk_vista=$data['id'];
        $Vista->Nombre="Vista Frontal";
        $Vista->Tipo="Frontal";
        $Vista->save();
           if($request->input('PosturasFrontal')){
foreach ($request->input('PosturasFrontal') as $PosturaData) {
            //Busca el moviemiento
            $Evaluacion = new Evaluacion_postura;

            $Evaluacion->create([
                'fk_postura' => $Vista->pk_vista,
                'Inclinacion_Corporal' => $PosturaData['Nombre'],
                'valor' => $PosturaData['L'],
                'Observaciones' => $PosturaData['Observaciones'],
                // Otros campos de cliente que desees actualizar
            ]);
        }        

        }
        } 
        if(isset($data['FisioInLateral'])){
            $Vista= new VistaPostura;
        $Vista->fk_vista=$data['id'];
        $Vista->Nombre="Vista Lateral";
        $Vista->Tipo="Lateral";
        $Vista->save();
           if($request->input('PosturasLateral')){
foreach ($request->input('PosturasLateral') as $PosturaData) {
            //Busca el moviemiento
            $Evaluacion = new Evaluacion_postura;

            $Evaluacion->create([
                'fk_postura' => $Vista->pk_vista,
                'Inclinacion_Corporal' => $PosturaData['Nombre'],
                'valor' => $PosturaData['L'],
                'Observaciones' => $PosturaData['Observaciones'],
                // Otros campos de cliente que desees actualizar
            ]);
        }        

        }

        }
        if(isset($data['FisioPosterior'])){

             $Vista= new VistaPostura;
        $Vista->fk_vista=$data['id'];
        $Vista->Nombre="Vista Posterior";
        $Vista->Tipo="Posterior";
        $Vista->save();
           if($request->input('PosturasPosterior')){
foreach ($request->input('PosturasPosterior') as $PosturaData) {
            //Busca el moviemiento
            $Evaluacion = new Evaluacion_postura;

            $Evaluacion->create([
                'fk_postura' => $Vista->pk_vista,
                'Inclinacion_Corporal' => $PosturaData['Nombre'],
                'valor' => $PosturaData['L'],
                'Observaciones' => $PosturaData['Observaciones'],
                // Otros campos de cliente que desees actualizar
            ]);
        }        

        }
        } 
        if(isset($data['FisioFormulario'])){

             $Formulario =new Formulario_Valoracion;
         $Formulario->fk_formulario=$data['id'];
         $Formulario->P_pies_juntos=$data['pregunta1'];
         $Formulario->P_semitandem=$data['pregunta2'];
         $Formulario->P_tandem=$data['pregunta3'];
         $Formulario->Segundos=$data['pregunta4'];
        
         $Formulario->Comentarios=$data['NOT'];
         $Formulario->Save();
        } 
        if(isset($data['FisioPlan'])){
            $Plan = new Plan_Analitico;
        $Plan->fk_plan=$data['id'];
        $Plan->Objetivos=$data['Ob'];
        $Plan->Hipotesis=$data['Hipostesis'];
        $Plan->Estrucutura_corp=$data['Estructura'];
        $Plan->Funcion_Corporal=$data['Funcion'];
        $Plan->Actividad=$data['Actividad'];
        $Plan->Participacion=$data['Participacion'];
        $Plan->Diagnostico=$data['Diagnostico'];
        $Plan->plan=$data['Plan'];
        $Plan->save();
        } 
       if(isset($data['FisioAnalisis'])){

         $Marcha = new Analisis_marcha;
        $Marcha->fk_Analis_marcha=$data['id'];
        $Marcha->valor1=$data['Valor1'];
        $Marcha->valor2=$data['Valor2'];
        $Marcha->valor3=$data['Valor3'];
        $Marcha->valor4=$data['Valor4'];
        $Marcha->valor5=$data['Valor5'];
        $Marcha->valor6=$data['Valor6'];
        $Marcha->valor7=$data['Valor7'];
        $Marcha->valor8=$data['Valor8'];
        $Marcha->valor9=$data['Valor9'];
        $Marcha->valor10=$data['Valor10'];
        $Marcha->total=$data['Total'];
        $Marcha->save();
       }  
         

         return response()->json($data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
      public function agregar($id,$nombre, $valor,$Especificacion){
        $Antecedente= new Antecedentes_Ph;
        $Antecedente->fk_Antecedentes_ph=$id;
        $Antecedente->Nombre_Antecedente=$nombre;
        if(isset($valor)){  $Antecedente->Valor=$valor; } else{
       $Antecedente->Valor="no"; }
        $Antecedente->Especificacion=$Especificacion;
        $Antecedente->save();

   }
     public function agregar2($id,$nombre, $valor,$Especificacion){
        
        $Habitos= new Habitos_salud;
        $Habitos->fk_Habitos=$id;
        $Habitos->Nombre=$nombre;
        if(isset($valor)){ $Habitos->Valor=$valor; } else{; $Habitos->Valor="no";
        }
        $Habitos->Especificacion=$Especificacion;
        $Habitos->save();

   }
}

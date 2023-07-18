<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        @page {

            margin: 0cm;
            margin-left: 40px;
            margin-right: 40px;
            margin-top: 20px;

        }

        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            text-align: center;
            line-height: 35px;
        }
        .page-break {
      page-break-before: always;
    }
     .espacio {
      margin-bottom: 100px;
    }

       
    </style>
</head>

<body>
    <header>

        <img src="./src/assets/img/clinica.jpeg" class="navbar-logo" alt="logo" height="80" style="float:left;"
            class="img">
        <h4>Clínica Almendros <br>Unidad Médico Quirúrgica</h4>

    </header>
     <div class="espacio"></div> 
    <main>
        
         <div class="container">
     <h2>Historial Clínico</h2>
    <div class="row">
      <div class="col-md-6">
        <h4>Información del Paciente</h4>
        <p><strong>Nombre :</strong> {{$Paciente->Nombre}} {{$Paciente->Apellido}}</p>
        <p><strong>Edad :</strong>{{$Paciente->Edad }}</p>
        <p><strong>Género :</strong>{{$Paciente->Sexo}}</p>
        <p><strong>Estado civil:</strong>{{$Paciente->Estado_civil}}</p>
        <p><strong>Origen :</strong>{{$Paciente->Origen }}</p>
        <p><strong>Ocupación :</strong>{{$Paciente->Ocupacion }}</p>
        <p><strong>Dirección :</strong>{{$Paciente->Direccion }}</p>
        <p><strong>Teléfono :</strong>{{$Paciente->Telefono }}</p>
        <p><strong>Religión  :</strong>{{$Paciente->Religion }}</p>
        <p><strong>Fecha Ingreso  :</strong>{{$Paciente->FechaIngreso }}</p>
        <p><strong>Fecha Salida  :</strong>{{$Paciente->FechaSalida }}</p>
        
      </div>
      
      <div class="col-md-6">
        @if(isset($ExploracionesF))
        <h4>Antecedentes Médicos</h4>
      @foreach($ExploracionesF as $Explo)
        <ul>
          <li>Peso  :{{$Explo->Peso}} kg</li>
          <li>Estatura :{{$Explo->Estatura}} M </li>
          <li>IMC :{{$Explo->IMC}}  </li>
          <li>Etnia :{{$Explo->Etnia}} M </li>
          <li>Motivo de la consulta :{{$Explo->Motivo}}  </li>
         
        </ul>
      @endforeach
      

      @endif
      </div>
       <div class="col-md-6">
        @if(isset($Tratamiento))
        <h4>Tratamientos Previos</h4>
     
        <ul>
           @foreach($Tratamiento as $Tratamiento)
          <li>{{$Tratamiento->des_tratamiento}}</li>
          
          @endforeach
        </ul>
      @endif
      </div>
    </div>
<div class="page-break"></div> 
  <div class="espacio"></div> 
    @if(isset($Antecedentes))
        <h4>Antecedentes Patológicos y Heredofamiliares</h4>
       
        <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Valor</th>
      <th scope="col">Especificación</th>
    </tr>
  </thead>
  <tbody>
     @foreach($Antecedentes as $Ante)
    <tr>
      <th scope="row">{{$Ante->Nombre_Antecedente}}</th>
      <td>{{$Ante->valor}}</td>
      <td>{{$Ante->Especificacion}}</td>
     
    </tr>

   
   @endforeach
    @if(isset($signos))
     @foreach($signos as $sig)
      <tr>
      <th scope="row">Signos vitales</th>
      <td> T/A {{$sig->TA}}</td>
      <td> TEMP {{$sig->Temp}}</td>
      <td> FC {{$sig->FC}}</td>
      <td> FR {{$sig->FR}}</td>
     
     
    </tr>
     @endforeach
      @endif
  </tbody>
</table>

       
    @endif

     @if(isset($habitos))
        <h4>Hábitos de salud  </h4>
       

        <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Valor</th>
      <th scope="col">Especificación</th>
    </tr>
  </thead>
  <tbody>
     @foreach($habitos as $ha)
    <tr>
      <th scope="row">{{$ha->Nombre}}</th>
      <td>{{$ha->Valor}}</td>
      <td>{{$ha->Especificacion}}</td>
     
    </tr>

   
   @endforeach

</table>

       
    @endif
 
 <div class="page-break"></div> 
  <div class="espacio"></div> 
   @if(isset($Ingravidez))
    <div class="row">
      <div class="col-md-12">
        <h4>En mujeres estado de ingravidez</h4>
   @foreach($Ingravidez as $in)
        <p>Esta embarazada : {{$in->Embarazada}} </p>
        <p>Especificación : {{$in->Especificacion}}</p>
        <p>Numero de hijos : {{$in->Numero_hijos}}</p>

   @endforeach
    </div>
     </div>
     </div>
   @endif

   @if(isset($DIME))
    <div class="row">
      <div class="col-md-12">
        @foreach($DIME as $dime)
        <h4>Diagnostico médico en rehabilitación </h4>
        <h5>Reflejos</h5>
        <p>{{$dime->Reflejos}}</p>
        <h5>Sensibilidad</h5>

        <p>{{$dime->Sensibilidad}}</p>

        <h5>Lenguaje/Orientacion</h5>
        
        <p>{{$dime->LenguajeOrientacion}}</p>
        <h5>Otros</h5>
        
        <p>{{$dime->Otros}}</p>
        @endforeach
      </div>
    </div>
  </div>
  @endif

@if(isset($Cicatriz))
  <h4>Cicatriz quirúrgica </h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sitio</th>
      <th scope="col">Queloide</th>
      <th scope="col">Retráctil</th>
      <th scope="col">Abierta</th>
      <th scope="col">Con aderencia</th>
      <th scope="col">Hipertrofica</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Cicatriz as $cica)
    <tr>
      <th scope="row">{{$cica->sitio}}</th>
      <td>{{$cica->abierta}}</td>
      <td>{{$cica->queloide}}</td>
      <td>{{$cica->Retractil}}</td>
      <td>{{$cica->Con_Adherencia}}</td>
      <td>{{$cica->Hipertrofica}}</td>
    </tr>
    @endforeach
  
  </tbody>
</table>
@endif
    @if(isset($Traslados))
    <div class="row">
      <div class="col-md-12">
        <h4>Traslados</h4>
        @foreach($Traslados as $tras)
        <p>Val.Inicial : {{$tras->Val_inicial}}</p>
        <p>Val.Inicial : {{$tras->Val_final}}</p>
        @endforeach
      </div>
    </div>
  </div>
@endif

<div class="page-break"></div> 
  <div class="espacio"></div> 

    @if(isset($MarchasDeam))
        <h4>Marcha/Deambulación  </h4>
       

        <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Libre</th>
      <th scope="col">Claudicante</th>
      <th scope="col">Con ayuda</th>
      <th scope="col">Espásticas</th>
      <th scope="col">Atáxicas</th>
      <th scope="col">Otros</th>
    </tr>
  </thead>
  <tbody>
     @foreach($MarchasDeam as $ma)
    <tr>
      <th scope="row">{{$ma->libre}}</th>
      <td>{{$ma->Claudicante}}</td>
      <td>{{$ma->Con_ayuda}}</td>
      <td>{{$ma->Espastica}}</td>
      <td>{{$ma->Alaxicas}}</td>
      <td>{{$ma->Otros}}</td>
     
    </tr>
    <tr>
      <td>Observaciones {{$ma->Observaciones_marcha}}</td>
     
    </tr>

   
   @endforeach

</table>

       
    @endif

    <!--Evaluacion muscular-->
    @if(isset($Evaluaciones))
    <div class="container">
                    <div class="row">
                        <h2>Evaluación muscular</h2>
                        <table class="table table-bordered">
                            <thead>

                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Grado 5</th>

                                    <td>Fuerza muscular contra resistencia completa</td>

                                </tr>
                                <tr>
                                    <th scope="row">Grado 4</th>
                                    <td>La fuerza muscular está reducid pero la contracción muscular puede realizar
                                        un movimiento articular contra resistencia. </td>

                                </tr>
                                <tr>
                                    <th scope="row">Grado 3</th>
                                    <td>La fuerza muscular está reducida tanto que el moviemiento articular solo
                                        puede realizarse contra la gravedad sin la resistencia del
                                        examinador.<br>Por ejemplo, la articulación del codo puede moverse desde
                                        extensión completa hasta felxión completa, comenzando con el brazo
                                        suspendido al lado del cuerpo. </td>

                                </tr>
                                <tr>
                                    <th scope="row">Grado 2</th>
                                    <td>Moviento activo que no puede vencer la fuerza de gravedad.Por ejemplo, el
                                        codo puede flexionarse completamente solo cuando el brazo es mantenido en un
                                        plano horizontal.</td>

                                </tr>
                                <tr>
                                    <th scope="row">Grado 1</th>
                                    <td>Esbozo de contracción muscular</td>

                                </tr>
                                <tr>
                                    <th scope="row">Grado 0'</th>
                                    <td>Ausencia de contracción muscular </td>

                                </tr>

                            </tbody>
                        </table>

                    </div>
                    <div class="row">
                        <h2>Evaluacion de fuerza</h2>
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre del miembro a evaluar</th>
                                    <th scope="col">Izquierda</th>
                                    <th scope="col">Derecha</th>
                                    

                                </tr>
                            </thead>
                            <tbody>
                              @foreach($Evaluaciones as $eva)
                                <tr>
                                    <th scope="row">
                                   
                                          <p>{{$eva->Nombre_miembro}}</p>  
                                       
                                    </th>
                                    <td>
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="izquierda">
                                           
                                            <option value="0" @if($eva->val_iquierda==0)selected @endif>Grado 0</option>
                                            <option value="1" @if($eva->val_iquierda==1)selected @endif>Grado 1</option>
                                            <option value="2" @if($eva->val_iquierda==2)selected @endif>Grado 2</option>
                                            <option value="3" @if($eva->val_iquierda==3)selected @endif>Grado 3</option>
                                            <option value="4" @if($eva->val_iquierda==4)selected @endif>Grado 4</option>
                                            <option value="5" @if($eva->val_iquierda==5)selected @endif>Grado 5</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Derecha">
                                            
                                            <option value="0" @if($eva->val_derecha==0)selected @endif>Grado 0</option>
                                            <option value="1" @if($eva->val_derecha==1)selected @endif>Grado 1</option>
                                            <option value="2" @if($eva->val_derecha==2)selected @endif>Grado 2</option>
                                            <option value="3" @if($eva->val_derecha==3)selected @endif>Grado 3</option>
                                            <option value="4" @if($eva->val_derecha==4)selected @endif>Grado 4</option>
                                            <option value="5" @if($eva->val_derecha==5)selected @endif>Grado 5</option>
                                        </select>
                                        </select>
                                    </td>
                                  
                                   
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                  
                   
                </div>

            </div>
            @endif
    <!---end- Evaluacion muscular-->
<div class="page-break"></div> 
  <div class="espacio"></div> 
    @if(isset($Notas))
    <div class="row">
      <div class="col-md-12">
        <h4>Nota Clínica -Valoración inicial</h4>
        @foreach($Notas as $not)
        <p>Nota : </p>
        <p>{{$not->Nota}}</p>
        @endforeach
      </div>
    </div>
  </div>
@endif



@if(isset($Pruebas))
<h4>Prueba de Arcos de movilidad para miembros Superiores</h4>
  @foreach($Pruebas as $super)

  <p>Nombre del miembro :{{$super->NombrePrueba}}</p>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Movimiento</th>
      <th scope="col">Grados</th>
    
    </tr>
  </thead>
  <tbody>
     @if ($super->Movimientos->count() > 0)
                                                    @foreach ($super->Movimientos as $movi)
    <tr>
      <th scope="row">{{$movi->NombreMovi}}</th>
      <td>{{$movi->valor}}° Grados</td> 
    </tr>
    @endforeach
    @endif

  </tbody>
</table>
<p>Observaciones : {{$super->Observaciones_prue}}</p>
@endforeach
@endif

@if(isset($PruebasInferiores))
<h4>Prueba de Arcos de movilidad para miembros Inferiores</h4>
  @foreach($PruebasInferiores as $super)

  <p>Nombre del miembro :{{$super->NombrePrueba}}</p>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">Movimiento</th>
      <th scope="col">Grados</th>
    
    </tr>
  </thead>
  <tbody>
     @if ($super->Movimientos->count() > 0)
                                                    @foreach ($super->Movimientos as $movi)
    <tr>
      <th scope="row">{{$movi->NombreMovi}}</th>
      <td>{{$movi->valor}}° Grados</td>
      
    </tr>
    @endforeach
    @endif

  </tbody>
</table>
<p>Observaciones : {{$super->Observaciones_prue}}</p>
@endforeach
@endif

<div class="page-break"></div> 
  <div class="espacio"></div> 
  @if(isset($PosturaFrontal))
<h4>Evaluación en la postura </h4>
  @foreach($PosturaFrontal as $super)
  <h5>{{$super->Nombre}}</h5>
  
 <table class="table">
  <thead>
    <tr>
      <th scope="col">(Alineacion Corporal)</th>
      <th scope="col">Grados</th>
      <th scope="col">Observaciones</th>
    
    </tr>
  </thead>
  <tbody>
     @if ($super->Posturas->count() > 0)
                                                    @foreach ($super->Posturas as $movi)
    <tr>
      <th >{{$movi->Inclinacion_Corporal}}</th>
      <td>
        @if($movi->valor=="L")<p>Leve</p>
        @elseif($movi->valor=="M")<p>Moderado</p>
        @else($movi->valor=="M")<p>Severo</p>
        @endif


      </td>
      <td>{{$movi->Observaciones}}</td>
      
    </tr>
    @endforeach
    @endif

  </tbody>
</table>
<div class="page-break"></div> 
  <div class="espacio"></div> 
@endforeach
@endif

@if(isset($Formularios))
 @foreach ($Formularios as $form)
        
                     <div class="container">
                <h2>Formulario de valoración  de la batería breve valoración  funcional</h2>
  <div class="row">
    <div class="col-sm">
      <h4>Pruebas de equilibrio</h4>
      <p>El sujeto debe de ser capaz de ponerse de pie, sin ayuda de bastones o andadores.</p>
      <p>A.Posición con pies juntos</p>
      <div class="form-group">
      <select class="form-control formulario" name="pregunta1" >
      <option value="1" @if($form->P_pies_juntos == "1") selected @endif>(1)Se sostuvo durante 10 segundos</option>
      <option value="0" @if($form->P_pies_juntos == "0") selected @endif >(0)No se sostuvo durante 10 segundos o No lo intento</option>
        </select>
     </div>
      <h4>En caso de obtener 0 puntos  termine la prueba de equilibrio</h4>

      <h4>B.Posición  de semitándendem </h4>
      <div class="form-group">
      <select class="form-control" name="pregunta2">
      <option value="1" @if($form->P_semitandem == "1") selected @endif>(1)Se sostuvo durante 10 segundos</option>
      <option value="0" @if($form->P_semitandem == "0") selected @endif>(0)No se sostuvo durante 10 segundos o No lo intento</option>
        </select>
     </div>
     <h4>Número de segundos con equilibrio si es inferior a los 10 segundos</h4>
     <h4>C.posicion en tándem completo</h4>
       <div class="form-group">
      <select class="form-control formulario" name="pregunta3">
      <option value="2" @if($form->P_tandem == "2") selected @endif>(2)Se sostuvo durante 10 segundos</option>
      <option value="1" @if($form->P_tandem == "1") selected @endif>(1)No se sostuvo durante 3 a 9 segundos</option>
      <option value="0" @if($form->P_tandem == "0") selected @endif>(0)No se sostuvo durante al menos 3 seg o no lo intento</option>
        </select>
     </div>
    </div>
    <div class="col-sm">
       <h4>Número de segundos con equilibrio si es inferior a 10 segundos </h4>
      <div class="form-group">
        <input type="text" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            value="{{$form->Segundos}}"
                                                                            name="total"
                                                                            placeholder="puntuacion">
     </div>
     <h4>D.Puntuación total de equilibrio(Suma de puntos ) </h4>
      <div class="form-group">
       <input type="text" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            value="{{$form->Total}}"
                                                                            name="total"
                                                                            placeholder="puntuacion">
     </div>
<div class="page-break"></div> 
  <div class="espacio"></div>
<p>Si no se realizó la prueba </p>
<p>Indique el motivo que mejor refleja por qué el sujeto  no realizo las prueas. </p>
<p>*Lo intentó pero no fue capaz ...1 </p>
<p>*El sujeto no pudo ponerse  de pie sin ayuda ...2</p>
<p>*No lo intentó, usted lo notaba inseguro ...3</p>
<p>*No lo intentó, el sujeto se sentía inseguro...4 </p>
<p>*El sujeto no entendió las intrucciónes...5 </p>
<p>*Otro motivo (especifique lo)...6 </p>
<p>*El sujeto rechazó la prueba...7  </p>
<h2>Comentarios</h2>
<div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="NOT">{{$form->Comentarios}}</textarea>
                            </div>

    </div>
   
  </div>
</div>

@endforeach
@endif
<div class="page-break"></div> 
  <div class="espacio"></div> 
@if(isset($Marchas))
@foreach ($Marchas as $marcha)
            
                <div class="container">
                <h2>Análisis de la marcha</h2>
                <div class="row">
                    <div class="col-sm">

                        <!---septimo container-->
                        <div class="container">

                            <div class="container">
                                <h2>Marcha </h2>
                                <div class="col-sm">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">INICIO DE LA MARCHA (Inmediatamente después de decir “camine”) </th>
                                                    <th scope="col"> si = 0 no =1 Moderado=2</th>

                                                </tr>
                                                <tr aria-hidden="true" class="mt-3 d-block table-row-hidden">
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">Duda o vacila o múltiples
                                                                intentos para comenzar
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">

                                                            <select class="form-control Marcha"
                                                                name="Valor1">
                                                                <option value="0" @if($marcha->valor1==0) selected @endif>(0)si</option>
                                                                <option value="1" @if($marcha->valor1==1) selected @endif>(1)No </option>
                                                            
                                                            </select>
                                                        </div>
                                                    </td>
                                                    
                                                    


                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">
                                                                LONGITUD Y ALTURA DEL PASO
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">El pie derecho no sobrepasa al izquierdo con el paso en la fase del balanceo
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">

                                                            <select class="form-control Marcha"
                                                                name="Valor2">
                                                                <option value="0" @if($marcha->valor2==0) selected @endif>(0)si</option>
                                                                <option value="1" @if($marcha->valor2==1) selected @endif>(1)No </option>
                                                                
                                                            </select>
                                                        </div>
                                                    </td>
                                                    
                                                    


                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">El pie derecho no se levanta completamente del suelo con el paso en la fase del balanceo
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">

                                                            <select class="form-control Marcha"
                                                                name="Valor3">
                                                                <option value="0" @if($marcha->valor3==0) selected @endif>(0)si</option>
                                                                <option value="1" @if($marcha->valor3==1) selected @endif>(1)No </option>
                                                                
                                                            </select>
                                                        </div>
                                                    </td>
                                                    
                                                    


                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">El pie izquierdo no sobrepasa el derecho con el paso en la fase del balanceo
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">

                                                            <select class="form-control Marcha"
                                                                name="Valor4">
                                                                <option value="0" @if($marcha->valor4==0) selected @endif >(0)si</option>
                                                                <option value="1" @if($marcha->valor4==1) selected @endif>(1)No </option>
                                                                
                                                            </select>
                                                        </div>
                                                    </td>
                                                    
                                                    


                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">El pie izquierdo no se levanta completamente del suelo con el paso en la fase del balanceo
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">

                                                            <select class="form-control Marcha"
                                                                name="Valor5">
                                                                <option value="0" @if($marcha->valor5==0) selected @endif>(0)si</option>
                                                                <option value="1" @if($marcha->valor5==1) selected @endif>(1)No </option>
                                                                
                                                            </select>
                                                        </div>
                                                    </td>
                                                    
                                                    


                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">
                                                                SIMETRIA DEL PASO
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">La longitud del paso con el pie derecho e izquierdo es diferente
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">

                                                            <select class="form-control Marcha"
                                                                name="Valor6">
                                                                <option value="0" @if($marcha->valor6==0) selected @endif>(0)si</option>
                                                                <option value="1" @if($marcha->valor6==1) selected @endif>(1)No </option>
                                                                
                                                            </select>
                                                        </div>
                                                    </td>
                                                    
                                                    


                                                </tr>
                                                 <div class="page-break"></div> 
  <div class="espacio"></div> 
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">
                                                                CONTINUIDAD DE LOS PASOS
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>

                                                    <td>
                                                        <div class="form-group">
                                                            <label for="formGroupExampleInput">Para o hay discontinuidad entre los pasos
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">

                                                            <select class="form-control Marcha"
                                                                name="Valor7">
                                                                <option value="0" @if($marcha->valor7==0) selected @endif>(0)si</option>
                                                                <option value="1" @if($marcha->valor7==1) selected @endif>(1)No </option>
                                                                
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput">
                                                                    TRAYECTORIA <br>(Estimada en relación a las baldosas del suelo de 30 cm;<br> se observa la desviación de un pie en 3 mts de distancia)
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput">Marcada desviación, utiliza ayuda
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
    
                                                                <select class="form-control Marcha"
                                                                    name="Valor8">
                                                                    <option value="0" @if($marcha->valor8==0) selected @endif>(0)si</option>
                                                                    <option value="1" @if($marcha->valor8==1) selected @endif>(1)No </option>
                                                                    <option value="2" @if($marcha->valor8==2) selected @endif>(2)Moderado </option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput">
                                                                    TRONCO
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput">Marcado balanceo o utiliza ayuda,<br> flexión de rodillas, espalda o extensión hacia afuera de los brazos
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
    
                                                                <select class="form-control Marcha"
                                                                    name="Valor9">
                                                                    <option value="0" @if($marcha->valor9==0) selected @endif>(0)si</option>
                                                                    <option value="1" @if($marcha->valor9==1) selected @endif>(1)No </option>
                                                                    <option value="2" @if($marcha->valor9==2) selected @endif>(2)Moderado </option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput">
                                                                    POSTURA EN LA MARCHA
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"> Talones separados
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
    
                                                                <select class="form-control Marcha"
                                                                    name="Valor10">
                                                                    <option value="0" @if($marcha->valor10==0) selected @endif>(0)si</option>
                                                                    <option value="1" @if($marcha->valor10==1) selected @endif>(1)No </option>
                                                                   
                                                                    
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <label for="formGroupExampleInput"> Suma Total
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
    
                                                                <input type="text" class="form-control" placeholder="Suma total" name="Total" id="Resultado" value="{{$marcha->total}}">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <!---table-->

                            <!--end table -->
                        </div>

                        <!---end--octavo container-->
                    </div>


                </div>
            </div>

@endforeach
@endif
<div class="page-break"></div> 
  <div class="espacio"></div> 

@if(isset($Planes))

@foreach($Planes as $plan )
  <div class="col-sm">
<h2> Plan Analítico de Atención Integral de Terapia Física</h2>
        <!---table-->
            <div class="container" >
  <div class="row"  >
    <div class="col" >
     <h5>Objetivos</h5>
     
     <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Ob">{{$plan->Objetivos}}</textarea>
                            </div>
    </div>
    <div class="col">
     <h5>Hipostesis</h5>

      <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Hipostesis">{{$plan->Hipotesis}}</textarea>
                            </div>
    </div>
     <div class="col">
     <h5>Estructura Corp</h5>

      <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Estructura">{{$plan->Estrucutura_corp}}</textarea>
                            </div>
    </div>
     <div class="col">
     <h5>Función Corporal </h5>
      <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Funcion">{{$plan->Funcion_Corporal}}</textarea>
                            </div>
    </div>
     <div class="col">
     <h5>Actividad</h5>
      <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Actividad">{{$plan->Actividad}}</textarea>
                            </div>
    </div>
     <div class="col">
     <h5>Participacion </h5>
      <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="Participacion">{{$plan->Participacion}}</textarea>
                            </div>
    </div>
  </div>
  <div class="row">
    <div class="col">
     <h5>Diagnóstico</h5>
      <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="Diagnostico">{{$plan->Diagnostico}}</textarea>
                            </div>
    </div>
    <div class="col">
     <h5>Plan</h5>
      <div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="Plan">{{$plan->Plan}}</textarea>
                            </div>
    </div>
    
  </div>
</div>
@endforeach
@endif
    </main>

    <footer>
        <p>Almendro 210, Colonia Reforma. CP. 68050</p>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>

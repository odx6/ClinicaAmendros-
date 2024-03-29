<html>
<head>
    <style>
        @page {

margin: 0cm;
margin-left: 40px;
margin-right: 40px;


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
            text-align:  center;
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
         .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      margin-top: 40px;
    }

    h1, h2 {
      text-align: center;
    }

    h2 {
      margin-top: 30px;
    }

    p {
      margin-bottom: 10px;
    }

    ul {
      margin: 10px 0;
      padding-left: 20px;
    }

    .signature {
      margin-top: 50px;
      display: block;
  
      
    }
    table{
    width: 100%;
    }
img{
   
    margin-top: 50px;
}
.image-container {
  text-align: center;
}

.image-container img {
    
  display: block;
  margin: 0 auto;
}

.image-container p {

  margin-top: 10px;
}
.table-cell {
  margin: 20px;
}
.justi{
  text-align: justify;
}

.Firmas{
    
  text-align: right;
}
.fecha{
    

    
    text-align: center;
  
}

    </style>
</head>
<body>
<header>
    
    <h4>Clínica Almendros <br>Unidad Médico Quirúrgica</h4>
   
   
</header>
<br>
<main>
    
   
   
  
    <div class="container">
        
        <h3 class="fecha">	CARTA DE CONSENTIMIENTO BAJO INFORMACION								
        </h3>
        <table>
           
            <tr>
              <td class="table-cell " > 
                <div class="image-container">
                    <img src="./src/assets/img/clinica.jpeg" class="navbar-logo" alt="logo" height="80" >
                    <p>Ulises Pérez Montesinos <br>Traumatólogo Ortopedista</p>
                <p>Una corta estancia<br>con calidez y calidad</p>
                </div>
            </td>
              <td class="table-cell ">
                
                <h2  >Información del paciente:</h2>
                <p>Nombre completo: <strong>{{$Paciente->Nombre}} {{$Paciente->Apellido}}</strong></p>
                <p>Edad: <strong>{{$Paciente->Edad}} Años</strong></p>
                <p>Domicilio: <strong>{{$Paciente->Direccion}}</strong></p>
                <p>Nombre del representante legal<br>, familiar o allegado: <strong>{{$NombreResponsable}}</strong></p>
                <p>Domicilio del representante legal: <strong>{{$DomicilioResponsable}}</strong></p>
                <p>Edad del representante legal: <strong>{{$EdadResponsable}}</strong></p>
                <p>En calidad de : <strong>{{ $CalidadPaciente}}</strong></p>

               
            </tr>

          
              
            <!-- Agrega más filas según sea necesario -->
          </table>
        
        
        
    
        
    
        <h4>DECLARO</h4>
        <p class="justi">
            Que el (la) Dr(a). {{$Doctor->ESPECIALIDAD}} me  ha  explicado que es conveniente proceder a {{ $Tratamiento }} y  que,  todo acto  médico, diagnóstico o  terapéutico,  sea quirúrgico  o no  quirúrgico,  lleva  implicito una  serie  de complicaciones mayores  o  menores  a  veces  potencialmente  serias,  incluyen  cierto  riesgo de  mortalidad  y  que pueden requerir tratamientos complementarios, mèdicos o quirúrgicos que aumentan su estancia hospitalaria, dichas complicaciones unas veces son derivadas directamente  de las  propias técnicas,  pero otras dependen del procedimiento, del estado previo del paciente y de los tratamientos que estàn recibiendo o de las posibles anomalias anatòmicas y/o de la utilización de los equipos médicos. Entre las complicaciones que pueden surgir en: {{ $Tratamiento }}</p>
            <p  class="justi">se encuentra {{ $CalidadPaciente }}																	
                Por lo que  he comprendido  las  explicaciones  que  se me han facilitado en un lenguaje claro y sencillo y que el médico que me ha atendido me realizó todas las observaciones y aclaró todas las dudas que le he planteado.																	
                También comprendo que en cualquier momento y  sin  dar  ninguna explicación, puedo revocar el consentimiento que ahora presto, por ello  manifiesto  que estoy  satisfecho  (a)  con la  información recibida y comprendo el  alcance de los riesgos del tratamiento y procedimiento.																	
                Del mismo modo designo a {{$NombreResponsable}}, para que exclusivamente  el (ella)  reciba información sobre mi estado de salud, diagnóstico, tratamiento y/o pronóstico y en tales condiciones 																	
                </p>
    
        <h4>CONSIENTO</h4>
        <p  class="justi">En que se me realicen los procedimientos de diagnóstico y tratamientos que me fueron explicados y que me doy por enterado en mi declaración. Asì como, me reservo expresamente el derecho de revocar mi consentimiento en cualquier momento antes de que el y/o los procedimientos, objeto de este documento sean una realidad.</p>
    @if($Revocar=="1")
        <p>Revoco el consentimiento presentado en fecha:											Oaxaca, Oax, a {{$Fecha->day}} de {{$Fecha->format('M')}} de {{$Fecha->year}}					
																	
            y no deseo proseguir el tratamiento que doy con esta fecha por finalizado, eximiendo de toda responsabilidad al médico tratante, una vez que me ha explicado los alcances clínicos de la suspensión del acto mencionado.																	
            </p>
             @endif
             @if($NoAcepta=="1")
            <p>Niego la autorización a que me realicen los procedimientos de diagnóstico y tratamiento que me fueron explicados y que doy por enterado en mi declaración</p>
            @endif
        
            <table >
                <td align="left">
                    
                    <br>
                    <p > _____________________________<br>{{$Doctor->ESPECIALIDAD}}</p>
                    <br>
                    <br>
                    <p > ______________________________<br>{{$NombreResponsable}}</p>
                    
                </td>
                <td align="left">
                    
                    <br>
                    <p class="Firmas"> __________________________<br>{{$Paciente->Nombre}} {{$Paciente->Apellido}}</p>
                    <br>
                    <br>

                    <p class="Firmas">____________________________<br>[Nombre y Firma de testigo]</p></td>
            
         
          
                  
        </div>
      
      </div>
     

</main>

<footer>
    <p class="fecha" id="fecha-actual">Oaxaca, Oax., a {{$Fecha->day}} de  {{$Fecha->format('M')}} de {{$Fecha->year}}   Almendro 210, Colonia Reforma. CP. 68050 </p>
    
</footer>

</body>
</html>
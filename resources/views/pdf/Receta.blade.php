<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title>Imprimir texto en Media Carta</title>
    <style>
       @page {
            size:  8.5in 5.5in; /* Tamaño Media Carta */
            margin: 0;
        }
        body {
            margin: 0.5in; /* Margen de 0.5 pulgadas en todos los lados */
            font-family: Arial, sans-serif;
            font-size: 10px;
        }
        .contenido {
            writing-mode: vertical-rl; /* Texto vertical de derecha a izquierda */
            transform: rotate(90deg); /* Gira el texto 180 grados */
            text-align: center;
            padding: 1in;
        }

    
        .contenido2 {
            text-align:left;
            padding: .5cm;
            margin-left: 6cm;
            margin-top: 3cm;
           
        }
        .izq{

            text-align: left;
        }
        .derecha{

text-align: right;
}
.abajo{

text-align: right;
}
.justificado {
    width: 10cm;
    text-align: justify;
  }
    </style>
</head>
<body>
    <div class="contenido2" >
        <table>

            <td><p class="izq">
                Receta Médica<br>
        
             
                
                Fecha de emisión: {{$Fecha->day}} de  {{$Fecha->format('M')}} de {{$Fecha->year}}
                </p></td>
                <td><p class="izq">Nombre del paciente:{{$Paciente->Nombre}} {{$Paciente->Apellido}}<br>
                    Edad: {{$Paciente->Edad}}<br>
                    Dirección: {{$Paciente->Direccion}}<br>
                    Teléfono: {{$Paciente->Telefono}}<br></p></td>
        </table>
        
        <div class="justificado">
            <p >
                {{$Receta}}
                
               
            </p>
          </div>
        
       
    <p class="abajo">________________________<br>DR. {{$Doctor->Nombre}} {{$Doctor->Apellidos}}<br></p>
    </div>
    
</body>
</html>

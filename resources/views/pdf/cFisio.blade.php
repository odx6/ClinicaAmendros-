<!DOCTYPE html>
<!-- saved from url=(0081)file:///C:/xampp/htdocs/ClinicaAlmendros/resources/views/pdf/Consentimiento2.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./Hello, world!_files/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<style>
  p {
      text-align: justify;
      text-justify: inter-word;
    }
</style>
    <title>Hello, world!</title>
  </head>
  <body>
  <p style="text-align:right;">Oaxaca de Juárez, Oax., a {{$Fecha->day}} de  {{$Fecha->format('M')}} de {{$Fecha->year}}</p>
  <h2 style="text-align:center;">CARTA DE CONSENTIMIENTO INFORMADO</h2>
  <br>
  <p style="text-align:justify;">Por este conducto DOY MI CONSENTIMIENTO para recibir la valoración y el tratamiento fisioterapéutico necesario, toda vez que el fisioterapeuta responsable me explicó lo relacionado a mi padecimiento y el tipo de tratamiento que recibiré.</p>
  <br>

<table class="table table-sm">
  <thead>
    <tr>
      <th colspan="4" style="background: rgb(224, 221, 221);"><p style="text-align:center;">Paciente</p></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nombre: </td>
      <td colspan="3">{{$Paciente->Nombre}} {{$Paciente->Apellido}}</td>
      
    </tr>
    <tr>
      <td>Diagnostico: </td>
      <td colspan="3">
        @if(isset($Planes))
        @foreach ($Planes as $Plan)
        <p>{{$Plan->Diagnostico}}  </p
            
        @endforeach
        @endif
      </td>
      
    </tr>
    <tr>
      
      <td>Edad</td>
      <td>{{$Paciente->Edad}}   años</td>
      <td>   Sexo</td>
      <td>{{$Paciente->Sexo}}</td>
    </tr>
     
    <tr>
      <td>Domicilio : </td>
      <td colspan="3"> {{$Paciente->Direccion}}</td>
      
    </tr>
     <tr>
      <td>Telefono : </td>
      <td colspan="3"> {{$Paciente->Telefono}}</td>
      
    </tr>
  </tbody>
</table>
<br>
 <p style="text-align:justify;">Me comprometo a RESPETAR el tiempo de los tratamientos, asistir puntualmente a las citas que me otorgue el fisioterapeuta a cargo, llevar a cabo el tratamiento y los cuidados que el fisioterapeuta me indique, por el tiempo que sea necesario. De ser necesario acudir a otro especialista, según convenga a mi rehabilitación.</p>
 <br>
  <p style="text-align:justify;">Declaro haber facilitado de manera leal y verdadera los datos sobre estado físico y salud de mi persona. Asimismo, decido dar mi conformidad libre, voluntaria y consciente a los tratamientos que se me han informado.</p>
<div class="container">
  <div class="row">
    <div class="col-sm">
    
      <p style="text-align:center">_____________________</p>
      <p style="text-align:center">{{$Paciente->Nombre}} {{$Paciente->Apellido}}</p>
      <p style="text-align:center"> FIRMA DEL PACIENTE</p>
    </div>
    <div class="col-sm">
      
      <p style="text-align:center">_____________________</p>
      <p style="text-align:center">{{$Doctor->Nombre}} {{$Doctor->Apellidos}}</p>
      <p style="text-align:center"> FIRMA DEL TERAPEUTA  </p>
    </div>
    
  </div>
</div>

<footer>
    <p style="text-align:center">Almendros 210 Col. Reforma, Oaxaca. Tel. 9513034979</p>
    
</footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="./Hello, world!_files/jquery.slim.min.js.descarga" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="./Hello, world!_files/bootstrap.bundle.min.js.descarga" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  
</body></html>
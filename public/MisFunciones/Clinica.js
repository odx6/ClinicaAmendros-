$(document).ready(function() {
    // Código jQuery aquí
    //alert("El documento ha sido cargado completamente.");
    // funcion para activar opciones 
    $('.desactivado').hide();
    $('#form-custom-switch-info').change(function() {
        if (this.checked) {
          $('#Ocultar').show();
        } else {
          $('#Ocultar').hide();
        }
      });
      $('#form-custom-switch-info2').change(function() {
        if (this.checked) {
          $('#OExploraciones').show();
        } else {
          $('#OExploraciones').hide();
        }
      });
      $('#form-custom-switch-info3').change(function() {
        if (this.checked) {
          $('#NPQuirurgicas').show();
        } else {
          $('#NPQuirurgicas').hide();
        }
      });
      //barra de dolor 
      $("#dolorBarra").on("input", function() {
        // Obtener el valor del rango
        var valor = $(this).val();
       
  
        // Asignar el valor al span
        $("#valorDolor").text(valor);
      });
    
      //end barra de dolor 


      //Suma de marchas
      $(".Marcha").change(function() {
        var suma = 0;
        //alert("cambio");
        $(".Marcha").each(function() {
          suma += parseInt($(this).val());
        });
        $("#Resultado").val(suma);
      });

    //termina opcion


      //Fisiotrapia 
       $('#FisioExploraciones').change(function() {
        if (this.checked) {
          $('#FisioExplo').show();
        } else {
          $('#FisioExplo').hide();
        }
      });s

         $('#FisioTrata').change(function() {
        if (this.checked) {
          $('#FisioTratamientos').show();
        } else {
          $('#FisioTratamientos').hide();
        }
      });
           $('#FisioTrata').change(function() {
        if (this.checked) {
          $('#FisioAnalisis').show();
        } else {
          $('#FisioAnalisis').hide();
        }
      });



      //endFisioterapia

  });
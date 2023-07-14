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
      });

         $('#FisioTrata').change(function() {
        if (this.checked) {
          $('#FisioTratamientos').show();
        } else {
          $('#FisioTratamientos').hide();
        }
      });
           $('#FisioAnalisis').change(function() {
        if (this.checked) {
          $('#FisioAna').show();
        } else {
          $('#FisioAna').hide();
        }
      });
          //Antecedentes
           $('#FisioAnte').change(function() {
        if (this.checked) {
          $('#FisioAntecedente').show();
        } else {
          $('#FisioAntecedente').hide();
        }
      });
            //Cicatriz
           $('#FisioCica').change(function() {
        if (this.checked) {
          $('#FisioCicatriz').show();
        } else {
          $('#FisioCicatriz').hide();
        }
      });

         //Marcha Deambulacion
           $('#FisioDeambu').change(function() {
        if (this.checked) {
          $('#FisioDeam').show();
        } else {
          $('#FisioDeam').hide();
        }
      });
            //Dime
           $('#FisioDiagnostico').change(function() {
        if (this.checked) {
          $('#Fidiagnostico').show();
        } else {
          $('#Fidiagnostico').hide();
        }
      });

           //Dolor
           $('#FisioDolor').change(function() {
        if (this.checked) {
          $('#FiDolor').show();
        } else {
          $('#FiDolor').hide();
        }
      });
            //Formulario
           $('#FisioFormulario').change(function() {
        if (this.checked) {
          $('#FiForm').show();
        } else {
          $('#FiForm').hide();
        }
      });
            //Frontal
           $('#FisioFormulario').change(function() {
        if (this.checked) {
          $('#FiFrontal').show();
        } else {
          $('#FiFrontal').hide();
        }
      });
              //Habitos
           $('#FisioHabitos').change(function() {
        if (this.checked) {
          $('#FiHa').show();
        } else {
          $('#FiHa').hide();
        }
      });

          
             //Ingravidez
           $('#FisioIngra').change(function() {
        if (this.checked) {
          $('#Figra').show();
        } else {
          $('#Figra').hide();
        }
      });
            //Lateral
           $('#FisioInLateral').change(function() {
        if (this.checked) {
          $('#FiLateral').show();
        } else {
          $('#FiLateral').hide();
        }
      });
             //Muscular
           $('#FisioMuscular').change(function() {
        if (this.checked) {
          $('#FiMuscular').show();
        } else {
          $('#FiMuscular').hide();
        }
      });
            //Nota
           $('#FisioNota').change(function() {
        if (this.checked) {
          $('#FiNota').show();
        } else {
          $('#FiNota').hide();
        }
      });
            //Plan
           $('#FisioPlan').change(function() {
        if (this.checked) {
          $('#FiPlan').show();
        } else {
          $('#FiPlan').hide();
        }
      });
           //Posterior
           $('#FisioPosterior').change(function() {
        if (this.checked) {
          $('#FiPos').show();
        } else {
          $('#FiPos').hide();
        }
      });
             //Superior
           $('#FisioSuperiores').change(function() {
        if (this.checked) {
          $('#FiSuperiores').show();
        } else {
          $('#FiSuperiores').hide();
        }
      });
         


             //Traslados
           $('#FisioTraslados').change(function() {
        if (this.checked) {
          $('#Fitraslados').show();
        } else {
          $('#Fitraslados').hide();
        }
      });






    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    /** 
     * 
     * @getDynamicMonth() fn. is used to validate 2 digit number and act accordingly 
     * 
    */
    $(".event-title-area").change(function () {

        var areaSeleccionada = $(this).val();
        //alert(areaSeleccionada);
        $.ajax({
            type: "POST",
            url: 'Medicos',
            data: {
                area: areaSeleccionada,
                _token: $('meta[name="csrf-token"]').attr('content'),

            },
        }).done(function (res) {

            // alert(res)

            mostrarUsuarios(res);
        });

    });



    function mostrarUsuarios(usuarios) {
        var selectUsuarios = $(".event-title");
        selectUsuarios.empty();

        if (usuarios.length > 0) {
            usuarios.forEach(function (usuario) {
                selectUsuarios.append("<option value='" + usuario.DSS + "'>" + usuario.Nombre + " " + usuario.Apellidos + " " + usuario.ESPECIALIDAD + "</option>");
            });
        } else {
            selectUsuarios.append("<option selected disabled value='' >No se encontraron usuarios en el área seleccionada.</option>");
        }
    }

      //endFisioterapia

    //Script miembros Superiores 




    //Eliminar 

    var eliminarEnlaces = document.getElementsByClassName("Eliminar");
for (var i = 0; i < eliminarEnlaces.length; i++) {
  eliminarEnlaces[i].addEventListener("click", function(event) {
    event.preventDefault(); // Evita que se siga la acción predeterminada del enlace
    
   var tabla = document.getElementById("tablamiembroS");
var filas = tabla.getElementsByTagName("tr");
var ultimaFila = filas[filas.length - 1];

if (ultimaFila) {
  tabla.deleteRow(ultimaFila.rowIndex);
}
  });
}
var contador=0;
document.getElementById("Enlace").addEventListener("click", function(event) {
  event.preventDefault(); // Evita que se siga la acción predeterminada del enlace
  contador=contador+1;
 

  var tabla = document.getElementById("tablamiembroS");
  var filas = tabla.getElementsByTagName("tr");
  var fila = tabla.insertRow();
  
  var celda1 = fila.insertCell();
  celda1.innerHTML = ' <input type="text" class="form-control form-control-lg" placeholder="Nombre del movimiento" name="Movimientos[movimento'+contador+'][Nombre]" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="3">';
  
  var celda2 = fila.insertCell();
  var selectHTML = '<select class="form-control" name="Movimientos[movimento'+contador+'][Valor]" required>';
  selectHTML += '<option selected disabled value="" >Selecciona el grado</option>';
  for (var i = 0; i <= 360; i++) {
    selectHTML += '<option value="' + i + '">' + i + '°</option>';
  }
  selectHTML += '</select>';
  celda2.innerHTML = selectHTML;
  
 
  
});
    //endmiembros Superiores


  });
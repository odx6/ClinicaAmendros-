$(document).ready(function() {
    // Código jQuery aquí
    //alert("El documento ha sido cargado completamente.");
    // funcion para activar opciones 
    $('.desactivado').hide();
    $('.desactivado input').prop("disabled", true);
    $('.desactivado select').prop("disabled", true);
    $('.dime').prop("disabled", true);
    $('#TratamientosT').prop("disabled", true);
    $('#DeamObservaciones').prop("disabled", true);
    $('#MSOB').prop("disabled", true);
    $('.OFron').prop("disabled", true);
    $('.LA').prop("disabled", true);
    $('.POS').prop("disabled", true);
    $('#Formis').prop("disabled", true);
    $('.PlanText').prop("disabled", true);
     





    
   

    $('#form-custom-switch-info').change(function() {
        if (this.checked) {
          $('#Ocultar').show();
           $('#Ocultar input').prop("disabled", false);
        } else {
          $('#Ocultar').hide();
          $('#Ocultar input').prop("disabled", true);
        }
      });
      $('#form-custom-switch-info2').change(function() {
        if (this.checked) {
          $('#OExploraciones').show();
          $("#OExploraciones input").prop("disabled", false);
          

        } else {
          $('#OExploraciones').hide();
          $("#OExploraciones input").prop("disabled", true);
        }
      });
      $('#form-custom-switch-info3').change(function() {
        if (this.checked) {
          $('#NPQuirurgicas').show();
         
          $("#NPQuirurgicas input").prop("disabled", false);

        } else {
          $('#NPQuirurgicas').hide();
          $("#NPQuirurgicas input").prop("disabled", true);

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
          $("#FisioExplo input").prop("disabled", false);

        } else {
          $('#FisioExplo').hide();
          $("#FisioExplo input").prop("disabled", true);


        }
      });

         $('#FisioTrata').change(function() {
        if (this.checked) {
          $('#FisioTratamientos').show();
          $("#FisioTratamientos input").prop("disabled", false);
           $('#TratamientosT').prop("disabled", false);


        } else {
          $('#FisioTratamientos').hide();
          $("#FisioTratamientos input").prop("disabled", true);
            $('#TratamientosT').prop("disabled", true);



        }
      });
           $('#FisioAnalisis').change(function() {
        if (this.checked) {
          $('#FisioAna').show();
        $('#FisioAna input,select').prop("disabled", false);

        } else {
          $('#FisioAna').hide();
         $('#FisioAna input,select').prop("disabled", true);

        }
      });
          //Antecedentes
           $('#FisioAnte').change(function() {
        if (this.checked) {
          $('#FisioAntecedente').show();
         $('#FisioAntecedente input').prop("disabled", false);

        } else {
          $('#FisioAntecedente').hide();
         $('#FisioAntecedente input').prop("disabled", true);

        }
      });
            //Cicatriz
           $('#FisioCica').change(function() {
        if (this.checked) {
          $('#FisioCicatriz').show();
         $('#FisioCicatriz input').prop("disabled", false);

        } else {
          $('#FisioCicatriz').hide();
         $('#FisioCicatriz input').prop("disabled", true);

        }
      });

         //Marcha Deambulacion
           $('#FisioDeambu').change(function() {
        if (this.checked) {
          $('#FisioDeam').show();
         $('#FisioDeam input').prop("disabled", false);
    $('#DeamObservaciones').prop("disabled", false);


        } else {
          $('#FisioDeam').hide();
         $('#FisioDeam input').prop("disabled", true);
    $('#DeamObservaciones').prop("disabled", true);


        }
      });
            //Dime
           $('#FisioDiagnostico').change(function() {
        if (this.checked) {
          $('#Fidiagnostico').show();
    $('.dime').prop("disabled", false);

        } else {
          $('#Fidiagnostico').hide();
    $('.dime').prop("disabled", true);

        }
      });

           //Dolor
           $('#FisioDolor').change(function() {
        if (this.checked) {
          $('#FiDolor').show();
         $('#FiDolor input').prop("disabled", false);

        } else {
          $('#FiDolor').hide();
         $('#FiDolor input').prop("disabled", true);

        }
      });
            //Formulario
           $('#FisioFormulario').change(function() {
        if (this.checked) {
          $('#FiForm').show();
         $('#FiForm input,select').prop("disabled", false);
         $('#Formis').prop("disabled", false);


        } else {
          $('#FiForm').hide();
         $('#FiForm input,select').prop("disabled", true);
         $('#Formis').prop("disabled", true);


        }
      });
            //Frontal
           $('#FisioFrontal').change(function() {
        if (this.checked) {
          $('#FiFrontal').show();
         $('#FiFrontal input,select').prop("disabled", false);
          $('.OFron').prop("disabled", false);


        } else {
          $('#FiFrontal').hide();
         $('#FiFrontal input,select').prop("disabled", true);
          $('.OFron').prop("disabled", true);

        }
      });
              //Habitos
           $('#FisioHabitos').change(function() {
        if (this.checked) {
          $('#FiHa').show();
         $('#FiHa input ').prop("disabled",false);

        } else {
          $('#FiHa').hide();
         $('#FiHa input ').prop("disabled",true);

        }
      });

          
             //Ingravidez
           $('#FisioIngra').change(function() {
        if (this.checked) {
          $('#Figra').show();
         $('#Figra input,select').prop("disabled",false);

        } else {
          $('#Figra').hide();
         $('#Figra input,select').prop("disabled", true);

        }
      });
            //Lateral
           $('#FisioInLateral').change(function() {
        if (this.checked) {
          $('#FiLateral').show();
         $('#FiLateral input,select').prop("disabled", false);
          $('.LA').prop("disabled", false);

        } else {
          $('#FiLateral').hide();
         $('#FiLateral input,select').prop("disabled", true);
          $('.LA').prop("disabled", true);

        }
      });
             //Muscular
           $('#FisioMuscular').change(function() {
        if (this.checked) {
          $('#FiMuscular').show();
         $('#FiMuscular input,select').prop("disabled", false);

        } else {
          $('#FiMuscular').hide();
         $('#FiMuscular input,select').prop("disabled", true);

        }
      });
            //Nota
           $('#FisioNota').change(function() {
        if (this.checked) {
          $('#FiNota').show();
         $('#FiNota input ').prop("disabled", false);

        } else {
          $('#FiNota').hide();
         $('#FiNota input').prop("disabled", true);

        }
      });
            //Plan
           $('#FisioPlan').change(function() {
        if (this.checked) {
          $('#FiPlan').show();
          $('.PlanText').prop("disabled", false);
        } else {
          $('#FiPlan').hide();
          $('.PlanText').prop("disabled", true);
        }
      });
           //Posterior
           $('#FisioPosterior').change(function() {
        if (this.checked) {
          $('#FiPos').show();
            $('.POS').prop("disabled", false);
             $('#FiPos input,select').prop("disabled", false);

        } else {
          $('#FiPos').hide();
            $('.POS').prop("disabled", true);
             $('#FiPos input,select').prop("disabled", true);

        }
      });
             //Superior
           $('#FisioSuperiores').change(function() {
        if (this.checked) {
          $('#FiSuperiores').show();
          $('#FiSuperiores input,select').prop("disabled", false);
            $('#MSOB').prop("disabled", false);
        } else {
          $('#FiSuperiores').hide();
            $('#MSOB').prop("disabled", true);
          $('#FiSuperiores input,select').prop("disabled", true);

        }
      });
         


             //Traslados
           $('#FisioTraslados').change(function() {
        if (this.checked) {
          $('#Fitraslados').show();
          $('#Fitraslados select ').prop("disabled", false);

        } else {
          $('#Fitraslados').hide();
          $('#Fitraslados select ').prop("disabled", true);

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

    //Producto Stock
    $(".Stock").change(function () {

        var ProductoSeleccionado = $(this).val();
        //alert(ProductoSeleccionado);
       $.ajax({
            type: "POST",
            url: 'Stock',
            data: {
                producto: ProductoSeleccionado,
                _token: $('meta[name="csrf-token"]').attr('content'),

            },
        }).done(function (res) {

             //alert(res)
            $('#StockSalida').val(res);
            $("#cantidad").attr("max",res);

           // mostrarUsuarios(res);
        });

    });



   
    //endProductos Stock 

    //Facturas 
     $(".prove").change(function () {

        var areaSeleccionada = $(this).val();
        //alert(areaSeleccionada);
        $.ajax({
            type: "POST",
            url: 'Factura',
            data: {
                area: areaSeleccionada,
                _token: $('meta[name="csrf-token"]').attr('content'),

            },
        }).done(function (res) {

           // alert(res)

          mostrarProve(res);
        });

    });



    function mostrarProve(usuarios) {
        var selectUsuarios = $(".resultado");
        selectUsuarios.empty();

        if (usuarios.length > 0) {
            usuarios.forEach(function (usuario) {
                selectUsuarios.append("<option value='" + usuario.pk_factura + "'>" + usuario.Nombre + "</option>");
            });
        } else {
            selectUsuarios.append("<option selected disabled value='' >No se encontraron facturas para este proveedor</option>");
        }
    }



    //enfacturas 



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
  celda1.innerHTML = ' <input type="text" class="form-control form-control-lg" placeholder="Nombre del movimiento" name="Movimientos[movimento'+contador+'][Nombre]" required pattern="[A-Za-zÁÉÍÓÚÑáéíóúñ\s]+" minlength="3"><div class="valid-feedback"> Dato correcto </div> <div class="invalid-feedback"> Ingrese un nombre valido </div>';
  
  var celda2 = fila.insertCell();
  var selectHTML = '<select class="form-control" name="Movimientos[movimento'+contador+'][Valor]" required>';
  selectHTML += '<option selected disabled value="" >Selecciona el grado</option>';
  for (var i = 0; i <= 360; i++) {
    selectHTML += '<option value="' + i + '">' + i + '°</option>';
  }
  selectHTML += '</select><div class="valid-feedback"> Dato correcto </div> <div class="invalid-feedback"> El campo es obligatorio </div>';
  celda2.innerHTML = selectHTML;
  
 
  
});
    //endmiembros Superiores

  $('#altura').change(function() {
      calcularIMC();
      });



function calcularIMC() {
            var peso = parseFloat(document.getElementById("peso").value);
            var altura = parseFloat(document.getElementById("altura").value);

            if (isNaN(peso) || isNaN(altura) || altura <= 0) {
                alert("Por favor, ingresa valores válidos para peso y altura.");
                return;
            }

            var imc = peso / (altura * altura);

          document.getElementById("resultado").value = imc.toFixed(2);
        }


  });
$('#myForm').on('submit', function(event) {
    event.preventDefault(); // Evitar que el formulario se envíe automáticamente

    const archivo = $('#archivo')[0].files[0]; // Obtener el archivo seleccionado

    if (archivo) {
        // Verificar si es un PDF o HTML
        if (archivo.type === 'application/pdf' || archivo.type === 'text/html') {
            alert('El archivo es válido.');
            this.submit(); // Enviar el formulario
        } else {
            alert('El archivo no es válido. Por favor, selecciona un archivo PDF o HTML.');
        }
    } else {
        alert('Por favor, selecciona un archivo.');
    }
});

$('.btn-delete').click(function(e) {
 
      e.preventDefault();

      const url = $(this).attr('href');
      console.log('URL del enlace:', url);
Swal.fire({
  title: '¿Estas seguro(a) de eliminar el dato?',
  text: "El dato sera eliminado permanentente!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, quiero elimniarlo'
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href =url;
    Swal.fire(
      'Eliminado!',
      'El dato a sido elimnado correctamente',
      'success'
    )
  }

})
    });




//EndAlertas

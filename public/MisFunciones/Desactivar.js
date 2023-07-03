$(document).ready(function() {
    // Código jQuery aquí
    //alert("El documento ha sido cargado completamente.");
    // funcion para activar opciones 
    $("#form-custom-switch-success").click(function(){
        //alert("check ")

    var checkbox = document.getElementById('form-custom-switch-success');
    if (checkbox.checked) {
        var boton = document.getElementsByClassName('Hola');
        for (var i = 0; i < boton.length; i++) {
            boton[i].style.display = "block";
        }
        
        var inputs = document.getElementsByClassName('form-control');
for (var i = 0; i < inputs.length; i++) {
    inputs[i].readOnly = false;
}
var selects = document.getElementsByClassName('selects');
for (var i = 0; i < selects.length; i++) {
    selects[i].disabled = false;
}
var inputs2 = document.getElementById('bold');
    inputs2.readOnly = true;
    } else {
        
        var boton = document.getElementsByClassName('Hola');
for (var i = 0; i < boton.length; i++) {
    boton[i].style.display = "none";
}
        var inputs = document.getElementsByClassName('form-control');
for (var i = 0; i < inputs.length; i++) {
    inputs[i].readOnly = true;
}
var selects = document.getElementsByClassName('selects');
for (var i = 0; i < selects.length; i++) {
    selects[i].disabled = true;
}


    }
    })
   


//Desactivar los inputs 
var inputs = document.getElementsByClassName('form-control');
for (var i = 0; i < inputs.length; i++) {
    inputs[i].readOnly = true;
}
var selects = document.getElementsByClassName('selects');
for (var i = 0; i < selects.length; i++) {
    selects[i].disabled = true;
}
//End 
    
    

    //termina opcion
  });
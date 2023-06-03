document.addEventListener('DOMContentLoaded', function() {
    var citasList ;
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
    
    

    // Date variable
    var newDate = new Date();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    /** 
     * 
     * @getDynamicMonth() fn. is used to validate 2 digit number and act accordingly 
     * 
    */ /*   var miVariable = json_encode($Doctor);

    // Ahora puedes utilizar la variable en JavaScript
    alert(miVariable);*/
    $.ajax({
        type:"POST",
        url:'Doctores',
        data:{
            id:$('#event-title').val(),
            _token: $('meta[name="csrf-token"]').attr('content'),
        
        },
       }).done(function(response) {
        citasList=response;
        //codigo agregado 
        function getDynamicMonth() {
            getMonthValue = newDate.getMonth();
            if (getMonthValue < 10) {
                return `0${getMonthValue+1}`;
            } else {
                return `${getMonthValue+1}`;
            }
        }
        
        console.log(getDynamicMonth())
    
        // Modal Elements
        var getModalTitleEl = document.querySelector('#event-title');
        var getModalTitleE2 = document.querySelector('#event-title2');
        var getModalStartDateEl = document.querySelector('#event-start-date');
        var getModalEndDateEl = document.querySelector('#event-end-date');
        var getModalAddBtnEl = document.querySelector('.btn-add-event');
        var getModalUpdateBtnEl = document.querySelector('.btn-update-event');
        var calendarsEvents = {
           Fisoterapia: 'primary',
            Ginecologia: 'success',
            Oftalmologia: 'danger',
            Traumatologia: 'warning',
        }
    
        // Calendar Elements and options
        var calendarEl = document.querySelector('.calendar');
    
        var checkWidowWidth = function() {
            if (window.innerWidth <= 1199) {
                return true;
            } else {
                return false;
            }
        }
        
        var calendarHeaderToolbar = {
            left: 'prev next addEventButton',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        }
       
        alert(response);
        // Calendar Select fn.
        var calendarSelect = function(info) {
            getModalAddBtnEl.style.display = 'block';
            getModalUpdateBtnEl.style.display = 'none';
            myModal.show()
            getModalStartDateEl.value = info.startStr;
            getModalEndDateEl.value = info.endStr;
        }
    
        // Calendar AddEvent fn.
        var calendarAddEvent = function() {
            var currentDate = new Date();
            var dd = String(currentDate.getDate()).padStart(2, '0');
            var mm = String(currentDate.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = currentDate.getFullYear();
            var combineDate = `${yyyy}-${mm}-${dd}T00:00:00`;
            getModalAddBtnEl.style.display = 'block';
            getModalUpdateBtnEl.style.display = 'none';        
            myModal.show();
            getModalStartDateEl.value = combineDate;
        }
    
        // Calendar eventClick fn.
        var calendarEventClick = function(info) {
            var eventObj = info.event;
            //Muestra el evento 
           // alert(JSON.stringify(eventObj));
            if (eventObj.url) {
              window.open(eventObj.url);
      
              info.jsEvent.preventDefault(); // prevents browser from following link in current tab.
            } else {
                var getModalEventId = eventObj._def.publicId; 
                alert(getModalEventId)
                var getModalEventLevel = eventObj._def.extendedProps['calendar'];
                var getModalCheckedRadioBtnEl = document.querySelector(`input[value="${getModalEventLevel}"]`);
                // se mandan los valores del evento al dar click 
                getModalTitleEl.value = eventObj.extendedProps.IdDoctor;
                getModalTitleE2.value =eventObj.extendedProps.Idpaciente;
                getModalStartDateEl.value =eventObj.start.toISOString().slice(0, 16);
               
                alert(eventObj.start.toISOString().slice(0, 16));
                getModalEndDateEl.value=eventObj.end.toISOString().slice(0, 16);
                getModalCheckedRadioBtnEl.checked = true;
                getModalUpdateBtnEl.setAttribute('data-fc-event-public-id', getModalEventId)
                getModalAddBtnEl.style.display = 'none';
                getModalUpdateBtnEl.style.display = 'block';
                myModal.show();
            }
        }
        
    
        // Activate Calender    
        var calendar = new FullCalendar.Calendar(calendarEl, {
            selectable: true,
            height: checkWidowWidth() ? 900 : 1052,
            initialView: checkWidowWidth() ? 'listWeek' : 'dayGridMonth',
           //initialView: 'dayGridDay' ,
            initialDate: `${newDate.getFullYear()}-${getDynamicMonth()}-07`,
            headerToolbar: calendarHeaderToolbar,
           // events: calendarEventsList,
             events:response,
             timeFormat: 'h:mm a',
            select: calendarSelect,
            unselect: function() {
                console.log('unselected')
            },
            customButtons: {
                addEventButton: {
                    text: 'Añadir Cita',
                    click: calendarAddEvent
                }
            },
            eventClassNames: function ({ event: calendarEvent }) {
                const getColorValue = calendarsEvents[calendarEvent._def.extendedProps.calendar];
                return [
                  // Background Color
                  'event-fc-color fc-bg-' + getColorValue
                ];
            },
            
            eventClick: calendarEventClick,
            windowResize: function(arg) {
                if (checkWidowWidth()) {
                    
                    calendar.changeView('listWeek');
                    calendar.setOption('height', 900);
                } else {
                    calendar.changeView('dayGridMonth');
                    calendar.setOption('height', 1052);
                }
            }
    
        });
    
        // Add Event
        getModalAddBtnEl.addEventListener('click', function() {
            //se asignan los valores de 
            var getModalCheckedRadioBtnEl = document.querySelector('input[name="event-level"]:checked');
            var getTitleValue = getModalTitleEl.value;
            var setModalStartDateValue = getModalStartDateEl.value;
            var setModalEndDateValue = getModalEndDateEl.value;
            var getModalCheckedRadioBtnValue = (getModalCheckedRadioBtnEl !== null) ? getModalCheckedRadioBtnEl.value : '';
    
            calendar.addEvent({
                id: uuidv4(),
                title: getTitleValue,
                start: setModalStartDateValue,
                end: setModalEndDateValue,
                allDay: true,
                extendedProps: { calendar: getModalCheckedRadioBtnValue }
            })
    
            alert("me pulso");
            $.ajax({
                type:"POST",
                url:'eventos',
                data:{
                    id:$('#event-title').val(),
                    paciente:$('#event-title2').val(),
                    inicio: $('#event-start-date').val(),
                     fin: $('#event-end-date').val(),
                    _token: $('meta[name="csrf-token"]').attr('content'),
                
                },
               }).done(function(res){alert(res)});
            myModal.hide()
        })
    
    
    
        // Update Event
        getModalUpdateBtnEl.addEventListener('click', function() {
            var getPublicID = this.dataset.fcEventPublicId;
            var getTitleUpdatedValue = getModalTitleEl.value;
            var getEvent = calendar.getEventById(getPublicID);
            var getModalUpdatedCheckedRadioBtnEl = document.querySelector('input[name="event-level"]:checked');
    
            var getModalUpdatedCheckedRadioBtnValue = (getModalUpdatedCheckedRadioBtnEl !== null) ? getModalUpdatedCheckedRadioBtnEl.value : '';
            
            getEvent.setProp('title', getTitleUpdatedValue);
            getEvent.setExtendedProp('calendar', getModalUpdatedCheckedRadioBtnValue);
            //codigo para actualizar 
            $.ajax({
                type:"POST",
                url:'ActualizarCita',
                data:{
                    idCita:getPublicID,
                    idDoctor:$('#event-title').val(),
                    paciente:$('#event-title2').val(),
                    inicio: $('#event-start-date').val(),
                     fin: $('#event-end-date').val(),
                    _token: $('meta[name="csrf-token"]').attr('content'),
                
                },
               }).done(function(res){alert(res)});
    
            myModal.hide()
        })
        calendar.setOption('locale', 'ES');
        // Calendar Renderation
        calendar.render();
        
        var myModal = new bootstrap.Modal(document.getElementById('exampleModal'))
        var modalToggle = document.querySelector('.fc-addEventButton-button ')
    
        document.getElementById('exampleModal').addEventListener('hidden.bs.modal', function (event) {
            getModalTitleEl.value = '';
            getModalStartDateEl.value = '';
            getModalEndDateEl.value = '';
            var getModalIfCheckedRadioBtnEl = document.querySelector('input[name="event-level"]:checked');
            if (getModalIfCheckedRadioBtnEl !== null) { getModalIfCheckedRadioBtnEl.checked = false; }
        })
    
        // mis variables 
        $("#btnAgregar").click(function(){
            alert("me pulso");
            $.ajax({
                type:"POST",
                url:'eventos',
                data:{
                    id:$('#event-title').val(),
                    paciente:$('#event-title2').val(),
                    inicio: $('event-start-date').val(),
                    
                    _token: $('meta[name="csrf-token"]').attr('content'),
                
                },
               }).done(function(res){alert(res)});
    
               
    
        })
    
        //end
        $("#btnAgregar").click(function(){
            alert("me pulso");
            $.ajax({
                type:"",
                url:'eventos',
                data:{
                    id:$('#event-title').val(),
                    paciente:$('#event-title2').val(),
                    inicio: $('event-start-date').val(),
                    
                    _token: $('meta[name="csrf-token"]').attr('content'),
                
                },
               }).done(function(res){alert(res)});
    
               
    
        })
    
        //end
    /*
        $("#idConsulta").click(function(){
            alert("me pulso Consulta");
            $.ajax({
                type:"POST",
                url:'Doctor/paciente',
                data:{
                    paciente:$('#event-title2').val(),
                    _token: $('meta[name="csrf-token"]').attr('content'),
                
                },
               }).done(function(res){alert(res)
                window.location.href ='Doctor/paciente/historial';
            });
    
               
    
        })
    */
        //end
    
        
               
    
    
    
        
    
    });
   // alert(dato);
   

   
     
});
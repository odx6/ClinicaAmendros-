document.addEventListener('DOMContentLoaded', function () {
    var citasList;

    function agregarCeroIzquierda(numero) {
        return numero < 10 ? '0' + numero : numero;
    }
    function getMexicoCurrentDate() {
  const currentDate = new Date();
  const utcOffset = currentDate.getTimezoneOffset(); // Obtener la diferencia de minutos entre UTC y el huso horario local
  const mexicoUtcOffset = (utcOffset / 60) - 5; // Ajuste para el huso horario de México (UTC-5 o UTC-6)
  currentDate.setHours(currentDate.getHours() + mexicoUtcOffset);
  return currentDate;
}
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
        type: "POST",
        url: 'Doctores',
        data: {
            id: $('#event-title').val(),
            _token: $('meta[name="csrf-token"]').attr('content'),

        },
    }).done(function (response) {
        citasList = response;
        //codigo agregado 
        function getDynamicMonth() {
            getMonthValue = newDate.getMonth();
            if (getMonthValue < 10) {
                return `0${getMonthValue + 1}`;
            } else {
                return `${getMonthValue + 1}`;
            }
        }

        console.log(getDynamicMonth())

        // Modal Elements
        var getModalTitleEl = document.querySelector('#event-title');
        var getModalTitleE2 = document.querySelector('#event-title2');
        var getModalStartDateEl = document.querySelector('#event-start-date');
        //var getModalEndDateEl = document.querySelector('#event-end-date');
        var getModalAddBtnEl = document.querySelector('.btn-add-event');
        var getModalUpdateBtnEl = document.querySelector('.btn-update-event');
        var getBotonCancelarCita = document.querySelector('.btn-delete-event');
        var BotonConsulta = document.querySelector('#idConsulta');
        //Primeracita
        var getAreaP = document.querySelector('#PrimeraArea');
        var getDoctor = document.querySelector('#PrimeraDoctor');
        var getModalStartP = document.querySelector('#PrimerStar');
        var getArea = document.querySelector('#event-title-area');
        //endprimeracita

        var calendarsEvents = {
            Fisoterapia: 'primary',
            Ginecologia: 'success',
            Oftalmologia: 'danger',
            Traumatologia: 'warning',
        }

        // Calendar Elements and options
        var calendarEl = document.querySelector('.calendar');

        var checkWidowWidth = function () {
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
        //Funcion para segundas citas
        $(".NoPrimera").click(function () {
          

            //  getModalEndDateEl.value = fechaHoraActual;


        });
        //end terminacion de citas 
        //Funcion es primeracita
        $(".SiPrimera").click(function () {
            var currentDate = new Date(getMexicoCurrentDate()).toISOString().slice(0, 16);

            // Establecer el valor mínimo en el input
            document.getElementById("event-start-date").min = currentDate;
            //document.getElementById("event-end-date").min = currentDate;
            var fecha = new Date();

            var anio = fecha.getFullYear();
            var mes = agregarCeroIzquierda(fecha.getMonth() + 1); // Los meses empiezan desde 0, se suma 1 y se agrega cero a la izquierda si es necesario
            var dia = agregarCeroIzquierda(fecha.getDate());

            //var horas = agregarCeroIzquierda(fecha.getHours());
            var horas = agregarCeroIzquierda(fecha.getHours());
            var minutos = agregarCeroIzquierda(fecha.getMinutes());
            var segundos = agregarCeroIzquierda(fecha.getSeconds());

            var fechaHoraActual = anio + '-' + mes + '-' + dia + ' ' + horas + ':' + minutos + ':' + '00';


            // alert(fechaHoraActual);
            getModalAddBtnEl.style.display = 'block';
            getModalUpdateBtnEl.style.display = 'none';

            Primeracita.show()
            Notificacion.hide();
            getModalStartP.value = fechaHoraActual;


            //  getModalEndDateEl.value = fechaHoraActual;


        });
        //endprimeracita

        //alert(response);
        // Calendar Select fn.
        var calendarSelect = function (info) {
              var currentDate = new Date().toISOString().slice(0, 16);

            // Establecer el valor mínimo en el input
            document.getElementById("event-start-date").min = currentDate;
            //document.getElementById("event-end-date").min = currentDate;
            var fecha = new Date();

            var anio = fecha.getFullYear();
            var mes = agregarCeroIzquierda(fecha.getMonth() + 1); // Los meses empiezan desde 0, se suma 1 y se agrega cero a la izquierda si es necesario
            var dia = agregarCeroIzquierda(fecha.getDate());

            //var horas = agregarCeroIzquierda(fecha.getHours());
            var horas = agregarCeroIzquierda(fecha.getHours());
            var minutos = agregarCeroIzquierda(fecha.getMinutes());
            var segundos = agregarCeroIzquierda(fecha.getSeconds());

            var fechaHoraActual = anio + '-' + mes + '-' + dia + ' ' + horas + ':' + minutos + ':' + '00';


            // alert(fechaHoraActual);
            getModalAddBtnEl.style.display = 'block';
            getModalUpdateBtnEl.style.display = 'none';
            BotonConsulta.style.display = 'none';
            getBotonCancelarCita.style.display = 'none';
            myModal.show()

            getModalStartDateEl.value = fechaHoraActual;


        }

        // Calendar AddEvent fn.
        var calendarAddEvent = function () {
           
            
            var currentDate = new Date();
            var dd = String(currentDate.getDate()).padStart(2, '0');
            var mm = String(currentDate.getMonth() + 1).padStart(2, '0'); //January is 0!
            var yyyy = currentDate.getFullYear();
            var combineDate = `${yyyy}-${mm}-${dd}T00:00:00`;
            getModalAddBtnEl.style.display = 'block';
            getModalUpdateBtnEl.style.display = 'none';
            getBotonCancelarCita.style.display = 'none';
            myModal.show();
            getModalStartDateEl.value = combineDate;
        }

        // Calendar eventClick fn.
        var calendarEventClick = function (info) {

            var eventObj = info.event;
            //Muestra el evento 
            //alert(JSON.stringify(eventObj));
            if (eventObj.url) {
                window.open(eventObj.url);

                info.jsEvent.preventDefault(); // prevents browser from following link in current tab.
            } else {
                var getModalEventId = eventObj._def.publicId;
                //alert(getModalEventId)
                var getModalEventLevel = eventObj._def.extendedProps['calendar'];
                var getModalCheckedRadioBtnEl = document.querySelector(`input[value="${getModalEventLevel}"]`);
                // se mandan los valores del evento al dar click 
                var option = document.createElement("option");
                getModalTitleEl.value = eventObj.extendedProps.IdDoctor;
                option.value = eventObj.extendedProps.IdDoctor;
                option.text = eventObj.extendedProps.Doctor;
                getModalTitleEl.appendChild(option);


                getModalTitleE2.value = eventObj.extendedProps.Idpaciente;

                let fecha = "" + eventObj.start;
                let fecha3 = new Date(fecha);
                var anio = fecha3.getFullYear();
            var mes = agregarCeroIzquierda(fecha3.getMonth() + 1); // Los meses empiezan desde 0, se suma 1 y se agrega cero a la izquierda si es necesario
            var dia = agregarCeroIzquierda(fecha3.getDate());

            //var horas = agregarCeroIzquierda(fecha.getHours());
            var horas = agregarCeroIzquierda(fecha3.getHours());
            var minutos = agregarCeroIzquierda(fecha3.getMinutes());
            var segundos = agregarCeroIzquierda(fecha3.getSeconds());
             var Format = anio + '-' + mes + '-' + dia + ' ' + horas + ':' + minutos + ':' + '00';
                getModalStartDateEl.value = Format;
                getModalUpdateBtnEl.setAttribute('data-fc-event-public-id', getModalEventId)
                getBotonCancelarCita.setAttribute('data-fc-event-public-id', getModalEventId)
                getModalAddBtnEl.style.display = 'none';
                getModalUpdateBtnEl.style.display = 'block';
                getBotonCancelarCita.style.display = 'none';


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
            events: response,
            timeFormat: 'h:mm a',
            select: calendarSelect,
            unselect: function () {
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
            windowResize: function (arg) {
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
        getModalAddBtnEl.addEventListener('click', function () {
            //se asignan los valores de 
            var getModalCheckedRadioBtnEl = document.querySelector('input[name="event-level"]:checked');
            var getTitleValue = getModalTitleEl.value;
            var setModalStartDateValue = getModalStartDateEl.value;
            //var setModalEndDateValue = getModalEndDateEl.value;
            var getModalCheckedRadioBtnValue = (getModalCheckedRadioBtnEl !== null) ? getModalCheckedRadioBtnEl.value : '';

            calendar.addEvent({
                id: uuidv4(),
                title: getTitleValue,
                start: setModalStartDateValue,
                // end: setModalEndDateValue,
                allDay: true,
                extendedProps: { calendar: getModalCheckedRadioBtnValue }
            })

            //alert("me pulso");
            $.ajax({
                type: "POST",
                url: 'eventos',
                data: {
                    id: $('#event-title').val(),
                    paciente: $('#event-title2').val(),
                    inicio: $('#event-start-date').val(),
                    fin: $('#event-end-date').val(),
                    _token: $('meta[name="csrf-token"]').attr('content'),

                },
            }).done(function (res) {//alert(res)
                 $("#MensajeCita").text(res);
               
                alerta.show();
                
      if(res=="Cita Agregada"){
    myModal.hide();
    location.reload();
}
            });

        })



        // Update Event
        getModalUpdateBtnEl.addEventListener('click', function () {
            var getPublicID = this.dataset.fcEventPublicId;
            var getTitleUpdatedValue = getModalTitleEl.value;
            var getEvent = calendar.getEventById(getPublicID);
            var getModalUpdatedCheckedRadioBtnEl = document.querySelector('input[name="event-level"]:checked');

            var getModalUpdatedCheckedRadioBtnValue = (getModalUpdatedCheckedRadioBtnEl !== null) ? getModalUpdatedCheckedRadioBtnEl.value : '';

            getEvent.setProp('title', getTitleUpdatedValue);
            getEvent.setExtendedProp('calendar', getModalUpdatedCheckedRadioBtnValue);
            //codigo para actualizar 
             $.ajax({
                type: "POST",
                url: 'ActualizarCita',
                data: {
                    idCita: getPublicID,
                    idDoctor: $('#event-title').val(),
                    paciente: $('#event-title2').val(),
                    inicio: $('#event-start-date').val(),
                    _token: $('meta[name="csrf-token"]').attr('content'),

                },
            }).done(function (res) { //alert(res);
            $("#MensajeCita").text(res);
              
                alerta.show();
                if(res="Cita Actualizada correctamente"){location.reload();}
                             });


        })
        //Eliminar
        // Delete Event
        getBotonCancelarCita.addEventListener('click', function () {

Swal.fire({
  title: '¿Estas seguro(a) de cancelar la cita?',
  text: "La cita se borrara y no se revertira!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'si quiero'
}).then((result) => {
  if (result.isConfirmed) {


            $.ajax({
                type: "POST",
                url: 'EliminarCita',
                data: {
                    idCita:getPublicID,
                    _token: $('meta[name="csrf-token"]').attr('content'),

                },
            }).done(function (res) { //alert(res) 
            myModal.hide()
            location.reload(); });
    Swal.fire(
      'Cancelada!',
      'Tu cita se elimino correctamente.',
      'success'
    )
  }
})
            var getPublicID = this.dataset.fcEventPublicId;
            var getTitleUpdatedValue = getModalTitleEl.value;

            
           
        })
        //endEliminar
        calendar.setOption('locale', 'ES');
        // Calendar Renderation
        calendar.render();

        var myModal = new bootstrap.Modal(document.getElementById('exampleModal'))
        var alerta = new bootstrap.Modal(document.getElementById('Alerta'))
        //Muestra  el mensaje si es primera cita;
        var Notificacion = new bootstrap.Modal(document.getElementById('standardModal'))
        //Primera cita
        var Primeracita = new bootstrap.Modal(document.getElementById('FormPrimeraDoctor'))
        var modalToggle = document.querySelector('.fc-addEventButton-button ')

        document.getElementById('exampleModal').addEventListener('hidden.bs.modal', function (event) {
            getModalTitleEl.value = '';
            getModalStartDateEl.value = '';
            getModalEndDateEl.value = '';
            var getModalIfCheckedRadioBtnEl = document.querySelector('input[name="event-level"]:checked');
            if (getModalIfCheckedRadioBtnEl !== null) { getModalIfCheckedRadioBtnEl.checked = false; }
        })

        // mis variables 
        $("#btnAgregar").click(function () {
          // alert("me pulso");
            $.ajax({
                type: "POST",
                url: 'eventos',
                data: {
                    id: $('#event-title').val(),
                    paciente: $('#event-title2').val(),
                    inicio: $('#event-start-date').val(),

                    _token: $('meta[name="csrf-token"]').attr('content'),

                },
            }).done(function (res) {
               //alert(res);
                $("#MensajeCita").text(res);
               
                alerta.show();
                
      if(res=="Cita Agregada"){
    myModal.hide();
    location.reload();
}
            });



        })

        //end
        // mis variables 
       $("#btnPrimera").click(function () {
            //alert("me pulso primera cita");
            $.ajax({
                type: "POST",
                url: 'PrimeraCita',
                data: {
                    id:$('#NombreDoctorP').val(),
                    NombrePaciente: $('#NombrePacienteP').val(),
                    Apellidos: $('#NombreApellidosP').val(),
                    Telefono: $('#TelefonoP').val(),
                    inicio: $('#PrimerStar').val(),
                    _token: $('meta[name="csrf-token"]').attr('content'),

                },
            }).done(function (res) {
                 $("#MensajeCita").text(res);
                
                alerta.show();
                 if(res=="Cita Agregada"){
                    myModal.hide();
                    location.reload();}
            });

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
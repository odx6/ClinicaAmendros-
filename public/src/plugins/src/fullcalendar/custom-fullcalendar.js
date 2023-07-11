document.addEventListener('DOMContentLoaded', function () {
    var citasList;

    // Date variable
    var newDate = new Date();
    function agregarCeroIzquierda(numero) {
        return numero < 10 ? '0' + numero : numero;
    }

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
            selectUsuarios.append("<option value=''>No se encontraron usuarios en el área seleccionada.</option>");
        }
    }



    $.get('calendario', function (response) {
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


        // Modal Elements
        var getModalTitleEl = document.querySelector('#event-title');
        var getModalTitleE2 = document.querySelector('#event-title2');
        var getModalStartDateEl = document.querySelector('#event-start-date');
        var getArea = document.querySelector('#event-title-area');
        var getModalAddBtnEl = document.querySelector('.btn-add-event');
        var getModalUpdateBtnEl = document.querySelector('.btn-update-event');
        var getBotonCancelarCita = document.querySelector('.btn-delete-event');

        //Primeracita
        var getAreaP = document.querySelector('#PrimeraArea');
        var getDoctor= document.querySelector('#PrimeraDoctor');
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
        $("#NoPrimera").click(function () {
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
            getBotonCancelarCita.style.display = 'none';
            myModal.show()

            getModalStartDateEl.value = fechaHoraActual;


            //  getModalEndDateEl.value = fechaHoraActual;


        });
        //end terminacion de citas 
        //Funcion es primeracita
         $("#SiPrimera").click(function () {
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

            Primeracita.show()
            Notificacion.hide();
            getModalStartP.value = fechaHoraActual;


            //  getModalEndDateEl.value = fechaHoraActual;


        });
        //endprimeracita
        var calendarEventsList = [
            {
                id: 1,
                title: 'Todos los eventos ',
                start: `${newDate.getFullYear()}-${getDynamicMonth()}-01`,
                extendedProps: { calendar: 'Work' }
            },
            {
                id: 2,
                title: 'Long Event',
                start: `${newDate.getFullYear()}-${getDynamicMonth()}-07`,
                end: `${newDate.getFullYear()}-${getDynamicMonth()}-10`,
                extendedProps: { calendar: 'Personal' }
            },
            {
                groupId: '999',
                id: 3,
                title: 'Repeating Event',
                start: `${newDate.getFullYear()}-${getDynamicMonth()}-09T16:00:00`,
                extendedProps: { calendar: 'Important' }
            },
            {
                groupId: '999',
                id: 4,
                title: 'Repeating Event',
                start: `${newDate.getFullYear()}-${getDynamicMonth()}-16T16:00:00`,
                extendedProps: { calendar: 'Travel' }
            },
            {
                id: 5,
                title: 'Conference',
                start: `${newDate.getFullYear()}-${getDynamicMonth()}-11`,
                end: `${newDate.getFullYear()}-${getDynamicMonth()}-13`,
                extendedProps: { calendar: 'Work' }
            },
            {
                id: 6,
                title: 'Meeting',
                start: `${newDate.getFullYear()}-${getDynamicMonth()}-12T10:30:00`,
                end: `${newDate.getFullYear()}-${getDynamicMonth()}-12T12:30:00`,
                extendedProps: { calendar: 'Personal' }
            },
            {
                id: 7,
                title: 'Lunch',
                start: `${newDate.getFullYear()}-${getDynamicMonth()}-12T12:00:00`,
                extendedProps: { calendar: 'Important' }
            },
            {
                id: 8,
                title: 'Meeting',
                start: `${newDate.getFullYear()}-${getDynamicMonth()}-12T14:30:00`,
                extendedProps: { calendar: 'Travel' }
            },
            {
                id: 9,
                title: 'Birthday Party',
                start: `${newDate.getFullYear()}-${getDynamicMonth()}-13T07:00:00`,
                extendedProps: { calendar: 'Personal' }
            },
            {
                id: 10,
                title: 'Click for Google',
                url: 'http://google.com/',
                start: `${newDate.getFullYear()}-${getDynamicMonth()}-28`,
                extendedProps: { calendar: 'Important' }
            }
        ]
       // alert(response);
        // Calendar Select fn.
        var calendarSelect = function (info) {
            //alert("Te encontre");
            Notificacion.show();
            // Obtener la fecha y hora actual
            
        }

        // Calendar AddEvent fn.
        var calendarAddEvent = function () {
            Notificacion.show();
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
               // alert(getModalEventId)
                var getModalEventLevel = eventObj._def.extendedProps['calendar'];
                var getModalCheckedRadioBtnEl = document.querySelector(`input[value="${getModalEventLevel}"]`);
                // se mandan los valores del evento al dar click 
                var option = document.createElement("option");
                getModalTitleEl.value = eventObj.extendedProps.IdDoctor;
                option.value = eventObj.extendedProps.IdDoctor;
                option.text = eventObj.extendedProps.Doctor;
                getModalTitleEl.appendChild(option);
                var option1 = document.createElement("option");
                option1.value = eventObj.extendedProps.IDArea;
                option1.text = eventObj.extendedProps.NombreA;
                getArea.appendChild(option1);
                getArea.value = eventObj.extendedProps.IDArea;
                getModalTitleE2.value = eventObj.extendedProps.Idpaciente;

                let fecha = "" + eventObj.start;
                let fecha3 = new Date(fecha);
                let Format = fecha3.toISOString().slice(0, 10) + ' ' + fecha3.toLocaleTimeString();
               // alert(Format);
                getModalStartDateEl.value = Format;
                getModalUpdateBtnEl.setAttribute('data-fc-event-public-id', getModalEventId)
                getBotonCancelarCita.setAttribute('data-fc-event-public-id', getModalEventId)
                getModalAddBtnEl.style.display = 'none';
                getModalUpdateBtnEl.style.display = 'block';
                getBotonCancelarCita.style.display = 'block';

                myModal.show();
                 //end
      
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
            //events: calendarEventsList,
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

            var getModalCheckedRadioBtnValue = (getModalCheckedRadioBtnEl !== null) ? getModalCheckedRadioBtnEl.value : '';

            calendar.addEvent({
                id: uuidv4(),
                title: getTitleValue,
                start: setModalStartDateValue,
                end: setModalEndDateValue,
                allDay: true,
                extendedProps: { calendar: getModalCheckedRadioBtnValue }
            })
            var x = $('#event-start-date').val();
            alert(x);
            $.ajax({
                type: "POST",
                url: 'eventos',
                data: {
                    id: $('#event-title').val(),
                    paciente: $('#event-title2').val(),
                    inicio: $('#event-start-date').val(),
                    _token: $('meta[name="csrf-token"]').attr('content'),
                },
            }).done(function (res) { //alert(res) 
                location.reload();});
            myModal.hide()

        })



        // Update Event
        getModalUpdateBtnEl.addEventListener('click', function () {
            
            var getPublicID = this.dataset.fcEventPublicId;
            var getTitleUpdatedValue = getModalTitleEl.value;

            var getEvent = calendar.getEventById(getPublicID);
             //alert("Update"+ getPublicID);
            getEvent.setProp('title', getTitleUpdatedValue);
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
            }).done(function (res) { //alert(res)
            myModal.hide()
        location.reload();});

            
        })

         // Delete Event
       getBotonCancelarCita.addEventListener('click', function () {
           
            var getPublicID = this.dataset.fcEventPublicId;
            var getTitleUpdatedValue = getModalTitleEl.value;

           // var getEvent = calendar.getEventById(getPublicID);

            //getEvent.setProp('title', getTitleUpdatedValue);
            //codigo para actualizar 
 //alert("Delete"+ getPublicID);
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

            
        })
        calendar.setOption('locale', 'ES');
        // Calendar Renderation
        calendar.render();

        var myModal = new bootstrap.Modal(document.getElementById('exampleModal'))
        //Muestra  el mensaje si es primera cita;
        var Notificacion = new bootstrap.Modal(document.getElementById('standardModal'))
        //Primera cita
        var Primeracita = new bootstrap.Modal(document.getElementById('FormPrimera'))
        var modalToggle = document.querySelector('.fc-addEventButton-button ')

        document.getElementById('exampleModal').addEventListener('hidden.bs.modal', function (event) {
            getModalTitleEl.value = 4;
            getModalStartDateEl.value = '';
            //  getModalEndDateEl.value = '';
            var getModalIfCheckedRadioBtnEl = document.querySelector('input[name="event-level"]:checked');
            if (getModalIfCheckedRadioBtnEl !== null) { getModalIfCheckedRadioBtnEl.checked = false; }
        })

        // mis variables 
        $("#btnAgregar").click(function () {
          //  alert("me pulso");
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
                //alert(res)
                myModal.hide();
                location.reload();
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
               // alert(res)
                myModal.hide();
                location.reload();
            });

        })

       
    })
        .fail(function (error) {
            alert(error);
        });



});
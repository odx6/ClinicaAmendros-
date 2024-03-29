<div class="tab-pane fade" id="rounded-pills-icon-formulario" role="tabpanel"
    aria-labelledby="rounded-pills-icon-settings-tab">
    @if ($Formularios->isEmpty())
        <div class="widget-content widget-content-area">
            <div class="alert alert-arrow-right alert-icon-right alert-light-danger alert-dismissible fade show mb-4"
                role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-alert-circle">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="8" x2="12" y2="12"></line>
                    <line x1="12" y1="16" x2="12" y2="16"></line>
                </svg>
                <strong>Lo sentimos !</strong> No Hay registros disponibles para el paciente.

            </div>
            <form class="user" method="POST" action="{{ route('index.Formulario', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Agregar Formulariode valoración  </button>
            </form>
        </div>
    @else
        @foreach ($Formularios as $form)
            <form class="user" method="POST"
                action="{{ route('update.Formulario', ['id' =>$form->pk_formulario]) }}">
                @csrf
                     <div class="container">
                <h2>Formulario de valoración  de la batería breve valoración  funcional</h2>
  <div class="row">
    <div class="col-sm">
      <h4>Pruebas de equilibrio</h4>
      <p>El sujeto debe de ser capaz de ponerse de pie, sin ayuda de bastones o andadores.</p>
      <p>A.Posición con pies juntos</p>
      <div class="form-group">
      <select class="form-control formulario" name="pregunta1" >
      <option value="1" @if($form->P_pies_juntos == "1") selected @endif>(1)Se sostuvo durante 10 segundos</option>
      <option value="0" @if($form->P_pies_juntos == "0") selected @endif >(0)No se sostuvo durante 10 segundos o No lo intento</option>
        </select>
     </div>
      <h4>En caso de obtener 0 puntos  termine la prueba de equilibrio</h4>

      <h4>B.Posición  de semitándendem </h4>
      <div class="form-group">
      <select class="form-control" name="pregunta2">
      <option value="1" @if($form->P_semitandem == "1") selected @endif>(1)Se sostuvo durante 10 segundos</option>
      <option value="0" @if($form->P_semitandem == "0") selected @endif>(0)No se sostuvo durante 10 segundos o No lo intento</option>
        </select>
     </div>
     <h4>Número de segundos con equilibrio si es inferior a los 10 segundos</h4>
     <h4>C.posicion en tándem completo</h4>
       <div class="form-group">
      <select class="form-control formulario" name="pregunta3">
      <option value="2" @if($form->P_tandem == "2") selected @endif>(2)Se sostuvo durante 10 segundos</option>
      <option value="1" @if($form->P_tandem == "1") selected @endif>(1)No se sostuvo durante 3 a 9 segundos</option>
      <option value="0" @if($form->P_tandem == "0") selected @endif>(0)No se sostuvo durante al menos 3 seg o no lo intento</option>
        </select>
     </div>
    </div>
    <div class="col-sm">
       <h4>Número de segundos con equilibrio si es inferior a 10 segundos </h4>
      <div class="form-group">
       <select class="form-control formulario" name="pregunta4">
                                                                        @for ($i = 1; $i <10; $i++)
                                                                            <option value="{{ $i }}"@if($form->Segundos== "{{$i}}") selected @endif>
                                                                                {{ $i }} segundos </option>
                                                                        @endfor
        </select>
     </div>
     <h4>D.Puntuación total de equilibrio(Suma de puntos ) </h4>
      <div class="form-group">
       <input type="text" class="form-control"
                                                                            id="exampleFormControlInput1"
                                                                            value="{{$form->Total}}"
                                                                            name="total"
                                                                            placeholder="puntuacion">
     </div>

<p>Si no se realizó la prueba </p>
<p>Indique el motivo que mejor refleja por qué el sujeto  no realizo las prueas. </p>
<p>*Lo intentó pero no fue capaz ...1 </p>
<p>*El sujeto no pudo ponerse  de pie sin ayuda ...2</p>
<p>*No lo intentó, usted lo notaba inseguro ...3</p>
<p>*No lo intentó, el sujeto se sentía inseguro...4 </p>
<p>*El sujeto no entendió las intrucciónes...5 </p>
<p>*Otro motivo (especifiquelo)...6 </p>
<p>*El sujeto rechazó la prueba...7  </p>
<h2>Comentarios</h2>
<div class="form-group mb-4">
                               
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="NOT">{{$form->Comentarios}}</textarea>
                            </div>

    </div>
   
  </div>
</div>

                <!--end-table-->
                <div class="modal-footer">

                    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola"
                        style="display: none;">Actualizar</button>
            </form>
            <form class="user" method="POST" action="{{ route('index.Formulario', ['id' => $Paciente->SS]) }}">
                @csrf
                <button type="submit" class="btn btn-primary btn-rounded mb-2 me-4 btn-add-event Hola"
                    id="Hola" style="display: none;">Agregar Formulario de evalauacion 
                </button>
            </form>
            <form class="user" method="POST"
                action="{{ route('destroy.Formulario', ['id' => $form->pk_formulario]) }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-rounded mb-2 me-4 btn-add-event Hola" id="Hola"
                    style="display: none;">Eliminar</button>
            </form>

</div>

@endforeach
@endif
</div>

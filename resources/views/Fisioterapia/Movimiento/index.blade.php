@extends('layouts.formularios')
@section('nombreVista', 'Agregar Prueba de movilidad para miembros superiores')

@section('formulario')
    <div class="col-sm">

        <!---table-->
        <form class="user" method="POST" action="{{ route('create.MSuperiores', ['id' => $id, 'TipoM'=>'Superior']) }}">
            @csrf
            <div class="container">
                <h2>Prueba de Arcos de moviidad de miembros superiores</h2>

                <div class="row">
                    <div class="col-sm">

                        <img src="{{ asset('src/assets/img/Fisioterapia/img2.jpg') }}" alt="" width="250px">
                    </div>
                    <div class="col-sm">
                        <h2>Movimiento</h2>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-responsive">
                                        <h2>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Nombre del movimento a evaluar</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    value="" name="Nombre"
                                                    placeholder="Nombre del movimiento a evaluar">
                                            </div>
                                        </h2>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Tipo evaluacion ejemplo
                                                                "Externa"</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" value="" name="Tipo"
                                                                placeholder="Externa">
                                                        </div>
                                                    </th>
                                                    <th scope="col">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Tipo evaluacion ejemplo
                                                                "Externa"</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleFormControlInput1" value="" name="Tipo1"
                                                                placeholder="Inerna">
                                                        </div>
                                                    </th>

                                                </tr>
                                                <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <select class="form-control" name="valor1">
                                                            <option>Grados</option>
                                                            @for ($i = 0; $i <= 360; $i++)
                                                                <option value="{{ $i }}">{{ $i }}°
                                                                </option>
                                                            @endfor
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="valor2">
                                                            <option>Grados</option>
                                                            @for ($i = 0; $i <= 360; $i++)
                                                                <option value="{{ $i }}">{{ $i }}°
                                                                </option>
                                                            @endfor
                                                        </select>
                                                    </td>
                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>


                        </div>

                    </div>
                    <div class="col-sm">
                        <h2>Movimiento</h2>
                        <div class="table-responsive">
                            <h2>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nombre del movimento a evaluar</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" value=""
                                        name="Nombre1" placeholder="Nombre del movimiento a evaluar">
                                </div>
                            </h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Tipo evaluacion ejemplo
                                                    "Externa"</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    value="" name="Tipo2" placeholder="Externa">
                                            </div>
                                        </th>
                                        <th scope="col">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Tipo evaluacion ejemplo
                                                    "Externa"</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                                    value="" name="Tipo3" placeholder="Interna">
                                            </div>
                                        </th>

                                    </tr>
                                    <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <select class="form-control" name="valor2">
                                                <option>Grados</option>
                                                @for ($i = 0; $i <= 360; $i++)
                                                    <option value="{{ $i }}">{{ $i }}°</option>
                                                @endfor
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="valor3">
                                                <option>Grados</option>
                                                @for ($i = 0; $i <= 360; $i++)
                                                    <option value="{{ $i }}">{{ $i }}°</option>
                                                @endfor
                                            </select>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-sm">
                        <img src="{{ asset('src/assets/img/Fisioterapia/img3.jpg') }}" alt="" width="250px">
                    </div>
                </div>

                <div class="input-group">
                    <span class="input-group-text">Observaciones</span>
                    <textarea class="form-control" aria-label="With textarea" name="observaciones"></textarea>
                </div>
                <br>
                <br>
            </div>
            <!--end-table-->

    </div>
    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
        Datos</button>
    </form>

    <!--Dedos-->
    @include('Fisioterapia.Movimiento.Dedos')
    <!--end-Dedos-->
@endsection

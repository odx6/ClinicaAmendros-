@extends('layouts.formularios')
@section('nombreVista', 'Agregar Evaluación Postura')

@section('formulario')
    <div class="col-sm">

        <!---table-->
        <form class="user" method="POST" action="{{ route('create.Postura', ['id' => $id, 'TipoM' => 'Frontal']) }}">
            @csrf
            <div class="container">
                <h2>Evaluacion Postura</h2>
                <div class="row">
                    <div class="col-sm">

                        <!---septimo container-->
                        <div class="container">

                            <div class="container">
                                <h2>Vista Frontal</h2>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Aliniacion Corporal</th>
                                                        <th scope="col">GRADOS L M S</th>

                                                        <th class="text-center" scope="col">Observaciones</th>
                                                    </tr>
                                                    <tr aria-hidden="true" class="mt-3 d-block table-row-hidden">
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $Datos = ['Inclinación Lateral la Cabeza', 'Cabeza Rotada', 'Asimetria Maxilar', 'Clavículas Asimétricas', 'Hombre Capído', 'Hombro Elevado', 'Cubito Valgo', 'Cubito Varo', 'Rotación Interna de Cadera', 'Rotación Externa ', 'Genu Varum', 'Genu Valgum', 'Torsión Tibial Interna', 'Torsión Tibial Externa', 'Hallux Valgus', 'Dedos en Garra', 'Dedos en Martillo'];
                                                        
                                                    @endphp
                                                    @foreach ($Datos as $Dat)
                                                        <tr>
                                                            <td>

                                                                <div class="form-group">

                                                                    <input type="text" class="form-control"
                                                                        id="exampleFormControlInput1"
                                                                        value="{{ $Dat }}"
                                                                        name="Posturas[{{ $Dat }}][Nombre]"
                                                                        placeholder="Observaciones">
                                                                </div>
                                                            </td>
                                                            <td> <select class="form-control"
                                                                    name="Posturas[{{ $Dat }}][L]">
                                                                    <option value="L">Leve</option>
                                                                    <option value="M">Moderado</option>
                                                                    <option value="S">Severo</option>
                                                                </select>
                                                            </td>

                                                            <td>
                                                                <div class="form-group">

                                                                    <input type="text" class="form-control"
                                                                        id="exampleFormControlInput1" value=""
                                                                        name="Posturas[{{ $Dat }}][Observaciones]"
                                                                        placeholder="Observaciones">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!---table-->

                            <!--end table -->
                        </div>

                        <!---end--septimo container-->
                    </div>


                </div>
            </div>

            <!--end-table-->

    </div>
    <button type="submit" class="btn btn-success btn-rounded mb-2 me-4 btn-add-event Hola">Enviar
        Datos</button>
    </form>
    <!--Dedos-->
    @include('Fisioterapia.Postura.Lateral')
    <!--end-Dedos-->
    <!--Dedos-->
    @include('Fisioterapia.Postura.Posterior')
    <!--end-Dedos-->

@endsection
</div>

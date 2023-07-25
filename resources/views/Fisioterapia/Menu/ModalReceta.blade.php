<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Indicaciones Medicas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <svg> ... </svg>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Receta.pdf', ['id' => $Paciente->SS]) }}" method="POST">
                    @csrf
                    <div class="col">
                        <label for="formGroupExampleInput">Indicaciones Medicas </label>

                        <span class="input-group-text">Indicaciones</span>
                        <textarea class="form-control" name="Receta" required></textarea>

                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-bs-dismiss="modal"><i class="flaticon-cancel-12"></i>Cancelar</button>
                <button type="submit" class="btn btn-primary">Generar</button>
            </div>
        </div>
    </div>
    </form>
</div>

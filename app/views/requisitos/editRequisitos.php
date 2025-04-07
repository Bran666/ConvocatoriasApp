<!-- Contenido Principal -->
<div class="col-md-10 mx-auto mt-4">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">
                Editar Requisito
                <a href="/requisitosCrud/init" class="btn btn-light float-end">
                    <i class="fas fa-arrow-left me-2"></i>Volver
                </a>
            </h4>
        </div>

        <!-- Cuerpo del formulario -->
        <div class="card-body">
            <form action="/requisitos/update/<?= $infoReal->id ?>" method="POST">
                <input type="hidden" name="id" value="<?= $infoReal->id ?>">

                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold text-success"> Nombre</label>
                    <input type="text" name="nombre" id="nombre" value="<?= htmlspecialchars($infoReal->nombre) ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="obervaciones" class="form-label fw-bold text-success"> Observaciones</label>
                    <textarea name="obervaciones" id="obervaciones" class="form-control" rows="3"><?= htmlspecialchars($infoReal->obervaciones) ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="idEntidad" class="form-label fw-bold text-success"> Entidad</label>
                    <input type="number" name="idEntidad" id="idEntidad" value="<?= $infoReal->idEntidad ?>" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="idRequisitoSeleccion" class="form-label fw-bold text-success">Requisito Selección</label>
                    <input type="number" name="idRequisitoSeleccion" id="idRequisitoSeleccion" value="<?= $infoReal->idRequisitoSeleccion ?>" class="form-control" required>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save me-2"></i> Actualizar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

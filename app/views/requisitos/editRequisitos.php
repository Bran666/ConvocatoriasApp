
            <!-- Contenido Principal -->
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Editar Requisito
                            <a href="/requisitos/init" class="btn btn-light float-end">
                                <i class="fas fa-arrow-left me-2"></i>Volver
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="/requisitos/update/<?= $infoReal->id ?>" method="POST">
                            <input type="hidden" name="id" value="<?= $infoReal->id ?>">
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-bold">Nombre</label>
                                <input type="text" name="nombre" id="nombre" value="<?= $infoReal->nombre ?>" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="obervaciones" class="form-label fw-bold">Observaciones</label>
                                <textarea name="obervaciones" id="obervaciones" class="form-control" rows="3"><?= $infoReal->obervaciones ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="idEntidad" class="form-label fw-bold">Entidad</label>
                                <input type="number" name="idEntidad" id="idEntidad" value="<?= $infoReal->idEntidad ?>" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="idRequisitoSeleccion" class="form-label fw-bold">Requisito Selección</label>
                                <input type="number" name="idRequisitoSeleccion" id="idRequisitoSeleccion" value="<?= $infoReal->idRequisitoSeleccion ?>" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i> Actualizar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

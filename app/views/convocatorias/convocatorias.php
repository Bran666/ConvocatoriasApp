
            <!-- Contenido Principal -->
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            Gestión de Convocatorias
                            <a href="/convocatoria/lista" class="btn btn-light float-end">
                                <i class="fas fa-arrow-left me-2"></i>Volver
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="/convocatoria/init" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-bold">Nombre de la Convocatoria</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>

                            <div class="mb-3">
                                <label for="fechaRevision" class="form-label fw-bold">Fecha de Revisión</label>
                                <input type="date" class="form-control" id="fechaRevision" name="fechaRevision" required>
                            </div>

                            <div class="mb-3">
                                <label for="fechaCierre" class="form-label fw-bold">Fecha de Cierre</label>
                                <input type="date" class="form-control" id="fechaCierre" name="fechaCierre" required>
                            </div>

                            <div class="mb-3">
                                <label for="descripcion" class="form-label fw-bold">Descripción</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="objetivo" class="form-label fw-bold">Objetivo</label>
                                <textarea class="form-control" id="objetivo" name="objetivo" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="observaciones" class="form-label fw-bold">Observaciones</label>
                                <textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Guardar Convocatoria
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




            <!-- Contenido Principal -->
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card shadow">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">
                                    Editar Entidad Institución
                                    <a href="/entidadInstitucion/init" class="btn btn-light float-end">
                                        <i class="fas fa-arrow-left me-2"></i>Volver
                                    </a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="/entidadInstitucion/update/<?php echo $infoReal->id; ?>" method="post">
                                    <div class="mb-3">
                                        <label for="id" class="form-label fw-bold">ID</label>
                                        <input type="text" class="form-control" value="<?php echo $infoReal->id; ?>" name="id" id="id" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label fw-bold">Nombre</label>
                                        <input type="text" class="form-control" value="<?php echo $infoReal->nombre; ?>" name="nombre" id="nombre" required>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save me-2"></i> Guardar Cambios
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



            <!-- Contenido Principal -->
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            Editar Rol
                            <a href="/rol/index" class="btn btn-light float-end">
                                <i class="fas fa-arrow-left me-2"></i>Volver
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <form action="/rol/update" method="post">
                                    <div class="mb-3">
                                        <label for="txtId" class="form-label fw-bold">ID</label>
                                        <input type="text" class="form-control" value="<?php echo $infoReal->id; ?>" 
                                               name="txtId" id="txtId" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label for="txtNombre" class="form-label fw-bold">Nombre del Rol</label>
                                        <input type="text" class="form-control" value="<?php echo $infoReal->tipoRol; ?>" 
                                               name="txtNombre" id="txtNombre" required>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save me-2"></i>Guardar Cambios
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


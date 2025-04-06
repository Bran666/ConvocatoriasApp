<!-- Contenido Principal -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6"> <!-- Más pequeño -->
            <div class="card shadow border border-light">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">
                        Editar Entidad Institución
                        <a href="/entidadInstitucion/init" class="btn btn-light btn-sm float-end">
                            <i class="fas fa-arrow-left me-1"></i>Volver
                        </a>
                    </h5>
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
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save me-2"></i> Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

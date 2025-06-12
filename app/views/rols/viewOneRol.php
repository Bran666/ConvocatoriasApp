<div class="w-100 px-3">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">
                <i class="fas fa-user-tag me-2"></i>Detalles del Rol
                <a href="/rol/index" class="btn btn-light btn-sm float-end">
                    <i class="fas fa-arrow-left me-2"></i>Volver
                </a>
            </h5>
        </div>

        <!-- Cuerpo del contenido -->
        <div class="card-body p-3">
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label fw-bold"><i class="fas fa-id-badge me-1"></i> ID:</label>
                <div class="col-sm-9">
                    <p class="form-control-plaintext"><?= $id; ?></p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label fw-bold"><i class="fas fa-user me-1"></i> Nombre:</label>
                <div class="col-sm-9">
                    <p class="form-control-plaintext"><?= $nombre; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

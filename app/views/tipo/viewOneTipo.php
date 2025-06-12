<!-- Contenido Principal -->
<div class="w-100 px-3">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0 d-flex align-items-center">
                    <i class="fas fa-info-circle me-2"></i>Detalles del Tipo
                </h5>
                <a href="/tipo/init" class="btn btn-light btn-sm">
                    <i class="fas fa-arrow-left me-1"></i>Volver
                </a>
            </div>
        </div>

        <!-- Cuerpo de los detalles -->
        <div class="card-body p-3">
            <div class="d-flex mb-3">
                <label class="col-sm-4 col-form-label fw-bold"><i class="fas fa-id-badge me-1"></i> ID:</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext small"><?php echo $id; ?></p>
                </div>
            </div>
            <div class="d-flex mb-3">
                <label class="col-sm-4 col-form-label fw-bold"><i class="fas fa-tag me-1"></i> Nombre:</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext small"><?php echo $nombre; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

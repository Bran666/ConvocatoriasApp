<div class="w-100 px-3">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">
                <i class="fas fa-check-square me-2"></i>Detalles del Requisito de Selección
                <a href="/requisitoSeleccion/init" class="btn btn-light btn-sm float-end">
                    <i class="fas fa-arrow-left me-1"></i> Volver
                </a>
            </h5>
        </div>
        
        <!-- Cuerpo del detalle -->
        <div class="card-body p-3">
            <div class="mb-2 row">
                <label class="col-sm-4 col-form-label fw-bold"><i class="fas fa-id-badge me-1"></i> ID:</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext small"><?php echo $id; ?></p>
                </div>
            </div>
            <div class="mb-2 row">
                <label class="col-sm-4 col-form-label fw-bold"><i class="fas fa-tag me-1"></i> Nombre:</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext small"><?php echo $nombre; ?></p>
                </div>
            </div>
            <div class="mb-2 row">
                <label class="col-sm-4 col-form-label fw-bold"><i class="fas fa-cogs me-1"></i> Tipo:</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext small"><?php echo $tipo; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

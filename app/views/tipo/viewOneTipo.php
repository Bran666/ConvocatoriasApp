<!-- Contenido Principal -->
<div class="col-md-10 mx-auto mt-2">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h5 class="mb-0 d-flex justify-content-between align-items-center">
                Detalles del Tipo
                <a href="/tipo/init" class="btn btn-light btn-sm">
                    <i class="fas fa-arrow-left me-1"></i>Volver
                </a>
            </h5>
        </div>

        <!-- Cuerpo de los detalles -->
        <div class="card-body p-3">
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label fw-bold">ID:</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext small"><?php echo $id; ?></p>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-4 col-form-label fw-bold">Nombre:</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext small"><?php echo $nombre; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

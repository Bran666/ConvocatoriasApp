<!-- Contenido Principal -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6"> <!-- Tamaño reducido -->
            <div class="card shadow border border-light">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">
                        Detalles del Rol
                        <a href="/rol/index" class="btn btn-light btn-sm float-end">
                            <i class="fas fa-arrow-left me-2"></i>Volver
                        </a>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label fw-bold">ID:</label>
                        <div class="col-sm-9">
                            <p class="form-control-plaintext"><?php echo $id; ?></p>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label fw-bold">Nombre:</label>
                        <div class="col-sm-9">
                            <p class="form-control-plaintext"><?php echo $nombre; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contenido Principal -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3"> <!-- Más pequeño y desplazado a la derecha -->
            <div class="card shadow-sm border border-light"> <!-- Borde claro y sombra suave -->
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0"> <!-- Título un poco más pequeño -->
                        Detalles de la Entidad Institución
                        <a href="/entidadInstitucion/init" class="btn btn-light btn-sm float-end">
                            <i class="fas fa-arrow-left me-1"></i>Volver
                        </a>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="mb-2 row">
                        <label class="col-sm-4 col-form-label fw-bold">ID:</label>
                        <div class="col-sm-8">
                            <p class="form-control-plaintext small"><?php echo $id; ?></p>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label class="col-sm-4 col-form-label fw-bold">Nombre:</label>
                        <div class="col-sm-8">
                            <p class="form-control-plaintext small"><?php echo $nombre; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

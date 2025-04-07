<!-- Contenido Principal -->
<div class="col-md-10 mx-auto mt-4">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">
                Detalles del Requisito
                <a href="/requisitosCrud/init" class="btn btn-light float-end">
                    <i class="fas fa-arrow-left me-2"></i>Volver
                </a>
            </h4>
        </div>

        <!-- Cuerpo del contenido -->
        <div class="card-body">
            <div class="mb-3">
                <label class="fw-bold text-success"> Nombre:</label>
                <p class="form-control-plaintext"><?= htmlspecialchars($nombre) ?></p>
            </div>
            <div class="mb-3">
                <label class="fw-bold text-success"> Observaciones:</label>
                <p class="form-control-plaintext"><?= htmlspecialchars($observaciones) ?></p>
            </div>
            <div class="mb-3">
                <label class="fw-bold text-success"> ID Entidad:</label>
                <p class="form-control-plaintext"><?= htmlspecialchars($idEntidad) ?></p>
            </div>
            <div class="mb-3">
                <label class="fw-bold text-success"> ID Requisito Selección:</label>
                <p class="form-control-plaintext"><?= htmlspecialchars($idRequisitoSeleccion) ?></p>
            </div>
        </div>
    </div>
</div>

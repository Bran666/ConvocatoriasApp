<div class="w-100 px-3">
  <div class="row justify-content-center"> <!-- Alineado al centro -->
    <div class="col-12"> <!-- Ocupa toda la pantalla en cualquier tamaño -->
      <div class="card shadow-sm border border-light"> <!-- Borde claro y sombra suave -->
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">
                <i class="fas fa-building me-2"></i>Detalles de la Entidad Institución
                <a href="/entidadInstitucion/init" class="btn btn-light btn-sm float-end">
                    <i class="fas fa-arrow-left me-1"></i>Volver
                </a>
            </h5>
        </div>
        <div class="card-body">
            <div class="mb-2 row">
                <label class="col-sm-4 col-form-label fw-bold"><i class="fas fa-id-badge me-1"></i> ID:</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext small"><?php echo $id; ?></p>
                </div>
            </div>
            <div class="mb-2 row">
                <label class="col-sm-4 col-form-label fw-bold"><i class="fas fa-user me-1"></i> Nombre:</label>
                <div class="col-sm-8">
                    <p class="form-control-plaintext small"><?php echo $nombre; ?></p>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

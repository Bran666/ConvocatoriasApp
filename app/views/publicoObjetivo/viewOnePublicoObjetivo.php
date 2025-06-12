<div class="w-100 px-3">
  <div class="card border-light bg-white shadow-sm">
    <!-- Cabecera verde -->
    <div class="card-header bg-success text-white">
      <h4 class="mb-0 d-flex justify-content-between align-items-center">
        <i class="fas fa-users me-2"></i> Detalles del Público Objetivo
        <a href="/publicoObjetivo/init" class="btn btn-light btn-sm">
          <i class="fas fa-arrow-left me-2"></i>Volver
        </a>
      </h4>
    </div>
    <div class="card-body">
      <div class="mb-3">
        <label class="fw-bold">
          <i class="fas fa-hashtag me-1"></i> ID:
        </label>
        <p><?= $id ?></p>
      </div>
      <div class="mb-3">
        <label class="fw-bold">
          <i class="fas fa-user me-1"></i> Nombre:
        </label>
        <p><?= $nombre ?></p>
      </div>
    </div>
  </div>
</div>

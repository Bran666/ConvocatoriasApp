<div class="w-100 px-3">

  <div class="row">
  <div class="col-12">
      <div class="card shadow-sm">
        <div class="card-header bg-success text-white py-2">
          <h5 class="mb-0">
            <i class="fas fa-info-circle me-2"></i> Detalles de la Línea
            <a href="/linea/init" class="btn btn-light btn-sm float-end">
              <i class="fas fa-arrow-left me-1"></i>Volver
            </a>
          </h5>
        </div>
        <div class="card-body">
          <form action="/linea/create" method="post">
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label fw-semibold">
                <i class="fas fa-hashtag me-1 icon-gray"></i> ID:
              </label>
              <div class="col-sm-10">
                <input type="text" class="form-control-plaintext " value="<?php echo $id; ?>" readonly>
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label fw-semibold">
                <i class="fas fa-font me-1 icon-gray"></i> Nombre:
              </label>
              <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" value="<?php echo $nombre; ?>" readonly>
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label fw-semibold">
                <i class="fas fa-align-left me-1 icon-gray"></i> Descripción:
              </label>
              <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" value="<?php echo $descripcion; ?>" readonly>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

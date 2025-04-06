<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-8"> <!-- Contenedor más pequeño y centrado -->
      <div class="card shadow-sm">
        <div class="card-header bg-success text-white py-2">
          <h5 class="mb-0">Detalles de la Línea
          <a href="/linea/init" class="btn btn-light btn-sm float-end">
                            <i class="fas fa-arrow-left me-1"></i>Volver
                        </a>
          </h5>
        </div>
        <div class="card-body">
          <form action="/linea/create" method="post">
            <div class="mb-2 row">
              <label class="col-sm-3 col-form-label fw-semibold">ID:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control-plaintext" value="<?php echo $id; ?>" readonly>
              </div>
            </div>
            <div class="mb-2 row">
              <label class="col-sm-3 col-form-label fw-semibold">Nombre:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control-plaintext" value="<?php echo $nombre; ?>" readonly>
              </div>
            </div>
            <div class="mb-3 row">
              <label class="col-sm-3 col-form-label fw-semibold">Descripción:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control-plaintext" value="<?php echo $descripcion; ?>" readonly>
              </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-md-10 mx-auto">
  <div class="card shadow">
    <!-- Cabecera verde con ícono -->
    <div class="card-header bg-success text-white text-center py-3">
      <h2 class="h5 mb-0">
        <i class="fas fa-university me-2"></i>Entidad Institución
        <a href="/entidadInstitucion/init" class="btn btn-light btn-sm float-end">
          <i class="fas fa-arrow-left me-1"></i> Volver
        </a>
      </h2>
    </div>

    <!-- Cuerpo del formulario -->
    <div class="card-body px-4 py-3">
      <form action="/entidadInstitucion/create" method="post">

        <!-- Campo de Nombre con ícono -->
        <div class="mb-3">
          <label for="nombre" class="form-label fw-bold">Nombre</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-building"></i></span>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre de la entidad" required>
          </div>
        </div>

        <!-- Botón Guardar -->
        <div class="d-grid">
          <button type="submit" class="btn btn-success">
            <i class="fas fa-save me-2"></i>Guardar
          </button>
        </div>

      </form>
    </div>
  </div>
</div>


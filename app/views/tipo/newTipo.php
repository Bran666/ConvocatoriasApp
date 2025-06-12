<!-- Contenido Principal -->
<div class="w-100 px-3">
  <div class="card shadow">
    <!-- Cabecera verde con ícono -->
    <div class="card-header bg-success text-white">
      <h5 class="mb-0 d-flex justify-content-between align-items-center">
        <span><i class="fas fa-tags me-2"></i>Tipo</span>
        <a href="/tipo/init" class="btn btn-light btn-sm">
          <i class="fas fa-arrow-left me-2"></i> Volver
        </a>
      </h5>
    </div>

    <!-- Cuerpo del formulario -->
    <div class="card-body p-3">
      <form action="/tipo/create" method="post">
        <!-- Campo de Nombre con ícono -->
        <div class="mb-3">
          <label for="nombre" class="form-label fw-bold">Nombre</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-pen"></i></span>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Académico, Técnico" required>
          </div>
        </div>

        <!-- Botón Guardar -->
        <div class="d-grid">
          <button type="submit" class="btn btn-success">
            <i class="fas fa-save me-2"></i> Guardar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

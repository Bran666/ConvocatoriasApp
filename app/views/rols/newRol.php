<!-- Contenido Principal -->
<div class="w-100 px-3">
  <div class="card shadow">
    <!-- Cabecera verde con ícono de rol -->
    <div class="card-header bg-success text-white">
      <h5 class="mb-0 d-flex justify-content-between align-items-center">
        <span><i class="fas fa-user-shield me-2"></i>Nuevo Rol</span>
        <a href="/rol/index" class="btn btn-light btn-sm">
          <i class="fas fa-arrow-left me-2"></i>Volver
        </a>
      </h5>
    </div>

    <!-- Cuerpo del formulario -->
    <div class="card-body p-3">
      <form action="/rol/create" method="post">
        <!-- Campo con ícono -->
        <div class="mb-3">
          <label for="txtNombre" class="form-label fw-bold">Nombre del Rol</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
            <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Ej: Administrador" required>
          </div>
        </div>
        
        <!-- Botón Guardar -->
        <div class="d-grid">
          <button type="submit" class="btn btn-success">
            <i class="fas fa-save me-2"></i>Guardar Rol
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

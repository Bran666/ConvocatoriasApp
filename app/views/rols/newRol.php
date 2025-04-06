<!-- Contenido Principal -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5"> <!-- Más pequeño -->
            <div class="card shadow-sm border border-white">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0 d-flex justify-content-between align-items-center">
                        Nuevo Rol
                        <a href="/rol/index" class="btn btn-light btn-sm">
                            <i class="fas fa-arrow-left me-2"></i>Volver
                        </a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="/rol/create" method="post">
                        <div class="mb-3">
                            <label for="txtNombre" class="form-label fw-bold">Nombre del Rol</label>
                            <input type="text" class="form-control" name="txtNombre" id="txtNombre" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save me-2"></i>Guardar Rol
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

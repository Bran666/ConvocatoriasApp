<!-- Contenido Principal -->
<div class="col-md-10 mx-auto">
    <div class="card shadow">
        <!-- Cabecera verde -->
        <div class="card-header bg-success text-white">
            <h5 class="mb-0 d-flex justify-content-between align-items-center">
                Tipo
                <a href="/tipo/init" class="btn btn-light btn-sm">
                    <i class="fas fa-arrow-left me-2"></i> Volver
                </a>
            </h5>
        </div>

        <!-- Cuerpo del formulario -->
        <div class="card-body p-3">
            <form action="/tipo/create" method="post">
                <!-- Campo de Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save me-2"></i> Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

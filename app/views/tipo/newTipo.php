<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5"> <!-- Tamaño más pequeño -->
            <div class="card shadow-sm border border-light"> <!-- Contenedor con sombra suave y borde claro -->
                <div class="card-header bg-success text-white text-center py-3"> <!-- Menos padding -->
                    <h2 class="h5 mb-0"><i class="fas fa-bullhorn me-2"></i>Tipo
                    <a href="/tipo/init" class="btn btn-light btn-sm float-end">
                            <i class="fas fa-arrow-left me-1"></i> Volver
                        </a></h2>
                </div>
                <div class="card-body px-4 py-3"> <!-- Padding interno más reducido -->
                    <form action="/tipo/create" method="post">
                        <!-- Campo de Nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-bold">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save me-2"></i>Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
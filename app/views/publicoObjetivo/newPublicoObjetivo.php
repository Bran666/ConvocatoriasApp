<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5"> <!-- Contenedor más pequeño -->
            <div class="card shadow-sm border border-light"> <!-- Sombra suave y borde claro -->
                <div class="card-header bg-success text-white text-center py-3">
                    <h4 class="mb-0">
                        <i class="fas fa-user-plus me-2"></i>Agregar Público Objetivo
                        <a href="/publicoObjetivo/init" class="btn btn-light btn-sm float-end">
                            <i class="fas fa-arrow-left me-1"></i> Volver
                        </a>
                    </h4>
                </div>
                <div class="card-body px-4 py-3">
                    <form action="/publicoObjetivo/create" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-bold">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required>
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

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5"> <!-- Contenedor más pequeño -->
            <div class="card shadow-sm border border-light"> <!-- Sombra suave y borde claro -->
                <div class="card-header bg-success text-white text-center py-3">
                    <h4 class="mb-0">
                        <i class="fas fa-bullhorn me-2"></i>Línea
                        <a href="/linea/init" class="btn btn-light btn-sm float-end">
                            <i class="fas fa-arrow-left me-1"></i> Volver
                        </a>
                    </h4>
                </div>
                <div class="card-body px-4 py-3">
                    <form action="/linea/create" method="post">
                        <!-- Campo de Nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-bold">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>

                        <!-- Campo de Descripción -->
                        <div class="mb-3">
                            <label for="descripcion" class="form-label fw-bold">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
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

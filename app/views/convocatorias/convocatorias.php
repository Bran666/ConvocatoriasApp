<!-- Contenido Principal -->
<div class="d-flex justify-content-center">
    <div class="card shadow-sm border border-success w-100" style="max-width: 1000px; background-color: #ffffff;">
        <div class="card-header bg-success text-white py-2">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Gestión de Convocatorias</h5>
                <a href="/convocatoria/lista" class="btn btn-light btn-sm">
                    <i class="fas fa-arrow-left me-2"></i>Volver
                </a>
            </div>
        </div>

        <div class="card-body p-4">
            <form action="/convocatoria/init" method="post" enctype="multipart/form-data">
                <!-- Campo Nombre -->
                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold">Nombre de la Convocatoria</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <!-- Campo Fecha de Revisión -->
                <div class="mb-3">
                    <label for="fechaRevision" class="form-label fw-bold">Fecha de Revisión</label>
                    <input type="date" class="form-control" id="fechaRevision" name="fechaRevision" required>
                </div>

                <!-- Campo Fecha de Cierre -->
                <div class="mb-3">
                    <label for="fechaCierre" class="form-label fw-bold">Fecha de Cierre</label>
                    <input type="date" class="form-control" id="fechaCierre" name="fechaCierre" required>
                </div>

                <!-- Campo Descripción -->
                <div class="mb-3">
                    <label for="descripcion" class="form-label fw-bold">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                </div>

                <!-- Campo Objetivo -->
                <div class="mb-3">
                    <label for="objetivo" class="form-label fw-bold">Objetivo</label>
                    <textarea class="form-control" id="objetivo" name="objetivo" rows="3" required></textarea>
                </div>

                <!-- Campo Observaciones -->
                <div class="mb-3">
                    <label for="observaciones" class="form-label fw-bold">Observaciones</label>
                    <textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
                </div>

                <!-- Botón -->
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save me-2"></i>Guardar Convocatoria
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

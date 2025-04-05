<div class="container-fluid py-30">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-14 col-xl-10">
            <div class="card shadow-lg">
                <div class="card-header bg-success text-white text-center p-4">
                    <h2 class="h3 mb-3"><i class="fas fa-bullhorn me-2"></i>Convocatorias</h2>
                </div>
                <div class="card-body">
                    <div class="mb-4 text-center">
                        <a href="/convocatoria/lista" class="btn btn-outline-primary">Ver todas las convocatorias</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <a href="/linea/init" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="fas fa-chart-line me-2"></i> Línea
                            </a>
                            <a href="/publicoObjetivo/init" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="fas fa-users me-2"></i> Público Objetivo
                            </a>
                            <a href="/requisitos/init" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="fas fa-list-check me-2"></i> Requisitos
                            </a>
                            <a href="/entidadInstitucion/init" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="fas fa-building me-2"></i> Entidad Institución
                            </a>
                            <a href="/rol/index" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="fas fa-user-tag me-2"></i> Rol
                            </a>
                            <a href="/requisitosSeleccion/init" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="fas fa-tasks me-2"></i> Requisitos Selección
                            </a>
                            <a href="/tipo/init" class="list-group-item list-group-item-action d-flex align-items-center">
                                <i class="fas fa-tag me-2"></i> Tipo
                            </a>
                            <a href="/convocatorias/init" class="list-group-item list-group-item-action active d-flex align-items-center">
                                <i class="fas fa-bullhorn me-2"></i> Convocatorias
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contenido Principal -->
            <div class="col-md-10">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">
                            Gestión de Convocatorias
                            <a href="/convocatoria/lista" class="btn btn-light float-end">
                                <i class="fas fa-arrow-left me-2"></i>Volver
                            </a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="/convocatoria/init" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-bold">Nombre de la Convocatoria</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>

                            <div class="mb-3">
                                <label for="fechaRevision" class="form-label fw-bold">Fecha de Revisión</label>
                                <input type="date" class="form-control" id="fechaRevision" name="fechaRevision" required>
                            </div>

                            <div class="mb-3">
                                <label for="fechaCierre" class="form-label fw-bold">Fecha de Cierre</label>
                                <input type="date" class="form-control" id="fechaCierre" name="fechaCierre" required>
                            </div>

                            <div class="mb-3">
                                <label for="descripcion" class="form-label fw-bold">Descripción</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="objetivo" class="form-label fw-bold">Objetivo</label>
                                <textarea class="form-control" id="objetivo" name="objetivo" rows="3" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="observaciones" class="form-label fw-bold">Observaciones</label>
                                <textarea class="form-control" id="observaciones" name="observaciones" rows="3"></textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Guardar Convocatoria
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="custom-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h5>Sistema de Convocatorias</h5>
                <p class="mb-0">© 2023 Todos los derechos reservados</p>
            </div>
            <div class="col-md-6 text-end">
                <div class="social-links">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
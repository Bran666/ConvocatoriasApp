
    <!-- Header -->
    <div class="container py-5">
    <header class=" bg-success bg-gradient shadow-sm">
        <div class="container px-4 py-4">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <!-- Flecha más grande -->
                    <a href="/menu/init" class="text-white me-3">
                        <i class="fas fa-arrow-left fa-xl"></i>
                    </a>
                    <!-- Título con nuevo estilo -->
                    <h1 class="h2 fw-bold text-white mb-0">Administración de Convocatorias</h1>
                </div>
                <div class="dropdown">
                    <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-vertical"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-download me-2"></i> Exportar usuarios
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-upload me-2"></i> Importar usuarios
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Admin info -->
    <div class="bg-success bg-opacity-25 border-bottom">
        <div class="container px-4 py-3">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-3">
                    <div class="bg-white rounded-circle p-1 border border-primary border-2">
                        <img id="profile-image" src="https://via.placeholder.com/40" alt="Admin" 
                             class="rounded-circle" width="40" height="40" style="cursor: pointer;">
                    </div>
                </div>
                <div>
                    <h2 class="fw-semibold h5 mb-0">Administrador</h2>
                    <p class="text-muted small mb-0">Panel de control de convocatorias</p>
                </div>
                <div class="ms-auto d-flex gap-2">
                    <span class="badge bg-opacity-10 bg-primary text-success border border-success px-3 py-2">
                        <i class="fas fa-bullhorn me-1"></i> 5 Convocatorias
                    </span>
                    <span class="badge bg-primary bg-opacity-10 text-primary border border-primary px-3 py-2">
                        <i class="fas fa-users me-1"></i> 120 Aplicantes
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="container px-4 py-4">
        <!-- Search and filters -->
        <div class="row g-3 mb-4">
            <div class="col-md-8">
                <div class="input-group">
                    <span class="input-group-text bg-white">
                        <i class="fas fa-search text-secondary"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Buscar Convocatorias...">
                </div>
            </div>
            <div class="col-md-4 d-flex gap-2">
                <button class="btn btn-outline-secondary flex-grow-0" data-bs-toggle="modal" data-bs-target="#filterModal">
                    <i class="fas fa-filter me-2"></i> Filtros
                </button>
                <button class="btn btn-primary flex-grow-1" data-bs-toggle="modal" data-bs-target="#newConvocatoriaModal">
                    <i class="fas fa-plus me-2"></i> Nueva Convocatoria
                </button>
            </div>
        </div>

        <!-- Tabs -->
        <ul class="nav nav-tabs mb-4" id="convocatoriaTabs" role="tablist">
            <li class="nav-item flex-fill text-center" role="presentation">
                <button class="nav-link active w-100" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane" 
                        type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">Todas</button>
            </li>
            <li class="nav-item flex-fill text-center" role="presentation">
                <button class="nav-link w-100" id="active-tab" data-bs-toggle="tab" data-bs-target="#active-tab-pane" 
                        type="button" role="tab" aria-controls="active-tab-pane" aria-selected="false">Activas</button>
            </li>
            <li class="nav-item flex-fill text-center" role="presentation">
                <button class="nav-link w-100" id="draft-tab" data-bs-toggle="tab" data-bs-target="#draft-tab-pane" 
                        type="button" role="tab" aria-controls="draft-tab-pane" aria-selected="false">Borradores</button>
            </li>
            <li class="nav-item flex-fill text-center" role="presentation">
                <button class="nav-link w-100" id="closed-tab" data-bs-toggle="tab" data-bs-target="#closed-tab-pane" 
                        type="button" role="tab" aria-controls="closed-tab-pane" aria-selected="false">Cerradas</button>
            </li>
        </ul>

        <!-- Tab content -->
        <div class="tab-content" id="convocatoriaTabsContent">
            <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                <!-- Convocatoria cards -->
                <div class="d-flex flex-column gap-3">
                    <!-- Ejemplo de convocatoria (repetir para cada item) -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="d-flex align-items-start gap-3">
                                        <div class="flex-shrink-0">
                                            <div class="bg-white rounded-circle p-1 border border-primary border-2">
                                                <img src="https://via.placeholder.com/40" alt="Convocatoria" 
                                                     class="rounded-circle" width="40" height="40">
                                            </div>
                                        </div>

                                        <div class="flex-grow-1">
                                            <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                                                <h5 class="card-title mb-0">Convocatoria de Investigación</h5>
                                                <span class="badge rounded-pill status-active px-3">Activa</span>
                                            </div>

                                            <div class="d-flex flex-wrap text-muted mb-2">
                                                <span class="me-3">
                                                    <i class="fas fa-calendar me-1"></i> 
                                                    15/06/2023 - 30/07/2023
                                                </span>
                                            </div>

                                            <p class="card-text mb-2">Convocatoria para proyectos de investigación en ciencias ambientales.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-3 mt-md-0">
                                    <div class="d-flex flex-wrap justify-content-md-end gap-2">
                                        <button class="btn btn-sm btn-outline-secondary btn-view">
                                            <i class="fas fa-eye me-1"></i> Ver
                                        </button>
                                        <button class="btn btn-sm btn-outline-secondary btn-edit" data-bs-toggle="modal" 
                                                data-bs-target="#editModal">
                                            <i class="fas fa-edit me-1"></i> Editar
                                        </button>
                                        <button class="btn btn-sm btn-outline-secondary btn-delete">
                                            <i class="fas fa-trash me-1"></i> Eliminar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin ejemplo -->

                    <!-- Mensaje cuando no hay convocatorias -->
                    <div class="alert alert-info d-none">
                        No hay convocatorias disponibles.
                    </div>
                </div>
            </div>
        </div>

        <!-- Filter Modal -->
        <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="filterModalLabel">Filtrar convocatorias</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="categoryFilter" class="form-label">Categoría</label>
                            <select class="form-select" id="categoryFilter">
                                <option selected>Todas las categorías</option>
                                <option value="education">Educación</option>
                                <option value="research">Investigación</option>
                                <option value="internship">Pasantías</option>
                                <option value="environment">Medio Ambiente</option>
                                <option value="innovation">Innovación</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="dateRangeFilter" class="form-label">Período</label>
                            <select class="form-select" id="dateRangeFilter">
                                <option selected>Cualquier fecha</option>
                                <option value="current">En curso</option>
                                <option value="upcoming">Próximas</option>
                                <option value="past">Pasadas</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="applicantsFilter" class="form-label">Número de aplicantes</label>
                            <select class="form-select" id="applicantsFilter">
                                <option selected>Cualquier cantidad</option>
                                <option value="0-10">0-10 aplicantes</option>
                                <option value="11-50">11-50 aplicantes</option>
                                <option value="51+">Más de 50 aplicantes</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Aplicar filtros</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Convocatoria Modal -->
        <div class="modal fade" id="newConvocatoriaModal" tabindex="-1" aria-labelledby="newConvocatoriaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newConvocatoriaModalLabel">
                            <i class="fas fa-bullhorn me-2"></i>Nueva Convocatoria
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form id="formConvocatoria" action="/administrarConvocatorias/init" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="txtNombre" class="form-label">
                                        <i class="fas fa-tag me-2"></i>Nombre Convocatoria
                                    </label>
                                    <input type="text" class="form-control" id="txtNombre" name="txtNombre"
                                        placeholder="Nombre de la convocatoria" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="txtDescripcion" class="form-label">
                                        <i class="fas fa-align-left me-2"></i>Descripción
                                    </label>
                                    <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="3"
                                        placeholder="Descripción de la convocatoria" required></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="txtCategoria" class="form-label">
                                        <i class="fas fa-folder me-2"></i>Categoría
                                    </label>
                                    <select class="form-select" name="txtCategoria" id="txtCategoria" required>
                                        <option selected>Seleccionar categoría</option>
                                        <option value="education">Educación</option>
                                        <option value="research">Investigación</option>
                                        <option value="internship">Pasantías</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="txtFechaInicio" class="form-label">
                                        <i class="fas fa-calendar-alt me-2"></i>Fecha de Inicio
                                    </label>
                                    <input type="date" class="form-control" name="txtFechaInicio" id="txtFechaInicio" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="txtFechaCierre" class="form-label">
                                        <i class="fas fa-calendar-times me-2"></i>Fecha de Cierre
                                    </label>
                                    <input type="date" class="form-control" name="txtFechaCierre" id="txtFechaCierre" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="txtModalidad" class="form-label">
                                        <i class="fas fa-tasks me-2"></i>Modalidad
                                    </label>
                                    <select class="form-select" name="txtModalidad" id="txtModalidad" required>
                                        <option selected>Seleccionar Modalidad</option>
                                        <option value="presencial">Presencial</option>
                                        <option value="virtual">Virtual</option>
                                        <option value="hibrido">Híbrido</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="txtUbicacion" class="form-label">
                                        <i class="fas fa-map-marker-alt me-2"></i>Ubicación
                                    </label>
                                    <input type="text" class="form-control" id="txtUbicacion" name="txtUbicacion"
                                        placeholder="Ubicación de la convocatoria" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="txtRequisitos" class="form-label">
                                        <i class="fas fa-list-alt me-2"></i>Requisitos
                                    </label>
                                    <textarea class="form-control" id="txtRequisitos" name="txtRequisitos" rows="5"
                                        placeholder="Requisitos de la convocatoria" required></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="txtBeneficios" class="form-label">
                                        <i class="fas fa-gift me-2"></i>Beneficios
                                    </label>
                                    <textarea class="form-control" id="txtBeneficios" name="txtBeneficios" rows="3"
                                        placeholder="Beneficios de la convocatoria" required></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="txtimagenConvocatorias" class="form-label">
                                        <i class="fas fa-image me-2"></i>Imagen de la Convocatoria
                                    </label>
                                    <input type="file" class="form-control" id="txtimagenConvocatorias"
                                        name="txtimagenConvocatorias" accept="image/*" required>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                <i class="fas fa-times me-2"></i>Cancelar
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-check me-2"></i>Crear
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
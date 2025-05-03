<div class="container py-5" style="max-width: 1200px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1); padding: 25px; position: relative;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/SENA.jpg" alt="Logo" width="30" height="30">
                <span class="ms-2 fw-semibold">SENA</span>
            </a>
            <div class="d-flex align-items-center">
                <a href="/logout" class="text-decoration-none text-secondary me-3">Cerrar Sesión</a>
                <a href="/userPerfil/init" class="text-decoration-none">
                    <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                        <span class="fw-bold">
                            <?php

                            use App\Models\FavoritosModel;

                            if (isset($_SESSION['nombre'])) {
                                // Separa el nombre por espacios
                                $nombreCompleto = trim($_SESSION['nombre']);
                                $partes = explode(' ', $nombreCompleto);

                                // Toma la primera letra del primer nombre y primer apellido (si existe)
                                $iniciales = strtoupper(substr($partes[0], 0, 1));
                                if (isset($partes[1])) {
                                    $iniciales .= strtoupper(substr($partes[1], 0, 1));
                                }

                                echo $iniciales;
                            } else {
                                echo "US"; // Si no hay nombre en sesión, muestra "US" de "Usuario"
                            }
                            ?>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </nav>

    <!-- Search Bar -->
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="input-group search-bar">
                <span class="input-group-text bg-transparent border-0">
                    <i class="fas fa-search text-secondary"></i>
                </span>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Buscar programas, cursos o convocatorias">
            </div>
        </div>
    </div>

    <!-- Navigation Tabs -->
    <ul class="nav nav-tabs border-0 justify-content-end mb-5">
        <li class="nav-item">
            <a class="nav-link" href="/menu/init">Descubrir</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/explorar/init">Explorar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/favoritos/init">
                <i class="far fa-bookmark me-1"></i> Favoritos
            </a>
        </li>
    </ul>

    <!-- Explorar Header -->
    <div class="mb-5">
        <h1 class="fw-bold mb-2">Explorar Convocatorias</h1>
        <p class="text-muted">Descubre todas las oportunidades disponibles según tus intereses y ubicación</p>
    </div>

    <!-- Filters Section -->
    <div class="filter-section mb-5">
        <h5 class="fw-semibold mb-4">Filtros de búsqueda</h5>

        <div class="row g-4">
            <!-- Categoría -->
            <div class="col-md-4">
                <label class="form-label fw-medium">Categoría</label>
                <select class="form-select">
                    <option selected>Todas las categorías</option>
                    <option>Formación Técnica</option>
                    <option>Formación Tecnológica</option>
                    <option>Certificaciones</option>
                    <option>Prácticas</option>
                    <option>Internacional</option>
                </select>
            </div>

            <!-- Ubicación -->
            <div class="col-md-4">
                <label class="form-label fw-medium">Ubicación</label>
                <select class="form-select">
                    <option selected>Todo el país</option>
                    <option>Bogotá</option>
                    <option>Medellín</option>
                    <option>Cali</option>
                    <option>Barranquilla</option>
                    <option>Virtual</option>
                </select>
            </div>

            <!-- Fecha -->
            <div class="col-md-4">
                <label class="form-label fw-medium">Fecha de inicio</label>
                <select class="form-select">
                    <option selected>Cualquier fecha</option>
                    <option>Próximos 7 días</option>
                    <option>Próximos 30 días</option>
                    <option>Próximos 3 meses</option>
                    <option>Personalizado</option>
                </select>
            </div>
        </div>

        <div class="mt-4">
            <button class="btn btn-success me-2">
                <i class="fas fa-filter me-2"></i> Aplicar filtros
            </button>
        </div>
    </div>

    <!-- Map View Toggle -->
    <div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-semibold mb-0">Resultados (<?php echo count($convocatorias); ?>)</h5> <!-- Mostrar el total de convocatorias -->
        <div class="d-flex gap-2">
            <select class="form-select form-select-sm" style="width: auto;">
                <option selected>Más recientes</option>
                <option>Popularidad</option>
                <option>Fecha de inicio</option>
            </select>
        </div>
    </div>
    <!-- Cards Section -->
    <div class="row">
        <!-- Featured Card Section -->
        <?php if (!empty($convocatorias)): ?>
            <!-- Dynamic Convocatorias Section -->
            <?php foreach ($convocatorias as $conv): ?>
                <div class="col-md-4 mb-4 d-flex align-items-stretch">
                    <div class="card border-0 shadow-sm w-100 d-flex flex-column">
                        <!-- Imagen -->
                        <div class="position-relative">
                            <img src="/img/image.png" class="card-img-top object-fit-cover" alt="<?php echo htmlspecialchars($conv->nombre) ?>" style="height: 200px; object-fit: cover;">
                        </div>

                        <!-- Contenido -->
                        <div class="card-body d-flex flex-column p-3">
                            <h5 class="card-title mb-2"><?php echo htmlspecialchars($conv->nombre) ?></h5>
                            <p class="card-text text-muted small flex-grow-1"><?php echo htmlspecialchars($conv->descripcion) ?></p>

                            <!-- Información y botones al final -->
                            <div class="mt-auto">
                                <div class="d-flex justify-content-between align-items-center text-muted small mb-3">
                                    <div>
                                        <i class="far fa-calendar me-1"></i>
                                        Cierre: <?php echo date('d M Y', strtotime($conv->fechaCierre)) ?>
                                    </div>
                                </div>

                                <!-- Botones -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex gap-2"> <!-- Aquí se separan los botones -->
                                        <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalConvocatoria<?php echo $conv->id ?>">Detalles</button>
                                        <button class="btn btn-outline-success btn-sm">Inscribirse</button>
                                    </div>
                                    <?php
                                    $favoritosModel = new FavoritosModel();
                                    $favoritosUsuario = $favoritosModel->obtenerFavoritosPorUsuario($_SESSION['id'] ?? 0);
                                    $favoritosIds = array_column($favoritosUsuario, 'id'); // Esto sí debe ir solo una vez, al inicio
                                    ?>
                                    <i class="<?= in_array($conv->id, $favoritosIds) ? 'fas' : 'far' ?> fa-star favorito-icon text-warning fs-5"
                                        style="cursor:pointer;"
                                        data-id="<?= $conv->id ?>"
                                        onclick="toggleFavorito(this)"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Detalles -->
                <div class="modal fade" id="modalConvocatoria<?php echo $conv->id ?>" tabindex="-1" aria-labelledby="modalConvocatoriaLabel<?php echo $conv->id ?>" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header bg-success text-white border-0">
                                <h5 class="modal-title" id="modalConvocatoriaLabel<?php echo $conv->id ?>">
                                    <i class="fas fa-clipboard-list me-2"></i> Detalles de la Convocatoria
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body p-0">
                                <!-- Banner image with overlay -->
                                <div class="position-relative">
                                    <img src="/img/image.png" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                                    <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);">
                                        <h4 class="text-white mb-0"><?php echo htmlspecialchars($conv->nombre) ?></h4>
                                    </div>
                                    <span class="badge bg-danger position-absolute top-0 end-0 m-3">
                                        Cierra: <?php echo date('d M Y', strtotime($conv->fechaCierre)) ?>
                                    </span>
                                </div>

                                <!-- Content section -->
                                <div class="p-4">
                                    <!-- Info cards -->
                                    <div class="row mb-4">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <div class="card h-100 border-0 bg-light">
                                                <div class="card-body text-center">
                                                    <i class="far fa-calendar-alt text-success fa-2x mb-2"></i>
                                                    <h6 class="card-title">Fecha de Cierre</h6>
                                                    <p class="card-text"><?php echo date('d M Y', strtotime($conv->fechaCierre)) ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <div class="card h-100 border-0 bg-light">
                                                <div class="card-body text-center">
                                                    <i class="fas fa-building text-success fa-2x mb-2"></i>
                                                    <h6 class="card-title">Entidad</h6>
                                                    <p class="card-text">SENA</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card h-100 border-0 bg-light">
                                                <div class="card-body text-center">
                                                    <i class="fas fa-user-tie text-success fa-2x mb-2"></i>
                                                    <h6 class="card-title">Responsable</h6>
                                                    <p class="card-text">Administrador</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tabs for content organization -->
                                    <ul class="nav nav-tabs" id="convocatoriaTab<?php echo $conv->id ?>" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="descripcion-tab<?php echo $conv->id ?>" data-bs-toggle="tab" data-bs-target="#descripcion<?php echo $conv->id ?>" type="button" role="tab" aria-controls="descripcion" aria-selected="true">Descripción</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="objetivo-tab<?php echo $conv->id ?>" data-bs-toggle="tab" data-bs-target="#objetivo<?php echo $conv->id ?>" type="button" role="tab" aria-controls="objetivo" aria-selected="false">Objetivo</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="requisitos-tab<?php echo $conv->id ?>" data-bs-toggle="tab" data-bs-target="#requisitos<?php echo $conv->id ?>" type="button" role="tab" aria-controls="requisitos" aria-selected="false">Requisitos</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content p-3 border border-top-0 rounded-bottom mb-4" id="convocatoriaTabContent<?php echo $conv->id ?>">
                                        <div class="tab-pane fade show active" id="descripcion<?php echo $conv->id ?>" role="tabpanel" aria-labelledby="descripcion-tab<?php echo $conv->id ?>">
                                            <p><?php echo htmlspecialchars($conv->descripcion) ?></p>
                                        </div>
                                        <div class="tab-pane fade" id="objetivo<?php echo $conv->id ?>" role="tabpanel" aria-labelledby="objetivo-tab<?php echo $conv->id ?>">
                                            <p><?php echo htmlspecialchars($conv->objetivo) ?></p>
                                        </div>
                                        <div class="tab-pane fade" id="requisitos<?php echo $conv->id ?>" role="tabpanel" aria-labelledby="requisitos-tab<?php echo $conv->id ?>">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-success me-2"></i> Documento de identidad</li>
                                                <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-success me-2"></i> Hoja de vida actualizada</li>
                                                <li class="list-group-item bg-transparent"><i class="fas fa-check-circle text-success me-2"></i> Certificados académicos</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer bg-light">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                    <i class="fas fa-times me-1"></i> Cerrar
                                </button>
                                <button type="button" class="btn btn-success">
                                    <i class="fas fa-user-plus me-1"></i> Inscribirse
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin del Modal -->
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12">
                <div class="alert alert-info">
                    No hay convocatorias disponibles en este momento.
                </div>
            </div>
        <?php endif; ?>
        <div class="text-center mt-3 mb-5">
    <button class="btn btn-outline-secondary rounded-pill px-6">
        <i class="fas fa-sync-alt me-2"></i> Cargar más convocatorias
    </button>
</div>
    </div>

    <script src="/js/favoritos.js"></script>

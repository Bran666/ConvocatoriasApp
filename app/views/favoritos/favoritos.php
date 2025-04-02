<div class="container py-5" style="max-width: 1000px; margin: 0 auto;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/SENA.jpg" alt="Logo" width="30" height="30">
                <span class="ms-2 fw-semibold">SENA</span>
            </a>
            <div class="d-flex align-items-center">
                <a href="#" class="text-decoration-none text-secondary me-3">Cerrar Sesión</a>
                <a href="/userPerfil/init" class="text-decoration-none"> <!-- Añadí esta etiqueta <a> -->
                    <div class="bg-light rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                        <span class="fw-bold">BR</span>
                    </div>
                </a> <!-- Cierre de la etiqueta <a> -->
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
                <input type="text" class="form-control bg-transparent border-0" placeholder="Buscar en mis favoritos">
            </div>
        </div>
    </div>

    <!-- Navigation Tabs -->
    <ul class="nav nav-tabs border-0 justify-content-end mb-5">
        <li class="nav-item">
            <a class="nav-link" href="/menu/init">Descubrir</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/explorar/init">Explorar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/favoritos/init">
                <i class="far fa-bookmark me-1"></i> Favoritos
            </a>
        </li>
    </ul>

    <!-- Favoritos Header -->
    <div class="mb-5">
        <h1 class="fw-bold mb-2">Mis Favoritos</h1>
        <p class="text-muted">Gestiona las oportunidades que has guardado para revisar más tarde</p>
    </div>

    <!-- Filters and View Toggle -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3 mb-4">
        <div class="d-flex align-items-center gap-2">
            <button class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-filter me-2"></i> Filtrar
            </button>
            <select class="form-select form-select-sm" style="width: auto;">
                <option selected>Todos</option>
                <option>Formación Técnica</option>
                <option>Formación Tecnológica</option>
                <option>Certificaciones</option>
                <option>Prácticas</option>
            </select>
        </div>

        <div class="d-flex align-items-center gap-2">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-sm view-toggle-btn active" id="gridViewBtn">
                    Cuadrícula
                </button>
                <button type="button" class="btn btn-sm view-toggle-btn btn-outline-secondary" id="listViewBtn">
                    Lista
                </button>
            </div>
            <button class="btn btn-outline-secondary btn-sm">
                <i class="fas fa-sort me-2"></i> Ordenar
            </button>
        </div>
    </div>

    <!-- Favoritos Categories - Grid View -->
    <div id="gridView">
        <!-- Próximos a vencer -->
        <div class="mb-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-semibold mb-0">Próximos a vencer</h5>
                <a href="#" class="text-decoration-none text-success">Ver todos</a>
            </div>

            <div class="row g-4 mb-5">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="position-relative">
                            <img src="/img/sena.jpg?height=150&width=300" class="card-img-top" alt="Desarrollo Web" style="height: 150px; object-fit: cover;">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-2">Vence en 2 días</span>
                            <button class="delete-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold">Técnico en Desarrollo de Aplicaciones Web</h5>
                            <p class="card-text text-muted small">Aprende a crear aplicaciones web modernas con las tecnologías más demandadas del mercado.</p>
                            <div class="d-flex flex-wrap mt-3 mb-3">
                                <div class="me-3 mb-2">
                                    <i class="far fa-clock card-info-icon me-1"></i>
                                    <small class="text-muted">Cierre: 31 Jul</small>
                                </div>
                                <div class="me-3 mb-2">
                                    <i class="fas fa-map-marker-alt card-info-icon me-1"></i>
                                    <small class="text-muted">Bogotá</small>
                                </div>
                                <div class="mb-2">
                                    <i class="far fa-calendar-alt card-info-icon me-1"></i>
                                    <small class="text-muted">Guardado: 15 Jul</small>
                                </div>
                            </div>
                            <button class="btn btn-success w-100">Inscribirse</button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="position-relative">
                            <img src="/img/sena.jpg?height=150&width=300" class="card-img-top" alt="Análisis de Datos" style="height: 150px; object-fit: cover;">
                            <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2">Vence en 5 días</span>
                            <button class="delete-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold">Tecnólogo en Análisis de Datos</h5>
                            <p class="card-text text-muted small">Conviértete en un experto en análisis de datos y business intelligence.</p>
                            <div class="d-flex flex-wrap mt-3 mb-3">
                                <div class="me-3 mb-2">
                                    <i class="far fa-clock card-info-icon me-1"></i>
                                    <small class="text-muted">Cierre: 3 Ago</small>
                                </div>
                                <div class="me-3 mb-2">
                                    <i class="fas fa-map-marker-alt card-info-icon me-1"></i>
                                    <small class="text-muted">Medellín</small>
                                </div>
                                <div class="mb-2">
                                    <i class="far fa-calendar-alt card-info-icon me-1"></i>
                                    <small class="text-muted">Guardado: 18 Jul</small>
                                </div>
                            </div>
                            <button class="btn btn-success w-100">Inscribirse</button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 (nueva) -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="position-relative">
                            <img src="/img/sena.jpg?height=150&width=300" class="card-img-top" alt="Inteligencia Artificial" style="height: 150px; object-fit: cover;">
                            <span class="badge bg-primary position-absolute top-0 end-0 m-2">Vence en 7 días</span>
                            <button class="delete-btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                        <div class="card-body p-4">
                            <h5 class="card-title fw-semibold">Especialización en Inteligencia Artificial</h5>
                            <p class="card-text text-muted small">Domina los fundamentos de IA y machine learning para aplicaciones empresariales.</p>
                            <div class="d-flex flex-wrap mt-3 mb-3">
                                <div class="me-3 mb-2">
                                    <i class="far fa-clock card-info-icon me-1"></i>
                                    <small class="text-muted">Cierre: 5 Ago</small>
                                </div>
                                <div class="me-3 mb-2">
                                    <i class="fas fa-map-marker-alt card-info-icon me-1"></i>
                                    <small class="text-muted">Cali</small>
                                </div>
                                <div class="mb-2">
                                    <i class="far fa-calendar-alt card-info-icon me-1"></i>
                                    <small class="text-muted">Guardado: 20 Jul</small>
                                </div>
                            </div>
                            <button class="btn btn-success w-100">Inscribirse</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Otros guardados -->
    <div class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="fw-semibold mb-0">Otros guardados</h5>
            <a href="#" class="text-decoration-none text-success">Ver todos</a>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="position-relative">
                        <img src="/img/sena2.jpg?height=150&width=300" class="card-img-top" alt="Ciberseguridad" style="height: 150px; object-fit: cover;">
                        <button class="delete-btn">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Especialización en Ciberseguridad</h5>
                        <p class="card-text text-muted small">Protege sistemas y redes con las técnicas más avanzadas de seguridad informática.</p>
                        <div class="d-flex flex-wrap mt-3 mb-3">
                            <div class="me-3 mb-2">
                                <i class="far fa-clock card-info-icon me-1"></i>
                                <small class="text-muted">Cierre: 15 Sep</small>
                            </div>
                            <div class="me-3 mb-2">
                                <i class="fas fa-map-marker-alt card-info-icon me-1"></i>
                                <small class="text-muted">Cali</small>
                            </div>
                            <div class="mb-2">
                                <i class="far fa-calendar-alt card-info-icon me-1"></i>
                                <small class="text-muted">Guardado: 10 Jul</small>
                            </div>
                        </div>
                        <button class="btn btn-success w-100">Inscribirse</button>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="position-relative">
                        <img src="/img/sena2.jpg?height=150&width=300" class="card-img-top" alt="Marketing Digital" style="height: 150px; object-fit: cover;">
                        <button class="delete-btn">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Técnico en Marketing Digital</h5>
                        <p class="card-text text-muted small">Domina las estrategias digitales para posicionar marcas y productos en internet.</p>
                        <div class="d-flex flex-wrap mt-3 mb-3">
                            <div class="me-3 mb-2">
                                <i class="far fa-clock card-info-icon me-1"></i>
                                <small class="text-muted">Cierre: 30 Oct</small>
                            </div>
                            <div class="me-3 mb-2">
                                <i class="fas fa-map-marker-alt card-info-icon me-1"></i>
                                <small class="text-muted">Barranquilla</small>
                            </div>
                            <div class="mb-2">
                                <i class="far fa-calendar-alt card-info-icon me-1"></i>
                                <small class="text-muted">Guardado: 5 Jul</small>
                            </div>
                        </div>
                        <button class="btn btn-success w-100">Inscribirse</button>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="position-relative">
                        <img src="/img/sena2.jpg?height=150&width=300" class="card-img-top" alt="Gestión de Proyectos" style="height: 150px; object-fit: cover;">
                        <button class="delete-btn">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Tecnólogo en Gestión de Proyectos</h5>
                        <p class="card-text text-muted small">Aprende metodologías ágiles y tradicionales para liderar proyectos exitosos.</p>
                        <div class="d-flex flex-wrap mt-3 mb-3">
                            <div class="me-3 mb-2">
                                <i class="far fa-clock card-info-icon me-1"></i>
                                <small class="text-muted">Cierre: 15 Nov</small>
                            </div>
                            <div class="me-3 mb-2">
                                <i class="fas fa-map-marker-alt card-info-icon me-1"></i>
                                <small class="text-muted">Bogotá</small>
                            </div>
                            <div class="mb-2">
                                <i class="far fa-calendar-alt card-info-icon me-1"></i>
                                <small class="text-muted">Guardado: 1 Jul</small>
                            </div>
                        </div>
                        <button class="btn btn-success w-100">Inscribirse</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Favoritos Categories - List View (hidden by default) -->
<div id="listView" style="display: none;">
    <!-- Próximos a vencer -->
    <div class="mb-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h5 class="fw-semibold mb-0">Próximos a vencer</h5>
            <a href="#" class="text-decoration-none text-success">Ver todos</a>
        </div>

        <div class="mb-4">
            <!-- List Item 1 -->
            <div class="list-view-item d-flex align-items-center border rounded p-3 mb-3">
                <div class="form-check me-3">
                    <input class="form-check-input" type="checkbox" id="check1">
                </div>
                <div class="me-3" style="width: 80px; height: 60px;">
                    <img src="/img/sena2.jpg?height=60&width=80" class="img-fluid rounded" alt="Desarrollo Web">
                </div>
                <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1 fw-semibold">Técnico en Desarrollo de Aplicaciones Web</h6>
                        <span class="badge bg-danger">Vence en 2 días</span>
                    </div>
                    <p class="text-muted small mb-1">Aprende a crear aplicaciones web modernas con las tecnologías más demandadas del mercado.</p>
                    <div class="d-flex flex-wrap">
                        <small class="text-muted me-3">
                            <i class="far fa-clock card-info-icon me-1"></i> Cierre: 31 Jul
                        </small>
                        <small class="text-muted me-3">
                            <i class="fas fa-map-marker-alt card-info-icon me-1"></i> Bogotá
                        </small>
                    </div>
                </div>
                <div class="ms-3 d-flex">
                    <button class="btn btn-outline-secondary btn-sm me-2">Ver</button>
                    <button class="btn btn-outline-danger btn-sm">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>

            <!-- List Item 2 -->
            <div class="list-view-item d-flex align-items-center border rounded p-3 mb-3">
                <div class="form-check me-3">
                    <input class="form-check-input" type="checkbox" id="check2">
                </div>
                <div class="me-3" style="width: 80px; height: 60px;">
                    <img src="/placeholder.svg?height=60&width=80" class="img-fluid rounded" alt="Análisis de Datos">
                </div>
                <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                        <h6 class="mb-1 fw-semibold">Tecnólogo en Análisis de Datos</h6>
                        <span class="badge bg-warning text-dark">Vence en 5 días</span>
                    </div>
                    <p class="text-muted small mb-1">Conviértete en un experto en análisis de datos y business intelligence.</p>
                    <div class="d-flex flex-wrap">
                        <small class="text-muted me-3">
                            <i class="far fa-clock card-info-icon me-1"></i> Cierre: 3 Ago
                        </small>
                        <small class="text-muted me-3">
                            <i class="fas fa-map-marker-alt card-info-icon me-1"></i> Medellín
                        </small>
                    </div>
                </div>
                <div class="ms-3 d-flex">
                    <button class="btn btn-outline-secondary btn-sm me-2">Ver</button>
                    <button class="btn btn-outline-danger btn-sm">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Botón de cargar más -->
    <div class="text-center mt-3 mb-5">
        <button class="btn btn-outline-secondary rounded-pill px-6">
            <i class="fas fa-sync-alt me-2"></i> Cargar más convocatorias
        </button>


        <!-- Bootstrap JS Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


        </body>

        </html>
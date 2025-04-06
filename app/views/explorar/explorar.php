<div class="container py-5" style="max-width: 1200px; margin: 0 auto; ">
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
            <h5 class="fw-semibold mb-0">Resultados (24)</h5>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary btn-sm">
                    <i class="fas fa-map-marker-alt me-2"></i> Ver en mapa
                </button>
                <select class="form-select form-select-sm" style="width: auto;">
                    <option selected>Más recientes</option>
                    <option>Popularidad</option>
                    <option>Fecha de inicio</option>
                </select>
            </div>
        </div>

        <!-- Results Grid -->
        <div class="row g-4 mb-5">
            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="position-relative">
                        <img src="/img/sena2.jpg?height=150&width=300" class="card-img-top" alt="Desarrollo Web" style="height: 150px; object-fit: cover;">
                        <span class="badge bg-success position-absolute top-0 end-0 m-2">Nuevo</span>
                        <button class="bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Técnico en Desarrollo de Aplicaciones Web</h5>
                        <p class="card-text text-muted small">Aprende a crear aplicaciones web modernas con las tecnologías más demandadas del mercado.</p>
                        <div class="d-flex flex-wrap mt-3 mb-3">
                            <div class="me-3 mb-2">
                                <i class="far fa-clock card-info-icon me-1"></i>
                                <small class="text-muted">Inicio: 15 Jul</small>
                            </div>
                            <div class="me-3 mb-2">
                                <i class="fas fa-map-marker-alt card-info-icon me-1"></i>
                                <small class="text-muted">Bogotá</small>
                            </div>
                            <div class="mb-2">
                                <i class="fas fa-users card-info-icon me-1"></i>
                                <small class="text-muted">30 cupos</small>
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
                        <img src="/img/sena2.jpg?height=150&width=300" class="card-img-top" alt="Análisis de Datos" style="height: 150px; object-fit: cover;">
                        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2">Destacado</span>
                        <button class="bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Tecnólogo en Análisis de Datos</h5>
                        <p class="card-text text-muted small">Conviértete en un experto en análisis de datos y business intelligence.</p>
                        <div class="d-flex flex-wrap mt-3 mb-3">
                            <div class="me-3 mb-2">
                                <i class="far fa-clock card-info-icon me-1"></i>
                                <small class="text-muted">Inicio: 20 Jul</small>
                            </div>
                            <div class="me-3 mb-2">
                                <i class="fas fa-map-marker-alt card-info-icon me-1"></i>
                                <small class="text-muted">Medellín</small>
                            </div>
                            <div class="mb-2">
                                <i class="fas fa-users card-info-icon me-1"></i>
                                <small class="text-muted">25 cupos</small>
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
                        <img src="/img/image.png?height=150&width=300" class="card-img-top" alt="Ciberseguridad" style="height: 150px; object-fit: cover;">
                        <span class="badge bg-success position-absolute top-0 end-0 m-2">Popular</span>
                        <button class="bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Especialización en Ciberseguridad</h5>
                        <p class="card-text text-muted small">Protege sistemas y redes con las técnicas más avanzadas de seguridad informática.</p>
                        <div class="d-flex flex-wrap mt-3 mb-3">
                            <div class="me-3 mb-2">
                                <i class="far fa-clock card-info-icon me-1"></i>
                                <small class="text-muted">Inicio: 25 Jul</small>
                            </div>
                            <div class="me-3 mb-2">
                                <i class="fas fa-map-marker-alt card-info-icon me-1"></i>
                                <small class="text-muted">Cali</small>
                            </div>
                            <div class="mb-2">
                                <i class="fas fa-users card-info-icon me-1"></i>
                                <small class="text-muted">20 cupos</small>
                            </div>
                        </div>
                        <button class="btn btn-success w-100">Inscribirse</button>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="position-relative">
                        <img src="/img/image.png?height=150&width=300" class="card-img-top" alt="Marketing Digital" style="height: 150px; object-fit: cover;">
                        <button class="bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Técnico en Marketing Digital</h5>
                        <p class="card-text text-muted small">Domina las estrategias digitales para posicionar marcas y productos en internet.</p>
                        <div class="d-flex flex-wrap mt-3 mb-3">
                            <div class="me-3 mb-2">
                                <i class="far fa-clock card-info-icon me-1"></i>
                                <small class="text-muted">Inicio: 30 Jul</small>
                            </div>
                            <div class="me-3 mb-2">
                                <i class="fas fa-map-marker-alt card-info-icon me-1"></i>
                                <small class="text-muted">Barranquilla</small>
                            </div>
                            <div class="mb-2">
                                <i class="fas fa-users card-info-icon me-1"></i>
                                <small class="text-muted">15 cupos</small>
                            </div>
                        </div>
                        <button class="btn btn-success w-100">Inscribirse</button>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="position-relative">
                        <img src="/img/image.png?height=150&width=300" class="card-img-top" alt="Diseño Gráfico" style="height: 150px; object-fit: cover;">
                        <button class="bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Técnico en Diseño Gráfico Digital</h5>
                        <p class="card-text text-muted small">Desarrolla habilidades creativas y técnicas para el diseño visual en medios digitales.</p>
                        <div class="d-flex flex-wrap mt-3 mb-3">
                            <div class="me-3 mb-2">
                                <i class="far fa-clock card-info-icon me-1"></i>
                                <small class="text-muted">Inicio: 5 Ago</small>
                            </div>
                            <div class="me-3 mb-2">
                                <i class="fas fa-map-marker-alt card-info-icon me-1"></i>
                                <small class="text-muted">Virtual</small>
                            </div>
                            <div class="mb-2">
                                <i class="fas fa-users card-info-icon me-1"></i>
                                <small class="text-muted">50 cupos</small>
                            </div>
                        </div>
                        <button class="btn btn-success w-100">Inscribirse</button>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="position-relative">
                        <img src="/img/image.png?height=150&width=300" class="card-img-top" alt="Gestión de Proyectos" style="height: 150px; object-fit: cover;">
                        <span class="badge bg-danger position-absolute top-0 end-0 m-2">Último día</span>
                        <button class="bookmark-btn">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-semibold">Tecnólogo en Gestión de Proyectos</h5>
                        <p class="card-text text-muted small">Aprende metodologías ágiles y tradicionales para liderar proyectos exitosos.</p>
                        <div class="d-flex flex-wrap mt-3 mb-3">
                            <div class="me-3 mb-2">
                                <i class="far fa-clock card-info-icon me-1"></i>
                                <small class="text-muted">Inicio: 10 Ago</small>
                            </div>
                            <div class="me-3 mb-2">
                                <i class="fas fa-map-marker-alt card-info-icon me-1"></i>
                                <small class="text-muted">Bogotá</small>
                            </div>
                            <div class="mb-2">
                                <i class="fas fa-users card-info-icon me-1"></i>
                                <small class="text-muted">10 cupos</small>
                            </div>
                        </div>
                        <button class="btn btn-success w-100">Inscribirse</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="text-center mb-5">
            <button class="btn btn-outline-secondary rounded-pill px-4">
                <i class="fas fa-sync-alt me-2"></i> Cargar más convocatorias
            </button>
        </div>
    </div>

</body>
</html>
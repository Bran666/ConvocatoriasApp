<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/login.css">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    /* Colores personalizados */
    :root {
      --dark-green: #0d6e3d; /* Verde más oscuro */
      --light-green: #198754; /* Verde Bootstrap estándar */
    }
    
    /* Estilos generales */
    .list-group-item {
      border-radius: 0 !important;
      border-left: 4px solid transparent;
      transition: all 0.2s ease;
    }

    .list-group-item:hover {
      border-left: 4px solid var(--dark-green);
      background-color: #f8f9fa;
    }

    .list-group-item.active {
      background-color: var(--dark-green);
      border-color: var(--dark-green);
    }

    .list-group-item i {
      width: 20px;
    }

    .main-wrapper {
      min-height: calc(100vh - 200px);
    }

    .custom-footer {
      background-color: #343a40;
      color: white;
      padding: 1.5rem 0;
      margin-top: 3rem;
    }
    
    /* Estilos para el menú hamburguesa */
    .navbar-dark-green {
      background-color: var(--dark-green) !important;
    }
    
    .offcanvas-dark-green {
      background-color: var(--dark-green) !important;
      color: white;
    }
    
    .offcanvas-dark-green .list-group-item {
      background-color: transparent;
      color: white;
      border: none;
    }
    
    .offcanvas-dark-green .list-group-item:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }
    
    .offcanvas-dark-green .list-group-item.active {
      background-color: rgba(255, 255, 255, 0.2);
    }
    
    .btn-hamburger {
      color: white;
      border: none;
      font-size: 1.5rem;
    }
    
    @media (min-width: 992px) {
      .desktop-menu {
        display: block !important;
      }
      .mobile-menu-btn {
        display: none !important;
      }
    }
  </style>
</head>
<body>
<header class="navbar-dark-green bg-gradient py-3 shadow text-white mb-4">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-6 col-md-6">
        <a href="/menu/init" class="text-white text-decoration-none">
          <h1 class="mb-0">
            <i class="fas fa-layer-group me-2"></i>
            Sistema de Convocatorias
          </h1>
        </a>
      </div>
      <div class="col-6 col-md-6 text-end">
        <!-- Botón hamburguesa para móviles -->
        <button class="btn btn-hamburger mobile-menu-btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
          <i class="fas fa-bars"></i>
        </button>
        <a href="/userPerfil/init" class="text-white text-decoration-none">
          <i class="fas fa-user-circle me-2"></i>
        </a>
      </div>
    </div>
  </div>
</header>

<!-- Menú Offcanvas para móviles -->
<div class="offcanvas offcanvas-start offcanvas-dark-green" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menú de Gestión</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0">
    <div class="list-group list-group-flush">
      <a href="/linea/init" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="fas fa-chart-line me-2"></i> Línea
      </a>
      <a href="/publicoObjetivo/init" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="fas fa-users me-2"></i> Público Objetivo
      </a>
      <a href="/requisitosCrud/init" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="fas fa-list-check me-2"></i> Requisitos
      </a>
      <a href="/entidadInstitucion/init" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="fas fa-building me-2"></i> Entidad Institución
      </a>
      <a href="/rol/index" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="fas fa-user-tag me-2"></i> Rol
      </a>
      <a href="/requisitoSeleccion/init" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="fas fa-tasks me-2"></i> Requisitos Selección
      </a>
      <a href="/tipo/init" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="fas fa-tag me-2"></i> Tipo
      </a>
      <a href="/convocatoria/lista" class="list-group-item list-group-item-action d-flex align-items-center">
        <i class="fas fa-bullhorn me-2"></i> Convocatorias
      </a>
    </div>
  </div>
</div>

<div class="main-wrapper">
  <div class="container-fluid">
    <div class="row">
      <!-- Menú Lateral para desktop -->
      <div class="col-md-2 desktop-menu d-none d-lg-block">
        <div class="card position-fixed" style="width: 16%;">
          <div class="card-header navbar-dark-green text-white">
            <h5 class="mb-0">Menú de Gestión</h5>
          </div>
          <div class="card-body p-0">
            <div class="list-group list-group-flush">
              <a href="/linea/init" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fas fa-chart-line me-2"></i> Línea
              </a>
              <a href="/publicoObjetivo/init" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fas fa-users me-2"></i> Público Objetivo
              </a>
              <a href="/requisitosCrud/init" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fas fa-list-check me-2"></i> Requisitos
              </a>
              <a href="/entidadInstitucion/init" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fas fa-building me-2"></i> Entidad Institución
              </a>
              <a href="/rol/index" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fas fa-user-tag me-2"></i> Rol
              </a>
              <a href="/requisitoSeleccion/init" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fas fa-tasks me-2"></i> Requisitos Selección
              </a>
              <a href="/tipo/init" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fas fa-tag me-2"></i> Tipo
              </a>
              <a href="/convocatoria/lista" class="list-group-item list-group-item-action d-flex align-items-center">
                <i class="fas fa-bullhorn me-2"></i> Convocatorias
              </a>
            </div>
          </div>
        </div>
      </div>

      <?php include_once $content; ?>

    </div>
  </div>
</div>
<footer class="custom-footer">
  <div class="container-fluid text-center">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h5 class="row justify-content-center">Sistema de Convocatorias</h5>
        <p class="mb-0">© 2025 Todos los derechos reservados</p>
      </div>
      <div class="col-md-6">
       
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
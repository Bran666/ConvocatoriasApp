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
    /* Solo lo que no puede hacer Bootstrap directamente */
    .list-group-item {
      border-radius: 0 !important;
      border-left: 4px solid transparent;
      transition: all 0.2s ease;
    }

    .list-group-item:hover {
      border-left: 4px solid #198754; /* Bootstrap 'success' color */
      background-color: #f8f9fa; /* light gray */
    }

    .list-group-item.active {
      background-color: #198754; /* success */
      border-color: #198754;
    }

    .list-group-item i {
      width: 20px;
    }

    .main-wrapper {
      min-height: calc(100vh - 200px);
    }

    .custom-footer {
      background-color: #343a40; /* dark */
      color: white;
      padding: 1.5rem 0;
      margin-top: 3rem;
    }
  </style>
</head>
<body>
<header class="bg-success bg-gradient py-3 shadow text-white mb-4">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-md-6">
        <a href="/menu/init" class="text-white text-decoration-none">
          <h1 class="mb-0">
            <i class="fas fa-layer-group me-2"></i>
            Sistema de Convocatorias
          </h1>
        </a>
      </div>
      <div class="col-md-6 text-end">
        <a href="/userPerfil/init" class="text-white text-decoration-none">
          <i class="fas fa-user-circle me-2"></i>
        </a>
      </div>
    </div>
  </div>
</header>

<div class="main-wrapper">
  <div class="container-fluid">
    <div class="row">
      <!-- Menú Lateral Estático -->
      <div class="col-md-2">
        <div class="card position-fixed" style="width: 16%;">
          <div class="card-header bg-success text-white">
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
        <div class="social-links text-center">
          <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

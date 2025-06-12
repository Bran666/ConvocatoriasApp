<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Flowers&Saints - Dashboard</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="/css/admin.css">

  
</head>

<body>
  <!-- Navbar -->
  <nav
    class="navbar navbar-expand-lg bg-success text-white py-4 shadow-sm"
    style="min-height: 100px">
    <div class="container-fluid">
   
       <!-- <img src="/img/convo.png"alt="Logo" width="80" height="80" class="rounded-circle border border-light" />
-->

      <!-- Botón de colapso lateral -->
      <div class="toggle-btn ms-3" id="sidebarToggle">
        <i class="bi bi-chevron-left fs-4 text-white"></i>
      </div>

      
      <!-- Título centrado -->
      <!-- Título centrado con ícono -->
      <div class="mx-auto d-flex align-items-center gap-2">
        <a href="/menu/init" class="text-decoration-none">
          <div class="mx-auto d-flex align-items-center gap-2">
            <i class="bi bi-calendar-event fs-1 text-white"></i>
            <span class="fs-1 fw-semibold text-white">Gestión de Convocatorias</span>
          </div>
        </a>

      </div>

   <div class="d-flex align-items-center ms-auto me-3">

  <a href="/logout" class="btn btn-outline-light me-3 fs-6 text-decoration-none">Cerrar sesión</a>
  <!-- Ícono de perfil clickeable -->
  <a href="/userPerfil/init" class="text-white">
    <i class="bi bi-person-circle fs-3"></i>
  </a>
</div>

    </div>
  </nav>

  <!-- Sidebar -->
  <div id="sidebar"  style="margin-top: 70px ;border: 1px solid #ddd;">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="/linea/init">
          <i class="fas fa-chart-line me-2"></i>
          <span>Línea</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/publicoObjetivo/init">
          <i class="fas fa-users me-2"></i>
          <span>Público Objetivo</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/requisitosCrud/init">
          <i class="fas fa-list-check me-2"></i>
          <span>Requisitos</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/entidadInstitucion/init">
          <i class="fas fa-building me-2"></i>
          <span>Entidad Institución</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/rol/index">
          <i class="fas fa-user-tag me-2"></i>
          <span>Rol</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/requisitoSeleccion/init">
          <i class="fas fa-tasks me-2"></i>
          <span>Requisitos Selección</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/tipo/init">
          <i class="fas fa-tag me-2"></i>
          <span>Tipo</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/convocatoria/lista">
          <i class="fas fa-bullhorn me-2"></i>
          <span>Convocatorias</span>
        </a>
      </li>
    </ul>
  </div>
  <div id="content"  style="padding-top: 150px; min-height: 100vh;">

    <?php include_once $content; ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const sidebar = document.getElementById("sidebar");
      const content = document.getElementById("content");
      const sidebarToggle = document.getElementById("sidebarToggle");
      const toggleIcon = sidebarToggle.querySelector("i");

      sidebarToggle.addEventListener("click", function() {
        sidebar.classList.toggle("collapsed");
        content.classList.toggle("expanded");

        // Cambiar el ícono de la flecha
        if (sidebar.classList.contains("collapsed")) {
          toggleIcon.classList.remove("bi-chevron-left");
          toggleIcon.classList.add("bi-chevron-right");
        } else {
          toggleIcon.classList.remove("bi-chevron-right");
          toggleIcon.classList.add("bi-chevron-left");
        }
      });
    });
  </script>
</body>

</html>
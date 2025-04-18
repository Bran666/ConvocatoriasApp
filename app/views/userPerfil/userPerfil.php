<div class="container py-0 position-relative" style="top: -20px;">
    <div class="flip-container" id="flipCard">
      <div class="flipper">

        <!-- Parte frontal - Perfil -->
        <div class="front">
          <div class="card border-0 h-100">

            <!-- Encabezado -->
            <div class="profile-header text-white text-center py-5">
              <div class="profile-image-container mb-4">
                <img id="profileImage" src="/img/SENA.jpg/120/120" alt="Foto de Perfil"
                  class="profile-image rounded-circle shadow">
                <div class="profile-badge">
                  <i class="fas fa-check"></i>
                </div>
              </div>

              <h2 class="fw-bold mb-1"><?php echo $_SESSION['nombre']; ?></h2>
              <p class="mb-3 fst-italic">Bienvenido, gracias por formar parte del SENA</p>
              <!-- Carreras -->
              <div class="d-flex flex-wrap justify-content-center gap-2 mt-4 px-3">
                <button class="btn btn-danger d-flex align-items-center">
                  <i class="fas fa-laptop-code me-2"></i> Ing. en Sistemas
                </button>
                <button class="btn btn-primary d-flex align-items-center">
                  <i class="fas fa-flask me-2"></i> Ing. en Química
                </button>
                <button class="btn btn-warning text-dark d-flex align-items-center">
                  <i class="fas fa-hard-hat me-2"></i> Ing. en Minas
                </button>
                <button class="btn btn-success d-flex align-items-center">
                  <i class="fas fa-building me-2"></i> Ing. Civil
                </button>
                <button class="btn btn-info text-white d-flex align-items-center">
                  <i class="fas fa-microchip me-2"></i> Ing. Electrónica
                </button>
              </div>
            </div>
            <!-- Cuerpo -->
            <div class="card-body px-4 py-5">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="section-title m-0 text-success">
                  <i class="fas fa-id-card me-2"></i> Detalles del Perfil
                </h4>
                <a href="#editarPerfil" class="btn btn-outline-success edit-profile-btn shadow-sm">
                  <i class="fas fa-edit me-1"></i> Editar Perfil
                </a>
              </div>

              <div class="row g-4 mb-5">
                <div class="col-md-6">
                  <div class="info-card p-4 shadow-sm">
                    <label><i class="fas fa-user me-2 text-success"></i> Nombre Completo</label>
                    <p class="mb-0 fs-5"><?php echo $_SESSION['nombre']; ?></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="info-card p-4 shadow-sm">
                    <label><i class="fas fa-envelope me-2 text-success"></i> Correo Electrónico</label>
                    <p class="mb-0 fs-5"><?php echo $_SESSION['email']; ?></p>
                  </div>
                </div>

                <!-- Botones -->
                <div class="d-flex flex-column flex-md-row gap-3 mt-4">
                  <a href="/menu/init" class="btn btn-outline-primary btn-lg w-100 shadow-sm">
                    <i class="fas fa-arrow-left me-2"></i> Volver al Menú
                  </a>

                  <button id="showRequisitosBtn" class="btn btn-success btn-lg w-100 shadow-sm">
                    <i class="fas fa-file-contract me-2"></i> Ver Requisitos
                  </button>

                </div>

              <!-- Pie -->

            </div>
          </div>
        </div>


      </div>
    </div>
  </div>

<!-- Script que hace el efecto de libro y redirige -->
<script>
  // Elementos necesarios
  const showRequisitosBtn = document.getElementById('showRequisitosBtn');
  const flipCard = document.querySelector('.flip-container');

  showRequisitosBtn.addEventListener('click', function () {
    // Agrega la clase para activar el efecto de flip
    flipCard.classList.add('flipped');

    // Esperar el tiempo exacto de la animación antes de redirigir
    setTimeout(() => {
      window.location.href = '/requisitos/init';
    }, 300); // Espera 1.2 segundos (igual a la duración en CSS)
  });
</script>

</body>

</html>
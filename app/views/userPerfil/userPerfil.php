<div class="container py- position-relative" style="top: -20px;">
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
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4 px-3">
              <button class="btn d-flex align-items-center" style="background-color: #f8d7da; color: #842029;">
                <i class="fas fa-laptop-code me-2"></i> Ing. en Sistemas
              </button>
              <button class="btn d-flex align-items-center" style="background-color: #cfe2ff; color: #084298;">
                <i class="fas fa-flask me-2"></i> Ing. en Química
              </button>
              <button class="btn d-flex align-items-center" style="background-color: #fff3cd; color: #664d03;">
                <i class="fas fa-hard-hat me-2"></i> Ing. en Minas
              </button>
              <button class="btn d-flex align-items-center" style="background-color: #CEB7CAFF; color: #0f5132;">
                <i class="fas fa-building me-2"></i> Ing. Civil
              </button>
              <button class="btn d-flex align-items-center" style="background-color: #cff4fc; color: #055160;">
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
              <button class="btn btn-outline-success edit-profile-btn shadow-sm" data-bs-toggle="modal" data-bs-target="#editarModal">
                <i class="fas fa-edit me-1"></i> Editar Perfil
              </button>

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

                <a href="/requisitos/init" class="btn btn-success btn-lg w-100 shadow-sm" id="requisitosBtn">
  <i class="fas fa-file-contract me-2"></i> Ver Requisitos
</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal Mejorado con Bootstrap -->

  <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content shadow-lg rounded-4 border border-3 border-success">

        <!-- Encabezado con barra verde -->
        <div class="modal-header bg-success text-white rounded-top-4 py-4 px-5">
          <h5 class="card-title text-white mb-0 d-flex align-items-center gap-3">
            <i class="fas fa-id-card fa-2x" style="color: #ced4da;"></i>
            <span class="fs-2">Información Personal</span>
          </h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>

        <!-- Cuerpo del modal con más padding y efectos visuales -->
        <div class="modal-body bg-light px-5 py-4">
          <div class="card shadow-sm border-0 mb-4">
            <div class="card-body p-4">
              <form action="/userPerfil/update" method="POST" class="needs-validation" novalidate>
                <input type="hidden" name="txtId" value="<?php echo $_SESSION['id']; ?>">

                <div class="row mb-4">
                  <!-- Contenedor para Nombre Completo -->
                  <div class="col-md-12 mb-3">
                    <label for="nombre" class="form-label fw-semibold text-success">
                      <i class="fas fa-user me-2" style="color: #ced4da;"></i> Nombre Completo
                    </label>
                    <div class="input-group">
                      <span class="input-group-text" style="background-color: #f8f9fa; border: 1px solid #ced4da;">
                        <i class="fas fa-user" style="color: #ced4da;"></i>
                      </span>
                      <input type="text" class="form-control form-control-lg border border-success-subtle"
                        id="nombre" name="txtNombre" value="<?php echo $_SESSION['nombre']; ?>" required>
                      <div class="invalid-feedback">
                        Por favor ingrese su nombre completo.
                      </div>
                    </div>
                  </div>

                  <!-- Contenedor para Correo Electrónico -->
                  <div class="col-md-12 mb-3">
                    <label for="correo" class="form-label fw-semibold text-success">
                      <i class="fas fa-envelope me-2" style="color: #ced4da;"></i> Correo Electrónico
                    </label>
                    <div class="input-group">
                      <span class="input-group-text" style="background-color: #f8f9fa; border: 1px solid #ced4da;">
                        <i class="fas fa-envelope" style="color: #ced4da;"></i>
                      </span>
                      <input type="email" class="form-control form-control-lg border border-success-subtle"
                        id="correo" name="txtEmail" value="<?php echo $_SESSION['email']; ?>" required>
                      <div class="invalid-feedback">
                        Por favor ingrese un correo electrónico válido.
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Botones de acción -->
                <div class="d-flex justify-content-end gap-3 mt-4">
                  <button type="button" class="btn btn-outline-secondary btn-lg px-4"
                    data-bs-dismiss="modal"
                    style="transition: all 0.3s ease; border-radius: 10px;">
                    <i class="fas fa-times me-2" style="color: #ced4da;"></i> Cancelar
                  </button>
                  <button type="submit" class="btn btn-success btn-lg px-5"
                    style="transition: all 0.3s ease; border-radius: 10px;">
                    <i class="fas fa-save me-2" style="color: #ced4da;"></i> Guardar Cambios
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
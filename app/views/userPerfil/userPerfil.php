<div class="container py-5" style="max-width: 1000px; margin: 0 auto;">
    <div class="card shadow-sm">
        <div class="row justify-content-center g-0">
            <div class="col-10 col-md-8 col-lg-9">
                <!-- Card Header modificado para alinear el verde -->
                <div class="card-header bg-success text-white text-center py-4 position-relative" style="border-radius: 0;">
                    <div class="mx-auto mb-3" style="width: 120px; height: 120px;">
                        <img id="profileImage" src="/img/SENA.jpg/120/120" alt="Profile"
                            class="img-fluid rounded-circle border border-4 border-white w-100 h-100 object-fit-cover">
                    </div>

                    <h3 class="mb-3"><?php echo $_SESSION['nombre']; ?></h3>
                </div>

                <!-- Card Body -->
                <div class="card-body p-4">
                    <div class="user-details">
                        <h4 class="d-flex align-items-center mb-4 pb-2 border-bottom">
                            <i class="fas fa-user-circle text-success me-2"></i> Datos del usuario
                        </h4>

                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                <i class="fas fa-user me-1"></i> Nombre:
                            </label>
                            <div class="p-3 bg-light rounded"><?php echo $_SESSION['nombre']; ?></div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                <i class="fas fa-envelope me-1"></i> Correo Electrónico:
                            </label>
                            <div class="p-3 bg-light rounded"><?php echo $_SESSION['email']; ?></div>
                        </div>

                        <div class="d-flex gap-2 mt-4">
                            <a href="/menu/init" class="btn btn-primary flex-grow-1">
                                <i class="fas fa-arrow-left me-2"></i> Volver al Menú
                            </a>
                            <a href="/requisitos/init" class="btn btn-success flex-grow-1">
                                <i class="fas fa-file-contract me-2"></i> Requisitos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .object-fit-cover {
        object-fit: cover;
    }

    /* Ajuste para alinear el verde verticalmente */
    .card-header {
        margin-left: -1px;
        margin-right: -1px;
    }
</style>
<div class="container py-5" style="max-width: 1000px; margin: 0 auto;">
    <div class="card shadow-sm">
        <div class="row justify-content-center g-0"> <!-- Added g-0 to remove gutters -->
            <div class="col-10 col-md-8 col-lg-9">
                <!-- Card Header modificado para alinear el verde -->
                <div class="card-header bg-success text-white text-center py-4 position-relative" style="border-radius: 0;">
                    <button class="btn btn-light btn-sm rounded-circle position-absolute top-0 end-0 m-3">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    
                    <div class="mx-auto mb-3" style="width: 120px; height: 120px;">
                        <img id="profileImage" src="/img/SENA.jpg/120/120" alt="Profile" 
                             class="img-fluid rounded-circle border border-4 border-white w-100 h-100 object-fit-cover">
                        <input type="file" id="fileInput" accept="image/*" class="d-none">
                    </div>
                    
                    <h3 class="mb-3"><?php echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido']; ?></h3>
                    
                    <div class="d-flex flex-wrap justify-content-center gap-2">
                        <span class="badge bg-warning text-dark rounded-pill">
                            <i class="fas fa-laptop-code me-1"></i> Ingeniero en sistemas
                        </span>
                        <span class="badge bg-purple text-white rounded-pill">
                            <i class="fas fa-project-diagram me-1"></i> Gestión de Proyectos
                        </span>
                        <span class="badge bg-primary text-white rounded-pill">
                            <i class="fas fa-code me-1"></i> Desarrollo Frontend
                        </span>
                        <span class="badge bg-pink text-white rounded-pill">
                            <i class="fas fa-cogs me-1"></i> Ingeniero de Software
                        </span>
                        <span class="badge bg-orange text-white rounded-pill">
                            <i class="fas fa-server me-1"></i> Desarrollo Backend
                        </span>
                        <span class="badge bg-success text-white rounded-pill">
                            <i class="fas fa-industry me-1"></i> Industrial Engineering
                        </span>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="card-body p-4">
                    <div class="user-details">
                        <h4 class="d-flex align-items-center mb-4 pb-2 border-bottom">
                            <i class="fas fa-user-circle text-success me-2"></i> Datos del usuario / Empresa
                        </h4>
                        
                        <form action="/userPerfil/init" method="post">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">
                                    <i class="fas fa-user me-1"></i> Nombre:
                                </label>
                                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $_SESSION['nombre']; ?>" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="telefono" class="form-label">
                                    <i class="fas fa-signature me-1"></i> Apellido:
                                </label>
                                <input type="tel" class="form-control" name="telefono" id="telefono" value="<?php echo $_SESSION['apellido']; ?>" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="correo" class="form-label">
                                    <i class="fas fa-envelope me-1"></i> Correo Electrónico:
                                </label>
                                <input type="email" class="form-control" name="correo" id="correo" value="<?php echo $_SESSION['correo']; ?>" required>
                            </div>
                            
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary flex-grow-1 mt-3">
                                    <i class="fas fa-save me-2"></i> Guardar
                                </button>
                                <a href="/requisitos/init" class="btn btn-success flex-grow-1 mt-3">
                                    <i class="fas fa-file-contract me-2"></i> Requisitos
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("profileImage").addEventListener("click", function() {
        document.getElementById("fileInput").click();
    });

    document.getElementById("fileInput").addEventListener("change", function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById("profileImage").src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>

<style>
    /* Clases para colores personalizados */
    .bg-purple { background-color: #6f42c1; }
    .bg-pink { background-color: #d63384; }
    .bg-orange { background-color: #fd7e14; }
    .object-fit-cover { object-fit: cover; }
    
    /* Ajuste para alinear el verde verticalmente */
    .card-header {
        margin-left: -1px;
        margin-right: -1px;
    }
</style>
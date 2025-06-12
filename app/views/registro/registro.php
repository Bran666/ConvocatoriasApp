<div class="container py-1">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
              <!-- Encabezado blanco con logo redondeado -->
<div class="bg-white text-center rounded-top-4 py-1">
    <div class="d-flex justify-content-center">
        <div class="rounded-circle overflow-hidden" style="width: 220px; height: 220px;">
            <img src="/img/convo2.png" alt="Logo" class="w-100 h-100" style="object-fit: contain; object-position: center;">
        </div>
    </div>
    <h2 class="text-dark fw-bold mt-0 mb-0">Registrarse</h2>
</div>

                <div class="card-body px-4 px-md-5 py-4">
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger d-flex align-items-center mb-4" role="alert">
                            <i class="fas fa-exclamation-circle fs-4 me-3"></i>
                            <div class="fs-5"><?php echo $error; ?></div>
                        </div>
                    <?php endif; ?>

                    <form action="/registro/init" method="post" class="needs-validation" novalidate>
                        <!-- Campo Nombre -->
                        <div class="mb-4">
                            <label for="txtNombre" class="form-label fw-semibold">Nombre</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-light bg-gradient"><i class="fas fa-user text-muted"></i></span>
                                <input type="text" name="txtNombre" id="txtNombre" required 
                                       class="form-control py-2" placeholder="Ingresa tu nombre">
                            </div>
                            <div class="invalid-feedback mt-1">Por favor ingresa tu nombre</div>
                        </div>

                        <!-- Campo Correo -->
                        <div class="mb-4">
                            <label for="txtCorreo" class="form-label fw-semibold">Correo Electrónico</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-light bg-gradient"><i class="fas fa-envelope text-muted"></i></span>
                                <input type="email" name="txtCorreo" id="txtCorreo" required 
                                       class="form-control py-2" placeholder="correo@ejemplo.com">
                            </div>
                            <div class="invalid-feedback mt-1">Por favor ingresa un correo válido</div>
                        </div>

                        <!-- Campo Contraseña -->
                        <div class="mb-4">
                            <label for="txtContrasenia" class="form-label fw-semibold">Contraseña</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-light bg-gradient"><i class="fas fa-lock text-muted"></i></span>
                                <input type="password" name="txtContrasenia" id="txtContrasenia" required 
                                       class="form-control py-2" placeholder="Ingresa tu contraseña">
                                <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            <div class="invalid-feedback mt-1">Por favor ingresa tu contraseña</div>
                        </div>

                        <input type="hidden" name="txtRol" value="2">

                        <!-- Botón de Registro -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-success btn-lg py-3 fw-semibold shadow-sm">
                                <i class="fas fa-user-plus me-2"></i>Registrarse
                            </button>
                        </div>

                        <!-- Enlace a Login -->
                        <div class="text-center pt-2">
                            <p class="mb-0">¿Ya tienes una cuenta? 
                                <a href="/login/init" class="text-success fw-semibold text-decoration-none">
                                    <i class="fas fa-sign-in-alt me-1"></i>Iniciar Sesión
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function togglePassword() {
        const passwordField = document.getElementById('txtContrasenia');
        const eyeIcon = event.currentTarget.querySelector('i');
        
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            eyeIcon.classList.replace('fa-eye', 'fa-eye-slash');
        } else {
            passwordField.type = 'password';
            eyeIcon.classList.replace('fa-eye-slash', 'fa-eye');
        }
    }
    
    // Validación de formulario
    (function() {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>

<div class="container py-1">
    <div class="row justify-content-center align-items-center min-vh-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">

                <!-- SOLO la cabecera blanca con el logo centrado -->
                <div class="card-header bg-white rounded-top-4 py-4">
                    <div class="text-center">
                        <div class="rounded-circle overflow-hidden mx-auto" style="width: 200px; height: 200px;">
                            <img src="/img/convo2.png" alt="Logo" class="w-100 h-100" style="object-fit: contain; object-position: center;">
                        </div>
                          <h4 class="fw-bold mb-0">Iniciar Sesión</h4>
                    </div>
                </div>

                <!-- CONTENIDO DEL FORMULARIO -->
                <div class="card-body px-4 px-md-5 py-4">
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $error; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form action="/login/init" method="post" class="needs-validation" novalidate>
                        <!-- Campo Correo -->
                        <div class="mb-4">
                            <label for="txtCorreo" class="form-label fw-semibold">Correo Electrónico</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-light bg-gradient"><i class="fas fa-envelope text-muted"></i></span>
                                <input type="email" class="form-control py-2" id="txtCorreo" name="txtCorreo" placeholder="correo@ejemplo.com" required>
                            </div>
                            <div class="invalid-feedback mt-1">Por favor ingresa un correo válido</div>
                        </div>

                        <!-- Campo Contraseña -->
                        <div class="mb-4">
                            <label for="txtPassword" class="form-label fw-semibold">Contraseña</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-light bg-gradient"><i class="fas fa-lock text-muted"></i></span>
                                <input type="password" class="form-control py-2" id="txtPassword" name="txtPassword" placeholder="Ingresa tu contraseña" required>
                                <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                            <div class="invalid-feedback mt-1">Por favor ingresa tu contraseña</div>
                        </div>

                        <!-- Botón de Ingreso -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-success btn-lg py-3 fw-semibold shadow-sm">
                                <i class="fas fa-sign-in-alt me-2"></i>Ingresar
                            </button>
                        </div>

                        <!-- Enlace a Registro -->
                        <div class="text-center pt-2">
                            <p class="mb-0">¿No tienes una cuenta? 
                                <a href="/registro/init" class="text-success fw-semibold text-decoration-none">Regístrate aquí</a>
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
        const passwordField = document.getElementById('txtPassword');
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
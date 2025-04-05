<div class="container py-5">
    <div class="row justify-content-center align-items-center">
    

        <!-- Columna del formulario (derecha) -->
        <div class="col-12 col-lg-6">
            <div class="card shadow-lg">
                <div class="card-header bg-success text-center text-white py-3">
                    <h2 class="mb-2 display-5">
                        <i class="fas fa-user-circle me-2"></i>Inicio de Sesión
                    </h2>
                    <p class="mb-0 fs-5">Bienvenido de nuevo! Por favor ingresa tus credenciales</p>
                </div>

                <div class="card-body p-4 p-lg-5">
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $error; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>

                    <form action="/login/init" method="post" class="needs-validation" novalidate>
                        <div class="mb-4">
                            <label for="txtCorreo" class="form-label fw-bold fs-5">Correo Electrónico</label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text"><i class="fas fa-envelope fs-5"></i></span>
                                <input type="email" class="form-control form-control-lg" id="txtCorreo" name="txtCorreo" placeholder="Ingresa tu Correo" required>
                                <div class="invalid-feedback fs-6">
                                    Por favor ingresa un correo válido
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="txtPassword" class="form-label fw-bold fs-5">Contraseña</label>
                            <div class="input-group input-group-lg has-validation">
                                <span class="input-group-text"><i class="fas fa-lock fs-5"></i></span>
                                <input type="password" class="form-control form-control-lg" id="txtPassword" name="txtPassword" placeholder="Ingresa tu Contraseña" required>
                                <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">
                                    <i class="fas fa-eye fs-5"></i>
                                </button>
                                <div class="invalid-feedback fs-6">
                                    Por favor ingresa tu contraseña
                                </div>
                            </div>
                        </div>

                        <div class="d-grid mb-4">
                            <button type="submit" class="btn btn-success btn-lg py-3 fs-5">
                                <i class="fas fa-sign-in-alt me-2"></i>Ingresar
                            </button>
                        </div>

                        <div class="text-center pt-3">
                            <p class="mb-0 fs-5">¿No tienes una cuenta?
                                <a href="/registro/init" class="text-success fw-bold text-decoration-none">Regístrate aquí</a>
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
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
</script>
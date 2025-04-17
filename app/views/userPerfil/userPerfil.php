<style>
  :root {
    --sena-green: #006341;
    --sena-dark-green: #006341;
    --sena-light-green: #e8f5e9;
  }

  body {
    background: linear-gradient(135deg, #f0f7f4, #e8f5e9, #f5f5f5);
    font-family: 'Poppins', 'Segoe UI', sans-serif;
    min-height: 100vh;
  }

  .flip-container {
    perspective: 1200px;
    max-width: 1000px;
    margin: 40px auto;
  }

  .flipper {
    position: relative;
    transition: transform 0.9s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transform-style: preserve-3d;
    width: 100%;
    min-height: 750px;
  }

  .front,
  .back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: 1.5rem;
    overflow: hidden;
    background-color: #ffffff;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08),
      0 15px 12px rgba(0, 0, 0, 0.02);
  }

  .front {
    z-index: 2;
    transform: rotateY(0deg);
  }

  .back {
    transform: rotateY(180deg);
    z-index: 1;
  }

  .flipped .flipper {
    transform: rotateY(180deg);
  }

  .profile-header {
    background: linear-gradient(135deg, var(--sena-green), var(--sena-dark-green));
    position: relative;

  }

  .profile-header::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='rgba(255,255,255,0.05)' fill-rule='evenodd'/%3E%3C/svg%3E");
    opacity: 0.6;
  }

  .profile-image-container {
    position: relative;
    width: 160px;
    height: 160px;
    margin: 0 auto;
  }

  .profile-image {
    width: 160px;
    height: 160px;
    object-fit: cover;
    border: 5px solid white;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
  }

  .profile-image:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
  }



  .info-card {
    border-radius: 12px;
    border: 1px solid rgba(0, 0, 0, 0.05);
    background: white;
    transition: all 0.3s ease;
    height: 100%;
  }

  .info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
    border-color: var(--sena-green);
  }

  .info-card label {
    color: #6c757d;
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 8px;
    display: block;
  }

  .info-card p {
    font-weight: 500;
    color: #343a40;
  }

  .btn-custom {
    border-radius: 50px;
    padding: 12px 24px;
    font-weight: 600;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    position: relative;

    z-index: 1;
  }

  .btn-custom::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.1);
    z-index: -2;
  }

  .btn-custom::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.05);
    transition: all 0.3s;
    z-index: -1;
  }
</style>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

  <div class="container  py-1">
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
    const showRequisitosBtn = document.getElementById('showRequisitosBtn');
    const flipCard = document.getElementById('flipCard');

    showRequisitosBtn.addEventListener('click', function() {
      // Activar animación tipo libro
      flipCard.classList.add('flipped');

      // Esperar a que termine la animación y redirigir
      setTimeout(() => {
        window.location.href = '/requisitos/init';
      }, 900);
    });
  </script>

</body>

</html>
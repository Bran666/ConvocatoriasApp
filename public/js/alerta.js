document.addEventListener('click', function(e) {
  const btn = e.target.closest('.eliminar');
  if (btn) {
      e.preventDefault();
      const link = btn.href;

      Swal.fire({
          title: '¿Estás seguro de eliminar?',
          text: 'Esta acción no se puede deshacer.',
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Sí, eliminar',
          cancelButtonText: 'Cancelar',
          confirmButtonColor: '#e74c3c',
          cancelButtonColor: '#6c757d',
          reverseButtons: true,
          background: '#fefefe',
          color: '#333',
          iconColor: '#f39c12',
          showClass: {
              popup: 'animate__animated animate__zoomIn'
          },
          hideClass: {
              popup: 'animate__animated animate__fadeOutUp'
          }
      }).then((result) => {
          if (result.isConfirmed) {
              Swal.fire({
                  title: 'Eliminado',
                  text: 'El elemento ha sido eliminado correctamente.',
                  icon: 'success',
                  confirmButtonColor: '#28a745',
                  confirmButtonText: 'Aceptar',
                  timer: 1500,
                  showConfirmButton: false
              });

              // Redirigir después de un pequeño retraso
              setTimeout(() => {
                  window.location.href = link;
              }, 1600);
          }
      });
  }
});

$(document).ready(function() {
    $(".form-eliminar-favorito").on("submit", function(e) {
        e.preventDefault();
        const form = $(this);
        const id_convocatoria = form.find("input[name='id_convocatoria']").val();
        const contenedor = form.closest("div.col-md-6");

        $.ajax({
            type: "POST",
            url: "/favoritos/eliminarFavorito",
            data: { id_convocatoria: id_convocatoria },
            success: function(respuesta) {
                if (respuesta.trim() === "ok") {
                   Swal.fire({
    icon: "success",
    title: "Favorito eliminado",
    html: `
        <div style="font-size: 1.05rem; color: #343a40;">
            <i class="fas fa-check-circle" style="font-size: 3rem; color: #28a745; margin-bottom: 0.7rem;"></i>
            <p style="margin: 0;">El elemento fue eliminado de tus favoritos.</p>
        </div>
    `,
    background: '#ffffff',
    confirmButtonText: "Aceptar",
    confirmButtonColor: "#198754",
    customClass: {
        popup: 'animate__animated animate__fadeInDown',
        title: 'fw-bold text-success',
        confirmButton: 'btn btn-success'
    },
    showClass: {
        popup: 'animate__animated animate__fadeInDown'
    },
    hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
    }
}).then(() => {
    contenedor.fadeOut("slow", function() {
        $(this).remove();
    });
});

                } else {
                    Swal.fire({
                        icon: "error",
                        title: "¡Error!",
                        html: `
                            <div style="font-size: 1.1rem; color: #dc3545;">
                                <i class="fas fa-exclamation-triangle" style="font-size: 2.5rem; margin-bottom: 1rem;"></i>
                                <p>No se pudo eliminar el favorito. Intente nuevamente.</p>
                            </div>
                        `,
                        background: '#f8f9fa',
                        confirmButtonText: "Entendido",
                        confirmButtonColor: "#dc3545",
                        customClass: {
                            popup: 'animated shake',
                            title: 'text-danger'
                        }
                    });
                }
            },
            error: function() {
                Swal.fire({
                    icon: "error",
                    title: "¡Error de conexión!",
                    html: `
                        <div style="font-size: 1.1rem; color: #dc3545;">
                            <i class="fas fa-unlink" style="font-size: 2.5rem; margin-bottom: 1rem;"></i>
                            <p>Ocurrió un problema al procesar su solicitud.</p>
                        </div>
                    `,
                    background: '#f8f9fa',
                    confirmButtonText: "Entendido",
                    confirmButtonColor: "#dc3545",
                    customClass: {
                        popup: 'animated wobble',
                        title: 'text-danger'
                    }
                });
            }
        });
    });
});
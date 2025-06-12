function toggleFavorito(element) {
    const convocatoriaId = element.getAttribute("data-id");

    fetch("/favorito/marcarFavorito", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "convocatoria_id=" + convocatoriaId
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            if (data.accion === "agregado") {
                element.classList.remove("far");
                element.classList.add("fas", "text-warning");

                Swal.fire({
                    icon: "success",
                    title: "Favorito agregado",
                    text: "✅ Se ha agregado a favoritos.",
                    confirmButtonText: "Aceptar"
                });

            } else if (data.accion === "eliminado") {
                element.classList.remove("fas", "text-warning");
                element.classList.add("far", "text-warning-border"); 

                Swal.fire({
                    icon: "info",
                    title: "Favorito eliminado",
                    text: "❌ Se ha eliminado de favoritos.",
                    confirmButtonText: "Aceptar"
                });
            }
        } else {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "❌ Error al marcar favorito: " + (data.error || "desconocido"),
                confirmButtonText: "Aceptar"
            });
        }
    })
    .catch(error => {
        console.error("Error en la solicitud:", error);
        Swal.fire({
            icon: "error",
            title: "Error",
            text: "❌ Ocurrió un error al intentar modificar favoritos",
            confirmButtonText: "Aceptar"
        });
    });
}

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".btn-favorito").forEach(boton => {
        boton.addEventListener("click", function () {
            toggleFavorito(this);
        });
    });
});




      function cambiarVista() {
            const seleccion = document.getElementById("tipoVista").value;

            // Obtiene todas las filas que contienen las tarjetas
            const tarjetas = document.querySelectorAll(".convocatorias-cards");
            const vistaTabla = document.getElementById("vistaTabla");
            const vistaLista = document.getElementById("vistaLista");
            const vistaMosaico = document.getElementById("vistaMosaico");

            // Primero oculta todo
            tarjetas.forEach(row => row.style.display = "none");
            vistaTabla.style.display = "none";
            vistaLista.style.display = "none";
            vistaMosaico.style.display = "none";

            // Ahora muestra según la selección
            if (seleccion === "tarjetas") {
                tarjetas.forEach(row => row.style.display = "flex"); // o "block" si es más adecuado
            } else if (seleccion === "tabla") {
                vistaTabla.style.display = "block";
            } else if (seleccion === "lista") {
                vistaLista.style.display = "block";
            }  else if (seleccion === "mosaico") {
                 vistaMosaico.style.display = "block";

            }
        }



       
document.addEventListener('DOMContentLoaded', function() {
    const buscador = document.getElementById('buscadorConvocatorias');
    const tarjetas = document.querySelectorAll('.tarjeta-convocatoria');
    
    buscador.addEventListener('input', function() {
        const terminoBusqueda = this.value.toLowerCase();
        
        tarjetas.forEach(tarjeta => {
            const textoCompleto = tarjeta.textContent.toLowerCase();
            
            if (textoCompleto.includes(terminoBusqueda)) {
                tarjeta.style.display = 'block';
            } else {
                tarjeta.style.display = 'none';
            }
        });
    });
});

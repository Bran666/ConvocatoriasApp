
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
            if (element.classList.contains("fas")) {
                element.classList.remove("fas", "text-warning");
                element.classList.add("far");
                alert("❌ Favorito eliminado con éxito");
            } else {
                element.classList.remove("far");
                element.classList.add("fas", "text-warning");
                alert("✅ Favorito agregado con éxito");
            }
        } else {
            alert("❌ Error al marcar favorito: " + (data.error || "desconocido"));
        }
    })
    .catch(error => {
        console.error("Error en la solicitud:", error);
        alert("❌ Ocurrió un error al intentar agregar a favoritos");
    });
}
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".btn-favorito").forEach(boton => {
        boton.addEventListener("click", function () {
            toggleFavorito(this);
        });
    });
});

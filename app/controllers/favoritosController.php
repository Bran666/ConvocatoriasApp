<?php
namespace App\Controller;

use App\Models\ConvocatoriaModel;
use App\Models\FavoritosModel;
use App\Models\UserModel;

require_once MAIN_APP_ROUTE . "../controllers/baseController.php";
require_once MAIN_APP_ROUTE . "../models/favoritosModel.php";

class FavoritosController extends BaseController
{
    public function __construct()
    {
        $this->layout = 'admin_layout';
    }

    public function initFavoritos()
    {
        
        $idUsuario = $_SESSION['id'] ?? null;

        if ($idUsuario) {
            // Crear instancia del modelo de favoritos
            $favoritosModel = new FavoritosModel();
            // Obtener las convocatorias favoritas del usuario
            $convocatoriasFavoritas = $favoritosModel->obtenerFavoritosPorUsuario($idUsuario);

            // Pasar los datos a la vista
            $this->render("favoritos/favoritos.php", [
                'convocatoriasFavoritas' => $convocatoriasFavoritas
            ]);
        } else {
            // Si el usuario no está autenticado
            header("Location: /favoritos/init"); // O la ruta a tu página de login
            exit();
        }
    }

    public function marcarFavorito()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['convocatoria_id'])) {
            $idConv = $_POST['convocatoria_id'];
            $idUsuario = $_SESSION['id'] ?? null;
    
            if ($idUsuario) {
                $model = new FavoritosModel();
    
                // Verifica si ya existe
                if ($model->existeFavorito($idUsuario, $idConv)) {
                    // Si ya existe, lo elimina
                    $resultado = $model->eliminarFavoritos($idConv, $idUsuario);
                    echo json_encode(["success" => $resultado, "accion" => "eliminado"]);
                } else {
                    // Si no existe, lo guarda
                    $resultado = $model->guardarFavorito($idUsuario, $idConv);
                    echo json_encode(["success" => $resultado, "accion" => "agregado"]);
                }
            } else {
                echo json_encode(["success" => false, "error" => "Usuario no autenticado"]);
            }
        } else {
            echo json_encode(["success" => false, "error" => "Solicitud no válida"]);
        }
    }
    
        public function eliminarFavorito()
        {

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_convocatoria'])) {
                $idConvocatoria = $_POST['id_convocatoria'];
                $idUsuario = $_SESSION['id'] ?? null;
                if ($idUsuario) {
                    $model = new FavoritosModel();
                    $resultado = $model->eliminarFavoritos($idConvocatoria, $idUsuario);
        
                    error_log("Resultado eliminación: " . ($resultado ? 'éxito' : 'fallo'));
                    echo $resultado ? 'ok' : 'error';
                    exit; // Asegurar que no se envía nada más
                } else {
                    echo "Usuario no autenticado.";
                    exit;
                }
            } else {
                echo "Solicitud no válida.";
                exit;
            }
        }
    }
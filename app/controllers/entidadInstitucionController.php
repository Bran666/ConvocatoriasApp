<?php

namespace App\Controller;

use App\Models\EntidadInstitucionModel;
use App\Models\LineaModel;
use Exception;


require_once MAIN_APP_ROUTE . "../controllers/baseController.php";
require_once MAIN_APP_ROUTE . "../models/entidadInstitucionModel.php";

class EntidadInstitucionController extends BaseController
{
    public function __construct()
    {
        $this->layout = 'linea_layout';
    }

    public function initEntidadInstitucion()
    {
        try {
            $objEntidadInstitucion = new EntidadInstitucionModel();
            $entidadInstituciones = $objEntidadInstitucion->getAll();
            
            $data = [
                'title' => 'Lista de Instituciones',
                "entidadInstituciones" => $entidadInstituciones,
            ];
            $this->render("EntidadInstitucion/viewEntidadInstitucion.php", $data);
            
        } catch (Exception $e) {
            error_log("Error in EntidadInstitucionController->initEntidadInstitucion: " . $e->getMessage());
            $data = [
                'title' => 'Lista de Instituciones',
                "entidadInstituciones" => [],
                "error" => "Error al cargar las instituciones"
            ];
            $this->render("EntidadInstitucion/viewEntidadInstitucion.php", $data);
        }
    }

    // Muestra el formulario para nueva institución
    public function new()
    {
        $this->render('EntidadInstitucion/newEntidadInstitucion.php');
    }

    // Guarda los datos del formulario
    public function create()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nombre = trim($_POST['nombre'] ?? '');
                
                if (empty($nombre)) {
                    throw new Exception("El nombre es requerido");
                }

                $entidadModel = new EntidadInstitucionModel();
                $data = ['nombre' => $nombre];  // Create data array
                $result = $entidadModel->save($data);  // Pass data array to save method

                if ($result) {
                    $_SESSION['success'] = "Institución creada exitosamente";
                    header('Location: /entidadInstitucion/init');
                    exit();
                }
                throw new Exception("Error al crear la institución");
            }

            $this->render('EntidadInstitucion/newEntidadInstitucion.php');
        } catch (Exception $e) {
            $this->render('EntidadInstitucion/newEntidadInstitucion.php', [
                'error' => $e->getMessage(),
                'formData' => $_POST
            ]);
        }
    }

    public function view($id)
    {
        try {
            $entidadModel = new EntidadInstitucionModel();
            $entidad = $entidadModel->getById($id);  // Using getById instead of getEntidadInstitucion
            
            if (!$entidad) {
                throw new Exception("Institución no encontrada");
            }

            $data = [
                "id" => $entidad->id,
                "nombre" => $entidad->nombre,
            ];
            
            $this->render("EntidadInstitucion/viewOneEntidadInstitucion.php", $data);
        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
            header('Location: /entidadInstitucion/init');
            exit();
        }
    }

    // Mostrar lo que se quiere editar 
    public function editEntidadInstitucion($id)
    {
        try {
            $entidadModel = new EntidadInstitucionModel();
            $entidad = $entidadModel->getById($id);  // Using getById instead of getEntidadInstitucion
            
            if (!$entidad) {
                throw new Exception("Institución no encontrada");
            }

            $this->render("EntidadInstitucion/editEntidadInstitucion.php", [
                "infoReal" => $entidad
            ]);
        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
            header('Location: /entidadInstitucion/init');
            exit();
        }
    }

    public function updateEntidadInstitucion()
    {
        try {
            if (!isset($_POST["id"]) || !isset($_POST["nombre"])) {
                throw new Exception("Datos incompletos");
            }

            $id = $_POST["id"];
            $nombre = trim($_POST["nombre"]);
            
            if (empty($nombre)) {
                throw new Exception("El nombre es requerido");
            }

            $entidadModel = new EntidadInstitucionModel();
            $result = $entidadModel->update($id, ['nombre' => $nombre]);

            if ($result) {
                $_SESSION['success'] = "Institución actualizada exitosamente";
            } else {
                $_SESSION['error'] = "Error al actualizar la institución";
            }
        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
        }
        
        header('Location: /entidadInstitucion/init');
        exit();
    }

    public function deleteEntidadInstitucion($id)
    {
        try {
            if (!$id) {
                throw new Exception("ID inválido");
            }

            $entidadModel = new EntidadInstitucionModel();
            $result = $entidadModel->delete($id);  // Changed from deleteEntidadInstitucion to delete

            if ($result) {
                $_SESSION['success'] = "Institución eliminada exitosamente";
            } else {
                $_SESSION['error'] = "Error al eliminar la institución";
            }
        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
        }

        header('Location: /entidadInstitucion/init');
        exit();
    }
}
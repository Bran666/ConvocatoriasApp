<?php

namespace App\Controller;

use App\Models\RequisitosModel;
use Exception;

require_once MAIN_APP_ROUTE . "../controllers/baseController.php";
require_once MAIN_APP_ROUTE . "../models/requisitosModel.php";

class RequisitosController extends BaseController
{
    public function __construct()
    {
        $this->layout = 'menuPrincipal_layout';
    }

    public function initPerfil()
    {
        $this->layout = 'perfil_layout';

        try {
            // Initialize all variables with default values
            $tipos = [];
            $requisitosSeleccion = [];
            $requisitosPorTipo = [];
            $categorias = [
                'administrativos' => 'Administrativos',
                'documentacion' => 'Documentación',
                'financieros' => 'Financieros'
            ];

            // Get tipos from database
            $tipoModel = new \App\Models\TipoModel();
            $tipos = $tipoModel->getAll() ?? [];

            // Get requisitos selección if tipos exist
            if (!empty($tipos)) {
                $requisitoSeleccionModel = new \App\Models\RequisitoSeleccionModel();
                $requisitosSeleccion = $requisitoSeleccionModel->getAll() ?? [];

                // Organize requisitos by tipo
                foreach ($requisitosSeleccion as $requisito) {
                    if (!isset($requisitosPorTipo[$requisito->idTipo])) {
                        $requisitosPorTipo[$requisito->idTipo] = [];
                    }

                    // Categorize requisitos
                    if (
                        stripos($requisito->nombre, 'documento') !== false ||
                        stripos($requisito->nombre, 'formulario') !== false ||
                        stripos($requisito->nombre, 'carta') !== false
                    ) {
                        $requisito->categoria = 'documentacion';
                    } elseif (
                        stripos($requisito->nombre, 'pago') !== false ||
                        stripos($requisito->nombre, 'cuenta') !== false ||
                        stripos($requisito->nombre, 'financ') !== false
                    ) {
                        $requisito->categoria = 'financieros';
                    } else {
                        $requisito->categoria = 'administrativos';
                    }

                    $requisitosPorTipo[$requisito->idTipo][] = $requisito;
                }
            }

            $data = [
                'title' => 'Requisitos',
                'tipos' => $tipos,
                'requisitosPorTipo' => $requisitosPorTipo,
                'categorias' => $categorias,
                'debug' => true,
                'requisitosSeleccionDebug' => $requisitosSeleccion
            ];

            $this->render("requisitos/requisitos.php", $data);
        } catch (Exception $e) {
            error_log("Error in RequisitosController->init: " . $e->getMessage());
            $data = [
                'title' => 'Requisitos',
                'tipos' => [],
                'requisitosPorTipo' => [],
                'categorias' => [],
                'error' => "Error al cargar los requisitos: " . $e->getMessage(),
                'debug' => true,
                'errorDebug' => $e->getMessage()
            ];
            $this->render("requisitos/requisitos.php", $data);
        }
    }



    public function initRequisitos()
    {
        try {
            $requisitosModel = new RequisitosModel();
            $requisitos = $requisitosModel->getAll() ?? [];

            $data = [
                'title' => 'Lista de Requisitos',
                'requisitos' => $requisitos
            ];

            $this->render("requisitos/viewRequisitos.php", $data);
        } catch (Exception $e) {
            error_log("Error in RequisitosController->init: " . $e->getMessage());
            $data = [
                'title' => 'Lista de Requisitos',
                'requisitos' => [],
                'error' => "Error al cargar los requisitos: " . $e->getMessage()
            ];
            $this->render("requisitos/viewRequisitos.php", $data);
        }
    }

    // Add a method to save the checked requirements
    public function guardarChequeo()
    {
        try {
            // Get JSON data from request
            $jsonData = file_get_contents('php://input');
            $data = json_decode($jsonData);

            if (!$data || !isset($data->requisitos)) {
                echo json_encode(['success' => false, 'message' => 'Datos inválidos']);
                return;
            }

            $usuarioId = $_SESSION['id'] ?? 0;
            if (!$usuarioId) {
                echo json_encode(['success' => false, 'message' => 'Usuario no autenticado']);
                return;
            }

            // Delete existing checks for this user
            $chequeoModel = new \App\Models\ChequeoModel();
            $chequeoModel->deleteByUsuario($usuarioId);

            // Save new checks
            $success = true;
            foreach ($data->requisitos as $requisitoId) {
                $result = $chequeoModel->save($usuarioId, $requisitoId);
                if (!$result) {
                    $success = false;
                }
            }

            echo json_encode(['success' => $success]);
        } catch (Exception $e) {
            error_log("Error in RequisitosController->guardarChequeo: " . $e->getMessage());
            echo json_encode(['success' => false, 'message' => 'Error al guardar los requisitos']);
        }
    }


    // Add this method or update existing one
    public function new()
    {
        try {
            // Get entidades from database
            $entidadModel = new \App\Models\EntidadInstitucionModel();
            $entidades = $entidadModel->getAll();

            // Get requisitos selección from database
            $requisitoSeleccionModel = new \App\Models\RequisitoSeleccionModel();
            $requisitosSeleccion = $requisitoSeleccionModel->getAll();

            $data = [
                'title' => 'Nuevo Requisito',
                'entidades' => $entidades,
                'requisitosSeleccion' => $requisitosSeleccion
            ];

            $this->render('requisitos/newRequisitos.php', $data);
        } catch (\Exception $e) {
            error_log("Error in RequisitosController->new: " . $e->getMessage());
            $data = [
                'title' => 'Nuevo Requisito',
                'entidades' => [],
                'requisitosSeleccion' => [],
                'error' => 'Error al cargar los datos'
            ];
            $this->render('requisitos/newRequisitos.php', $data);
        }
    }

    public function create()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                header('Location: /requisitos/new');
                exit();
            }

            // Obtener y validar datos básicos
            $nombre = trim($_POST['nombre'] ?? '');
            $observaciones = trim($_POST['observaciones'] ?? '');
            $idEntidad = filter_var($_POST['idEntidad'], FILTER_VALIDATE_INT);
            $idRequisitoSeleccion = filter_var($_POST['idRequisitoSeleccion'], FILTER_VALIDATE_INT);

            if (empty($nombre) || $idEntidad === false || $idRequisitoSeleccion === false) {
                throw new Exception("Datos de formulario inválidos");
            }

            // Crear y guardar el requisito
            $objRequisitos = new RequisitosModel(
                null,
                $nombre,
                $observaciones,
                $idEntidad,
                $idRequisitoSeleccion
            );

            if (!$objRequisitos->save()) {
                throw new Exception("No se pudo guardar el requisito");
            }

            header('Location: /requisitosCrud/init');
            exit();
        } catch (Exception $e) {
            error_log("Error en create requisito: " . $e->getMessage());
            header('Location: /requisitos/new');
            exit();
        }
    }

    public function view($id)
    {
        $objRequisitos = new RequisitosModel($id);
        $requisitosInfo = $objRequisitos->getRequisitos();
        $data = [
            "id" => $requisitosInfo[0]->id,
            "nombre" => $requisitosInfo[0]->nombre,
            "observaciones" => $requisitosInfo[0]->obervaciones, // Cambiado de observaciones a obervaciones
            "idEntidad" => $requisitosInfo[0]->idEntidad,
            "idRequisitoSeleccion" => $requisitosInfo[0]->idRequisitoSeleccion
        ];
        $this->render("requisitos/viewOneRequisitos.php", $data);
    }

    public function editRequisitos($id)
    {
        try {
            // Get the current requisito information
            $objRequisitos = new RequisitosModel($id);
            $requisitosInfo = $objRequisitos->getRequisitos();
            
            // Get entidades from database
            $entidadModel = new \App\Models\EntidadInstitucionModel();
            $entidades = $entidadModel->getAll();
            
            // Get requisitos selección from database
            $requisitoSeleccionModel = new \App\Models\RequisitoSeleccionModel();
            $requisitosSeleccion = $requisitoSeleccionModel->getAll();
            
            $data = [
                "infoReal" => $requisitosInfo[0],
                "entidades" => $entidades,
                "requisitosSeleccion" => $requisitosSeleccion
            ];
            
            $this->render("requisitos/editRequisitos.php", $data);
        } catch (Exception $e) {
            error_log("Error in RequisitosController->editRequisitos: " . $e->getMessage());
            $data = [
                "infoReal" => $requisitosInfo[0] ?? null,
                "entidades" => [],
                "requisitosSeleccion" => [],
                "error" => "Error al cargar los datos para edición"
            ];
            $this->render("requisitos/editRequisitos.php", $data);
        }
    }

    public function updateRequisitos()
    {
        if (isset($_POST["id"])) {
            $id = $_POST["id"] ?? null;
            $nombre = $_POST["nombre"] ?? null;
            $observaciones = $_POST["obervaciones"] ?? null;
            $idEntidad = $_POST["fkIdEntidad"] ?? null;
            $idRequisitoSeleccion = $_POST["idRequisitoSeleccion"] ?? null;
    
            $requisitosObjEdit = new RequisitosModel($id, $nombre, $observaciones, $idEntidad, $idRequisitoSeleccion);
            $res = $requisitosObjEdit->editRequisitos();
            if ($res) {
                header('Location:/requisitosCrud/init');
            } else {
                header('Location:/requisitosCrud/init');
            }
        }
    }
    

    public function deleteRequisitos($id)
    {
        if (isset($id)) {
            $requisitosObjDelete = new RequisitosModel($id);
            $res = $requisitosObjDelete->deleteRequisitos();
            if ($res) {
                header('Location:/requisitosCrud/init');
            } else {
                header('Location:/requisitosCrud/init');
            }
        }
    }
}

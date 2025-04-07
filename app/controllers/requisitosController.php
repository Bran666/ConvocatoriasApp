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
        $this->layout = 'linea_layout';
    }

    public function initRequisitos()
    {
        try {
            $objTipo = new RequisitosModel();
            $requisitos = $objTipo->getAll();
    
            $data = [
                'title' => 'Lista de Requisitos',
                "requisitos" => $requisitos, // Aquí se pasa correctamente el array de requisitos
            ];
            $this->render("requisitos/viewRequisitos.php", $data); // Asegúrate de pasar $data a la vista
        } catch (Exception $e) {
            error_log("Error in TipoController->initRequisitos: " . $e->getMessage());
            $data = [
                'title' => 'Lista de Requisitos',
                "requisitos" => [], // Se pasa un array vacío en caso de error
                "error" => "Error al cargar los requisitos"
            ];
            $this->render("requisitos/viewRequisitos.php", $data); // También pasar $data aquí
        }
    }
    
    
    

    public function initPerfil()
    {
        $this->layout = 'login_layouts';

        $this->render("requisitos/requisitos.php");
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
        $objRequisitos = new RequisitosModel($id);
        $requisitosInfo = $objRequisitos->getRequisitos();
        $data = [
            "infoReal" => $requisitosInfo[0],
        ];
        $this->render("requisitos/editRequisitos.php", $data);
    }

    public function updateRequisitos()
    {
        if (isset($_POST["id"])) {
            $id = $_POST["id"] ?? null;
            $nombre = $_POST["nombre"] ?? null;
            $observaciones = $_POST["obervaciones"] ?? null; // Cambiado de observaciones a obervaciones
            $idEntidad = $_POST["idEntidad"] ?? null;
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

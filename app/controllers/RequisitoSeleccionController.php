<?php

namespace App\Controller;

use App\Models\RequisitoSeleccionModel;
use App\Models\TipoModel;
use Exception;

require_once MAIN_APP_ROUTE . "../controllers/baseController.php";
require_once MAIN_APP_ROUTE . "../models/RequisitoSeleccionModel.php";
require_once MAIN_APP_ROUTE . "../models/tipoModel.php";

class RequisitoSeleccionController extends BaseController
{
    public function __construct()
    {
        $this->layout = 'menuPrincipal_layout';
    }

    public function initRequisitoSeleccion()
    {
        try {
            $objRequisitoSeleccion = new RequisitoSeleccionModel();
            $requisitosSeleccion = $objRequisitoSeleccion->getAll();
            
            $data = [
                'title' => 'Lista de Requisitos de Selección',
                "requisitosSeleccion" => $requisitosSeleccion,
            ];
            $this->render("RequisitoSeleccion/viewRequisitoSeleccion.php", $data);
            
        } catch (Exception $e) {
            error_log("Error in RequisitoSeleccionController->initRequisitoSeleccion: " . $e->getMessage());
            $data = [
                'title' => 'Lista de Requisitos de Selección',
                "requisitosSeleccion" => [],
                "error" => "Error al cargar los requisitos de selección"
            ];
            $this->render("RequisitoSeleccion/viewRequisitoSeleccion.php", $data);
        }
    }

    public function new()
    {
        try {
            $tipoModel = new TipoModel();
            $tipos = $tipoModel->getAll();
            $data = [
                'title' => 'Nuevo Requisito de Selección',
                'tipos' => $tipos
            ];
            $this->render('RequisitoSeleccion/newRequisitoSeleccion.php', $data);
        } catch (Exception $e) {
            error_log("Error al cargar tipos: " . $e->getMessage());
            $this->render('RequisitoSeleccion/newRequisitoSeleccion.php', ['error' => 'Error al cargar los tipos']);
        }
    }

    public function create()
    {
        $nombre = $_POST['nombre'] ?? null;
        $idTipo = $_POST['tipo'] ?? null;

        if ($nombre && $idTipo) {
            $objRequisitoSeleccion = new RequisitoSeleccionModel(null, $nombre, $idTipo);
            $resp = $objRequisitoSeleccion->save();
            if ($resp) {
                header('Location:/requisitoSeleccion/init');
            } else {
                header('Location:/requisitoSeleccion/init');
            }
        } else {
            header('Location:/requisitoSeleccion/new');
        }
    }

    public function view($id)
    {
        $objRequisitoSeleccion = new RequisitoSeleccionModel($id);
        $requisitoSeleccionInfo = $objRequisitoSeleccion->getRequisitoSeleccion();
        $data = [
            "id" => $requisitoSeleccionInfo[0]->id,
            "nombre" => $requisitoSeleccionInfo[0]->nombre,
            "tipo" => $requisitoSeleccionInfo[0]->tipo_nombre
        ];
        $this->render("RequisitoSeleccion/viewOneRequisitoSeleccion.php", $data);
    }

    public function editRequisitoSeleccion($id)
    {
        try {
            $objRequisitoSeleccion = new RequisitoSeleccionModel($id);
            $requisitoSeleccionInfo = $objRequisitoSeleccion->getRequisitoSeleccion();
            
            $tipoModel = new TipoModel();
            $tipos = $tipoModel->getAll();
            
            $data = [
                "infoReal" => $requisitoSeleccionInfo[0],
                "tipos" => $tipos
            ];
            $this->render("RequisitoSeleccion/editRequisitoSeleccion.php", $data);
        } catch (Exception $e) {
            error_log("Error al cargar requisito de selección: " . $e->getMessage());
            header('Location:/requisitoSeleccion/init');
        }
    }

    public function updateRequisitoSeleccion($id)
    {
        try {
            $nombre = $_POST["nombre"] ?? null;
            $idTipo = $_POST["tipo"] ?? null;
            
            if (!$nombre || !$idTipo) {
                throw new Exception("El nombre y el tipo son requeridos");
            }

            $requisitoSeleccionObjEdit = new RequisitoSeleccionModel($id, $nombre, $idTipo);
            $res = $requisitoSeleccionObjEdit->editRequisitoSeleccion();
            
            if (!$res) {
                throw new Exception("No se pudo actualizar el requisito de selección");
            }

            $_SESSION['success'] = "Requisito de selección actualizado correctamente";
        } catch (Exception $e) {
            error_log("Error en updateRequisitoSeleccion: " . $e->getMessage());
            $_SESSION['error'] = $e->getMessage();
        }
        
        header('Location:/requisitoSeleccion/init');
    }

    public function deleteRequisitoSeleccion($id)
    {
        if (isset($id)) {
            $requisitoSeleccionObjDelete = new RequisitoSeleccionModel($id);
            $res = $requisitoSeleccionObjDelete->deleteRequisitoSeleccion();
            if ($res) {
                header('Location:/requisitoSeleccion/init');
            } else {
                header('Location:/requisitoSeleccion/init');
            }
        }
    }
}
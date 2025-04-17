<?php

namespace App\Controller;

use App\Models\MenuModel;
use App\Models\ConvocatoriaModel;
use Exception;

require_once MAIN_APP_ROUTE . "../controllers/baseController.php";
require_once MAIN_APP_ROUTE . "../models/ExplorarModel.php";
require_once MAIN_APP_ROUTE . "../models/convocatoriaModel.php";

class ExplorarController extends BaseController
{
    public function __construct()
    {
        $this->layout = 'admin_layout';
    }

    public function initExplorar()
    {
        try {
            $convocatoriaModel = new ConvocatoriaModel();
            $convocatorias = $convocatoriaModel->getAll();
            
            $data = [
                'convocatorias' => $convocatorias  // Use actual data from model
            ];
            
            $this->render("/explorar/explorar.php", $data);
            
        } catch (Exception $e) {
            error_log("Error loading convocatorias: " . $e->getMessage());
            $data = [
                "error" => "Error al cargar las convocatorias",
                "convocatorias" => []
            ];
            $this->render("/explorar/explorar.php", $data);
            
            // In initMenu method
            var_dump($convocatorias);
            exit();
        }
    }
}
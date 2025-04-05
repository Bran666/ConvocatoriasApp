<?php

namespace App\Controller;

use App\Models\ExplorarModel;
use App\Models\FavoritosModel;
use App\Models\UserModel;

require_once MAIN_APP_ROUTE . "../controllers/baseController.php";
require_once MAIN_APP_ROUTE . "../models/ExplorarModel.php";

class ExplorarController extends BaseController
{
    public function __construct()
    {
        //Se define Layaout para el controlador especifico
        $this->layout = 'explorar_layout';
        //parent::__construct();
    }
    
    public function initExplorar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $correo = trim($_POST['txtCorreo'] ?? '');
            $password = trim($_POST['txtPassword'] ?? '');
            
            if (empty($correo) || empty($password)) {
                $error = "El correo y la contraseña son obligatorios";
                $this->render("explorar/explorar.php", ["error" => $error]);
                echo $correo;
                echo $password;
                return;
            }
            
            $userModel = new ExplorarModel();
            if ($userModel->validarLogin($correo, $password)) {
                header("Location: /favoritos/init");
                exit();
            } else {
                $error = "Correo o contraseña incorrectos";
                $this->render("explorar/explorar.php", ["error" => $error]);
    
                return;
            }
        }
        
        $this->render("explorar/explorar.php");
    }
}
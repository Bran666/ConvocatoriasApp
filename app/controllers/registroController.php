<?php

namespace App\Controller;

use App\Models\RegistroModel;
use Core\Controller;

require_once MAIN_APP_ROUTE . "../controllers/baseController.php";
require_once MAIN_APP_ROUTE . "../models/registroModel.php";

class RegistroController extends BaseController
{
    public function __construct()
    {
        // Definir el layout para el controlador específico
        $this->layout = 'login_layouts';
        parent::__construct(); // Llama al constructor del padre (BaseController)
    }

    public function index(){
        $this->render("registro/registro.php");
    }

    public function initRegistro()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['txtNombre'] ?? '');
            $correo = trim($_POST['txtCorreo'] ?? '');
            $contraseña = $_POST['txtContrasenia'] ?? '';
            $estado = "Activo";
            $telefono = Null;
            $idRol = 3; // Default role for new users

            $error = '';
            if (empty($nombre) || empty($correo) || empty($contraseña)) {
                $error = "Todos los campos son obligatorios.";
            } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                $error = "El correo electrónico no es válido.";
            } else {
                $registroModel = new RegistroModel();
                
                if ($registroModel->obtenerUsuarioPorCorreo($correo)) {
                    $error = "El correo electrónico ya está registrado.";
                } else {
                    $result = $registroModel->insertarUsuario(
                        $nombre,
                        $correo,
                        $contraseña,
                        $estado,
                        $telefono,
                        $idRol
                    );

                    if ($result) {
                        header("Location: /login/init");
                        exit();
                    } else {
                        $error = "Error al registrar el usuario. Por favor, inténtelo de nuevo.";
                    }
                }
            }

            if (!empty($error)) {
                $this->render("registro/registro.php", ["error" => $error]);
            }
        } else {
            $this->render("registro/registro.php");
        }
    }
}

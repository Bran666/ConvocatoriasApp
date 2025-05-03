<?php

namespace App\Controller;

use App\Models\UserModel;

require_once MAIN_APP_ROUTE . "../controllers/baseController.php";
require_once MAIN_APP_ROUTE . "../models/userModel.php";

class UserPerfilController extends BaseController
{
    public function __construct()
    {
        // Se define Layout para el controlador específico
        $this->layout = 'perfil_layout';
    }

    public function initUserPerfil()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['txtEmail'], $_POST['txtPassword'])) {
            // El usuario envió email y contraseña
            $email = trim($_POST['txtEmail']);
            $password = trim($_POST['txtPassword']);
            
            if (!empty($email) && !empty($password)) {
                $userModel = new UserModel();
                
                if ($userModel->validarLogin($email, $password)) {
                    // Login exitoso, redirigir al perfil
                    header("Location: /userPerfil/init");
                    exit();
                } else {
                    $error = "El usuario y/o contraseña incorrectos";
                }
            } else {
                $error = "El usuario y/o contraseña no pueden estar vacíos";
            }
            
            // Si hay error, renderizar vista con mensaje
            $data = ["error" => $error];
            $this->render("/userPerfil/userPerfil.php", $data);
        } else {
            // Renderizar formulario
            $this->render("/userPerfil/userPerfil.php");
        }
    }
    public function editUser($id)
    {
        $objUser = new UserModel();
        $userInfo = $objUser->getUsuarioById($id); // ✅ Usamos el método correcto
    
        $data = [
            "infoReal" => $userInfo,
        ];
        $this->render("/userPerfil/userPerfil.php", $data);
    }
    

    public function updateUser()
    {
        if (isset($_POST["txtId"]) && isset($_POST["txtNombre"]) && isset($_POST["txtEmail"])) {
            $id = $_POST["txtId"];
            $nombre = $_POST["txtNombre"];
            $correo = $_POST["txtEmail"];
    
            // Verifica si los datos están bien recibidos
            error_log("ID: $id, Nombre: $nombre, Correo: $correo"); // Agrega un log para ver los datos
    
            $userPerfilEdit = new UserModel();
            $res = $userPerfilEdit->editUsuario($id, $nombre, $correo); // Solo envías los datos necesarios
    
            if ($res) {
                // Actualizar sesión con nuevos valores si es necesario
                $_SESSION['nombre'] = $nombre;
                $_SESSION['email'] = $correo;
    
                header('Location:/userPerfil/init');
            } else {
                // Redirigir con mensaje de error
                header('Location:/userPerfil/init');
            }
        } else {
            // En caso de que falte algún dato
            error_log("Faltan datos en el formulario");
            header('Location:/userPerfil/init');
        }
    }
    

}

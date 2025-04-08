<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . "../models/baseModel.php";

class UserModel extends BaseModel
{
    public function __construct(
        private ?int $id = null,
        private ?string $nombre = null,
        private ?string $email = null,

        private ?string $contraseña = null,
        private ?int $idRol = null
    ) {
        parent::__construct();
        $this->table = "usuarios";
    }

    public function validarLogin($email, $contraseña)
    {
        try {
            $sql = "SELECT * FROM usuario WHERE email = :email";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(':email', $email, PDO::PARAM_STR);
            $statement->execute();
            $resultSet = [];
            while ($row = $statement->fetch(PDO::FETCH_OBJ)) {
                $resultSet[] = $row;
            }
            if (count($resultSet) > 0) {
                $hashed = $resultSet[0]->contrasenia; // Changed from contraseña to contrasenia
                if (password_verify($contraseña, $hashed)) {
                    $_SESSION['id'] = $resultSet[0]->id;
                    $_SESSION['nombre'] = $resultSet[0]->nombre;
                    $_SESSION['email'] = $resultSet[0]->email;
                    $_SESSION['telefono'] = $resultSet[0]->telefono;
                    $_SESSION['estado'] = $resultSet[0]->estado;
                    $_SESSION['rol'] = $resultSet[0]->idRol;
                    $_SESSION['timeout'] = time();
                    session_regenerate_id();
                    return true;
                }
            }
            return false;
        } catch (PDOException $ex) {
            error_log("Error validando login: " . $ex->getMessage());
            return false;
        }
    }

    public function getAllUsuarios()
    {
        try {
            $sql = "SELECT u.*, r.nombre as rol_nombre 
                    FROM usuarios u 
                    LEFT JOIN roles r ON u.idRol = r.id";
            $statement = $this->dbConnection->query($sql);
            return $statement->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener usuarios: " . $ex->getMessage();
            return [];
        }
    }

    public function insertarUsuario($nombre, $apellido, $email, $contrasenia, $idRol)
    {
        $fechaCreacion = date("Y-m-d H:i:s");
        $hashedPassword = password_hash($contrasenia, PASSWORD_DEFAULT); // Hash de la contraseña

        $sql = "INSERT INTO usuarios (nombre, apellido, email, fechaCreacion, fechaActualizacion, contrasenia, idRol)
                VALUES (:nombre, :apellido, :email, :fechaCreacion, NULL, :contrasenia, :idRol)";

        try {
            $stmt = $this->dbConnection->prepare($sql);

            // Vincular los parámetros
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':fechaCreacion', $fechaCreacion, PDO::PARAM_STR);
            $stmt->bindParam(':contrasenia', $hashedPassword, PDO::PARAM_STR); // Usar contraseña hasheada
            $stmt->bindParam(':idRol', $idRol, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al insertar usuario: " . $e->getMessage());

            return false;
        }
    }



    public function editUsuario($id, $nombre, $apellido, $email, $idRol)
    {
        try {
            $fechaActualizacion = date('Y-m-d H:i:s');

            $sql = "UPDATE usuarios SET 
                    nombre = :nombre,
                    apellido = :apellido,
                    email = :email,
                    fechaActualizacion = :fechaActualizacion,
                    idRol = :idRol
                    WHERE id = :id";

            $stmt = $this->dbConnection->prepare($sql);

            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':fechaActualizacion', $fechaActualizacion, PDO::PARAM_STR);
            $stmt->bindParam(':idRol', $idRol, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $ex) {
            echo "Error al actualizar usuario: " . $ex->getMessage();
            return false;
        }
    }

    public function deleteUsuario($id)
    {
        try {
            $sql = "DELETE FROM usuarios WHERE id = :id";
            $stmt = $this->dbConnection->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $ex) {
            echo "Error al eliminar usuario: " . $ex->getMessage();
            return false;
        }
    }

    public function getOneUsuario($id)
    {
        try {
            $sql = "SELECT * FROM usuarios WHERE id = :id";
            $stmt = $this->dbConnection->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            echo "Error al obtener usuario: " . $ex->getMessage();
            return null;
        }
    }

    public function obtenerUsuarioPoremail(string $email): ?array
    {
        try {
            $sql = "SELECT * FROM usuarios WHERE email = :email";
            $stmt = $this->dbConnection->prepare($sql);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result ?: null;
        } catch (PDOException $e) {
            error_log("Error al buscar usuario por email: " . $e->getMessage());
            return null;
        }
    }
    // Método para crear un usuario
    public function crearUsuario($nombre, $apellido, $correo, $contrasenia, $idRol)
    {
        $fechaCreacion = date("Y-m-d H:i:s");
        $hashedPassword = password_hash($contrasenia, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (nombre, apellido, correo, fechaCreacion, contrasenia, idRol)
                   VALUES (:nombre, :apellido, :correo, :fechaCreacion, :contrasenia, :idRol)";

        try {
            $stmt = $this->dbConnection->prepare($sql);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
            $stmt->bindParam(':correo', $correo, PDO::PARAM_STR);
            $stmt->bindParam(':fechaCreacion', $fechaCreacion, PDO::PARAM_STR);
            $stmt->bindParam(':contrasenia', $hashedPassword, PDO::PARAM_STR);
            $stmt->bindParam(':idRol', $idRol, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al crear usuario: " . $e->getMessage());
            return false;
        }
    }

    // Método para obtener todos los roles
    public function obtenerRoles()
    {
        try {
            $sql = "SELECT * FROM roles";
            $stmt = $this->dbConnection->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            error_log("Error al obtener roles: " . $e->getMessage());
            return [];
        }
    }

    // Método para obtener todos los intereses
    public function obtenerIntereses()
    {
        try {
            $sql = "SELECT * FROM intereses";
            $stmt = $this->dbConnection->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            error_log("Error al obtener intereses: " . $e->getMessage());
            return [];
        }
    }

    // Método para asignar intereses a un usuario
    public function asignarInteres($idUsuario, $idInteres)
    {
        $sql = "INSERT INTO usuariointereses (idUsuario, idInteres) VALUES (:idUsuario, :idInteres)";

        try {
            $stmt = $this->dbConnection->prepare($sql);
            $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
            $stmt->bindParam(':idInteres', $idInteres, PDO::PARAM_INT);

            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al asignar interés: " . $e->getMessage());
            return false;
        }
    }

    // Método para obtener un usuario por su ID
    public function obtenerUsuarioPorId($id)
    {
        try {
            $sql = "SELECT * FROM usuarios WHERE id = :id";
            $stmt = $this->dbConnection->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            error_log("Error al obtener usuario: " . $e->getMessage());
            return null;
        }
    }

    public function getInvestigadores()
    {
        try {
            $sql = "SELECT id, nombre FROM usuario WHERE idRol = 2";
            $stmt = $this->dbConnection->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            error_log("Error getting investigadores: " . $e->getMessage());
            return [];
        }
    }
}

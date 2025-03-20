<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . "../models/baseModel.php";

class UserPerfilModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "usuarios"; // Usamos la tabla de usuarios
    }

    /**
     * Obtiene los datos del perfil de un usuario por su ID.
     */
    public function obtenerPerfilPorId(int $idUsuario): ?array
    {
        try {
            $sql = "SELECT id, nombre, apellido, correo, idRol, fechaCreacion, fechaActualizacion 
                    FROM usuarios 
                    WHERE id = :idUsuario";
            $stmt = $this->dbConnection->prepare($sql);
            $stmt->bindParam(':idUsuario', $idUsuario);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
        } catch (PDOException $e) {
            error_log("Error al obtener perfil: " . $e->getMessage());
            return null;
        }
    }

    /**
     * Actualiza los datos del perfil de un usuario.
     */
    public function actualizarPerfil(
        int $idUsuario,
        string $nombre,
        string $apellido,
        string $correo,
        ?string $contrasenia = null,
        int $idRol
    ): bool {
        try {
            $sql = "UPDATE usuarios SET
                    nombre = :nombre,
                    apellido = :apellido,
                    correo = :correo,
                    idRol = :idRol,
                    fechaActualizacion = NOW()";

            if ($contrasenia) {
                $sql .= ", contrasenia = :contrasenia";
            }

            $sql .= " WHERE id = :idUsuario";

            $stmt = $this->dbConnection->prepare($sql);

            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':idRol', $idRol);
            $stmt->bindParam(':idUsuario', $idUsuario);

            if ($contrasenia) {
                $stmt->bindParam(':contrasenia', password_hash($contrasenia, PASSWORD_BCRYPT)); // Encriptar la contraseña
            }

            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al actualizar perfil: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Crea un nuevo usuario en la base de datos.
     */
    public function crearUsuario(
        string $nombre,
        string $apellido,
        string $correo,
        string $contrasenia,
        int $idRol
    ): bool {
        try {
            $sql = "INSERT INTO usuarios (nombre, apellido, correo, contrasenia, idRol, fechaCreacion, fechaActualizacion)
                    VALUES (:nombre, :apellido, :correo, :contrasenia, :idRol, NOW(), NOW())";

            $stmt = $this->dbConnection->prepare($sql);

            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellido', $apellido);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':contrasenia', password_hash($contrasenia, PASSWORD_BCRYPT));
            $stmt->bindParam(':idRol', $idRol);

            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al crear usuario: " . $e->getMessage());
            return false;
        }
    }
}
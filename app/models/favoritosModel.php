<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . "../models/baseModel.php";

class FavoritosModel extends BaseModel
{
    public function __construct()
    {
        // Llamamos al constructor del padre
        parent::__construct();
        // Nombre de la tabla en la base de datos
        $this->table = "favoritos";
    }

    // Método para guardar un favorito
    public function guardarFavorito($idUsuario, $idConvocatoria)
    {
        try {
            $sql = "INSERT INTO favoritos (id_usuario, id_convocatoria) VALUES (:id_usuario, :id_convocatoria)";
            $stmt = $this->dbConnection->prepare($sql);
            $stmt->bindParam(":id_usuario", $idUsuario, PDO::PARAM_INT);
            $stmt->bindParam(":id_convocatoria", $idConvocatoria, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error al guardar favorito: " . $e->getMessage());
            return false;
        }
    }
    public function existeFavorito($idUsuario, $idConvocatoria)
{
    $sql = "SELECT COUNT(*) FROM favoritos WHERE id_usuario = :id_usuario AND id_convocatoria = :id_convocatoria";
    $stmt = $this->dbConnection->prepare($sql);
    $stmt->bindParam(":id_usuario", $idUsuario, PDO::PARAM_INT);
    $stmt->bindParam(":id_convocatoria", $idConvocatoria, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchColumn() > 0;
}


    public function obtenerFavoritosPorUsuario($idUsuario)
    {
        try {
            $sql = "SELECT c.* 
                    FROM convocatorias c
                    JOIN favoritos f ON c.id = f.id_convocatoria
                    WHERE f.id_usuario = :id_usuario";
            $stmt = $this->dbConnection->prepare($sql);
            $stmt->bindParam(":id_usuario", $idUsuario, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            error_log("Error al obtener favoritos: " . $e->getMessage());
            return [];
        }
    }
    public function eliminarFavoritos($idConvocatoria, $idUsuario)
{
    try {
        $sql = "DELETE FROM favoritos WHERE id_convocatoria = :id_convocatoria AND id_usuario = :id_usuario";
        $stmt = $this->dbConnection->prepare($sql);
        $stmt->bindParam(":id_convocatoria", $idConvocatoria, PDO::PARAM_INT);
        $stmt->bindParam(":id_usuario", $idUsuario, PDO::PARAM_INT);
        return $stmt->execute();
    } catch (PDOException $e) {
        error_log("Error al eliminar favorito: " . $e->getMessage());
        return false;
    }
}
}
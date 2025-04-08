<?php

namespace App\Models;

use PDO;
use PDOException;

use Exception;

require_once MAIN_APP_ROUTE . "../models/baseModel.php";

class EntidadInstitucionModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct();
        $this->table = "entidad_institucion";
    }

    public function getById($id)
    {
        try {
            $stmt = $this->dbConnection->prepare("SELECT * FROM $this->table WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            error_log("Error getting entidad by ID: " . $e->getMessage());
            return null;
        }
    }

    public function save($data)
    {
        try {
            if (!isset($data['nombre']) || empty($data['nombre'])) {
                throw new Exception("Nombre is required");
            }

            $stmt = $this->dbConnection->prepare(
                "INSERT INTO $this->table (nombre) VALUES (?)"
            );
            return $stmt->execute([$data['nombre']]);
        } catch (PDOException $e) {
            error_log("Error saving entidad: " . $e->getMessage());
            return false;
        } catch (Exception $e) {
            error_log("Validation error: " . $e->getMessage());
            return false;
        }
    }

    public function update($id, $data)
    {
        try {
            $stmt = $this->dbConnection->prepare(
                "UPDATE $this->table SET nombre = ? WHERE id = ?"
            );
            return $stmt->execute([$data['nombre'], $id]);
        } catch (PDOException $e) {
            error_log("Error updating entidad: " . $e->getMessage());
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $stmt = $this->dbConnection->prepare(
                "DELETE FROM $this->table WHERE id = ?"
            );
            return $stmt->execute([$id]);
        } catch (PDOException $e) {
            error_log("Error deleting entidad: " . $e->getMessage());
            return false;
        }
    }
}

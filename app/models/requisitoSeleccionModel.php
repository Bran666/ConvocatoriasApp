<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . "../models/baseModel.php";

class RequisitoSeleccionModel extends BaseModel
{
    public function __construct(
        private ?int $id = null,
        private ?string $nombre = null,
        private ?int $idTipo = null,
    ) {
        //Se llama al constructor del padre
        parent::__construct();
        //Se especifica la tabla
        $this->table = "`requisito-seleccion`";
    }

    public function save()
    {
        try {
            //1. Se prepara la consulta
            $sql = $this->dbConnection->prepare("INSERT INTO $this->table (nombre, idTipo) VALUES (?, ?)");
            //2. Se remplasan las variables con bindParam
            $sql->bindParam(1, $this->nombre, PDO::PARAM_STR);
            $sql->bindParam(2, $this->idTipo, PDO::PARAM_INT);
            //3. Se ejecuta la consulta
            $res = $sql->execute();
            return $res;
        } catch (PDOException $ex) {
            echo "Error en consulta> " . $ex->getMessage();
        }
    }

    public function getRequisitoSeleccion()
    {
        try {
            $sql = "SELECT rs.*, t.nombre as tipo_nombre 
                    FROM $this->table rs 
                    LEFT JOIN tipo t ON rs.idTipo = t.id 
                    WHERE rs.id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $ex) {
            echo "Error al obtener el requisito de selección> " . $ex->getMessage();
        }
    }

    public function editRequisitoSeleccion()
    {
        try {
            if (!$this->id || !$this->nombre || $this->idTipo === null) {
                error_log("Error en editRequisitoSeleccion: Datos incompletos - ID: {$this->id}, Nombre: {$this->nombre}, IdTipo: {$this->idTipo}");
                return false;
            }

            $sql = "UPDATE `requisito-seleccion` SET nombre = :nombre, idTipo = :idTipo WHERE id = :id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindValue(":nombre", $this->nombre, PDO::PARAM_STR);
            $statement->bindValue(":idTipo", $this->idTipo, PDO::PARAM_INT);
            $statement->bindValue(":id", $this->id, PDO::PARAM_INT);
            
            error_log("Intentando actualizar requisito - ID: {$this->id}, Nombre: {$this->nombre}, IdTipo: {$this->idTipo}");
            
            $resp = $statement->execute();
            
            if (!$resp) {
                error_log("Error al ejecutar la actualización: " . implode(", ", $statement->errorInfo()));
                return false;
            }
            
            return $resp;
        } catch (PDOException $ex) {
            error_log("Error en editRequisitoSeleccion: " . $ex->getMessage());
            return false;
        }
    }

    public function deleteRequisitoSeleccion()
    {
        try {
            $sql = "DELETE FROM $this->table WHERE id=:id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
            $resp = $statement->execute();
            return $resp;
        } catch (PDOException $ex) {
            echo "El registro no pudo ser eliminado " . $ex->getMessage();
        }
    }

    public function getAll(): array
    {
        try {
            $sql = "SELECT rs.*, t.nombre as tipo_nombre 
                    FROM $this->table rs 
                    LEFT JOIN tipo t ON rs.idTipo = t.id";
            $statement = $this->dbConnection->prepare($sql);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $ex) {
            error_log("Error al obtener los requisitos de selección: " . $ex->getMessage());
            return [];
        }
    }
}
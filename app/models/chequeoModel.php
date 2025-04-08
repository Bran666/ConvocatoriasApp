<?php

namespace App\Models;

use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . "../models/baseModel.php";

class ChequeoModel extends BaseModel
{
    public function __construct(
        private ?int $id = null,
        private ?int $idEmpresa = null,
        private ?int $idRequisito = null,
        private ?bool $chequeo = null
    ) {
        parent::__construct();
        $this->table = "chequeo";
    }
    
    public function save($idEmpresa, $idRequisito, $chequeo = true)
    {
        try {
            $sql = $this->dbConnection->prepare("INSERT INTO $this->table (chequeo, IdEmpresa, IdRequisito) VALUES (?, ?, ?)");
            $chequeoBit = $chequeo ? 1 : 0;
            $sql->bindParam(1, $chequeoBit, PDO::PARAM_INT);
            $sql->bindParam(2, $idEmpresa, PDO::PARAM_INT);
            $sql->bindParam(3, $idRequisito, PDO::PARAM_INT);
            return $sql->execute();
        } catch (PDOException $ex) {
            error_log("Error al guardar chequeo: " . $ex->getMessage());
            return false;
        }
    }
    
    public function getByUsuario($idEmpresa)
    {
        try {
            $sql = "SELECT * FROM $this->table WHERE IdEmpresa = :idEmpresa";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":idEmpresa", $idEmpresa, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $ex) {
            error_log("Error al obtener chequeos: " . $ex->getMessage());
            return [];
        }
    }
    
    public function deleteByUsuario($idEmpresa)
    {
        try {
            $sql = "DELETE FROM $this->table WHERE IdEmpresa = :idEmpresa";
            $statement = $this->dbConnection->prepare($sql);
            $statement->bindParam(":idEmpresa", $idEmpresa, PDO::PARAM_INT);
            return $statement->execute();
        } catch (PDOException $ex) {
            error_log("Error al eliminar chequeos: " . $ex->getMessage());
            return false;
        }
    }
}
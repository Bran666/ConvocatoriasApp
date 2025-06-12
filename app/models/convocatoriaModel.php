<?php

namespace App\Models;

use DateTime;
use PDO;
use PDOException;

require_once MAIN_APP_ROUTE . "../models/baseModel.php";


class ConvocatoriaModel extends BaseModel
{

    public function __construct(
        private ?int $id = null,
        private ?string $nombre = null,
        private ?string $fechaRevision = null,
        private ?string $fechaCierre = null,
        private ?string $descripcion = null,
        private ?string $objetivo = null,
        private ?string $observaciones = null,
        private ?string $fkIdEntidad = null,
        private ?string $fkIdInvestigador = null,
    ) {
        parent::__construct();
        $this->table = "convocatorias";
    }

    public function crearConvocatoria(
        $nombre,
        $descripcion,
        $fechaRevision,
        $fechaCierre,
        $objetivo,
        $observaciones,
        $fkIdEntidad,
        $idUsuario,
        $fkIdInvestigador
    ) {
        try {
            $sql = "INSERT INTO convocatorias (
                nombre, descripcion, fechaRevision, fechaCierre, 
                objetivo, observaciones, fkIdEntidad, idUsuario, 
                fkIdInvestigador
            ) VALUES (
                :nombre, :descripcion, :fechaRevision, :fechaCierre, 
                :objetivo, :observaciones, :fkIdEntidad, :idUsuario, 
                :fkIdInvestigador
            )";

            $stmt = $this->dbConnection->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':descripcion', $descripcion);
            $stmt->bindParam(':fechaRevision', $fechaRevision);
            $stmt->bindParam(':fechaCierre', $fechaCierre);
            $stmt->bindParam(':objetivo', $objetivo);
            $stmt->bindParam(':observaciones', $observaciones);
            $stmt->bindParam(':fkIdEntidad', $fkIdEntidad);
            $stmt->bindParam(':idUsuario', $idUsuario);
            $stmt->bindParam(':fkIdInvestigador', $fkIdInvestigador);

            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error creating convocatoria: " . $e->getMessage());
            return false;
        }
    }

    public function getConvocatoriaById($id)
    {
        try {
            $sql = "SELECT * FROM convocatorias WHERE id = :id";
            $stmt = $this->dbConnection->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);  // Changed from FETCH_ASSOC to FETCH_OBJ
        } catch (PDOException $e) {
            error_log("Error getting convocatoria: " . $e->getMessage());
            return false;
        }
    }

    public function updateConvocatoria(
        int $id,
        string $nombre,
        string $descripcion,
        string $fechaRevision,
        string $fechaCierre,
        string $objetivo,
        ?string $observaciones,
        int $fkIdEntidad,
        int $idUsuario,
        int $fkIdInvestigador
    ) {
        try {
            $sql = "UPDATE convocatorias SET 
                nombre = :nombre, 
                descripcion = :descripcion,
                fechaRevision = :fechaRevision,
                fechaCierre = :fechaCierre,
                objetivo = :objetivo,
                observaciones = :observaciones,
                fkIdEntidad = :fkIdEntidad,
                idUsuario = :idUsuario,
                fkIdInvestigador = :fkIdInvestigador
                WHERE id = :id";

            $stmt = $this->dbConnection->prepare($sql);

            $params = [
                ':id' => $id,
                ':nombre' => $nombre,
                ':descripcion' => $descripcion,
                ':fechaRevision' => $fechaRevision,
                ':fechaCierre' => $fechaCierre,
                ':objetivo' => $objetivo,
                ':observaciones' => $observaciones,
                ':fkIdEntidad' => $fkIdEntidad,
                ':idUsuario' => $idUsuario,
                ':fkIdInvestigador' => $fkIdInvestigador
            ];

            foreach ($params as $key => $value) {
                $stmt->bindValue($key, $value);
            }

            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error updating convocatoria: " . $e->getMessage());
            return false;
        }
    }

    public function deleteConvocatoria($id)
    {
        try {
            $sql = "DELETE FROM convocatorias WHERE id = :id";
            $stmt = $this->dbConnection->prepare($sql);
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        } catch (PDOException $e) {
            error_log("Error deleting convocatoria: " . $e->getMessage());
            return false;
        }
    }



}


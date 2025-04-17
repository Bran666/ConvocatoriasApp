<?php

namespace App\Controller;

use Exception;
use App\Models\ConvocatoriaModel;
use App\Models\EntidadInstitucionModel;
use App\Models\UserModel;


require_once MAIN_APP_ROUTE . "../controllers/baseController.php";
require_once MAIN_APP_ROUTE . "../models/convocatoriaModel.php";
require_once MAIN_APP_ROUTE . "../models/usuarioModel.php";  // Add this line

class ConvocatoriaController extends BaseController
{
    public function __construct()
    {
        $this->layout = 'linea_layout';
    }

    public function initConvocatoria()
    {
        try {
            // Obtener entidades e investigadores para el formulario
            $entidadModel = new EntidadInstitucionModel();
            $usuarioModel = new UserModel();
            $entidades = $entidadModel->getAll();
            $investigadores = $usuarioModel->getInvestigadores();
    
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Obtener los datos del formulario con validación
                $data = [
                    'nombre' => trim($_POST['nombre'] ?? ''),
                    'descripcion' => trim($_POST['descripcion'] ?? ''),
                    'fechaRevision' => trim($_POST['fechaRevision'] ?? ''),
                    'fechaCierre' => trim($_POST['fechaCierre'] ?? ''),
                    'objetivo' => trim($_POST['objetivo'] ?? ''),
                    'observaciones' => trim($_POST['observaciones'] ?? ''),
                    'fkIdEntidad' => (int)($_POST['fkIdEntidad'] ?? 1),
                    'idUsuario' => (int)($_POST['idUsuario'] ?? 1),
                    'fkIdInvestigador' => (int)($_POST['fkIdInvestigador'] ?? 1)
                ];
    
                // Validación de campos requeridos
                if (empty($data['nombre']) || empty($data['descripcion']) || 
                    empty($data['fechaRevision']) || empty($data['fechaCierre']) || 
                    empty($data['objetivo']) || empty($data['fkIdEntidad'])) {
                    throw new Exception("Todos los campos obligatorios deben ser completados");
                }
    
                $convocatoriaModel = new ConvocatoriaModel();
                $result = $convocatoriaModel->crearConvocatoria(
                    $data['nombre'],
                    $data['descripcion'],
                    $data['fechaRevision'],
                    $data['fechaCierre'],
                    $data['objetivo'],
                    $data['observaciones'],
                    $data['fkIdEntidad'],
                    $data['idUsuario'],
                    $data['fkIdInvestigador']
                );
    
                if ($result) {
                    $_SESSION['success'] = "Convocatoria creada exitosamente";
                    header("Location: /convocatoria/lista");
                    exit();
                } else {
                    throw new Exception("Error al guardar en la base de datos");
                }
            }
    
            // Mostrar formulario de creación con las entidades e investigadores
            $this->render('convocatorias/convocatorias.php', [
                'entidades' => $entidades,
                'investigadores' => $investigadores
            ]);
    
        } catch (Exception $e) {
            error_log("Error en initConvocatoria: " . $e->getMessage());
            $this->render('convocatorias/convocatorias.php', [
                'error' => $e->getMessage(),
                'entidades' => [],
                'investigadores' => [],
                'formData' => $_POST ?? []
            ]);
        }
    }
    

    public function edit($id)
    {
        try {
            $convocatoriaModel = new ConvocatoriaModel();
            $convocatoria = $convocatoriaModel->getConvocatoriaById($id);
            
            if (!$convocatoria) {
                throw new Exception("Convocatoria no encontrada");
            }
    
            // Convert array to object if necessary
            if (is_array($convocatoria)) {
                $convocatoria = (object)$convocatoria;
            }
    
            $entidadModel = new EntidadInstitucionModel();
            $usuarioModel = new UserModel();
    
            $convocatoria = $convocatoriaModel->getConvocatoriaById($id);
            $entidades = $entidadModel->getAll();
            $investigadores = $usuarioModel->getInvestigadores();
    
            if (!$convocatoria) {
                throw new Exception("Convocatoria no encontrada");
            }
    
            $this->render('convocatorias/edit.php', [
                'convocatoria' => $convocatoria,
                'entidades' => $entidades,
                'investigadores' => $investigadores
            ]);
    
        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
            header('Location: /convocatoria/lista');
            exit();
        }
    }

    public function update($id = null) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                $id = $id ?? $_POST['id'] ?? null;
                if (!$id) {
                    throw new Exception("ID no válido");
                }

                $data = [
                    'nombre' => trim($_POST['nombre'] ?? ''),
                    'descripcion' => trim($_POST['descripcion'] ?? ''),
                    'fechaRevision' => trim($_POST['fechaRevision'] ?? ''),
                    'fechaCierre' => trim($_POST['fechaCierre'] ?? ''),
                    'objetivo' => trim($_POST['objetivo'] ?? ''),
                    'observaciones' => trim($_POST['observaciones'] ?? ''),
                    'fkIdEntidad' => (int)($_POST['fkIdEntidad'] ?? 1),
                    'idUsuario' => (int)($_POST['idUsuario'] ?? 1),  // Added this line
                    'fkIdInvestigador' => (int)($_POST['fkIdInvestigador'] ?? 1)
                ];

                // Validate required fields
                if (empty($data['nombre']) || empty($data['descripcion']) || 
                    empty($data['fechaRevision']) || empty($data['fechaCierre']) || 
                    empty($data['objetivo']) || empty($data['fkIdEntidad'])) {
                    throw new Exception("Todos los campos obligatorios deben ser completados");
                }

                $convocatoriaModel = new ConvocatoriaModel();
                $result = $convocatoriaModel->updateConvocatoria(
                    $id,
                    $data['nombre'],
                    $data['descripcion'],
                    $data['fechaRevision'],
                    $data['fechaCierre'],
                    $data['objetivo'],
                    $data['observaciones'],
                    $data['fkIdEntidad'],
                    $data['idUsuario'],  // Added this parameter
                    $data['fkIdInvestigador']
                );

                if ($result) {
                    $_SESSION['success'] = "Convocatoria actualizada exitosamente";
                    header("Location: /convocatoria/lista");
                    exit();
                } else {
                    throw new Exception("Error al actualizar la convocatoria");
                }
            } catch (Exception $e) {
                error_log("Error en actualización: " . $e->getMessage());
                
                // Get all necessary data for the form
                $entidadModel = new EntidadInstitucionModel();
                $usuarioModel = new UserModel();
                
                $this->render('convocatorias/edit.php', [
                    'error' => $e->getMessage(),
                    'convocatoria' => $_POST,
                    'entidades' => $entidadModel->getAll(),
                    'investigadores' => $usuarioModel->getInvestigadores()
                ]);
                return;
            }
        }
        header("Location: /convocatoria/lista");
        exit();
    }

    public function delete($id) {
        if ($id) {
            $convocatoriaModel = new ConvocatoriaModel();
            $result = $convocatoriaModel->deleteConvocatoria($id);
            
            if ($result) {
                header("Location: /convocatoria/lista");
                exit();
            }
        }
        header("Location: /convocatoria/lista");
    }

    public function lista() {
        try {
            $convocatoriaModel = new ConvocatoriaModel();
            $convocatorias = $convocatoriaModel->getAll();
            
            $this->render('convocatorias/lista.php', [
                'convocatorias' => $convocatorias
            ]);
        } catch (Exception $e) {
            error_log("Error loading convocatorias: " . $e->getMessage());
            $this->render('convocatorias/lista.php', [
                'error' => 'Error al cargar las convocatorias',
                'convocatorias' => []
            ]);
        }
    }

    public function view($id)
    {
        try {
            if (!$id) {
                throw new Exception("ID no válido");
            }

            $convocatoriaModel = new ConvocatoriaModel();
            $convocatoria = $convocatoriaModel->getConvocatoriaById($id);

            if (!$convocatoria) {
                throw new Exception("Convocatoria no encontrada");
            }

            $this->render('convocatorias/view.php', [
                'convocatoria' => $convocatoria
            ]);
        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
            header('Location: /convocatoria/lista');
            exit();
        }
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\UserModel;

class SuscripcionModel extends Model
{
    protected $table = 'suscripciones';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['user_id', 'producto_id', 'fecha_compra', 'fecha_expiracion', 'estado'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [
        'user_id' => 'required',
        'producto_id' => 'required',
        'fecha_compra' => 'required',
        'fecha_expiracion' => 'required',
        'estado' => 'required|in_list[activo,inactivo,expirado]'
    ];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = ['checkUserRole'];
    protected $beforeUpdate = ['checkUserRole'];

    public function getSuscripcionesPorUsuario($userId)
    {
        return $this->select('suscripciones.*, productos.nombre as nombre_producto, productos.imagen_principal')
            ->join('productos', 'productos.id = suscripciones.producto_id')
            ->where('suscripciones.user_id', $userId)
            ->findAll();
    }

    protected function checkUserRole(array $data)
    {
        if (isset($data['data']['user_id'])) {
            $userModel = new UserModel();
            $user = $userModel->find($data['data']['user_id']);

            if (!$user || $user['rol'] !== 'cliente') {
                throw new \Exception('El usuario debe tener el rol de cliente para tener una suscripción.');
            }
        }
        return $data;
    }
}

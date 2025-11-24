<?php

namespace App\Models;

use CodeIgniter\Model;

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
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $beforeUpdate = [];

    public function getSuscripcionesPorUsuario($userId)
    {
        return $this->select('suscripciones.*, productos.nombre as nombre_producto, productos.imagen_principal')
            ->join('productos', 'productos.id = suscripciones.producto_id')
            ->where('suscripciones.user_id', $userId)
            ->findAll();
    }
}

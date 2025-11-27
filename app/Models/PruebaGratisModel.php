<?php

namespace App\Models;

use CodeIgniter\Model;

class PruebaGratisModel extends Model
{
    protected $table = 'pruebas_gratis';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['user_id', 'producto_id', 'fecha_inicio', 'fecha_expiracion', 'estado'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Validation
    protected $validationRules = [
        'user_id' => 'required|integer',
        'producto_id' => 'required|integer',
        'fecha_inicio' => 'required|valid_date',
        'fecha_expiracion' => 'required|valid_date',
        'estado' => 'in_list[activa,expirada,cancelada]'
    ];

    public function getPruebaActiva($userId, $productoId)
    {
        return $this->where('user_id', $userId)
                   ->where('producto_id', $productoId)
                   ->where('estado', 'activa')
                   ->where('fecha_expiracion >', date('Y-m-d H:i:s'))
                   ->first();
    }

    public function crearPrueba($userId, $productoId)
    {
        $fechaInicio = date('Y-m-d H:i:s');
        $fechaExpiracion = date('Y-m-d H:i:s', strtotime('+14 days'));

        return $this->insert([
            'user_id' => $userId,
            'producto_id' => $productoId,
            'fecha_inicio' => $fechaInicio,
            'fecha_expiracion' => $fechaExpiracion,
            'estado' => 'activa'
        ]);
    }
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class SistemaModel extends Model
{
    protected $table = 'sistemas';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'producto_id', 'nombre_sistema', 'codigo_sistema', 
        'ruta_login', 'ruta_dashboard', 'controlador', 'activo'
    ];

    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getSistemaPorProducto($productoId)
    {
        return $this->where('producto_id', $productoId)
                   ->where('activo', 1)
                   ->first();
    }

    public function getSistemaPorCodigo($codigo)
    {
        return $this->where('codigo_sistema', $codigo)
                   ->where('activo', 1)
                   ->first();
    }
}
<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'nombre',
        'descripcion',
        'estado'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'fecha_creacion';
    protected $updatedField = 'fecha_actualizacion';

    public function getCategoriasActivas()
    {
        return $this->where('estado', 'activo')->findAll();
    }

    public function getCategoriasConProductos()
    {
        return $this->select('categorias.*, COUNT(productos.id) as total_productos')
                    ->join('productos', 'productos.categoria_id = categorias.id', 'left')
                    ->groupBy('categorias.id')
                    ->findAll();
    }
}
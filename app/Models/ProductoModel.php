<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'nombre',
        'precio',
        'precio_oferta',
        'descripcion',
        'categoria_id',
        'mas_vendido',
        'imagen_principal',
        'imagenes_adicionales',
        'stock',
        'estado',
        'tipo_producto'
    ];

    protected $useTimestamps = true;
    protected $createdField = 'fecha_creacion';
    protected $updatedField = 'fecha_actualizacion';

    public function getProductosConCategoria()
    {
        return $this->select('productos.*, categorias.nombre as categoria_nombre')
            ->join('categorias', 'categorias.id = productos.categoria_id')
            ->where('productos.estado', 'activo')
            ->findAll();
    }

    public function getProductosMasVendidos($limit = 5)
    {
        return $this->where('mas_vendido', true)
            ->where('estado', 'activo')
            ->findAll($limit);
    }

    public function getProductosPorCategoria($categoriaId = null)
    {
        $builder = $this->select('productos.*, categorias.nombre as categoria_nombre')
            ->join('categorias', 'categorias.id = productos.categoria_id')
            ->where('productos.estado', 'activo');

        if ($categoriaId) {
            $builder->where('productos.categoria_id', $categoriaId);
        }

        return $builder->findAll();
    }

    public function getRecentProducts($limit = 6)
    {
        return $this->where('estado', 'activo')
            ->orderBy('id', 'DESC')
            ->findAll($limit);
    }

    public function getProductosRelacionados($categoriaId, $excludeId, $limit = 4)
    {
        return $this->select('productos.*, categorias.nombre as categoria_nombre')
            ->join('categorias', 'categorias.id = productos.categoria_id')
            ->where('categoria_id', $categoriaId)
            ->where('productos.id !=', $excludeId)
            ->where('productos.estado', 'activo')
            ->findAll($limit);
    }
}
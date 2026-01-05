<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTipoProductoToProductos extends Migration
{
    public function up()
    {
        $this->forge->addColumn('productos', [
            'tipo_producto' => [
                'type' => 'ENUM',
                'constraint' => ['alquiler', 'venta'],
                'default' => 'alquiler',
                'after' => 'estado'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('productos', 'tipo_producto');
    }
}
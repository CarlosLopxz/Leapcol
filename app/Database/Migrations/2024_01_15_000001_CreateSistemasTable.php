<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSistemasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'producto_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'nombre_sistema' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'codigo_sistema' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'ruta_login' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'ruta_dashboard' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'controlador' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'activo' => [
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('producto_id', 'productos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('sistemas');

        // Insertar datos iniciales
        $data = [
            [
                'producto_id' => 1,
                'nombre_sistema' => 'Sistema de Inventario',
                'codigo_sistema' => 'inventario',
                'ruta_login' => 'inventario/login',
                'ruta_dashboard' => 'inventario/dashboard',
                'controlador' => 'Sistemas\\InventarioController',
                'activo' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];

        $this->db->table('sistemas')->insertBatch($data);
    }

    public function down()
    {
        $this->forge->dropTable('sistemas');
    }
}
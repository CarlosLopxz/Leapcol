<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePruebasGratisTable extends Migration
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
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'producto_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'fecha_inicio' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'fecha_expiracion' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'estado' => [
                'type' => 'ENUM',
                'constraint' => ['activa', 'expirada', 'cancelada'],
                'default' => 'activa',
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
        $this->forge->addKey('user_id');
        $this->forge->addKey('producto_id');
        $this->forge->createTable('pruebas_gratis');
    }

    public function down()
    {
        $this->forge->dropTable('pruebas_gratis');
    }
}
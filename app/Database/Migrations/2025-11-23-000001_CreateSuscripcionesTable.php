<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuscripcionesTable extends Migration
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
            'fecha_compra' => [
                'type' => 'DATETIME',
            ],
            'fecha_expiracion' => [
                'type' => 'DATETIME',
            ],
            'estado' => [
                'type' => 'ENUM',
                'constraint' => ['activo', 'inactivo', 'expirado'],
                'default' => 'activo',
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
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('producto_id', 'productos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('suscripciones');
    }

    public function down()
    {
        $this->forge->dropTable('suscripciones');
    }
}

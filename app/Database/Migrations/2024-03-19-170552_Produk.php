<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
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
            'nama_produk' => [
                'type' => 'VARCHAR',
                'constraint' => 120,
                'null' => true,
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => 120,
                'null' => true,
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => 5000,
                'null' => false,
            ],
            'url' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 50,
                'null' => true,
            ],
            'like' => [
                'type' => 'INT',
                'constraint' => 255,
                'null' => true,
            ],
            'komen' => [
                'type' => 'VARCHAR',
                'constraint' => 1000,
                'null' => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',

        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('produk');
    }

    public function down()
    {
        $this->forge->dropTable('produk');
    }
}

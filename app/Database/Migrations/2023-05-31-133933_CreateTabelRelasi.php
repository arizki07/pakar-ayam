<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTabelRelasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_relasi' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_gejala' => [
                'type'       => 'INT',
                'constraint' => '10',
            ],
            'id_penyakit' => [
                'type' => 'INT',
                'constraint' => "10",
            ],
        ]);
        $this->forge->addKey('id_relasi', true);
        $this->forge->createTable('relasi');
    }

    public function down()
    {
        $this->forge->dropTable('relasi');
    }
}

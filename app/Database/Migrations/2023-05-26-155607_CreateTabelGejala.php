<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTabelGejala extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_gejala' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kode_gejala' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'nama_gejala' => [
                'type' => 'VARCHAR',
                'constraint' => "50",
            ],
        ]);
        $this->forge->addKey('id_gejala', true);
        $this->forge->createTable('gejala');
    }

    public function down()
    {
        $this->forge->dropTable('gejala');
    }
}

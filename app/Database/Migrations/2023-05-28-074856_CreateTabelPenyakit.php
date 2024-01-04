<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTabelPenyakit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_penyakit' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'kode_penyakit' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'nama_penyakit' => [
                'type' => 'VARCHAR',
                'constraint' => "50",
            ],
            'deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => "255",
            ],
            'solusi_penyakit' => [
                'type' => 'VARCHAR',
                'constraint' => "255",
            ],
        ]);
        $this->forge->addKey('id_penyakit', true);
        $this->forge->createTable('penyakit');
    }

    public function down()
    {
        $this->forge->dropTable('penyakit');
    }
}

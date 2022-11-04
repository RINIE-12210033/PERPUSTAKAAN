<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableStok extends Migration
{
    public function up()
    {
  
        $this->forge->addField([  
            'Id'  => [
                'type'  => 'INT',
                'constraint'  => '10',
            ],
            'koleksi_id' => [
                'type'  => 'INT',
                'constraint' => '10',
            ],
            'nomor'  => [
                'type'  => 'INT',
                'constraint'  => '10',
            ],
            'status_tersedia'  => [
                'type' => 'enum("A","F","R","H")', 
                'null'=>true 
            ],
            'anggota_id' => [
                'type' => 'INT',
                'constraint' => '10',
            ],
            'pustakawan_id'  => [
                'type' => 'INT',
                'constraint' => '10',
            ],  
        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('TableStok');
    }

    public function down()
    {
        $this->forge->dropTable('TableStok');
    }
}


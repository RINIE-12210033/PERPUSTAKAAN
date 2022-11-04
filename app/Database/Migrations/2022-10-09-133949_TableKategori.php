<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableKategori extends Migration
{
    public function up()
    {
        $this->forge->addField([  

            'kode' => [
                'type' => 'VARCHAR',
                'Constraint' => '10',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'Constraint' => '50',
            ],   
        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('Tablekategori');
    }

    public function down()
    {
        $this->forge->dropTable('Tablekategori');
    }
}










    
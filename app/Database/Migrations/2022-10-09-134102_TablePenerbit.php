<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablePenerbit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Id'  => [
                'type'  => 'INT',
                'constraint'  => '10',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'kota'  => [
                'type'  => 'VARCHAR',
                'constraint' => '100',
            ],
            'negara'  => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],

        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('TablePenerbit');
    }

    public function down()
    {
        $this->forge->dropTable('TablePenerbit');
    }
}

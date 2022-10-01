<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableAnggota extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_anggota' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_anggota' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'ttl_anggota' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status_anggota' => [
                'type'       => 'VARCHAR',
                'constraint' => '1'
            ],

        ]);
        $this->forge->addKey('id_anggota', true);
        $this->forge->createTable('TableAnggota');
    }

    public function down()
    {
        $this->forge->dropTable('TableAnggota');
    }
}

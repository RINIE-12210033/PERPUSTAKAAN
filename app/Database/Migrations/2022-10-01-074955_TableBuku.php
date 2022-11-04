<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableBuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_buku' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul_buku' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'penulis' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'jenis_buku' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            
            ],
            'thn_terbit' =>[
                'type' => 'year',
                'constraint' => '4',

            ],

        ]);
        $this->forge->addKey('kode_buku', true);
        $this->forge->createTable('TableBuku');
    }

    public function down()
    {
        $this->forge->dropTable('TableBuku');
    }
}

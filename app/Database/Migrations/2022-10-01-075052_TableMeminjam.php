<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableMeminjam extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pinjam' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'tanggal_pinjam' => [
                'type' => 'date',
                'null' => 'true',
            ],
            'jumlah_pinjam' => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'tanggal_kembali' => [
                'type' => 'date',
                'null' => 'true',
            ],
            'id_anggota' => [
                'type'           => 'INT',
                'constraint'     => 5,
            ],
            'kode_buku' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],

        ]);
        $this->forge->addKey('id_pinjam', true);
        $this->forge->createTable('TableMeminjam');
    }

    public function down()
    {
        $this->forge->dropTable('TableMeminjam');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablePustakawan extends Migration
{
    public function up()
    {
        $this->forge->addField([  
            'Id'  => [
                'type'  => 'INT',
                'constraint' => '10',
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
            ],
            'gender'  => [
                'type' => 'enum("L","P")', 
                'null'=>true 
            ],

            'tgl_lahir' => [
                'type' => 'DATE',
            ],
            'email' => [     
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'sandi'  => [
                'type' => 'VARCHAR',
                'constraint' => '60',
            ],
            'no_telp' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
            ],
            'alamat'  => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'kota'   => [
                'type'  => 'VARCHAR',
                'Constraint' => '30',
            ],

        ]);
        $this->forge->addKey('id');
        $this->forge->createTable('TablePustakawan');
    }

    public function down()
    {
        $this->forge->dropTable('TablePustakawan');
    }
}


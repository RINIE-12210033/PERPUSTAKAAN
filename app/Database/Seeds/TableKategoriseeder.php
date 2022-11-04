<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TablePustakawanseeder extends Seeder
{
    public function run()
    {
        $data = [
            'kode' => '1111',
            'nama'    => 'pabayo',
        ];
        // Simple Queries
        $this->db->query(
            'INSERT INTO TablePustakawanseeder (kode, nama,) VALUES(:kode:, :nama:,)',
            $data
        );

        // Using Query Builder
        //$this->db->table('users')->insert($data);
          
    }
}
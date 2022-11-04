<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TablePenerbitseeder extends Seeder
{
    public function run()
    {
        $data = [
            'id' => '1111',
            'nama'    => 'Sahrul Basalam',
            'kota' => 'Pontianak',
            'negara' => 'Indonesia',

        ];
        // Simple Queries
        $this->db->query(
            'INSERT INTO TablePenerbitseeder (id, nama, kota, negara) VALUES(:id:, :nama:, :kota:, :negara:,)',
            $data
        );

        // Using Query Builder
        //$this->db->table('users')->insert($data);
          
    }
}
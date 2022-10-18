<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TableStokseeder extends Seeder
{
    public function run()
    {
        $data = [
            'id' => '1111',
            'koleksi_id'    => '20',
            'nomor' => '1',
            'status_tersedia' => 'P',
            'anggota_id' => '1111',
            'pustakawan_id' => 'AAAA',

        ];
        // Simple Queries
        $this->db->query(
            'INSERT INTO TableStokseeder (id, koleksi_id, nomor, status_tersedia, anggota_id, pustakawan_id) VALUES(:id:, :koleksi_id:, :nomor:, :status_tersedia:, :anggota_id:, :pustakawan_id:,)',
            $data
        );

        // Using Query Builder
        //$this->db->table('users')->insert($data);
          
    }
}
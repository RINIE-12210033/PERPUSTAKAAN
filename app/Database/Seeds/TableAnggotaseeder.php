<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TableAnggotaseeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama_anggota' => 'yudi pabayo',
            'alamat'    => 'bengkayang',
            'ttl_anggota' => 'bengkayang, 10 januari 2000',
            'status_anggota' => '1',
        ];

        // Simple Queries
        $this->db->query(
            'INSERT INTO TableAnggotaseeder (nama_anggota, alamat, ttl_anggota, status_anggota) VALUES(:nama_anggota:, :alamat:, :ttl_anggota:, :status_anggota:,)',
            $data
        );

        // Using Query Builder
        //$this->db->table('users')->insert($data);
    }
}

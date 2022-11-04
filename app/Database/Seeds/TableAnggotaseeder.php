<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TableAnggotaseeder extends Seeder
{
    public function run()
    {
        $data = [
            'id_anggota' => '1111',
            'nama_anggota' => 'yudi pabayo',
            'alamat'    => 'bengkayang',
            'ttl_anggota' => 'bengkayang, 10 januari 2000',
            'status_anggota' => '1',
            'gender' => 'L',
            'no_telp' => '081211111',
            'kota' => 'pontianak',
            'tgl-dftr' => '2022-09-16',

        ];

        // Simple Queries
        $this->db->query(
            'INSERT INTO TableAnggotaseeder (id_anggota,nama anggota, alamat, ttl_anggota, status_anggota, gender, no_telp, kota, tgl-dftr) VALUES(:id_anggota:, :alamat:, :ttl_anggota:, :status_anggota:, :nama_anggota:, :gender:,:no_telp:,:kota:,:tgl-dftr:)',
            $data
        );

        // Using Query Builder
        //$this->db->table('users')->insert($data);
    }
    
}

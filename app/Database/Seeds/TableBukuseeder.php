<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TableBukuseeder extends Seeder
{
    public function run()
    {
        $data = [
            'kode_buku' => '1111',
            'judul_buku'    => 'tutorial masak',
            'pengarang' => 'sharul basalam',
            'jenis_buku' => 'cetak',
            'penerbit'  => 'cv.stralala'
        ];

        // Simple Queries
        $this->db->query(
            'INSERT INTO TableBukuseeder (kode_buku, judul_buku, pengarang, jenis_buku, penerbit) VALUES(:kode_buku:, :judul_buku:, :pengarang:, :jenis_buku:, :penerbit:,)',
            $data
        );

        // Using Query Builder
        //$this->db->table('users')->insert($data);
    }
}

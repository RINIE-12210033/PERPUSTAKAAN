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
            'penulis' => 'sharul basalam',
            'jenis_buku' => 'cetak',
            'penerbit'  => 'cv.stralala',
            'thn_terbit' => '2019',
            
        ];

        // Simple Queries
        $this->db->query(
            'INSERT INTO TableBukuseeder (kode_buku, judul_buku, pengarang, jenis_buku, penerbit, thn_terbit) VALUES(:kode_buku:, :judul_buku:, :pengarang:, :jenis_buku:, :penerbit:, :thn_terbit:,)',
            $data
        );

        // Using Query Builder
        //$this->db->table('users')->insert($data);
    }
}

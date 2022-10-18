<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Tablememinjamseeder extends Seeder
{
    public function run()
    {
        $data = [
            'id_pinjam' => '1111',
            'tanggal_pinjam'    => '2022-09-16',
            'jumlah_pinjam' => '2',
            'tanggal_kembali' => '2022-09-30',
            'id_anggota' => '1111',
            'kode_buku' => '1',
        ];
        // Simple Queries
        $this->db->query(
            'INSERT INTO Tablememinjamseeder (id_pinjam, tanggal_pinjam, jumlah_pinjam, tanggal_kembali, id_anggota, kode_buku,) VALUES(:id_pinjam:, :tanggal_pinjam:, :jumlah_pinjam:, :tanggal_kembali:, :id_anggota:, :kode_buku:,)',
            $data
        );

        // Using Query Builder
        //$this->db->table('users')->insert($data);
          
    }
}
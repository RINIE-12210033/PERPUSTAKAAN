<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TablePustakawanseeder extends Seeder
{
    public function run()
    {
        $data = [
            'id' => '1111',
            'nama_lengkap'    => 'pabayo',
            'gender' => 'L',
            'tgl_lahir' => '2000-09-30',
            'email' => 'pabayo01@gmail.com',
            'sandi' => '****',
            'no_telp' => '0821311111',
            'alamat' => 'jalan ayani 2',
            'kota' => 'pontianak',

        ];
        // Simple Queries
        $this->db->query(
            'INSERT INTO TablePustakawanseeder (id, nama_lengkap, gender, tgl_lahir, email, sandi, no_telp, alamat, kota) VALUES(:id:, :nama_lengkap:, :gender:, :tgl_lahir:, :email:, :sandi:, :no_telp:, :alamat:, :kota:,)',
            $data
        );

        // Using Query Builder
        //$this->db->table('users')->insert($data);
          
    }
}
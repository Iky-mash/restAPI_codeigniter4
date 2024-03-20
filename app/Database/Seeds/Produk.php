<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produk extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_produk' => 'Produk A',
                'kategori' => 'Kategori 1',
                'deskripsi' => 'Deskripsi Produk A',
                'url' => 'https://example.com/produk-a',
                'harga' => 100000,
                'like' => 50,
                'komen' => 'Komentar untuk Produk A',
            ],
            [
                'nama_produk' => 'Produk B',
                'kategori' => 'Kategori 2',
                'deskripsi' => 'Deskripsi Produk B',
                'url' => 'https://example.com/produk-b',
                'harga' => 150000,
                'like' => 30,
                'komen' => 'Komentar untuk Produk B',
            ],
            // Tambahkan data produk lainnya sesuai kebutuhan
        ];

        // Insert batch data into the database
        $this->db->table('produk')->insertBatch($data);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\barang;

class produkTableSeeder extends Seeder
{
    public function run(): void
    {
        $brg = new barang;

        $brg->insert([
            [
                'nama' => 'Piring',
                'id_kategori' => 1,
                'qty' => 12,
                'harga_beli' => 50000,
                'harga_jual' => 54000,
            ],
            [
                'nama' => 'Sendok',
                'id_kategori' => 1,
                'qty' => 12,
                'harga_beli' => 40000,
                'harga_jual' => 45000,
            ],
        ]);
    }
}

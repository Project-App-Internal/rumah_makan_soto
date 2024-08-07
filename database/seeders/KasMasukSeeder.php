<?php

namespace Database\Seeders;

use App\Models\KasMasuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KasMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'kode' => 'KSP24001',
                'metode_pembayaran' => 'Tunai',
            ],
            [
                'kode' => 'KSP24002',
                'metode_pembayaran' => 'Tunai',
            ],
            [
                'kode' => 'KSP24003',
                'metode_pembayaran' => 'Debit',
            ],
        ];

        foreach ($items as $item) {
            KasMasuk::create($item);
        }
    }
}

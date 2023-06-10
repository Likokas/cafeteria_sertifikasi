<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'booth_id' => 1, //Tuku-tuku
                'menu' => 'Nasi Goreng Tuku-tuku',
                'harga' => 25000,
            ],
            [
                'booth_id' => 1,
                'menu' => 'Mie Goreng Tuku-tuku',
                'harga' => 30000,
            ],
            [
                'booth_id' => 1,
                'menu' => 'Ayam Goreng Kremes',
                'harga' => 37000,
            ],
            [
                'booth_id' => 1,
                'menu' => 'Ayam Goreng Bakar',
                'harga' => 37000,
            ],
            [
                'booth_id' => 1,
                'menu' => 'Teh Tarik',
                'harga' => 7000,
            ],
            [
                'booth_id' => 1,
                'menu' => 'Es teh tawar',
                'harga' => 3000,
            ],
            [
                'booth_id' => 1,
                'menu' => 'Es teh manis',
                'harga' => 5000,
            ],
            [
                'booth_id' => 1,
                'menu' => 'Soda gembira',
                'harga' => 12000,
            ],
            [
                'booth_id' => 2, //Gotri
                'menu' => 'Nasi ayam teriyaki',
                'harga' => 35000,
            ],
            [
                'booth_id' => 2, //Gotri
                'menu' => 'Nasi ayam sayur',
                'harga' => 25000,
            ],
            [
                'booth_id' => 2, //Gotri
                'menu' => 'Nasi ayam krengsengan',
                'harga' => 30000,
            ],
            [
                'booth_id' => 2, //Gotri
                'menu' => 'Nasi ayam sambal hijau',
                'harga' => 40000,
            ],
            [
                'booth_id' => 2, //Gotri
                'menu' => 'Teh melati',
                'harga' => 10000,
            ],
            [
                'booth_id' => 2, //Gotri
                'menu' => 'Teh hijau',
                'harga' => 12000,
            ],
            [
                'booth_id' => 2, //Gotri
                'menu' => 'Es taro',
                'harga' => 17000,
            ],
            [
                'booth_id' => 2, //Gotri
                'menu' => 'Air Putih',
                'harga' => 5000,
            ],
            [
                'booth_id' => 3, //MadamLily
                'menu' => 'Ayam geprek',
                'harga' => 15000,
            ],
            [
                'booth_id' => 3,
                'menu' => 'Nasi ayam geprek',
                'harga' => 20000,
            ],
            [
                'booth_id' => 3,
                'menu' => 'Paket nasi ayam geprek',
                'harga' => 25000,
            ],
            [
                'booth_id' => 3,
                'menu' => 'Sop Buntut',
                'harga' => 40000,
            ],
            [
                'booth_id' => 3, //MadamLily
                'menu' => 'Pop ice',
                'harga' => 5000,
            ],
            [
                'booth_id' => 3, //MadamLily
                'menu' => 'Nutrisari',
                'harga' => 4000,
            ],
            [
                'booth_id' => 3, //MadamLily
                'menu' => 'Susu dancow',
                'harga' => 5000,
            ],
            [
                'booth_id' => 3, //MadamLily
                'menu' => 'Es jeruk',
                'harga' => 8000,
            ],
            [
                'booth_id' => 4, //Kopte
                'menu' => 'Roti kaya toast',
                'harga' => 17000,
            ],
            [
                'booth_id' => 4,
                'menu' => 'Roti coklat toast',
                'harga' => 17000,
            ],
            [
                'booth_id' => 4,
                'menu' => 'Roti keju toast',
                'harga' => 17000,
            ],
            [
                'booth_id' => 4,
                'menu' => 'Roti susu toast',
                'harga' => 17000,
            ],
            [
                'booth_id' => 4, //Kopte
                'menu' => 'Kopte tarik',
                'harga' => 17000,
            ],
            [
                'booth_id' => 4,
                'menu' => 'Coklat tarik',
                'harga' => 17000,
            ],
            [
                'booth_id' => 4,
                'menu' => 'Teh tarik',
                'harga' => 17000,
            ],
            [
                'booth_id' => 4,
                'menu' => 'Kopi tarik',
                'harga' => 17000,
            ],
        ];

        DB::table('menus')->insert($menus);
    }
}

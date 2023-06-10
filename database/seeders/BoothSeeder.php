<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $booths = [
            ['boothName' => 'Tuku-tuku'],
            ['boothName' => 'GOtri'],
            ['boothName' => 'Madam Lily'],
            ['boothName' => 'Kopte'],
        ];

        DB::table('booths')->insert($booths);
    }
}

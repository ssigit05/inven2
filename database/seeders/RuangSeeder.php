<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ruangs')->insert([
            [
                'kode'=>'RTU',
                'nama'=>'Ruang TU',
                'keterangan'=>'Ruangan Tata Usaha'
            ],
            [
                'kode'=>'PERPUS',
                'nama'=>'Ruang PERPUS',
                'keterangan'=>'Ruangan Perpustakaan'
            ],
        ]);
    }
}

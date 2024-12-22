<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenjang')->insert([
            [
                'nama_jenjang'      => 'TK',
            ],
            [
                'nama_jenjang'      => 'SD',
            ],
            [
                'nama_jenjang'      => 'SMP',
            ],
            [
                'nama_jenjang'      => 'SMA/SMK',
            ],
            [
                'nama_jenjang'      => 'S1',
            ],
        ]);
    }
}

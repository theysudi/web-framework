<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusan')->insert([
            [
                'nama_jurusan'      => 'TI-MDI',
            ],
            [
                'nama_jurusan'      => 'TI-PAR',
            ],
            [
                'nama_jurusan'      => 'TI-KAB',
            ],
            [
                'nama_jurusan'      => 'RSK',
            ],
            [
                'nama_jurusan'      => 'DKV',
            ],
            [
                'nama_jurusan'      => 'BD',
            ],
        ]);
    }
}

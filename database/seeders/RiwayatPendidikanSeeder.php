<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('riwayat_pendidikan')->insert([
            [
                'mahasiswa_id'      => 1,
                'jenjang_id'        => 2,
                'nama_sekolah'      => 'SDN 3 Jimbaran',
                'alamat'            => 'Jln. Bantas Kangin Jimbaran',
                'tahun_masuk'       => '2002',
                'tahun_lulus'       => '2007',
            ],
            [
                'mahasiswa_id'      => 1,
                'jenjang_id'        => 3,
                'nama_sekolah'      => 'SMPN 1 Kuta Selatan',
                'alamat'            => 'Jln. Jimbaran',
                'tahun_masuk'       => '2008',
                'tahun_lulus'       => '2010',
            ],
            [
                'mahasiswa_id'      => 1,
                'jenjang_id'        => 4,
                'nama_sekolah'      => 'SMKN 1 Kuta Selatan',
                'alamat'            => 'Nusa Dua',
                'tahun_masuk'       => '2011',
                'tahun_lulus'       => '2013',
            ]
        ]);
    }
}

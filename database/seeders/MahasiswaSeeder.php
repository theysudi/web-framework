<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            [
                'nim'               => '14101206',
                'nama'              => 'I Gede Sudiantara',
                'jenis_kelamin'     => 'LAKI-LAKI',
                'alamat'            => 'Jimbaran',
                'tanggal_lahir'     => '1996-04-01',
                'jurusan_id'        => 1,
                'tahun_angkatan'    => '2014',
            ],
            [
                'nim'               => '13101205',
                'nama'              => 'I Kadek Erik Setiawan',
                'jenis_kelamin'     => 'LAKI-LAKI',
                'alamat'            => 'Nusa Dua',
                'tanggal_lahir'     => '1995-02-27',
                'jurusan_id'        => 4,
                'tahun_angkatan'    => '2013',
            ],
            [
                'nim'               => '14101310',
                'nama'              => 'Made Asih Astiti',
                'jenis_kelamin'     => 'PEREMPUAN',
                'alamat'            => 'Gianyar',
                'tanggal_lahir'     => '1996-05-15',
                'jurusan_id'        => 3,
                'tahun_angkatan'    => '2014',
            ]
        ]);
    }
}

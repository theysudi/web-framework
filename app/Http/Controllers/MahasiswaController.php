<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    private $data = [
        [
            'nim' => '14101205',
            'nama' => 'I Kadek Erik Setiawan',
            'riwayat_pendidikan' => [],
        ],
        [
            'nim' => '14101206',
            'nama' => 'I Gede Sudiantara',
            'riwayat_pendidikan' => [
                [
                    'tahun_angkatan' => '2002',
                    'jenjang' => 'Sekolah Dasar',
                    'sekolah' => 'SD Negeri 3 Jimbaran',
                    'tahun_lulus' => '2008',
                ],
                [
                    'tahun_angkatan' => '2008',
                    'jenjang' => 'Sekolah Menengah Pertama',
                    'sekolah' => 'SMP Negeri 1 Kuta Selatan',
                    'tahun_lulus' => '2011',
                ],
                [
                    'tahun_angkatan' => '2011',
                    'jenjang' => 'Sekolah Menengah Atas',
                    'sekolah' => 'SMK Negeri 1 Kuta Selatan',
                    'tahun_lulus' => '2014',
                ],
            ],
        ],
        [
            'nim' => '14101207',
            'nama' => 'I Putu Noven Hartawan',
            'riwayat_pendidikan' => [],
        ],
    ];

    public function index()
    {
        return view('mahasiswa/index', [
            'data' => $this->data,
        ]);
    }

    public function pendidikan($key)
    {
        return view('mahasiswa/pendidikan', [
            'riwayat_pendidikan' => $this->data[$key]['riwayat_pendidikan'],
        ]);
    }
}

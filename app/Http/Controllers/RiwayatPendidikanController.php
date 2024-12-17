<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class RiwayatPendidikanController extends Controller
{
    private $message = [
        'required'          => 'Input :attribute harus diisi.',
        'unique'            => 'Data :attribute sudah digunakan.',
        'in'                => 'Pilihan :attribute tidak valid.',
        'min'               => 'Input minimal :attribute adalah :min.',
        'max'               => 'Input maksimal :attribute adalah :max.',
    ];

    public function index($mhs_id)
    {
        $data = DB::table('riwayat_pendidikan')
            ->join('mahasiswa', 'mahasiswa.id', '=', 'riwayat_pendidikan.mahasiswa_id')
            ->where('mahasiswa.id', $mhs_id)
            ->get();

        return view('riwayat-pendidikan/index', [
            'data'      => $data,
        ]);
    }
}

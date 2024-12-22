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
            ->select(['mahasiswa.*', 'jenjang.nama_jenjang', 'riwayat_pendidikan.*'])
            ->join('mahasiswa', 'mahasiswa.id', '=', 'riwayat_pendidikan.mahasiswa_id')
            ->join('jenjang', 'jenjang.id', '=', 'riwayat_pendidikan.jenjang_id')
            ->where('mahasiswa.id', $mhs_id)
            ->get();

        return view('riwayat-pendidikan/index', [
            'mhs_id'    => $mhs_id,
            'data'      => $data,
        ]);
    }
    
    public function indexStore($mhs_id)
    {
        $jenjang = DB::table('jenjang')->get();

        return view('riwayat-pendidikan/store', [
            'mhs_id'    => $mhs_id,
            'jenjang'   => $jenjang,
        ]);
    }

    public function store(Request $request, $mhs_id)
    {
        $request->validate([
            'jenjang_id'        => ['required'],
            'nama_sekolah'      => ['required'],
            'alamat'            => ['required'],
            'tahun_masuk'       => ['required', 'integer', 'min:1980', 'max:3000'],
            'tahun_lulus'       => ['required', 'integer', 'min:1980', 'max:3000'],
        ], $this->message);

        $data = [
            'mahasiswa_id'      => $mhs_id,
            'jenjang_id'        => $request->jenjang_id,
            'nama_sekolah'      => $request->nama_sekolah,
            'alamat'            => $request->alamat,
            'tahun_masuk'       => $request->tahun_masuk,
            'tahun_lulus'       => $request->tahun_lulus,
        ];

        $result = DB::table('riwayat_pendidikan')->insert($data);

        if ($result) {
            $msg = ['alert' => 'success', 'msg' => 'Berhasil Tambah Data'];
        } else {
            $msg = ['alert' => 'danger', 'msg' => 'Gagal Tambah Data'];
        }

        return redirect()->to('riwayat-pendidikan/'.$mhs_id)->with('msg', $msg);
    }
}

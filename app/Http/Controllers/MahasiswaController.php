<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = DB::table('mahasiswa')->get();

        return view('mahasiswa/index', [
            'data' => $data,
        ]);
    }
    
    public function indexStore()
    {
        return view('mahasiswa/store');
    }

    public function store(Request $request)
    {
        $data = [
            'nim'               => $request->nim,
            'nama'              => $request->nama,
            'jenis_kelamin'     => $request->jenis_kelamin,
        ];

        $result = DB::table('mahasiswa')->insert($data);

        if ($result) {
            $msg = ['alert' => 'success', 'msg' => 'Berhasil Tambah Data'];
        } else {
            $msg = ['alert' => 'danger', 'msg' => 'Gagal Tambah Data'];
        }

        return redirect()->to('mahasiswa')->with('msg', $msg);
    }
}

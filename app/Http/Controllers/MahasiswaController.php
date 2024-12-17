<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class MahasiswaController extends Controller
{
    private $message = [
        'required'          => 'Input :attribute harus diisi.',
        'unique'            => 'Data :attribute sudah digunakan.',
        'in'                => 'Pilihan :attribute tidak valid.',
        'min'               => 'Input minimal :attribute adalah :min.',
        'max'               => 'Input maksimal :attribute adalah :max.',
    ];

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
        $request->validate([
            'nim'               => ['required', 'unique:mahasiswa,nim'],
            'nama'              => ['required'],
            'jenis_kelamin'     => ['required', Rule::in(['LAKI-LAKI', 'PEREMPUAN'])],
            'tanggal_lahir'     => ['required', 'date'],
            'alamat'            => ['required'],
            'jurusan'           => ['required', Rule::in(['TI-MDI', 'TI-PAR', 'TI-KAB', 'RSK', 'DKV', 'BD'])],
            'tahun_angkatan'    => ['required', 'integer', 'min:2000', 'max:3000'],
        ], $this->message);

        $data = [
            'nim'               => $request->nim,
            'nama'              => $request->nama,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'alamat'            => $request->alamat,
            'jurusan'           => $request->jurusan,
            'tahun_angkatan'    => $request->tahun_angkatan,
        ];

        $result = DB::table('mahasiswa')->insert($data);

        if ($result) {
            $msg = ['alert' => 'success', 'msg' => 'Berhasil Tambah Data'];
        } else {
            $msg = ['alert' => 'danger', 'msg' => 'Gagal Tambah Data'];
        }

        return redirect()->to('mahasiswa')->with('msg', $msg);
    }
    
    public function indexUpdate($id)
    {
        $data = DB::table('mahasiswa')->where('id', $id)->first();
        return view('mahasiswa/update', [
            'data' => $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim'               => ['required', 'unique:mahasiswa,nim'],
            'nama'              => ['required'],
            'jenis_kelamin'     => ['required', Rule::in(['LAKI-LAKI', 'PEREMPUAN'])],
            'tanggal_lahir'     => ['required', 'date'],
            'alamat'            => ['required'],
            'jurusan'           => ['required', Rule::in(['TI-MDI', 'TI-PAR', 'TI-KAB', 'RSK', 'DKV', 'BD'])],
            'tahun_angkatan'    => ['required', 'integer', 'min:2000', 'max:3000'],
        ], $this->message);

        $data = [
            'nim'               => $request->nim,
            'nama'              => $request->nama,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'alamat'            => $request->alamat,
            'jurusan'           => $request->jurusan,
            'tahun_angkatan'    => $request->tahun_angkatan,
        ];

        $result = DB::table('mahasiswa')->where('id', $id)->update($data);

        if ($result) {
            $msg = ['alert' => 'success', 'msg' => 'Berhasil Ubah Data'];
        } else {
            $msg = ['alert' => 'danger', 'msg' => 'Gagal Ubah Data'];
        }

        return redirect()->to('mahasiswa')->with('msg', $msg);
    }

    public function delete($id)
    {
        $result = DB::table('mahasiswa')->where('id', $id)->delete();

        if ($result) {
            $msg = ['alert' => 'success', 'msg' => 'Berhasil Hapus Data'];
        } else {
            $msg = ['alert' => 'danger', 'msg' => 'Gagal Hapus Data'];
        }

        return redirect()->to('mahasiswa')->with('msg', $msg);
    }
}

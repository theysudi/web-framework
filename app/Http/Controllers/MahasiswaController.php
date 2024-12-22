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
        $data = DB::table('mahasiswa')
            ->select(['mahasiswa.*', 'jurusan.nama_jurusan'])
            ->join('jurusan', 'mahasiswa.jurusan_id', '=', 'jurusan.id')
            ->get();

        return view('mahasiswa/index', [
            'data' => $data,
        ]);
    }
    
    public function indexStore()
    {
        $jurusan = DB::table('jurusan')->get();

        return view('mahasiswa/store', [
            'jurusan' => $jurusan,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim'               => ['required', 'unique:mahasiswa,nim'],
            'nama'              => ['required'],
            'jenis_kelamin'     => ['required', Rule::in(['LAKI-LAKI', 'PEREMPUAN'])],
            'tanggal_lahir'     => ['required', 'date'],
            'alamat'            => ['required'],
            'jurusan_id'        => ['required'],
            'tahun_angkatan'    => ['required', 'integer', 'min:2000', 'max:3000'],
        ], $this->message);

        $data = [
            'nim'               => $request->nim,
            'nama'              => $request->nama,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'alamat'            => $request->alamat,
            'jurusan_id'        => $request->jurusan_id,
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
        $jurusan = DB::table('jurusan')->get();

        return view('mahasiswa/update', [
            'data'      => $data,
            'jurusan'   => $jurusan,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim'               => ['required', 'unique:mahasiswa,nim,'.$id],
            'nama'              => ['required'],
            'jenis_kelamin'     => ['required', Rule::in(['LAKI-LAKI', 'PEREMPUAN'])],
            'tanggal_lahir'     => ['required', 'date'],
            'alamat'            => ['required'],
            'jurusan_id'        => ['required'],
            'tahun_angkatan'    => ['required', 'integer', 'min:2000', 'max:3000'],
        ], $this->message);

        $data = [
            'nim'               => $request->nim,
            'nama'              => $request->nama,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'alamat'            => $request->alamat,
            'jurusan_id'        => $request->jurusan_id,
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

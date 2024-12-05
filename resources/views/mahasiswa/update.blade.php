@extends('layout.layout')

@section('title', 'Data Mahasiswa')

@section('content_header')
    <div class="row">
        <div class="col">
            <h1>Ubah Data Mahasiswa</h1>
        </div>
        <div class="col text-end">
            <a href="{{ url('mahasiswa') }}" class="btn btn-sm btn-secondary mt-3">Kembali</a>
        </div>
    </div>
@stop


@section('content')
    <form method="POST" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group mb-3">
                    <label class="fw-bold">NIM</label>
                    <input type="text" name="nim" class="form-control" value="{{ $data->nim }}">
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $data->nama }}">
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="LAKI-LAKI" {{ $data->jenis_kelamin == 'LAKI-LAKI' ? 'selected' : '' }}>LAKI-LAKI</option>
                        <option value="PEREMPUAN" {{ $data->jenis_kelamin == 'PEREMPUAN' ? 'selected' : '' }}>PEREMPUAN</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold">Alamat</label>
                    <textarea name="alamat" rows="4" class="form-control">{{ $data->alamat }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" value="{{ $data->tanggal_lahir }}">
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold">Jurusan</label>
                    <select name="jurusan" class="form-control">
                        <option value="TI-MDI" {{ $data->jurusan == 'TI-MDI' ? 'selected' : '' }}>TI-MDI</option>
                        <option value="TI-PAR" {{ $data->jurusan == 'TI-PAR' ? 'selected' : '' }}>TI-PAR</option>
                        <option value="TI-KAB" {{ $data->jurusan == 'TI-KAB' ? 'selected' : '' }}>TI-KAB</option>
                        <option value="RSK" {{ $data->jurusan == 'RSK' ? 'selected' : '' }}>RSK</option>
                        <option value="DKV" {{ $data->jurusan == 'DKV' ? 'selected' : '' }}>DKV</option>
                        <option value="BD" {{ $data->jurusan == 'BD' ? 'selected' : '' }}>BD</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold">Tahun Angkatan</label>
                    <input type="text" name="tahun_angkatan" class="form-control" value="{{ $data->tahun_angkatan }}">
                </div>
                
                <div class="form-group mb-3 text-end">
                    <button type="submit" class="btn btn-primary col-2">Simpan</button>
                </div>
            </div>
        </div>
    </form>
@stop

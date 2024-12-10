@extends('layout.layout')

@section('title', 'Data Mahasiswa')

@section('content_header')
    <div class="row">
        <div class="col">
            <h1>Tambah Data Mahasiswa</h1>
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
                    <label class="fw-bold {{ $errors->has('nim') ? 'is-invalid' : '' }}">NIM</label>
                    <input type="text" name="nim" class="form-control {{ $errors->has('nim') ? 'is-invalid' : '' }}" value="{{ old('nim') }}">
                    @if ($errors->has('nim'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nim') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                        <option value="PEREMPUAN">PEREMPUAN</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold">Alamat</label>
                    <textarea name="alamat" rows="4" class="form-control"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold">Jurusan</label>
                    <select name="jurusan" class="form-control">
                        <option value="TI-MDI">TI-MDI</option>
                        <option value="TI-PAR">TI-PAR</option>
                        <option value="TI-KAB">TI-KAB</option>
                        <option value="RSK">RSK</option>
                        <option value="DKV">DKV</option>
                        <option value="BD">BD</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold">Tahun Angkatan</label>
                    <input type="text" name="tahun_angkatan" class="form-control">
                </div>

                <div class="form-group mb-3 text-end">
                    <button type="submit" class="btn btn-primary col-2">Simpan</button>
                </div>
            </div>
        </div>
    </form>
@stop

@section('css')
    <style>
        label.is-invalid {
            color: var(--bs-form-invalid-color) !important;
        }
    </style>
@stop

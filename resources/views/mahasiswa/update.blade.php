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
                    <label class="fw-bold {{ $errors->has('nim') ? 'is-invalid' : '' }}">NIM</label>
                    <input type="text" name="nim" class="form-control {{ $errors->has('nim') ? 'is-invalid' : '' }}" value="{{ $data->nim }}">
                    @if ($errors->has('nim'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nim') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold {{ $errors->has('nama') ? 'is-invalid' : '' }}">Nama</label>
                    <input type="text" name="nama" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" value="{{ $data->nama }}">
                    @if ($errors->has('nama'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nama') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}">
                        <option value="LAKI-LAKI" {{ $data->jenis_kelamin == 'LAKI-LAKI' ? 'selected' : '' }}>LAKI-LAKI</option>
                        <option value="PEREMPUAN" {{ $data->jenis_kelamin == 'PEREMPUAN' ? 'selected' : '' }}>PEREMPUAN</option>
                    </select>
                    @if ($errors->has('jenis_kelamin'))
                        <div class="invalid-feedback">
                            {{ $errors->first('jenis_kelamin') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold {{ $errors->has('alamat') ? 'is-invalid' : '' }}">Alamat</label>
                    <textarea name="alamat" rows="4" class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}">{{ $data->alamat }}</textarea>
                    @if ($errors->has('alamat'))
                        <div class="invalid-feedback">
                            {{ $errors->first('alamat') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold {{ $errors->has('tanggal_lahir') ? 'is-invalid' : '' }}">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control {{ $errors->has('tanggal_lahir') ? 'is-invalid' : '' }}" value="{{ $data->tanggal_lahir }}">
                    @if ($errors->has('tanggal_lahir'))
                        <div class="invalid-feedback">
                            {{ $errors->first('tanggal_lahir') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold {{ $errors->has('jurusan') ? 'is-invalid' : '' }}">Jurusan</label>
                    <select name="jurusan" class="form-control {{ $errors->has('jurusan') ? 'is-invalid' : '' }}">
                        <option value="TI-MDI" {{ $data->jurusan == 'TI-MDI' ? 'selected' : '' }}>TI-MDI</option>
                        <option value="TI-PAR" {{ $data->jurusan == 'TI-PAR' ? 'selected' : '' }}>TI-PAR</option>
                        <option value="TI-KAB" {{ $data->jurusan == 'TI-KAB' ? 'selected' : '' }}>TI-KAB</option>
                        <option value="RSK" {{ $data->jurusan == 'RSK' ? 'selected' : '' }}>RSK</option>
                        <option value="DKV" {{ $data->jurusan == 'DKV' ? 'selected' : '' }}>DKV</option>
                        <option value="BD" {{ $data->jurusan == 'BD' ? 'selected' : '' }}>BD</option>
                    </select>
                    @if ($errors->has('jurusan'))
                        <div class="invalid-feedback">
                            {{ $errors->first('jurusan') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold {{ $errors->has('tahun_angkatan') ? 'is-invalid' : '' }}">Tahun Angkatan</label>
                    <input type="text" name="tahun_angkatan" class="form-control {{ $errors->has('tahun_angkatan') ? 'is-invalid' : '' }}" value="{{ $data->tahun_angkatan }}">
                    @if ($errors->has('tahun_angkatan'))
                        <div class="invalid-feedback">
                            {{ $errors->first('tahun_angkatan') }}
                        </div>
                    @endif
                </div>
                
                <div class="form-group mb-3 text-end">
                    <button type="submit" class="btn btn-primary col-2">Simpan</button>
                </div>
            </div>
        </div>
    </form>
@stop

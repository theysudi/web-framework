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
                    <label class="fw-bold {{ $errors->has('nama') ? 'is-invalid' : '' }}">Nama</label>
                    <input type="text" name="nama" class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" value="{{ old('nama') }}">
                    @if ($errors->has('nama'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nama') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : '' }}">
                        <option {{ old('jenis_kelamin') == 'LAKI-LAKI' ? 'selected' : '' }} value="LAKI-LAKI">LAKI-LAKI</option>
                        <option {{ old('jenis_kelamin') == 'PEREMPUAN' ? 'selected' : '' }} value="PEREMPUAN">PEREMPUAN</option>
                    </select>
                    @if ($errors->has('jenis_kelamin'))
                        <div class="invalid-feedback">
                            {{ $errors->first('jenis_kelamin') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold {{ $errors->has('alamat') ? 'is-invalid' : '' }}">Alamat</label>
                    <textarea name="alamat" rows="4" class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}">{{ old('alamat') }}</textarea>
                    @if ($errors->has('alamat'))
                        <div class="invalid-feedback">
                            {{ $errors->first('alamat') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold {{ $errors->has('tanggal_lahir') ? 'is-invalid' : '' }}">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control {{ $errors->has('tanggal_lahir') ? 'is-invalid' : '' }}" value="{{ old('tanggal_lahir') }}">
                    @if ($errors->has('tanggal_lahir'))
                        <div class="invalid-feedback">
                            {{ $errors->first('tanggal_lahir') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold {{ $errors->has('jurusan_id') ? 'is-invalid' : '' }}">Jurusan</label>
                    <select name="jurusan_id" class="form-control {{ $errors->has('jurusan_id') ? 'is-invalid' : '' }}">
                        @foreach ($jurusan as $item)
                            <option {{ old('jurusan_id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->nama_jurusan }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('jurusan_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('jurusan_id') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold {{ $errors->has('tahun_angkatan') ? 'is-invalid' : '' }}">Tahun Angkatan</label>
                    <input type="text" name="tahun_angkatan" class="form-control {{ $errors->has('tahun_angkatan') ? 'is-invalid' : '' }}" value="{{ old('tahun_angkatan') }}">
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

@section('css')
    <style>
        label.is-invalid {
            color: var(--bs-form-invalid-color) !important;
        }
    </style>
@stop

@extends('layout.layout')

@section('title', 'Data Riwayat Pendidikan')

@section('content_header')
    <div class="row">
        <div class="col">
            <h1>Ubah Data Riwayat Pendidikan</h1>
        </div>
        <div class="col text-end">
            <a href="{{ url('riwayat_pendidikan/'.$mhs_id) }}" class="btn btn-sm btn-secondary mt-3">Kembali</a>
        </div>
    </div>
@stop

@section('content')
    <form method="POST" autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group mb-3">
                    <label class="fw-bold {{ $errors->has('jenjang_id') ? 'is-invalid' : '' }}">Jenjang</label>
                    <select name="jenjang_id" class="form-control {{ $errors->has('jenjang_id') ? 'is-invalid' : '' }}">
                        @foreach ($jenjang as $item)
                            <option {{ old('jenjang_id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->nama_jenjang }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('jenjang_id'))
                        <div class="invalid-feedback">
                            {{ $errors->first('jenjang_id') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold {{ $errors->has('nama_sekolah') ? 'is-invalid' : '' }}">Nama Sekolah</label>
                    <input type="text" name="nama_sekolah" class="form-control {{ $errors->has('nama_sekolah') ? 'is-invalid' : '' }}" value="{{ old('nama_sekolah') }}">
                    @if ($errors->has('nama_sekolah'))
                        <div class="invalid-feedback">
                            {{ $errors->first('nama_sekolah') }}
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
                    <label class="fw-bold {{ $errors->has('tahun_masuk') ? 'is-invalid' : '' }}">Tahun Masuk</label>
                    <input type="text" name="tahun_masuk" class="form-control {{ $errors->has('tahun_masuk') ? 'is-invalid' : '' }}" value="{{ old('tahun_masuk') }}">
                    @if ($errors->has('tahun_masuk'))
                        <div class="invalid-feedback">
                            {{ $errors->first('tahun_masuk') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <label class="fw-bold {{ $errors->has('tahun_lulus') ? 'is-invalid' : '' }}">Tahun Lulus</label>
                    <input type="text" name="tahun_lulus" class="form-control {{ $errors->has('tahun_lulus') ? 'is-invalid' : '' }}" value="{{ old('tahun_lulus') }}">
                    @if ($errors->has('tahun_lulus'))
                        <div class="invalid-feedback">
                            {{ $errors->first('tahun_lulus') }}
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

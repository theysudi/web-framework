@extends('layout.layout')

@section('title', 'Data Riwayat Pendidikan')

@section('content_header')
    <div class="row">
        <div class="col">
            <h1>Data Riwayat Pendidikan</h1>
        </div>
        <div class="col text-end">
            <a href="{{ url('mahasiswa/store') }}" class="btn btn-sm btn-primary mt-3">Tambah</a>
        </div>
    </div>
@stop

@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-dismissible alert-{{ Session::get('msg')['alert'] }}" role="alert">
            {{ Session::get('msg')['msg'] }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenjang</th>
                <th>Nama Sekolah</th>
                <th>Tahun</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $val)
                <tr>
                    <td>{{ $val->nim }}</td>
                    <td>{{ $val->nama }}</td>
                    <td>{{ $val->jenjang }}</td>
                    <td>{{ $val->nama_sekolah }}</td>
                    <td>{{ $val->tahun_masuk }}</td>
                    <td class="text-center">
                        <a href="{{ url('mahasiswa/update/'. $val->id) }}" class="btn btn-sm btn-warning">Ubah</a>
                        <a href="{{ url('mahasiswa/delete/'. $val->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
@extends('layout.layout')

@section('title', 'Data Mahasiswa')

@section('content_header')
    <div class="row">
        <div class="col">
            <h1>Data Mahasiswa</h1>
        </div>
        <div class="col">
        </div>
    </div>
@stop

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $val)
                <tr>
                    <td>{{ ($key + 1) }}.</td>
                    <td>{{ $val['nim'] }}</td>
                    <td>{{ $val['nama'] }}</td>
                    <td class="text-center">
                        <a href="{{ url('mahasiswa/pendidikan/'. $key) }}" class="btn btn-sm btn-info">Riwayat Pendidikan</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
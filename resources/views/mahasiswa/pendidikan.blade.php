@extends('layout.layout')

@section('title', 'Data Mahasiswa')

@section('content_header')
    <div class="row">
        <div class="col">
            <h1>Data Mahasiswa - Riwayat Pendidikan</h1>
        </div>
        <div class="col">
            <a href="{{ url('mahasiswa') }}" class="btn btn-sm btn-danger float-right mt-3">Kembali</a>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tahun Angkatan</th>
                        <th>Jenjang</th>
                        <th>Nama Sekolah</th>
                        <th>Tahun Lulus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($riwayat_pendidikan as $key => $val)
                        <tr>
                            <td>{{ ($key + 1) }}.</td>
                            <td>{{ $val['tahun_angkatan'] }}</td>
                            <td>{{ $val['jenjang'] }}</td>
                            <td>{{ $val['sekolah'] }}</td>
                            <td>{{ $val['tahun_lulus'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
@extends('layout.layout')

@section('title', 'Hasil Perhitungan')

@section('content_header')
    <div class="row">
        <div class="col">
            <h1>Result</h1>
        </div>
        <div class="col">
            <a href="{{ url('hitung') }}" class="btn btn-sm btn-danger float-right mt-3">Kembali</a>
        </div>
    </div>
@stop

@section('content')
    <h2>Hasil Perhitungan <b>{{ $fungsi }}</b> adalah <span class="badge badge-primary">{{ $hasil }}</span></h2>
@stop
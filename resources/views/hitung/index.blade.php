@extends('layout.layout')

@section('title', 'Kalkulator')

@section('content_header')
    <div class="row">
        <div class="col">
            <h1>Kalkulator</h1>
        </div>
        <div class="col">
        </div>
    </div>
@stop

@section('content')
    <div class="card">
        <form action="{{ url('hitung/luas-persegi-panjang') }}" method="POST">
            @method('POST')
            @csrf
            <div class="card-header">
                Luas Persegi Panjang
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label>Panjang</label>
                            <input type="number" class="form-control" name="panjang">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label>Lebar</label>
                            <input type="number" class="form-control" name="lebar">
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="form-group">
                            <label>&nbsp;</label>
                            <button type="submit" class="btn btn-primary btn-block">Hitung</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop

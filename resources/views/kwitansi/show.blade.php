@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Detail Kwitansi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kwitansi.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Kwitansi:</strong>
                {{ $kwitansi->id_kwitansi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Transaksi:</strong>
                {{ $kwitansi->tgl_transaksi }}
            </div>
        </div>
    </div>
</div>
@endsection

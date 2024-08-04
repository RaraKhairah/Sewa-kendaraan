@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail Sewa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sewa.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Sewa:</strong>
                {{ $sewa->id_sewa }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Polisi:</strong>
                {{ $sewa->no_pol }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Sewa:</strong>
                {{ $sewa->tgl_sewa }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Selesai:</strong>
                {{ $sewa->tgl_selesai }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telepon Tujuan:</strong>
                {{ $sewa->tlp_tujuan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Tujuan:</strong>
                {{ $sewa->alamat_tujuan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Biaya Sewa:</strong>
                {{ $sewa->biaya_sewa }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kota:</strong>
                {{ $sewa->kota }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Penyewa:</strong>
                {{ $sewa->penyewa->nama_penyewa }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Penumpang:</strong>
                {{ $sewa->jumlah_penumpang }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID Kwitansi:</strong>
                {{ $sewa->id_kwitansi }}
            </div>
        </div>
    </div>
</div>
@endsection

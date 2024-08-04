@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Edit Kwitansi</h2>
            <a class="btn btn-primary" href="{{ route('kwitansi.index') }}">Kembali</a>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Edit Kwitansi</h5>

                    <!-- Vertical Form -->
                    <form action="{{ route('kwitansi.update', $kwitansi->id_kwitansi) }}" method="POST" class="row g-3">
                        @csrf
                        @method('PUT')
                        <div class="col-12">
                            <label for="tgl_transaksi" class="form-label"><strong>Tanggal Transaksi:</strong></label>
                            <input type="date" name="tgl_transaksi" value="{{ $kwitansi->tgl_transaksi }}" class="form-control" id="tgl_transaksi" placeholder="Tanggal Transaksi">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                    <!-- Vertical Form -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

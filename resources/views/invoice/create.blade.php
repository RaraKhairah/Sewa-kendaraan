@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Tambah Invoice</h2>
            <a class="btn btn-primary" href="{{ route('invoice.index') }}">Kembali</a>
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
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Tambah Invoice</h5>

                    <!-- Vertical Form -->
                    <form action="{{ route('invoice.store') }}" method="POST" class="row g-3">
                        @csrf

                        <div class="col-12">
                            <label for="id_kwitansi" class="form-label"><strong>ID Kwitansi:</strong></label>
                            <select name="id_kwitansi" class="form-control" id="id_kwitansi">
                                <option value="">Pilih ID Kwitansi</option>
                                @foreach ($kwitansis as $kwitansi)
                                    <option value="{{ $kwitansi->id_kwitansi }}">{{ $kwitansi->id_kwitansi }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="id_penyewa" class="form-label"><strong>Nama Penyewa:</strong></label>
                            <select name="id_penyewa" class="form-control" id="id_penyewa">
                                <option value="">Pilih Nama Penyewa</option>
                                @foreach ($penyewas as $penyewa)
                                    <option value="{{ $penyewa->id_penyewa }}">{{ $penyewa->nama_penyewa }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="no_pol" class="form-label"><strong>No Polisi:</strong></label>
                            <select name="no_pol" class="form-control" id="no_pol">
                                <option value="">Pilih No Polisi</option>
                                @foreach ($kendaraans as $kendaraan)
                                    <option value="{{ $kendaraan->no_pol }}">{{ $kendaraan->no_pol }}</option>
                                @endforeach
                            </select>
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

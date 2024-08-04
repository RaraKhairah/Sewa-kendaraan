@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Edit Kendaraan</h2>
            <a class="btn btn-primary" href="{{ route('kendaraan.index') }}">Kembali</a>
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
                    <h5 class="card-title">Form Edit Kendaraan</h5>

                    <!-- Vertical Form -->
                    <form action="{{ route('kendaraan.update', $kendaraan->no_pol) }}" method="POST" class="row g-3">
                        @csrf
                        @method('PUT')

                        <div class="col-12">
                            <label for="no_pol" class="form-label"><strong>No Polisi:</strong></label>
                            <input type="text" name="no_pol" value="{{ $kendaraan->no_pol }}" class="form-control" id="no_pol" placeholder="No Polisi">
                        </div>
                        <div class="col-12">
                            <label for="no_mesin" class="form-label"><strong>No Mesin:</strong></label>
                            <input type="text" name="no_mesin" value="{{ $kendaraan->no_mesin }}" class="form-control" id="no_mesin" placeholder="No Mesin">
                        </div>
                        <div class="col-12">
                            <label for="jenis_mobil" class="form-label"><strong>Jenis Mobil:</strong></label>
                            <select name="jenis_mobil" class="form-control" id="jenis_mobil">
                                <option value="mpv" {{ $kendaraan->jenis_mobil == 'mpv' ? 'selected' : '' }}>MPV</option>
                                <option value="city" {{ $kendaraan->jenis_mobil == 'city' ? 'selected' : '' }}>City</option>
                                <option value="suv" {{ $kendaraan->jenis_mobil == 'suv' ? 'selected' : '' }}>SUV</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="nama_mobil" class="form-label"><strong>Nama Mobil:</strong></label>
                            <input type="text" name="nama_mobil" value="{{ $kendaraan->nama_mobil }}" class="form-control" id="nama_mobil" placeholder="Nama Mobil">
                        </div>
                        <div class="col-12">
                            <label for="merek" class="form-label"><strong>Merek:</strong></label>
                            <select name="merek" class="form-control" id="merek">
                                <option value="honda" {{ $kendaraan->merek == 'honda' ? 'selected' : '' }}>Honda</option>
                                <option value="toyota" {{ $kendaraan->merek == 'toyota' ? 'selected' : '' }}>Toyota</option>
                                <option value="daihatsu" {{ $kendaraan->merek == 'daihatsu' ? 'selected' : '' }}>Daihatsu</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="kapasitas" class="form-label"><strong>Kapasitas:</strong></label>
                            <input type="text" name="kapasitas" value="{{ $kendaraan->kapasitas }}" class="form-control" id="kapasitas" placeholder="Kapasitas">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    <!-- Vertical Form -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

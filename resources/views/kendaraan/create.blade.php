@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Tambah Kendaraan</h2>
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
                    <h5 class="card-title">Form Tambah Kendaraan</h5>

                    <!-- Vertical Form -->
                    <form action="{{ route('kendaraan.store') }}" method="POST" class="row g-3">
                        @csrf

                        <div class="col-12">
                            <label for="no_pol" class="form-label"><strong>No Polisi:</strong></label>
                            <input type="text" name="no_pol" class="form-control" id="no_pol" placeholder="No Polisi">
                        </div>
                        <div class="col-12">
                            <label for="no_mesin" class="form-label"><strong>No Mesin:</strong></label>
                            <input type="text" name="no_mesin" class="form-control" id="no_mesin" placeholder="No Mesin">
                        </div>
                        <div class="col-12">
                            <label for="jenis_mobil" class="form-label"><strong>Jenis Mobil:</strong></label>
                            <select name="jenis_mobil" class="form-control" id="jenis_mobil">
                                <option value="mpv">MPV</option>
                                <option value="city">City</option>
                                <option value="suv">SUV</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="nama_mobil" class="form-label"><strong>Nama Mobil:</strong></label>
                            <input type="text" name="nama_mobil" class="form-control" id="nama_mobil" placeholder="Nama Mobil">
                        </div>
                        <div class="col-12">
                            <label for="merek" class="form-label"><strong>Merek:</strong></label>
                            <select name="merek" class="form-control" id="merek">
                                <option value="honda">Honda</option>
                                <option value="toyota">Toyota</option>
                                <option value="daihatsu">Daihatsu</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="kapasitas" class="form-label"><strong>Kapasitas:</strong></label>
                            <input type="text" name="kapasitas" class="form-control" id="kapasitas" placeholder="Kapasitas">
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

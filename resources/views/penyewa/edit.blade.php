@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-lg-12 d-flex justify-content-between align-items-center">
            <h2>Edit Penyewa</h2>
            <a class="btn btn-primary" href="{{ route('penyewa.index') }}">Kembali</a>
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
                    <h5 class="card-title">Form Edit Penyewa</h5>

                    <!-- Vertical Form -->
                    <form action="{{ route('penyewa.update', $penyewa->id_penyewa) }}" method="POST" class="row g-3">
                        @csrf
                        @method('PUT')

                        <div class="col-12">
                            <label for="nama_penyewa" class="form-label"><strong>Nama Penyewa:</strong></label>
                            <input type="text" name="nama_penyewa" value="{{ $penyewa->nama_penyewa }}" class="form-control" id="nama_penyewa" placeholder="Nama Penyewa">
                        </div>
                        <div class="col-12">
                            <label for="alamat" class="form-label"><strong>Alamat:</strong></label>
                            <textarea class="form-control" id="alamat" name="alamat" style="height:150px" placeholder="Alamat">{{ $penyewa->alamat }}</textarea>
                        </div>
                        <div class="col-12">
                            <label for="no_hp" class="form-label"><strong>No HP:</strong></label>
                            <input type="text" name="no_hp" value="{{ $penyewa->no_hp }}" class="form-control" id="no_hp" placeholder="No HP">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <!-- Vertical Form -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

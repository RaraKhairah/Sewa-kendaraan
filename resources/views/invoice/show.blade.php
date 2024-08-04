@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail Invoice</h2>
                <a class="btn btn-primary" href="{{ route('invoice.index') }}">Kembali</a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <strong>ID Kwitansi:</strong>
                        {{ $invoice->id_kwitansi }}
                    </div>
                    <div class="form-group">
                        <strong>Nama Penyewa:</strong>
                        {{ $invoice->penyewa->nama_penyewa }}
                    </div>
                    <div class="form-group">
                        <strong>No Polisi:</strong>
                        {{ $invoice->no_pol }}
                    </div>
                    <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Dibuat Pada:</strong>
                                {{ $invoice->created_at->format('d M Y H:i:s') }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Diperbarui Pada:</strong>
                                {{ $invoice->updated_at->format('d M Y H:i:s') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

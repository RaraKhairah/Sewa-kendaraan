@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Daftar Kwitansi</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success rounded-circle" href="{{ route('kwitansi.create') }}" style="color: #ffffff; background-color: #28a745;">
                        <i class="bi bi-plus-lg"></i>
                    </a>
                </div>
            </div>
        </div>

        <br>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Data Kwitansi</h5>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Kwitansi</th>
                            <th>Tanggal Transaksi</th>
                            <th width="280px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kwitansis as $kwitansi)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $kwitansi->id_kwitansi }}</td>
                            <td>{{ $kwitansi->tgl_transaksi }}</td>
                            <td>
                                <form action="{{ route('kwitansi.destroy', $kwitansi->id_kwitansi) }}" method="POST">
                                    <a class="btn btn-primary rounded-circle" href="{{ route('kwitansi.edit', $kwitansi->id_kwitansi) }}" style="color: #ffffff; background-color: #6776f4;">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger rounded-circle" style="color: #ffffff; background-color: #dc3545;">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->
            </div>
        </div>

    </div>
</section>
@endsection

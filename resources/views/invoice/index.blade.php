@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Daftar Invoice</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success rounded-circle" href="{{ route('invoice.create') }}" style="color: #ffffff; background-color: #28a745;">
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
                <h5 class="card-title">Data Invoice</h5>

                <!-- Table with stripped rows -->
                <table class="table datatable table-responsive">
                    <thead>
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th style="width: 25%;">ID Kwitansi</th>
                            <th style="width: 25%;">Nama Penyewa</th>
                            <th style="width: 25%;">No Polisi</th>
                            <th style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoices as $invoice)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $invoice->id_kwitansi }}</td>
                            <td>{{ $invoice->penyewa->nama_penyewa }}</td>
                            <td>{{ $invoice->no_pol }}</td>
                            <td>
                                <form action="{{ route('invoice.destroy', $invoice->id) }}" method="POST">
                                    <a class="btn btn-info rounded-circle" href="{{ route('invoice.show', $invoice->id) }}" style="color: #ffffff; background-color: #17a2b8;">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a class="btn btn-primary rounded-circle" href="{{ route('invoice.edit', $invoice->id) }}" style="color: #ffffff; background-color: #6776f4;">
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

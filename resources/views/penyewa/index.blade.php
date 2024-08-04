@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Daftar Penyewa</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success rounded-circle" href="{{ route('penyewa.create') }}" style="color: #ffffff; background-color: #28a745;">
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
                <h5 class="card-title">Data Penyewa</h5>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Penyewa</th>
                            <th>Nama Penyewa</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th width="280px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penyewas as $penyewa)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $penyewa->id_penyewa }}</td>
                            <td>{{ $penyewa->nama_penyewa }}</td>
                            <td>{{ $penyewa->alamat }}</td>
                            <td>{{ $penyewa->no_hp }}</td>
                            <td>
                                <form action="{{ route('penyewa.destroy', $penyewa->id_penyewa) }}" method="POST">
                                    <a class="btn btn-primary rounded-circle" href="{{ route('penyewa.edit', $penyewa->id_penyewa) }}" style="color: #ffffff; background-color: #6776f4;">
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

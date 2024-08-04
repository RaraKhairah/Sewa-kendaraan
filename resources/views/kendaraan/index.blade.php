@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Daftar Kendaraan</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success rounded-circle" href="{{ route('kendaraan.create') }}" style="color: #ffffff; background-color: #28a745;">
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
                <h5 class="card-title">Data Kendaraan</h5>

                <!-- Table with stripped rows -->
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Polisi</th>
                            <th>No Mesin</th>
                            <th>Jenis Mobil</th>
                            <th>Nama Mobil</th>
                            <th>Merek</th>
                            <th>Kapasitas</th>
                            <th width="280px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kendaraans as $kendaraan)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $kendaraan->no_pol }}</td>
                            <td>{{ $kendaraan->no_mesin }}</td>
                            <td>{{ $kendaraan->jenis_mobil }}</td>
                            <td>{{ $kendaraan->nama_mobil }}</td>
                            <td>{{ $kendaraan->merek }}</td>
                            <td>{{ $kendaraan->kapasitas }}</td>
                            <td>
                                <form action="{{ route('kendaraan.destroy', $kendaraan->no_pol) }}" method="POST">
                                    <a class="btn btn-primary rounded-circle" href="{{ route('kendaraan.edit', $kendaraan->no_pol) }}" style="color: #ffffff; background-color: #6776f4;">
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

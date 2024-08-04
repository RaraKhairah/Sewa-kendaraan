@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Daftar Sewa</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success rounded-circle" href="{{ route('sewa.create') }}" style="color: #ffffff; background-color: #28a745;">
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
                <h5 class="card-title">Data Sewa</h5>

                <!-- Table with stripped rows -->
                <table class="table datatable table-responsive">
                    <thead>
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th style="width: 10%;">ID Sewa</th>
                            <th style="width: 10%;">No Polisi</th>
                            <th style="width: 10%;">Tanggal Sewa</th>
                            <th style="width: 10%;">Tanggal Selesai</th>
                            <th style="width: 10%;">Telepon Tujuan</th>
                            <th style="width: 10%;">Alamat Tujuan</th>
                            <th style="width: 10%;">Biaya Sewa</th>
                            <th style="width: 10%;">Kota</th>
                            <th style="width: 10%;">Nama Penyewa</th>
                            <th style="width: 10%;">Jumlah Penumpang</th>
                            <th style="width: 10%;">ID Kwitansi</th>
                            <th style="width: 15%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sewas as $sewa)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $sewa->id_sewa }}</td>
                            <td>{{ $sewa->no_pol }}</td>
                            <td>{{ $sewa->tgl_sewa }}</td>
                            <td>{{ $sewa->tgl_selesai }}</td>
                            <td>{{ $sewa->tlp_tujuan }}</td>
                            <td>{{ $sewa->alamat_tujuan }}</td>
                            <td>{{ $sewa->biaya_sewa }}</td>
                            <td>{{ $sewa->kota }}</td>
                            <td>{{ $sewa->penyewa->nama_penyewa }}</td>
                            <td>{{ $sewa->jumlah_penumpang }}</td>
                            <td>{{ $sewa->id_kwitansi }}</td>
                            <td>
                                <form action="{{ route('sewa.destroy', $sewa->id_sewa) }}" method="POST" style="display: inline-block;">
                                    <a class="btn btn-primary rounded-circle" href="{{ route('sewa.edit', $sewa->id_sewa) }}" style="color: #ffffff; background-color: #6776f4;">
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Kendaraan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                    <a href="{{route('kendaraan.create')}}" class="btn btn-md btn-info mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No Polisi</th>
                                    <th scope="col">No Mesin</th>
                                    <th scope="col">Jenis Mobil</th>
                                    <th scope="col">Nama mobil</th>
                                    <th scope="col">Merek</th>
                                    <th scope="col">Kapasitas</th>
                                    <th scope="col">Tarif</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                               @forelse ($kendaraan as $key => $kendaraan)
                                    <tr>
                                        <td>{{ $kendaraan->no_pol }}</td>
                                        <td>{{ $kendaraan->no_mesin }}</td>
                                        <td>{{ $kendaraan->jenis_mobil }}</td>
                                        <td>{{ $kendaraan->nama_mobil }}</td>
                                        <td>{{ $kendaraan->merk }}</td>
                                        <td>{{ $kendaraan->kapasitas }}</td>
                                        <td>{{ $kendaraan->tarif }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kendaraan.destroy', $kendaraan->no_pol) }}" method="POST">
                                                <a href="{{ route('kendaraan.show', $kendaraan->no_pol) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('kendaraan.edit', $kendaraan->no_pol) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <div class="alert alert-danger">
                                        Data User Belum Ada.
                                    </div>
                                @endforelse

                                
                            </tbody>
                            
                        </table>
                        <!-- {{-- {{ $kendaraan->links() }} --}} -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
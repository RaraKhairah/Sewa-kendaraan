<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kwitansi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Edit Data Kendaraan</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kendaraan.update', $kendaraan->no_pol) }}" method="POST" >
                          @csrf
                          @method('PUT')
                          <div class="form-group">
                            <label for="exampleInputEmail1">No Mesin</label>
                            <input type="number" name="no_mesin" class="form-control" value="{{$kendaraan->no_mesin}}" id="exampleInputEmail1" aria-describedby="emailHelp" >
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            @error('no_mesin')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                          </div>
                          
                          <div class="form-group">
                              <label for="exampleFormControlSelect1">JENIS</label>
                              <select class="form-control" name="jenis_mobil"  id="exampleFormControlSelect1">
                                <option value="{{ old('level', $kendaraan->jenis_mobil) }}"> {{ old('level', $kendaraan->jenis_mobil) }} </option>
                                <option value="mpv">mpv</option>
                                <option value="city">city</option>
                                <option value="suv">suv</option>
                               </select>
                               @error('level')
                               <div class="alert alert-danger mt-2">
                                   {{ $message }}
                               </div>
                               @enderror
                            </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail">Nama Mobil</label>
                        <input type="text" value="{{$kendaraan->nama_mobil}}" name="nama_mobil" class="form-control" id="exampleInputEmail" >
                        @error('nama_mobil')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <label for="exampleFormControlSelect1">MERK</label>
                      <select class="form-control" name="merk" id="exampleFormControlSelect1">
                        <option value="{{ old('level', $kendaraan->merk) }}"> {{ old('level', $kendaraan->merk) }} </option>
                        <option value="honda">honda</option>
                        <option value="toyota">toyota</option>
                        <option value="daihatsu">daihatsu</option>
                       </select>
                       @error('level')
                       <div class="alert alert-danger mt-2">
                           {{ $message }}
                       </div>
                       @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail">Kapasitas</label>
                      <input type="text" name="kapasitas" class="form-control" value="{{$kendaraan->kapasitas}}" id="exampleInputEmail" >
                      @error('kapasitas')
                      <div class="alert alert-danger mt-2">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail">Tarif</label>
                        <input type="number" name="tarif" class="form-control"  value="{{$kendaraan->tarif}}"id="exampleInputEmail" >
                        @error('tarif')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                  </form>
            </div>
        </div>
    </div>
</body>
</html>

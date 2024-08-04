<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\Kendaraan;
use App\Models\Penyewa;
use App\Models\Kwitansi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SewaController extends Controller
{
    public function index()
    {
        $sewas = Sewa::all();
        return view('sewa.index', compact('sewas'));
    }

    public function create()
    {
        $kendaraans = Kendaraan::all();
        $penyewas = Penyewa::all();
        $kwitansis = Kwitansi::all();

        return view('sewa.create', compact('kendaraans', 'penyewas', 'kwitansis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_pol' => 'required',
            'tgl_sewa' => 'required|date',
            'tgl_selesai' => 'required|date',
            'tlp_tujuan' => 'required|max:15',
            'alamat_tujuan' => 'required',
            'biaya_sewa' => 'required|integer',
            'kota' => 'required|max:50',
            'id_penyewa' => 'required|integer',
            'jumlah_penumpang' => 'required|integer',
            'id_kwitansi' => 'required|integer',
        ]);

        Sewa::create($request->all());

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Sewa berhasil ditambahkan');

        return redirect()->route('sewa.index');
    }

    public function show(Sewa $sewa)
    {
        return view('sewa.show', compact('sewa'));
    }

    public function edit(Sewa $sewa)
    {
        $kendaraans = Kendaraan::all();
        $penyewas = Penyewa::all();
        $kwitansis = Kwitansi::all();

        return view('sewa.edit', compact('sewa', 'kendaraans', 'penyewas', 'kwitansis'));
    }

    public function update(Request $request, Sewa $sewa)
    {
        $request->validate([
            'no_pol' => 'required',
            'tgl_sewa' => 'required|date',
            'tgl_selesai' => 'required|date',
            'tlp_tujuan' => 'required|max:15',
            'alamat_tujuan' => 'required',
            'biaya_sewa' => 'required|integer',
            'kota' => 'required|max:50',
            'id_penyewa' => 'required|integer',
            'jumlah_penumpang' => 'required|integer',
            'id_kwitansi' => 'required|integer',
        ]);

        $sewa->update($request->all());

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Sewa berhasil diupdate');

        return redirect()->route('sewa.index');
    }

    public function destroy(Sewa $sewa)
    {
        $sewa->delete();

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Sewa berhasil dihapus');

        return redirect()->route('sewa.index');
    }
}

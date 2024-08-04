<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_pol' => 'required|max:10',
            'no_mesin' => 'required|max:20',
            'jenis_mobil' => 'required',
            'nama_mobil' => 'required|max:40',
            'merek' => 'required',
            'kapasitas' => 'required|max:5',
        ]);

        Kendaraan::create($request->all());

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Kendaraan berhasil ditambahkan');

        return redirect()->route('kendaraan.index');
    }

    public function show(Kendaraan $kendaraan)
    {
        return view('kendaraan.show', compact('kendaraan'));
    }

    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, Kendaraan $kendaraan)
    {
        $request->validate([
            'no_pol' => 'required|max:10',
            'no_mesin' => 'required|max:20',
            'jenis_mobil' => 'required',
            'nama_mobil' => 'required|max:40',
            'merek' => 'required',
            'kapasitas' => 'required|max:5',
        ]);

        $kendaraan->update($request->all());

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Kendaraan berhasil diupdate');

        return redirect()->route('kendaraan.index');
    }

    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Kendaraan berhasil dihapus');

        return redirect()->route('kendaraan.index');
    }
}

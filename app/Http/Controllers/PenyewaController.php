<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PenyewaController extends Controller
{
    public function index()
    {
        $penyewas = Penyewa::all();
        return view('penyewa.index', compact('penyewas'));
    }

    public function create()
    {
        return view('penyewa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penyewa' => 'required|max:100',
            'alamat' => 'required',
            'no_hp' => 'required|max:15',
        ]);

        Penyewa::create($request->all());

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Penyewa berhasil ditambahkan');

        return redirect()->route('penyewa.index');
    }

    public function show(Penyewa $penyewa)
    {
        return view('penyewa.show', compact('penyewa'));
    }

    public function edit(Penyewa $penyewa)
    {
        return view('penyewa.edit', compact('penyewa'));
    }

    public function update(Request $request, Penyewa $penyewa)
    {
        $request->validate([
            'nama_penyewa' => 'required|max:100',
            'alamat' => 'required',
            'no_hp' => 'required|max:15',
        ]);

        $penyewa->update($request->all());

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Penyewa berhasil diupdate');

        return redirect()->route('penyewa.index');
    }

    public function destroy(Penyewa $penyewa)
    {
        $penyewa->delete();

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Penyewa berhasil dihapus');

        return redirect()->route('penyewa.index');
    }
}

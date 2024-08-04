<?php

namespace App\Http\Controllers;

use App\Models\Kwitansi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KwitansiController extends Controller
{
    public function index()
    {
        $kwitansis = Kwitansi::all();
        return view('kwitansi.index', compact('kwitansis'));
    }

    public function create()
    {
        return view('kwitansi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl_transaksi' => 'required|date',
        ]);

        Kwitansi::create($request->all());

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Kwitansi berhasil ditambahkan');

        return redirect()->route('kwitansi.index');
    }

    public function show(Kwitansi $kwitansi)
    {
        return view('kwitansi.show', compact('kwitansi'));
    }

    public function edit(Kwitansi $kwitansi)
    {
        return view('kwitansi.edit', compact('kwitansi'));
    }

    public function update(Request $request, Kwitansi $kwitansi)
    {
        $request->validate([
            'tgl_transaksi' => 'required|date',
        ]);

        $kwitansi->update($request->all());

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Kwitansi berhasil diupdate');

        return redirect()->route('kwitansi.index');
    }

    public function destroy(Kwitansi $kwitansi)
    {
        $kwitansi->delete();

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Kwitansi berhasil dihapus');

        return redirect()->route('kwitansi.index');
    }
}

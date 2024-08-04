<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Kwitansi;
use App\Models\Penyewa;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoice.index', compact('invoices'));
    }

    public function create()
    {
        $kwitansis = Kwitansi::all();
        $penyewas = Penyewa::all();
        $kendaraans = Kendaraan::all();

        return view('invoice.create', compact('kwitansis', 'penyewas', 'kendaraans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kwitansi' => 'required|integer',
            'id_penyewa' => 'required|integer',
            'no_pol' => 'required',
        ]);

        Invoice::create($request->all());

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Invoice berhasil ditambahkan');

        return redirect()->route('invoice.index');
    }

    public function show(Invoice $invoice)
    {
        return view('invoice.show', compact('invoice'));
    }

    public function edit(Invoice $invoice)
    {
        $kwitansis = Kwitansi::all();
        $penyewas = Penyewa::all();
        $kendaraans = Kendaraan::all();

        return view('invoice.edit', compact('invoice', 'kwitansis', 'penyewas', 'kendaraans'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'id_kwitansi' => 'required|integer',
            'id_penyewa' => 'required|integer',
            'no_pol' => 'required',
        ]);

        $invoice->update($request->all());

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Invoice berhasil diupdate');

        return redirect()->route('invoice.index');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        // Menggunakan SweetAlert untuk notifikasi
        Alert::success('Success', 'Invoice berhasil dihapus');

        return redirect()->route('invoice.index');
    }
}

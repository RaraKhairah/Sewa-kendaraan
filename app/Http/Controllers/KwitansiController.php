<?php

namespace App\Http\Controllers;

use App\Models\Kwitansi;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class KwitansiController extends Controller
{
    public function show(string $id):View {

        return view('kwitansi.profile',[
        'kwitansi' => Kwitansi::findOrFail($id)
        ]);
    }

    public function index(): View
    {
       $kwitansi = Kwitansi::latest()->paginate(10);
       return view('kwitansi.index',compact('kwitansi'));
    }

    public function create(): View
    {
        return view('kwitansi.create');
    }

    public function store(Request $request): RedirectResponse
    {
       
        //validate form
        $request->validate([
            'tgl_kwitansi'      => 'required',
        ]);

        Kwitansi::create([
            'tgl_kwitansi'          => $request->tgl_kwitansi,
            
        ]);
        //redirect to index
        return redirect()->route('kwitansi.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $kwitansi = Kwitansi::findOrFail($id);

        return view('kwitansi.edit', compact('kwitansi'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'tgl_kwitansi'      => 'required',
            
        ]);

        $kwitansi = Kwitansi::findOrFail($id);
        $kwitansi->update([
                'tgl_kwitansi'  => $request->tgl_kwitansi,
                
            ]);

        return redirect()->route('kwitansi.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $pengguna = Kwitansi::findOrFail($id);
        $pengguna->delete();
        return redirect()->route('kwitansi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }


}

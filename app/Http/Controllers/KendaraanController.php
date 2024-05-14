<?php

namespace App\Http\Controllers;


use Illuminate\View\View;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class KendaraanController extends Controller
{
    public function index(): View
    {
       $kendaraan = Kendaraan::latest()->paginate(10);
    //    dd($kendaraan);
       return view('kendaraan.index',compact('kendaraan'));
    }
   
    public function show(string $id):View {

        return view('kendaraan.profile',[
        'kwitansi' => Kendaraan::findOrFail($id)
        ]);
    }

    public function create(): View
    {
        return view('kendaraan.create');
    }

    public function store(Request $request): RedirectResponse
    {
       
        // //validate form
        $request->validate([
            'no_mesin'    => 'required',
            'jenis_mobil'  => 'required',
            'nama_mobil'   => 'required',
            'merk'         => "required",
            'kapasitas'    => 'required',
            'tarif'        => 'required',
            
        ]);
        Kendaraan::create([
            'no_mesin'        => $request->no_mesin,
            'jenis_mobil'     => $request->jenis_mobil,
            'nama_mobil'      => $request->nama_mobil,
            'merk'            => $request->merk,
            'kapasitas'       => $request->kapasitas,
            'tarif'           => $request->tarif,
            
            
        ]);
        return redirect()->route('kendaraan.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }
    public function destroy(){
        
    }
    public function edit(string $id): View
    {
        $kendaraan = Kendaraan::findOrFail($id);

        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'no_mesin'    => 'required',
            'jenis_mobil'  => 'required',
            'nama_mobil'   => 'required',
            'merk'         => "required",
            'kapasitas'    => 'required',
            'tarif'        => 'required',
            
        ]);

        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update([
            'no_mesin'        => $request->no_mesin,
            'jenis_mobil'     => $request->jenis_mobil,
            'nama_mobil'      => $request->nama_mobil,
            'merk'            => $request->merk,
            'kapasitas'       => $request->kapasitas,
            'tarif'           => $request->tarif,
                
            ]);

        return redirect()->route('kendaraan.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    

   
}



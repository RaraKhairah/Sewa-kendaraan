<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PenyewaController extends Controller
{
    public function show(string $id):View {

        return view('penyewa.profile',[
        'penyewa' => penyewa::findOrFail($id)
        ]);
    }

    public function index(): View
    {
       $penyewa = penyewa::latest()->paginate(10);
       return view('penyewa.index',compact('penyewa'));
    }

}

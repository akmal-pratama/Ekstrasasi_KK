<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluarga;

class KartuKeluargaController extends Controller
{
    public function index()
    {
        $kk = KartuKeluarga::all();
        return view('beranda', compact('kk'));
    }
}
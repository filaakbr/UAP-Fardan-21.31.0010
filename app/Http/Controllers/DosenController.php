<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function profil()
    {
        return view('dosen.profil');
    }

    public function dataPengampu()
    {
        return view('dosen.dataPengampu');
    }

    public function dataMataKuliah()
    {
        return view('dosen.dataMataKuliah');
    }
}


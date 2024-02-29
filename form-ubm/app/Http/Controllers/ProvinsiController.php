<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi;

class ProvinsiController extends Controller
{
    public function AllProvinsi()
    {
        $provinsi = Provinsi::latest()->get();
        return view('admin.provinsi.all_provinsi', compact('provinsi'));
    }
}

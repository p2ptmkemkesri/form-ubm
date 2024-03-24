<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class ProvinsiController extends Controller
{
    public function AllProvinsi()
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();

        $provinsi = Provinsi::latest()->get();
        return view('admin.provinsi.all_provinsi', compact('provinsi', 'provinces', 'regencies', 'districts', 'villages'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Provinsi;
use App\Models\Kabkota;

class FormController extends Controller
{
    public function ContactForm() {
        // Get semua data
        $provinces = Provinsi::orderBy('kode_prov','ASC')->get();
        $regencies = Kabkota::all();
        return view('frontend.index', compact('provinces', 'regencies'));
        return view('frontend.index');
    }

    public function StoreForm(Request $request) {
        Form::insert([
            // halaman 1
            // 'kuesioner'=>$request->kuesioner,
            'sekolah'=>$request->sekolah,
            'provinsi'=>$request->provinsi,
            'kabkota'=>$request->kabkota,
            'puskesmas'=>$request->puskesmas,
            'nama_petugas'=>$request->nama_petugas,
            'hari_tanggal'=>$request->hari_tanggal,

            // halaman 2
            'nama_lengkap'=>$request->nama_lengkap,
            'nik'=>$request->nik,
            'kelas'=>$request->kelas,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'umur'=>$request->umur,
            'jenis_kelamin'=>$request->jenis_kelamin,
        ]);

        return redirect('/success');
    }
}

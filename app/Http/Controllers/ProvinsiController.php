<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi;

class ProvinsiController extends Controller
{
    public function AllProvinsi()
    {
        $provinces = Provinsi::orderBy('kode_prov','ASC')->get();
        return view('admin.provinsi.all_provinsi', compact('provinces'));
    }

    public function AddProvinsi()
    {
        $provinces = Provinsi::latest()->get();
        return view('admin.provinsi.add_provinsi', compact('provinces'));
    }

    public function StoreProvinsi(Request $request)
    {
        $request->validate([
            'kode_prov'=>'required',
            'nama_prov'=>'required',
        ],[
            'kode_prov.required'=>'required',
            'nama_prov.required'=>'required',
        ]);

        Provinsi::insert([
            'kode_prov'=>$request->kode_prov,
            'nama_prov'=>$request->nama_prov,
        ]);

        $notification = array(
            'message' => 'inserted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.provinsi')->with($notification);
    }

    public function EditProvinsi($id)
    {
        $provinces = Provinsi::findOrFail($id);
        return view('admin.provinsi.edit_provinsi', compact('provinces'));
    }

    // public function UpdateBlogCategory(Request $request, $id)
    // {
    //     BlogCategory::findOrFail($id)->update([
    //         'category_name'=>$request->category_name,
    //     ]);

    //     $notification = array(
    //         'message' => 'Blog category updated successfully',
    //         'alert-type' => 'success'
    //     );

    //     return redirect()->route('all.blog.category')->with($notification);
    // }

    public function DeleteProvinsi($id)
    {
        Provinsi::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.provinsi')->with($notification);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function ContactForm() {
        return view('frontend.index');
    }

    public function StoreForm(Request $request) {
        Form::insert([

        ]);
    }
}

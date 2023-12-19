<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/thanks', function() {
    return view('frontend.pages.thanks');
});

// Form All Routes
Route::controller(FormController::class)->group(function(){
    Route::get('/contact-form', 'ContactForm')->name('contact.form');
    Route::post('/store', 'StoreForm')->name('store.form');
});
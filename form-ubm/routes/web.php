<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// PROVINSI
Route::controller(ProvinsiController::class)->group(function () {
    Route::get('/all/provinsi', 'AllProvinsi')->name('all.provinsi');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::controller(OrganisasiController::class)->group( function() {
//     Route::get('/all/organisasi', 'AllOrganisasi')->name('all.organisasi');
//     Route::get('/add/organisasi', 'AddOrganisasi')->name('add.organisasi');
//     Route::post('/store/organisasi', 'StoreOrganisasi')->name('store.organisasi');
//     Route::get('/edit/organisasi/{id}', 'EditOrganisasi')->name('edit.organisasi');
//     Route::post('/update/organisasi/{id}', 'UpdateOrganisasi')->name('update.organisasi');
//     Route::get('/delete/organisasi/{id}', 'DeleteOrganisasi')->name('delete.organisasi');

//     Route::get('/visi-misi', 'visiMisi')->name('frontend.visiMisi');
//     Route::get('/tugas-dan-fungsi', 'tugasFungsi')->name('frontend.tugasFungsi');
//     Route::get('/capaian-kerja', 'capaianKerja')->name('frontend.capaianKerja');
//     Route::get('/subbag-admin-umum', 'subbagAdminUmum')->name('frontend.subbagAdminUmum');
//     Route::get('/timja-gif', 'timjaGIF')->name('frontend.timjaGIF');
//     Route::get('/timja-pdmgm', 'timjaPDMGM')->name('frontend.timjaPDMGM');
//     Route::get('/timja-pjpd', 'timjaPJPD')->name('frontend.timjaPJPD');
//     Route::get('/timja-pkkd', 'timjaPKKD')->name('frontend.timjaPKKD');
//     Route::get('/timja-pkkgi', 'timjaPPKGI')->name('frontend.timjaPPKGI');
// })->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';

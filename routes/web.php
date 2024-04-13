<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });

// Admin All Route

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/success', function () {
    return view('frontend.pages.thanks');
});




// PROVINSI
Route::controller(ProvinsiController::class)->group(function () {
    Route::get('/all/provinsi', 'AllProvinsi')->name('all.provinsi');
    Route::get('/add/provinsi', 'AddProvinsi')->name('add.provinsi');
    Route::post('/store/provinsi', 'StoreProvinsi')->name('store.provinsi');
    Route::get('/edit/provinsi/{id}', 'EditProvinsi')->name('edit.provinsi');
    Route::get('/delete/provinsi/{id}', 'DeleteProvinsi')->name('delete.provinsi');

})->middleware(['auth', 'verified'])->name('dashboard');

// Route::controller(BlogCategoryController::class)->group(function() {
//     Route::get('/all/blog/category', 'AllBlogCategory')->name('all.blog.category');
//     Route::get('/add/blog/category', 'AddBlogCategory')->name('add.blog.category');
//     Route::post('/store/blog/category', 'StoreBlogCategory')->name('store.blog.category');
//     Route::get('/edit/blog/category/{id}', 'EditBlogCategory')->name('edit.blog.category');
//     Route::post('/update/blog/category/{id}', 'UpdateBlogCategory')->name('update.blog.category');
//     Route::get('/delete/blog/category/{id}', 'DeleteBlogCategory')->name('delete.blog.category');
// })->middleware(['auth', 'verified'])->name('dashboard');


// FORM
// Route::controller(FormController::class)->group(function () {
//     Route::get('/', 'ContactForm')->name('show.form');
//     Route::post('/store/form', 'StoreForm')->name('store.form');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(FormController::class)->group(function () {
    Route::get('/', 'ContactForm')->name('show.form');
    Route::post('/store/form', 'StoreForm')->name('store.form');
});



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
// })->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DataTableController;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WPController;




use Illuminate\Routing\Route\tambah;
use Illuminate\Support\Facades\Route;



/*///
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[LoginController::class,'index'])->name('login');
 
Route::get('/forgot-password',[LoginController::class,'forgot_password'])->name('forgot-password');

Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::post('/forgot-password-act', [LoginController::class, 'forgot_password_act'])->name('forgot-password-act');

Route::get('/validasi-forgot-password/{token}', [LoginController::class, 'validasi_forgot_password'])->name('validasi-forgot-password');
Route::post('/validasi-forgot-password-act', [LoginController::class, 'validasi_forgot_password_act'])->name('validasi-forgot-password-act');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');


//membuat middleware/pembatas agar user hanya bisa mengakses jika melewati login
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    Route::get('/news',[HomeController::class,'news'])->name('news');

    Route::get('/user',[HomeController::class,'index'])->name('index');
    Route::get('/create',[HomeController::class,'create'])->name('user.create');
    //untuk memproses data ke dalam database(store)
    Route::post('/store', [HomeController::class,  'store'])->name('user.store');

    Route::get('/clientside',[DataTableController::class,'clientside'])->name('clientside');
    Route::get('/serverside',[DataTableController::class,'serverside'])->name('serverside');

//SISTEM PENDUKUNG KEPUTUSAN
//ALTERNATIF
    Route::get('/alternatif',[HomeController::class,'alternatif'])->name('alternatif');
    Route::get('/alternatif-create',[HomeController::class,'alternatif_create'])->name('alternatif-create');
    Route::post('/storage', [HomeController::class,  'storage'])->name('alternatif.storage');

    //edit alternatif
    Route::get('/alternatif-edit/{id}',[HomeController::class,'alternatif_edit'])->name('alternatif.alternatif-edit');
    Route::put('/alternatif-update/{id}',[HomeController::class,'alternatif_update'])->name('alternatif.alternatif-update');
    Route::delete('/alternatif-delete/{id}',[HomeController::class,'alternatif_delete'])->name('alternatif.alternatif-delete');
    
//KRITERIA
    Route::get('/kriteria',[HomeController::class,'kriteria'])->name('kriteria');
    Route::get('/kriteria-create',[HomeController::class,'kriteria_create'])->name('kriteria.kriteria-create');
    Route::post('/storage-kriteria', [HomeController::class,  'storage_kriteria'])->name('kriteria.storage-kriteria');

    //edit kriteria
    Route::get('/kriteria-edit/{id}',[HomeController::class,'kriteria_edit'])->name('kriteria.kriteria-edit');
    Route::put('/kriteria-update/{id}',[HomeController::class,'kriteria_update'])->name('kriteria.kriteria-update');
    Route::delete('/kriteria-delete/{id}',[HomeController::class,'kriteria_delete'])->name('kriteria.kriteria-delete');

//NILAI
    Route::get('/nilai',[HomeController::class,'nilai'])->name('nilai');
    Route::get('/nilai-create',[HomeController::class,'nilai_create'])->name('nilai.nilai-create');
    Route::post('/storage-nilai', [HomeController::class,  'storage_nilai'])->name('nilai.storage-nilai');
//CRUD NILAI
    Route::get('/nilai-edit/{id}',[HomeController::class,'nilai_edit'])->name('nilai.nilai-edit');
    Route::put('/nilai-update/{id}',[HomeController::class,'nilai_update'])->name('nilai.nilai-update');
    Route::delete('/nilai-delete/{id}',[HomeController::class,'nilai_delete'])->name('nilai.nilai-delete');

    

Route::get('/wp', [WPController::class, 'calculateWP'])->name('wp');;


    

    //CRUD
    Route::get('/edit/{id}',[HomeController::class,'edit'])->name('user.edit');//{id}sebagai parameter
    Route::put('/update/{id}',[HomeController::class,'update'])->name('user.update');
    Route::delete('/delete/{id}',[HomeController::class,'delete'])->name('user.delete');


});




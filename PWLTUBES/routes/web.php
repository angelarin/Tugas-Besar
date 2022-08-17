<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

route::group(['middleware' => 'auth'],function(){
    Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
});

Route::group(['middleware' => 'auth', 'cekstatus'=>'admin'], function(){
    Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

    Route::get('/buatacc', function () {return view('admin.buatacc');})->name('buatacc');;
    Route::post('/isiacc', [App\Http\Controllers\AdminController::class, 'isiacc']);
    Route::get('/accounts', [App\Http\Controllers\AdminController::class, 'tampilacc'])->name('accounts');;
    Route::get('/acc/{id}/gantiacc', [App\Http\Controllers\AdminController::class, 'gantiacc']);
    Route::post('/acc/{id}/gantiisiacc', [App\Http\Controllers\AdminController::class, 'gantiisiacc']);
    Route::get('/acc/{id}/delete', [App\Http\Controllers\AdminController::class, 'deleteacc']);

    Route::get('/updatetopup', [App\Http\Controllers\AdminController::class, 'updatetopup'])->name('updatetopup');
    Route::get('/updatetopup/{id}', [App\Http\Controllers\AdminController::class, 'verif']);

    Route::get('/buatevent', function () {return view('admin.buatevent');});
    Route::post('/isievent', [App\Http\Controllers\EventController::class, 'buatevent']);
    Route::get('/editevent', [App\Http\Controllers\AdminController::class, 'editevent'])->name('editevent');
    Route::get('/event/{id}/edit', [App\Http\Controllers\AdminController::class, 'editdataevent']);
    Route::post('/event/{id}/editupdate', [App\Http\Controllers\AdminController::class, 'editupdate']);
    Route::get('/event/{id}/delete', [App\Http\Controllers\AdminController::class, 'deletedataevent']);
});
Route::group(['middleware' => 'auth', 'cekstatus'=>'siswa'], function(){
    Route::get('/siswa', [App\Http\Controllers\EventController::class, 'index'])->name('index');
    Route::get('/siswa/cari', [App\Http\Controllers\EventController::class, 'cari']);
    Route::get('/about', function () {return view('user.about');});
    Route::get('/profilsiswa', [App\Http\Controllers\IndexController::class, 'profil']);

    Route::get('/eventdetails/{events}', [App\Http\Controllers\EventController::class, 'tampilevent']);
    Route::get('/{events}/konfirmasi', [App\Http\Controllers\EventController::class, 'konfirmasievent']);

    Route::get('/topup', [App\Http\Controllers\TopupController::class, 'index'])->name('topup');
    Route::post('/isinabung', [App\Http\Controllers\TopupController::class, 'nabung']);
    Route::post('/{events}/ikutevent', [App\Http\Controllers\TransaksiController::class, 'ikutevent']);
    Route::get('/historitransaksi', [App\Http\Controllers\TransaksiController::class, 'index']);
    Route::get('cetak_pdf', [App\Http\Controllers\TransaksiController::class, 'cetak_pdf']);
});

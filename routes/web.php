<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SekreController;
use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\PengajuanController;

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

Route::get('/', 'App\Http\Controllers\LoginController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\LoginController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['ceklogin:user']], function () {
        Route::resource('home', HomeController::class);

        Route::get('/bukutamu', [BukuTamuController::class, 'input']);
        Route::post('/bukutamu/insert', [BukuTamuController::class, 'insert']);

        Route::get('/pengajuan', [PengajuanController::class, 'pengajuan']);
        Route::post('/pengajuan/insert', [PengajuanController::class, 'insert']);
        Route::get('/riwayatPengajuan', [PengajuanController::class, 'userPengajuan']);
    });
    Route::group(['middleware' => ['ceklogin:sekretaris']], function () {
        Route::resource('sekre-home', SekreController::class);
        
        Route::get('/bukutamu/riwayat', [BukuTamuController::class, 'index']);

        Route::get('/pengajuan/riwayat', [PengajuanController::class, 'index']);
        Route::post('/pengajuan/updateStatus', [PengajuanController::class, 'updateStatus']);
        Route::post('/pengajuan/updateKomentar', [PengajuanController::class, 'updateKomentar']);
        Route::post('/pengajuan/updateNomorSurat', [PengajuanController::class, 'updateNomorSurat']);
    });
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/customerservice', function () {
    return view('customerservice');
});
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
    Route::group(['middleware' => ['ceklogin:sekretaris']], function () {
        Route::resource('sekre-home', SekreController::class);
    });
    Route::group(['middleware' => ['ceklogin:user']], function () {
        Route::resource('home', HomeController::class);
    });
});

Route::get('/bukutamu', [BukuTamuController::class, 'input']);
Route::post('/bukutamu/store', [BukuTamuController::class, 'store']);
Route::get('/riwayatBukutamu',[BukuTamuController::class, 'index']);

Route::get('/pengajuan', [PengajuanController::class, 'input']);
Route::post('/pengajuan/store', [PengajuanController::class, 'store']);
Route::get('/riwayat', [PengajuanController::class, 'index']);

Route::get('/riwayatPengajuan', [PengajuanController::class, 'indexsekre']);

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contactUs', function () {
    return view('contactus');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BukuTamuController;

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
        Route::resource('sekre-home', HomeController::class);
    });
    Route::group(['middleware' => ['ceklogin:user']], function () {
        Route::resource('home', HomeController::class);
    });
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/bukutamu', [BukuTamuController::class, 'input']);
Route::post('/bukutamu/store', [BukuTamuController::class, 'store']);

Route::get('/pengajuan', function () {
    return view('pengajuan');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/riwayatBuktam', function () {
    return view('riwayatbukutamu');
});

Route::get('/riwayatPengajuan', function () {
    return view('riwayatpengajuan');
});
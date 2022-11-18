<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuTamuController extends Controller
{
    public function input() {
        return view('buku_tamu');
    }

    public function store(Request $request)
    {
	// insert data ke table buku tamu
	DB::table('buku_tamu')->insert([
		'nama' => $request->nama,
		'kontak' => $request->kontak,
		'jenis' => $request->jenis,
		'kegiatan' => $request->kegiatan,
        'file' => $request->file
	]);
	// alihkan halaman ke halaman home
	return redirect('/home');
    }
    
}
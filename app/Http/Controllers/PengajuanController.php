<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class PengajuanController extends Controller
{
    public function index()
    {
        $pengajuan = DB::table('pengajuan')->get();

        return view('riwayatpengajuan', ['pengajuan' => $pengajuan]);
    }

    public function userPengajuan() {
        
        $user = Auth::user();
        $pengajuan = DB::table('pengajuan')->get()->where('nim', $users->nim);

        return view('riwayat', ['pengajuan' => $pengajuan]);
    }
    
    public function input() {
        return view('pengajuan');
    }

    public function store(Request $request)
    {
	// insert data ke table pengajuan
    $user = Auth::user();
	DB::table('pengajuan')->insert([
        'nim' => $request->nim,
		'nama' => $request->nama,
		'kontak' => $request->kontak,
		'kementrian' => $request->kementrian,
		'programkerja' => $request->programkerja,
        'jenis' => $request->jenis,
        'tujuan' => $request->tujuan,
        'penerima' => $request->penerima,
        'perihal' => $request->perihal,
        'file' => $request->file,
        'status' => "Diulas"
	]);
	// alihkan halaman ke halaman home
	return redirect('/home');
    }
    
    public function updateStatus(Request $request) {
        DB::table('pengajuan')->where('idNo',$request->id)->update([
            'status' => $request->status,
        ]);
        return redirect('/pengajuan/riwayat');
    }

    public function updateKomentar(Request $request)
    {
        DB::table('pengajuan')->where('idNo',$request->id)->update([
            'feedback' => $request->feedback,
        ]);
        return redirect('/pengajuan/riwayat');
    }

    public function updateNomorSurat(Request $request)
    {
        DB::table('pengajuan')->where('idNo',$request->id)->update([
            'nomorSurat' => $request->nomorSurat,
        ]);
        return redirect('/pengajuan/riwayat');
    }
}
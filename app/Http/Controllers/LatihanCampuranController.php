<?php

namespace App\Http\Controllers;

use App\Models\LatihanCampuran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LatihanCampuranController extends Controller
{

    public function latihanc2()
    {
        // Mengambil ID pengguna yang sedang login
        $userId = Auth::id();
    
        // Mengambil data latihan_campuran berdasarkan user_id yang sesuai dengan pengguna yang login
        $latihanCampuran = LatihanCampuran::where('user_id', $userId)->first();
    
        // Kirim data ke view frontend.latihanc2
        return view('frontend.latihanc2', compact('latihanCampuran'));
    }

    public function storeLatihanc(Request $request)
    {
        try {

            // Mengambil ID pengguna yang sedang login
            $userId = Auth::id();

            // Cari data latihan_campuran berdasarkan user_id yang sesuai dengan pengguna yang login
            $latihanCampuran = LatihanCampuran::where('user_id', $userId)->first();

            // Jika data belum ada, buat data baru
            if (!$latihanCampuran) {
                $latihanCampuran = new LatihanCampuran();
                $latihanCampuran->user_id = $userId;
            }

            // Isi data dari request ke model
            $latihanCampuran->fill($request->all());
            $latihanCampuran->save();

            $redirectValue = $request->input('redirect');
            if ($redirectValue == 1) {
                return redirect()->route('latihanc1');
            } else if ($redirectValue == 2){
                return redirect()->route('latihanc2');
            } else if ($redirectValue == 3){
                return redirect()->route('latihanc3');
            } else if ($redirectValue == 4){
                return redirect()->route('latihanc4');
            } else {
                return redirect()->route('latihanend');

            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function latihanc3()
    {
        // Mengambil ID pengguna yang sedang login
        $userId = Auth::id();
    
        // Mengambil data latihan_campuran berdasarkan user_id yang sesuai dengan pengguna yang login
        $latihanCampuran = LatihanCampuran::where('user_id', $userId)->first();
    
        // Kirim data ke view frontend.latihanc3
        return view('frontend.latihanc3', compact('latihanCampuran'));
    }

    public function latihanc4()
    {
        // Mengambil ID pengguna yang sedang login
        $userId = Auth::id();
    
        // Mengambil data latihan_campuran berdasarkan user_id yang sesuai dengan pengguna yang login
        $latihanCampuran = LatihanCampuran::where('user_id', $userId)->first();
    
        // Kirim data ke view frontend.latihanc3
        return view('frontend.latihanc4', compact('latihanCampuran'));
    }
}
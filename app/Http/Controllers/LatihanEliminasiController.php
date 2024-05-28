<?php

namespace App\Http\Controllers;

use App\Models\LatihanEliminasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LatihanEliminasiController extends Controller
{
    public function index()
    {
        $latihan_eliminasi = LatihanEliminasi::join('users', 'latihan_eliminasi.user_id', '=', 'users.id')
            ->select('latihan_eliminasi.*', 'users.name as user_name')
            ->get();

        return view('pages.eliminasi', compact('latihan_eliminasi'));
    }

    public function latihane2()
    {
        // Mengambil ID pengguna yang sedang login
        $userId = Auth::id();
    
        // Mengambil data latihan_eliminasi berdasarkan user_id yang sesuai dengan pengguna yang login
        $latihanEliminasi = LatihanEliminasi::where('user_id', $userId)->first();
    
        // Kirim data ke view frontend.latihane2
        return view('frontend.latihane2', compact('latihanEliminasi'));
    }

    public function storeLatihane(Request $request)
    {
        try {

            // Mengambil ID pengguna yang sedang login
            $userId = Auth::id();

            // Cari data latihan_eliminasi berdasarkan user_id yang sesuai dengan pengguna yang login
            $latihanEliminasi = LatihanEliminasi::where('user_id', $userId)->first();

            // Jika data belum ada, buat data baru
            if (!$latihanEliminasi) {
                $latihanEliminasi = new LatihanEliminasi();
                $latihanEliminasi->user_id = $userId;
            }

            // Isi data dari request ke model
            $latihanEliminasi->fill($request->all());
            $latihanEliminasi->save();

            $redirectValue = $request->input('redirect');
            if ($redirectValue == 1) {
                return redirect()->route('latihane1');
            } else if ($redirectValue == 2){
                return redirect()->route('latihane2');
            } else if ($redirectValue == 3){
                return redirect()->route('latihane3');
            } else {
                return redirect()->route('latihanc1');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function latihane3()
    {
        // Mengambil ID pengguna yang sedang login
        $userId = Auth::id();
    
        // Mengambil data latihan_eliminasi berdasarkan user_id yang sesuai dengan pengguna yang login
        $latihanEliminasi = LatihanEliminasi::where('user_id', $userId)->first();
    
        // Kirim data ke view frontend.latihane3
        return view('frontend.latihane3', compact('latihanEliminasi'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\LatihanSubstitusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LatihanSubstitusiController extends Controller
{
    public function index()
    {
        $latihan_substitusi = LatihanSubstitusi::join('users', 'latihan_substitusi.user_id', '=', 'users.id')
            ->select('latihan_substitusi.*', 'users.name as user_name')
            ->get();

        return view('pages.substitusi', compact('latihan_substitusi'));
    }

    public function latihans2()
    {
        // Mengambil ID pengguna yang sedang login
        $userId = Auth::id();
    
        // Mengambil data latihan_substitusi berdasarkan user_id yang sesuai dengan pengguna yang login
        $latihanSubstitusi = LatihanSubstitusi::where('user_id', $userId)->first();
    
        // Kirim data ke view frontend.latihans2
        return view('frontend.latihans2', compact('latihanSubstitusi'));
    }

    public function storeLatihans(Request $request)
    {
        try {

            // Mengambil ID pengguna yang sedang login
            $userId = Auth::id();

            // Cari data latihan_substitusi berdasarkan user_id yang sesuai dengan pengguna yang login
            $latihanSubstitusi = LatihanSubstitusi::where('user_id', $userId)->first();

            // Jika data belum ada, buat data baru
            if (!$latihanSubstitusi) {
                $latihanSubstitusi = new LatihanSubstitusi();
                $latihanSubstitusi->user_id = $userId;
            }

            // Isi data dari request ke model
            $latihanSubstitusi->fill($request->all());
            $latihanSubstitusi->save();

            $redirectValue = $request->input('redirect');
            if ($redirectValue == 1) {
                return redirect()->route('latihans1');
            } else if ($redirectValue == 2){
                return redirect()->route('latihans2');
            } else if ($redirectValue == 3){
                return redirect()->route('latihans3');
            } else {
                return redirect()->route('latihane1');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function latihans3()
    {
        // Mengambil ID pengguna yang sedang login
        $userId = Auth::id();
    
        // Mengambil data latihan_substitusi berdasarkan user_id yang sesuai dengan pengguna yang login
        $latihanSubstitusi = LatihanSubstitusi::where('user_id', $userId)->first();
    
        // Kirim data ke view frontend.latihans3
        return view('frontend.latihans3', compact('latihanSubstitusi'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\LatihanEnd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LatihanEndController extends Controller
{

    public function latihanend()
    {
        // Mengambil ID pengguna yang sedang login
        $userId = Auth::id();
    
        // Mengambil data latihan_end berdasarkan user_id yang sesuai dengan pengguna yang login
        $latihanEnd = LatihanEnd::where('user_id', $userId)->first();
    
        // Kirim data ke view frontend.latihanend
        return view('frontend.latihanend', compact('latihanEnd'));
    }

    public function storeLatihanend(Request $request)
    {
        try {

            // Mengambil ID pengguna yang sedang login
            $userId = Auth::id();

            // Cari data latihan_end berdasarkan user_id yang sesuai dengan pengguna yang login
            $latihanEnd = LatihanEnd::where('user_id', $userId)->first();

            // Jika data belum ada, buat data baru
            if (!$latihanEnd) {
                $latihanEnd = new LatihanEnd();
                $latihanEnd->user_id = $userId;
            }

            // Isi data dari request ke model
            $latihanEnd->fill($request->all());
            $latihanEnd->save();

            return redirect()->route('quiz1');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
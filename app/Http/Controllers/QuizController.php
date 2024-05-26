<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\KunciJawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{

    public function quiz3()
    {
        // Mengambil ID pengguna yang sedang login
        $userId = Auth::id();
    
        // Mengambil data latihan_substitusi berdasarkan user_id yang sesuai dengan pengguna yang login
        $quiz = Quiz::where('user_id', $userId)->first();

        if (!$quiz) {
            return view('frontend.quiz3', compact('quiz'));
        } else {
            return view('frontend.quiz4', compact('quiz'));
        }
    
    }

    public function quizskor()
    {
        // Mengambil ID pengguna yang sedang login
        $userId = Auth::id();
    
        // Mengambil data latihan_substitusi berdasarkan user_id yang sesuai dengan pengguna yang login
        $quiz = Quiz::where('user_id', $userId)->first();

        return view('frontend.quizskor', compact('quiz'));
    }

    public function kuncijawaban()
    {
        // Mengambil data latihan_substitusi berdasarkan user_id yang sesuai dengan pengguna yang login
        $quiz = KunciJawaban::first();

        return view('frontend.kuncijawaban', compact('quiz'));
    }

    public function storeQuiz(Request $request)
    {
        try {
            $userId = Auth::id();
            
            // Ambil data kunci jawaban dari model KunciJawaban
            $kunciJawaban = KunciJawaban::first();

            // Inisialisasi nilai awal
            $nilai = 0;
            $nilai1 = 0;
            $nilai2 = 0;
            $nilai3 = 0;
            $nilai4 = 0;
            $nilai5 = 0;

            for ($i = 1; $i <= 3; $i++) {
                $inputJawaban = str_replace(' ', '', trim($request->input((string)$i)));  // Menghapus semua spasi
                $kunciJawabanTrimmed = str_replace(' ', '', strtolower($kunciJawaban->getAttribute((string)$i)));  // Kunci jawaban tanpa spasi
                if ($inputJawaban && strtolower($inputJawaban) == $kunciJawabanTrimmed) {
                    $nilai1 += 8;
                }
            }

            if ($nilai1 >= 17 && $nilai1 < 25) {
                $nilai1 = 20;
            }

            for ($i = 4; $i <= 6; $i++) {
                $inputJawaban = str_replace(' ', '', trim($request->input((string)$i)));  // Menghapus semua spasi
                $kunciJawabanTrimmed = str_replace(' ', '', strtolower($kunciJawaban->getAttribute((string)$i)));  // Kunci jawaban tanpa spasi
                if ($inputJawaban && strtolower($inputJawaban) == $kunciJawabanTrimmed) {
                    $nilai2 += 8;
                }
            }

            if ($nilai2 >= 17 && $nilai2 < 25) {
                $nilai2 = 20;
            }

            $inputJawaban = str_replace(' ', '', trim($request->input('7')));  // Menghapus semua spasi
            $kunciJawabanTrimmed = str_replace(' ', '', strtolower($kunciJawaban->getAttribute('7')));  // Kunci jawaban tanpa spasi
            if ($inputJawaban && strtolower($inputJawaban) == $kunciJawabanTrimmed) {
                $nilai3 = 20;
            }

            $inputJawaban = str_replace(' ', '', trim($request->input('8')));  // Menghapus semua spasi
            $kunciJawabanTrimmed = str_replace(' ', '', strtolower($kunciJawaban->getAttribute('8')));  // Kunci jawaban tanpa spasi
            if ($inputJawaban && strtolower($inputJawaban) == $kunciJawabanTrimmed) {
                $nilai4 = 20;
            }

            for ($i = 9; $i <= 11; $i++) {
                $inputJawaban = str_replace(' ', '', trim($request->input((string)$i)));  // Menghapus semua spasi
                $kunciJawabanTrimmed = str_replace(' ', '', strtolower($kunciJawaban->getAttribute((string)$i)));  // Kunci jawaban tanpa spasi
                if ($inputJawaban && strtolower($inputJawaban) == $kunciJawabanTrimmed) {
                    $nilai5 += 8;
                }
            }

            if ($nilai5 >= 17 && $nilai5 < 25) {
                $nilai5 = 20;
            }

            $nilai = (integer)$nilai1 + (integer)$nilai2 + (integer)$nilai3 + (integer)$nilai4 + (integer)$nilai5;

            // Simpan data quiz ke database
            $quiz = Quiz::create([
                'user_id' => $userId,
                'nilai' => $nilai,
                '1' => $request->input('1'),
                '2' => $request->input('2'),
                '3' => $request->input('3'),
                '4' => $request->input('4'),
                '5' => $request->input('5'),
                '6' => $request->input('6'),
                '7' => $request->input('7'),
                '8' => $request->input('8'),
                '9' => $request->input('9'),
                '10' => $request->input('10'),
                '11' => $request->input('11'),
                '12' => $request->input('12'),
                '13' => $request->input('13'),
                '14' => $request->input('14'),
                '15' => $request->input('15'),
            ]);

            // Simpan file-file yang diunggah ke dalam folder
            $folderName = Auth::user()->name; // Nama folder sesuai dengan nama pengguna yang login

            for ($i = 1; $i <= 5; $i++) {
                if ($request->hasFile('file'.$i)) {
                    $file = $request->file('file'.$i);
                    $fileName = '/soal'.$i.'-'.$file->getClientOriginalName();
                    $file->storeAs("public/{$folderName}", $fileName);

                    // Simpan nama file ke dalam database
                    $fieldName = 'file'.$i;
                    $quiz->$fieldName =  $folderName.$fileName;
                    $quiz->save();
                }
            }

            return redirect()->route('quizhasil');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

}
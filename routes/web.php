<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SplashController;
use App\Http\Controllers\LatihanSubstitusiController;
use App\Http\Controllers\LatihanEliminasiController;
use App\Http\Controllers\LatihanCampuranController;
use App\Http\Controllers\LatihanEndController;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {return view('welcome'); });

Route::group(['middleware' => 'guest'], function () {
    // Route::get('/', [SplashController::class, 'index'])->name('splash');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::get('/', [SplashController::class, 'index'])->name('splash');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/profile', function () {return view('frontend.profile'); })->name('profile');
    Route::get('/petunjuk', function () {return view('frontend.petunjuk'); })->name('petunjuk');
    Route::get('/cp', function () {return view('frontend.cp'); })->name('cp');
    Route::get('/materi', function () {return view('frontend.materi'); })->name('materi');
    Route::get('/video', function () {return view('frontend.video'); })->name('video');
    Route::get('/evaluasi', function () {return view('frontend.evaluasi'); })->name('evaluasi');

    Route::get('/kspltv', function () {return view('frontend.kspltv'); })->name('kspltv');
    Route::get('/mpspltv', function () {return view('frontend.mpspltv'); })->name('mpspltv');
    Route::get('/csspltv', function () {return view('frontend.csspltv'); })->name('csspltv');

    Route::get('/msubstitusi', function () {return view('frontend.msubstitusi'); })->name('msubstitusi');
    Route::get('/meliminasi', function () {return view('frontend.meliminasi'); })->name('meliminasi');
    Route::get('/mcampuran', function () {return view('frontend.mcampuran'); })->name('mcampuran');

    Route::get('/csspltv', function () {return view('frontend.csspltv'); })->name('csspltv');
    Route::get('/csspltv2', function () {return view('frontend.csspltv2'); })->name('csspltv2');
    Route::get('/csspltv3', function () {return view('frontend.csspltv3'); })->name('csspltv3');
    Route::get('/csspltv4', function () {return view('frontend.csspltv4'); })->name('csspltv4');
    Route::get('/csspltv5', function () {return view('frontend.csspltv5'); })->name('csspltv5');
    Route::get('/evaluasispltv', function () {return view('frontend.evaluasispltv'); })->name('evaluasispltv');

    Route::get('/faqmenu', function () {return view('frontend.faqmenu'); })->name('faqmenu');
    Route::get('/faq1', function () {return view('frontend.faq1'); })->name('faq1');
    Route::get('/faq2', function () {return view('frontend.faq2'); })->name('faq2');
    Route::get('/faq3', function () {return view('frontend.faq3'); })->name('faq3');
    Route::get('/faq4', function () {return view('frontend.faq4'); })->name('faq4');
    Route::get('/faq5', function () {return view('frontend.faq5'); })->name('faq5');
    Route::get('/faq6', function () {return view('frontend.faq6'); })->name('faq6');

    Route::get('/video', function () {return view('frontend.video'); })->name('video');

    Route::get('/evaluasi', function () {return view('frontend.evaluasi'); })->name('evaluasi');

    Route::get('/latihanmenu', function () {return view('frontend.latihanmenu'); })->name('latihanmenu');
    Route::get('/latihans1', function () {return view('frontend.latihans1'); })->name('latihans1');
    Route::get('/latihans2', [LatihanSubstitusiController::class, 'latihans2'])->name('latihans2');
    Route::get('/latihans3', [LatihanSubstitusiController::class, 'latihans3'])->name('latihans3');
    Route::post('/store-latihans', [LatihanSubstitusiController::class, 'storeLatihans'])->name('storeLatihans');

    Route::get('/latihane1', function () {return view('frontend.latihane1'); })->name('latihane1');
    Route::get('/latihane2', [LatihanEliminasiController::class, 'latihane2'])->name('latihane2');
    Route::get('/latihane3', [LatihanEliminasiController::class, 'latihane3'])->name('latihane3');
    Route::post('/store-latihane', [LatihanEliminasiController::class, 'storeLatihane'])->name('storeLatihane');
    
    Route::get('/latihanc1', function () {return view('frontend.latihanc1'); })->name('latihanc1');
    Route::get('/latihanc2', [LatihanCampuranController::class, 'latihanc2'])->name('latihanc2');
    Route::get('/latihanc3', [LatihanCampuranController::class, 'latihanc3'])->name('latihanc3');
    Route::get('/latihanc4', [LatihanCampuranController::class, 'latihanc4'])->name('latihanc4');
    Route::post('/store-latihanc', [LatihanCampuranController::class, 'storeLatihanc'])->name('storeLatihanc');
    
    Route::get('/latihanend', [LatihanEndController::class, 'latihanend'])->name('latihanend');
    Route::post('/store-latihanend', [LatihanEndController::class, 'storeLatihanend'])->name('storeLatihanend');
    
    Route::get('/quiz1', function () {return view('frontend.quiz1'); })->name('quiz1');
    Route::get('/quiz2', function () {return view('frontend.quiz2'); })->name('quiz2');
    Route::get('/quiz3', [QuizController::class, 'quiz3'])->name('quiz3');
    Route::post('/store-quiz', [QuizController::class, 'storeQuiz'])->name('storeQuiz');
    Route::get('/quiz4', function () {return view('frontend.quiz4'); })->name('quiz4');
    
    Route::get('/quizhasil', function () {return view('frontend.quizhasil'); })->name('quizhasil');
    Route::get('/quizskor', [QuizController::class, 'quizskor'])->name('quizskor');
    Route::get('/kuncijawaban', [QuizController::class, 'kuncijawaban'])->name('kuncijawaban');
});

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SplashController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
}
<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('mypage/home');
    }
}

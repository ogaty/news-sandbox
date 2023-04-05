<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('mypage/home');
    }

    public function store()
    {
        $file = app()->request->file('file');
        Storage::disk('s3')->putFile('/content', $file);
    }
}

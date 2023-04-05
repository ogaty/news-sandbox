<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $newsList = News::all();
        return view('home', compact('newsList'));
    }

    public function show($id)
    {
        return view('home', compact('newsList'));
    }
}

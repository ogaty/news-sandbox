<?php

namespace App\Http\Controllers\Mypage;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newsList = News::all();

        return view('mypage/news/index', [
            'newsList' => $newsList,
        ]);
    }

    public function create(Request $request)
    {

        return view('mypage/news/create', [

        ]);
    }

    public function store(Request $request)
    {
        $news = News::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);

        if ($request->input('media')) {
            $news
                ->addMediaFromRequest('media')
                ->toMediaCollection();
        }



        return redirect('/mypage/news/index')->with(['message' => 'success']);
    }

    public function edit($id)
    {
        return view('mypage/news/edit', [

        ]);
    }

    public function update($id, Request $request)
    {
        return redirect('/mypage/news/index')->with(['message' => 'success']);
    }

    public function show($id)
    {
        $newsData = News::find($id);
        $mediaItems = $newsData->getMedia();

        return view('mypage/news/show', [
            'newsData' => $newsData,
            'mediaItems' => $mediaItems,
        ]);
    }

    public function delete($id)
    {
        News::destroy($id);
        return redirect('/mypage/news/index')->with(['message' => 'success']);
    }

    public function test1(Request $request)
    {
        if ($request->is('post')) {
            dd($request->file('img'));
        }

        return view('test1');

    }

}

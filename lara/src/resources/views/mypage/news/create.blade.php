@extends('layout')

@section('content')
    <h1>News</h1>

    <section>
        <div>
            <form method="post" action="/mypage/news/store" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>
                        タイトル:<br>
                        <input type="text" name="title"><br>
                    </label>
                </div>
                <div>
                    <label>
                        本文:<br>
                        <textarea name="body"></textarea><br>
                    </label>
                </div>
                <div>
                    <label>
                        media:<br>
                        <input type="file" name="media"><br>
                    </label>
                </div>
                <div>
                    <input type="submit" value="送信">
                </div>
            </form>
        </div>
    </section>

    <form method="post" action="/logout">
        @csrf
        <input type="submit" value="logout">
    </form>
@endsection

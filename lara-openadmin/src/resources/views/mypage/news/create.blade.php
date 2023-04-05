@extends('layout')

@section('head')
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection

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
                        <textarea name="body" id="body" style="display: none;"></textarea><br>
                    </label>
                    <div id="editor">

                    </div>
                </div>
                <div>
                    <label>
                        media:<br>
                        <input type="file" name="media"><br>
                    </label>
                </div>
                <div>
                    <input type="submit" id="submit" value="送信">
                </div>
            </form>
        </div>
    </section>

    <form method="post" action="/logout">
        @csrf
        <input type="submit" value="logout">
    </form>
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

        document.querySelector("#submit").addEventListener('click', function(event) {
            document.querySelector("#body").innerHTML = quill.container.innerHTML;
        });

    </script>
@endsection

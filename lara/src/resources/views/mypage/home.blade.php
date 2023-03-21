@extends('layout')

@section('content')
    <h1>Mypage</h1>

    <section>
        <div>
            <a href="{{ route('mypage.news.index') }}">News</a>
        </div>
    </section>

    <form method="post" action="/logout">
        @csrf
        <input type="submit" value="logout">
    </form>
@endsection

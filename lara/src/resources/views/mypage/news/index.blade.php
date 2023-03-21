@extends('layout')

@section('content')
    <h1>News</h1>

    <section>
        <div>
            <div>
                <a href="{{ route('mypage.news.create') }}">Create</a>
            </div>
            <ul>
                @foreach ($newsList as $newsData)
                    <li>
                        <a href="{{ route('mypage.news.show', $newsData->id) }}">{{ $newsData->title }}</a>
                        &nbsp;
                        <a href="{{ route('mypage.news.edit', $newsData->id) }}">EDIT</a>
                        &nbsp;
                        <a href="{{ route('mypage.news.delete', $newsData->id) }}">DELETE</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <form method="post" action="/logout">
        @csrf
        <input type="submit" value="logout">
    </form>
@endsection

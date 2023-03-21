@extends('layout')

@section('content')
    <h1>News</h1>

    <section>
        <div>
            <h1>{{ $newsData->title }}</h1>
            <div>
                {{ $newsData->body }}
            </div>
            <div>
                <img src="{{ $mediaItems[0]->getUrl() }}">
            </div>
        </div>
    </section>

    <form method="post" action="/logout">
        @csrf
        <input type="submit" value="logout">
    </form>
@endsection

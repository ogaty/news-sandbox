@extends('layout')

@section('content')
    <h1>News</h1>

    <section>
        <div>
        </div>
    </section>

    <form method="post" action="/logout">
        @csrf
        <input type="submit" value="logout">
    </form>
@endsection

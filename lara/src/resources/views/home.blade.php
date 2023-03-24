@extends('layout')

@section('content')
    <h1>Home</h1>

    <livewire:newslist :newsList="$newsList" />
@endsection

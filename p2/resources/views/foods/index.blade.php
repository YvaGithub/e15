@extends('layouts/main')

@section('title')
All Books
@endsection

@section('head')
<link href='/css/foods/index.css' rel='stylesheet'>
@endsection

@section('content')

<h1>All Foods</h1>

@if(count($foods) == 0)
<p>No foods have been added yet...</p>
@else
<div id='foods'>
    @foreach($foods as $slug => $foods)
    <a class='food' href='/foods/{{ $slug }}'>
        <h3>{{ $foods['name']}}</h3>
        <img class='cover' src='{{ $foods['cover_url'] }}'>
    </a>
    @endforeach
</div>
@endif

@endsection
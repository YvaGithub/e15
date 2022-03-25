
    @extends('layouts/main')

    @section('title')
{{ $food ? $food['name'] : 'Food not found' }}
@endsection

@section('head')
<link href='/css/foods/show.css' rel='stylesheet'>
@endsection

@section('content')

@if(!$foods)
Food not found. <a href='/foods'>Check out the other books in our library...</a>
@else

<img class='cover' src='{{ $food['cover_url'] }}' alt='Cover photo for {{ $food['title'] }}'>

<h1>{{ $food['title'] }}</h1>

<a href='{{ $food['purchase_url'] }}'>Purchase...</a>

<p class='description'>
    {{ $food['description'] }}
    <a href='{{ $food['info_url'] }}'>Learn more...</a>
</p>

@endif

@endsection
    
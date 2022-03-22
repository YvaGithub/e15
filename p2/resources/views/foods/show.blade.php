
    @extends('layouts/main')

    @section('name')
       {{$foods? $foods['name']: 'Food not found.'}}
    @endsection

    @section('head')
        <link href='/css/foods/show.css' rel='stylesheet'>
    @endsection

    @section('content')
    
    @if($foodFound)
        <h1>{{ $name }}</h1>    
        
        <p>
            Details about this food will go here...
        </p>
        @else
        This food is not being served. <a href='/foods'>All availabe foods</a>
        @endif
    @endsection
    
@extends('layouts/main')

@section('content')
    <p>Welcome to Bookmark. Please check back later once we add books to our library .</p>
<form method='GET' action='/search'>

    <h2>Search for a book to add to your list</h2>

    <fieldset>
        <label for='searchTerms'>
            Search terms:
            <input type='text' name='searchTerms' value='{{$searchTerms}}'>
        </label>
    </fieldset>

    <fieldset>
        <label>
            Search type:
        </label>

        <input 
            type='radio' 
            name='searchType' 
            id='title' 
            value='title'
            {{($searchType== 'title' OR is_null($searchType))? 'checked' : ''}}
        >
        <label for='title'> Title</label>
        
        <input 
            type='radio' 
            name='searchType' 
            id='author' 
            value='author' 
            {{($searchType== 'author')? 'checked' : ''}}
        >
        <label for='author'> Author</label>
        
    </fieldset>

    <button type='submit' class='btn btn-primary'>Search</button>

</form>


@endsection
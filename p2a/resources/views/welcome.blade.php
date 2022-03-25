@extends('layouts/main')

@section('content')
<p><h5>Welcome to SmartBreakfastMenu where we are pleased to serve you. Below is a list of some delicious foods to start your day.</h5></p>
<ul><li>Pancake</li></ul>
<ul><li>Egggs and bacon</li></ul>
<ul><li>Cereal</li></ul>
<ul><li>French-Toast</li></ul>
<ul><li>Waffles</li></ul>
<ul><li>Sausage</li></ul>

<form method='GET' action='/search'>

<h5>Place your order here</h5>

    <fieldset>
        <label for='searchTerms'>
            Search terms:
            <input type='text' name='searchTerms' value='{{ $searchTerms }}'>
        </label>
    </fieldset>

    <fieldset>
        <label>
            Search type:
        </label>
        <br>
<h5>Choose your drink</h5>
<input type="checkbox" id="drink1" name="drink1" value="Coffee">
<label for="drink1"> Coffee</label><br>
<input type="checkbox" id="drink2" name="drink2" value="Tea">
<label for="drink2"> Tea</label><br>
<input type="checkbox" id="drink3" name="drink3" value="Chocolate">
<label for="drink3"> Chocolate</label>
<br>
<input 
            type='radio' 
            name='searchType' 
            id='name' 
            value='name'
            checked>
<label for='name'>Hot</label>
<input 
            type='radio' 
            name='searchType' 
            id='type' 
            value='type' 
        >
        <label for='type'>Cold</label>
        <br>
  <label for="email">Enter your email for coupons:</label>
  <input type="email" id="email" name="email">

  </fieldset>
<button type='submit' class='btn btn-primary'>Search</button>

@if(count($errors) > 0)
    <ul class='alert alert-danger'>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

</form>

@if(!is_null($searchResults))
    @if(count($searchResults) == 0)
        <div class='results alert alert-warning'>
            No results found.
        </div>
    @else
        <div class='results alert alert-primary'>

           {{ count($searchResults) }} 
           {{ Str::plural('Result', count($searchResults)) }}:

            <ul class='clean-list'>
                @foreach($searchResults as $slug => $food)
                <li><a href='/foods/{{ $slug }}'> {{ $food['name'] }}</a></li>
                @endforeach
            </ul>
        </div>
    @endif
@endif

@endsection

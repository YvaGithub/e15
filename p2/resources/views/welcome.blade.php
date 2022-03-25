@extends('layouts/main')

@section('content')
<p><h5>Welcome to SmartBreakfastMenu where we are pleased to serve you. Below is a list of some delicious foods to start your day.</h5></p>
<ul><li>Pancake</li></ul>
<ul><li>Egggs and bacon</li></ul>
<ul><li>Cereal</li></ul>
<ul><li>Omelette</li></ul>
<ul><li>Sandwich</li></ul>
<form method='GET' action='/search'>

<h5>Place your order here</h5>

    <fieldset>
        <label for='searchTerms'>
            Search terms:
            <input type='text' name='searchTerms'>
        </label>
    </fieldset>

    <fieldset>
        <label>
            Search type:
        </label>
        <br>
        <h5>Choose your drink</h5>
<input type="checkbox" id="food1" name="food1" value="Pancake">
<label for="food1"> Coffee</label><br>
<input type="checkbox" id="food2" name="food2" value="Eggs and bacon">
<label for="food2"> Orange Juice</label><br>
<input type="checkbox" id="food3" name="vehicle3" value="Cereal">
<label for="food3"> Chocolate</label><br>
<br>
<input 
            type='radio' 
            name='searchType' 
            id='title' 
            value='title'
            checked
><label for='title'> Title</label>
        
        <input 
            type='radio' 
            name='searchType' 
            id='author' 
            value='author' 
        >
        <label for='author'> Author</label>
        
    </fieldset>
<label for="email">Enter your email for promotion:</label>
<input type="email" id="email" name="email">

    <br>
    <h5>Please tel us about your experience</h5>
<label for="story">Tell us your story:</label>

<textarea id="story" name="story"
          rows="2" cols="22">
</textarea>
 <button type='submit' class='btn btn-primary'>Search</button>
</form>

@endsection

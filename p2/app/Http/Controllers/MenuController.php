<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class MenuController extends Controller
{
    public function index()
    {
        # Load book data using PHP’s file_get_contents
        # We specify the books.json file path using Laravel’s database_path helper
        $foodData = file_get_contents(database_path('foods.json'));

        # Convert the string of JSON text loaded from books.json into an
        # array using PHP’s built-in json_decode function
        $foods = json_decode($foodData, true);

        # Alphabetize the books by title using Laravel’s Arr::sort
        $foods = Arr::sort($foods, function ($value) {
            return $value['name'];
        });

        return view('foods/index', ['foods' => $foods]);
    }

    public function contact(){
        return view('contact');
    }

    public function welcome(){
        return view('welcome');
       
    }



    public function show($slug)
    {
        # Load book data
        # @TODO: This code is redundant with loading the books in the index method
        $foodData = file_get_contents(database_path('foods.json'));
        $foods = json_decode($foodData, true);

        # Narrow down array of books to the single book we’re loading
        $foods = Arr::first($foods, function ($value, $key) use ($slug) {
            return $key == $slug;
        });

        return view('foods/show', [
            'food' => $foods,
        ]);
    }
}
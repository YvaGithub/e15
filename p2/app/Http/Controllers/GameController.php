<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        return 'Showing all games...';   
    }
    
    public function show($name)
    {
        return "This is the details about the game: " . $name;   
    }
    
    public function filter($category, $subcategory)
    {
        return 'Show all books in these categories:'. $category.','. $subcategory;
 
    }
}

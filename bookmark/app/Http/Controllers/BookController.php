<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
class BookController extends Controller

{
    public function index()
    {
        # Load book data using PHP’s file_get_contents
        # We specify the books.json file path using Laravel’s database_path helper
        $bookData = file_get_contents(database_path('books.json'));

        # Convert the string of JSON text loaded from books.json into an
        # array using PHP’s built-in json_decode function
        $books = json_decode($bookData, true);

        # Alphabetize the books by title using Laravel’s Arr::sort
        $books = Arr::sort($books, function ($value) {
            return $value['title'];
        });

        return view('books/index', ['books' => $books]);
    }

    public function show($slug)
    {
        # Load book data
        # @TODO: This code is redundant with loading the books in the index method
        $bookData = file_get_contents(database_path('books.json'));
        $books = json_decode($bookData, true);

        # Narrow down array of books to the single book we’re loading
        $book = Arr::first($books, function ($value, $key) use ($slug) {
            return $key == $slug;
        dump($_GET);
        });

        return view('books/show', [
            'book' => $book,
        ]);
    }

    public function filter($category, $subcategory)
    {
        return 'Show all books in these categories: ' . $category . ' , ' . $subcategory;
    }

    
    
    public function search(Request $request)
    {
# Load our json book data and convert it to an array
       $bookData = file_get_contents(database_path('books.json'));
       $books = json_decode($bookData, true);

         # Get the form nput values (default to null if no values exist)
         $searchType = $request->input('searchType', 'title');
         $searchTerms = $request->input('searchTerms', '');
    

                      
       $searchResults = [];
          foreach ($books as $slug => $book) {
        if (strtolower($book[$searchType]) == strtolower($searchTerms)) {
            $searchResults[$slug] = $book;
        }
    }
    
    # Redirect back to the form with data/results stored in the session
    # Ref: https://laravel.com/docs/responses#redirecting-with-flashed-session-data
    return redirect('/')->with([
        'searchResults' => $searchResults,
        'searchTerms' => $searchTerms,
        'searchType' => $searchType
        
    ]);
    }

}
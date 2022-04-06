<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
class BookController extends Controller

{
    public function search(Request $request){
        $bookData = file_get_contents(database_path('books.json'));
        $books = json_decode($bookData, true);
        
        $searchType = $request->input ('searchType', 'title');
        $searchTerms = $request->input ('searchTerms', '');
       
        $searchResults= [];

        foreach ($books as $slug=> $book) {
            if(strtolower($book[$searchType]) == strtolower($searchTerms )){
                $searchResults[$slug] = $book;
            }
        }
        $book = Arr::first($books, function ($value, $key) use ($slug) {
            return $key == $slug;
        });

        
    
        return redirect('/')->with(['searchResults'=> $searchResults,
      'searchTerms' => $searchTerms,
      'searchType' => $searchType
    ]);
}
    public function index()
    {
       $searchResults = session('searchResults', null);
       $searchTerms = session('searchTerms', null);
       $searchType = session('searchType', null);
       
        return view('pages/welcome', [
            
       $searchResults = session('searchResults'),
       $searchTerms = session('searchTerms'),
       $searchType = session('searchType')
        ]);
    }

    
    public function filter($category, $subcategory)
    {
        return 'Show all books in these categories: ' . $category . ' , ' . $subcategory;
    }

    public function support(){
        return view('pages/support');

    }
}
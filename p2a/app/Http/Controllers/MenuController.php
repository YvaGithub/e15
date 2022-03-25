<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function welcome(){
        $searchResults = session('searchResults', null);
        $searchTerms = session('searchTerms', null);
        $searchType = session('searchType', null);

        return view('welcome', [
            'searchResults'=> $searchResults,
             'searchTerms'=> $searchTerms,
             'searchType'=> $searchType
    ]);
       
    }

    public function contact(){
        return view('contact');
    }

    public function search(Request $request)
    {
        $request->validate([
           'searchTerms'=> 'required'
           

        ]);
        $searchTerms = $request->input('searchTerms', null);
        $searchType = $request->input('searchType', null);
    
        $foodData = file_get_contents(database_path('foods.json'));
        $foods = json_decode($foodData, true);
        
        $searchResults = [];
        foreach ($foods as $slug => $food) {
            if (strtolower($food[$searchType]) == strtolower($searchTerms)) {
                $searchResults[$slug] = $food;
            }
        }
        
        return redirect('/')->with([
            'searchTerms' => $searchTerms,
            'searchType' => $searchType,
            'searchResults' => $searchResults
        ]);
    }




}


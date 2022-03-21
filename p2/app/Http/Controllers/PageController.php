<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function contact(){
        return 'Contact us at mail@game2play.com';
    } 
}

<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AlumniController extends Controller
   
   {
    
      public function create(Request $request)
      {
         return view('members/create');
      }

      public function store(Request $request)
        {
           $request->validate([
          'firstname'=> 'required|max:255',
          'lastname'=> 'required|max:255',
          'attendance_year'=> 'required|digits:4',
          'email'=> 'required',
          'phone_number'=> 'required|digits:10',
          'profile'=> 'required|min:25',
        ]);
        $action = new StoreNewBook((object) $request->all());
        return redirect('/members/create')->with(['flash-alert' => 'A new member was added.']);
    

        dump($request->all());
    

    $member = new Member();
    $member->$firstname = $request->$firstname;
    $member->$lastname = $request->$lastname;
    $member->$attendane_year = $request->$attendane_year;
    $member->$email = $request->$email;
    $member->$phone_number = $request->$phone_number;
    $member->$profile = $request->$profile;
    $member->save();
      
    dump($member);

   }
    public function index()
    {
       return view('members/welcome');
    }

    public function contact()
    {
       return view('members/contact');
    }

    public function members()
    {
      return view('members/members');
    }

    public function about()
    {
       return view('members/about');
   }
}

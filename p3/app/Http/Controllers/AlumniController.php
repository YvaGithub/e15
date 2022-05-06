<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;


class AlumniController extends Controller
     {
    public function create(Request $request)
      {
         return view('members/create');
      }

      public function store(Request $request)
        {
             $request->validate([
            'first_name'=> 'required|max:255',
            'last_name'=> 'required|max:255',
            'attendance_year'=> 'required|digits:4',
            'email'=> 'required|unuque:members,email',
            'phone_number'=> 'required|digits:10',
            'profile'=> 'required|min:25',
          ]);

    $member = new Member();
    $member->first_name = $request->first_name;
    $member->last_name = $request->last_name;
    $member->attendance_year = $request->attendance_year;
    $member->email = $request->email;
    $member->phone_number = $request->phone_number;
    $member->profile = $request->profile;
    $member->save();

    return redirect('members/create')->with(['flash-alert' =>'Welcome new member! Make yourself at home!']);

    }
    
 
 public function home()
    {
       return view('members/welcome');
    }

    public function contact()
    {
       return view('members/contact');
    }

    public function index()
    
    {
      $members = Member::all();
      return view('members/members')->with(['members' => $members]);
    }

    public function about()
    {
       return view('members/about');
   }

   
}

 /**
    * Asks user to confirm they want to delete the book
    * GET /books/{slug}/delete
    */
    public function delete($email)
    {
        $member = Member::findBySlug($email);

        if (!$book) {
            return redirect('/members')->with([
                'flash-alert' => 'Member not found'
            ]);
        }

        return view('members/delete', ['member' => $member]);
    }

    /**
    * Deletes the book
    * DELETE /books/{slug}/delete
    */
    public function destroy($email)
    {
        $member = Member::findBySlug($email);

        # Before we delete this book we first have to delete
        # any relationships connected to this user
        # In this case, that relationship is for our List feature
        # that connects users and books
        $member->users()->detach();

        $member->delete();

        return redirect('/members')->with([
            'flash-alert' => '“' . $member->email . '” was removed.'
        ]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'searchTerms' => 'required',
            'searchType' => 'required'
        ]);

        # Note: If validation fails, it will redirect back to `/`

        # Get form data
        $searchType = $request->input('searchType', 'email');
        $searchTerms = $request->input('searchTerms', '');

        # Do the search
        $searchResults = Member::where($searchType, 'LIKE', '%'.$searchTerms.'%')->get();
            
        # Redirect back to the form with data/results stored in the session
        # Ref: https://laravel.com/docs/responses#redirecting-with-flashed-session-data
        return redirect('/')->with([
            'searchTerms' => $searchTerms,
            'searchType' => $searchType,
            'searchResults' => $searchResults
        ]);
    }

//public function show(Request $request, $email)
   // {
      //  $member = Member::findByEmail($email);

       // if (!$member) {
          //  return redirect('/members')->with(['flash-alert' => 'Member not found.']);
     //   }

       
  // }
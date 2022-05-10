<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;
use App\Models\User;

class AlumniController extends Controller {
    
    public function register(Request $request)
    {
        return view('register');
    }

    public function store(Request $request)
    {
    $request->validate([
        'first_name'=> 'required|max:255',
        'last_name'=> 'required|max:255',
        'attendance_year'=> 'required|digits:4',
        'email'=> 'required|unique:users,email',
        'phone_number'=> 'required|digits:10',
        'profile'=> 'required|min:25',
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->attendance_year = $request->attendance_year;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->profile = $request->profile;
        $user->save();
 
        return redirect ('/register')->with(['flash-alert' =>'Welcome new member! Make yourself at home!']);

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
        $users = User::all();
        return view('members/members')->with(['members' => $users]);
    }

    public function about()
    {
       return view('members/about');
    }

    public function edit(Request $request, $email)
    {
        $user = User::where('email', '=', $email)->first();

        if (!$user) {
            return redirect('/members')->with(['flash-alert' => 'User not found.']);
        }

        return view('members/edit', [
            'user' => $user,
            
        ]);
    }

    /**
    * PUT /books
    */
    public function update(Request $request, $email)
    {
        $user = User::where('email', '=', $email)->first();

        $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'attendance_year' => 'required|digits:4',
        'email' => 'required',
        'phone_number' => 'required|digits:10',
        'profile' => 'required|min:25',
        
    ]);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->attendance_year = $request->attendance_year;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->profile = $request->profile;
        
        $user->save();

        return redirect('/members/'.$email.'/edit')->with(['flash-alert' => 'Your changes were saved.']);
    }


    public function delete($email)
    {
        $user = User::findByEmail($email);

        if (!$user) {
            return redirect('/users')->with([
                'flash-alert' => 'User not found'
            ]);
        }

        return view('users/delete', ['user' => $user]);
    }

    /**
    * Deletes the book
    * DELETE /books/{slug}/delete
    */
    public function destroy($email)
    {
        $user = User::findByEmail($email);

        # Before we delete this book we first have to delete
        # any relationships connected to this user
        # In this case, that relationship is for our List feature
        # that connects users and books
        $user->users()->detach();

        $user->delete();

        return redirect('/members')->with([
            'flash-alert' => '“' . $user->email . '” was removed.'
        ]);
    }



}

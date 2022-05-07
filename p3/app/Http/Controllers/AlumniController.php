<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;

class AlumniController extends Controller {
    
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

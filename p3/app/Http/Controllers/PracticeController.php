<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class PracticeController extends Controller
{
    public function index() {
        dump(Member::all()->toArray());
    }
}

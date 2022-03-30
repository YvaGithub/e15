<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<?php

class ListController extends Controller
{
    public function show()
    {
        return view('list/show');
    }
}

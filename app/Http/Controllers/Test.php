<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    //
    public function servePage (Request $request) {
        return view('sample');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessController extends Controller
{
    public function oa() {
        return view('pages.operating-agreement');
    }
}

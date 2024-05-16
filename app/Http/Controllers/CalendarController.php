<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function josh() {
        return view('pages.calendar');
    }
    public function denise() {
        return view('pages.calendar');
    }
    
}

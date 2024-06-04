<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MenuController;

class CareerController extends Controller
{
    public function index() {
        // $menu = new MenuController;
        // $navlinks = $menu->top();
        // $footerlinks = $menu->footer();
        // $exitlinks = $menu->exit();
        // return view('index', [$navlinks, $footerlinks, $exitlinks]);
        return view('pages.index');
    }
    public function people() {
        return view('pages.people-and-thought-leadership');
    }
    public function training() {
        return view('pages.training-and-professional-development');
    }
    public function higher() {
        return view('pages.higher-fees-and-the-large-check');
    }
    public function support() {
        return view('pages.support-resources-and-tools');
    }
    public function career() {
        return view('pages.career-change');
    }
    public function branding() {
        return view('pages.branding-and-marketing');
    }
    public function locations() {
        return view('pages.our-locations');
    }
    public function five() {
        return view('pages.5-needs-of-cfos');
    }
    public function million() {
        return view('pages.million-dollar-video');
    }
    public function why() {
        return view('pages.our-why');
    }
    public function nda() {
        return view('pages.non-disclosure-agreement');
    }
    
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function top() {        
        $navlinks = [
            ['name'=>'Home', 'url'=>'/'],
            ['name'=>'Our Professionals', 'url'=>'https://www.b2bcfo.com/find-a-b2b-cfo-partner-near-you/'],
            ['name'=>'Regional Sites', 'url'=>'https://www.b2bcfo.com/regional-sites'],
            ['name'=>'About Us', 'url'=>'https://www.b2bcfo.com/about-us'],
            ['name'=>'Careers', 'url'=>'https://career.b2bcfo.com/'],
            ['name'=>'News', 'url'=>'https://news.b2bcfo.com/'],
            ['name'=>'Sponsors', 'url'=>'https://sponsors.b2bcfo.com/'],
            ['name'=>'Store', 'url'=>'https://www.b2bcfo.com/store/'],
            ['name'=>'B2B EXIT', 'url'=>'https://www.b2bexit.com/']
        ];
        return $navlinks;
    }
    public function footer() {        
        $footerlinks = [
            ['name'=>'Contact Us', 'url'=>'https://www.b2bcfo.com/contact-us/'],
            ['name'=>'Public Notice', 'url'=>'https://www.b2bcfo.com/public-notice/'],
            ['name'=>'Our Awards', 'url'=>'https://news.b2bcfo.com/#my-tabs|3'],
            ['name'=>'Legal', 'url'=>'https://www.b2bcfo.com/legal/'],
            ['name'=>'Sitemap', 'url'=>'https://www.b2bcfo.com/sitemap_index.xml']
        ];
        return $footerlinks;
    }
    public function exit() {        
        $exitlinks = [
            ['name'=>'B2B Exit™:', 'url'=>''],
            ['name'=>'Log In', 'url'=>'https://www.b2bexit.com/software/login'],
            ['name'=>'Register', 'url'=>'https://www.b2bexit.com/software/register'],
            ['name'=>'Click here to demo our Patented Exit Software', 'url'=>'https://www.b2bcfo.com/demo/']
        ];
        return $exitlinks;
    }
    public function differenceSquares() {        
      $differenceSquares = [
        ['image'=>'people-thought-leadership.jpg', 'url'=> '/the-b2b-cfo-difference/people-and-thought-leadership'],
        ['image'=>'training-professional-development.jpg', 'url'=> '/the-b2b-cfo-differencetraining-and-professional-development'],
        ['image'=>'higher-fees-large-check.jpg', 'url'=> '/the-b2b-cfo-difference/higher-fees-and-the-large-check'],
        ['image'=>'support-resources-tools.jpg', 'url'=> '/the-b2b-cfo-difference/support-resources-and-tools'],
        ['image'=>'career-change.jpg', 'url'=> '/the-b2b-cfo-difference/career-change'],
        ['image'=>'branding-marketing.jpg', 'url'=> '/the-b2b-cfo-difference/branding-and-marketing'],
        ['image'=>'our-current-locations.jpg', 'url'=> '/the-b2b-cfo-difference/our-locations']            
        ];
      return $differenceSquares;
    }
    public function differenceFooter() {        
        $differenceFooter = [
            ['name'=>'People & Thought Leadership', 'url'=> '/the-b2b-cfo-difference/people-and-thought-leadership'],
            ['name'=>'Training & Professional Development', 'url'=> '/the-b2b-cfo-difference/training-and-professional-development'],
            ['name'=>'Higher Fees & The Large Check', 'url'=> '/the-b2b-cfo-difference/higher-fees-and-the-large-check'],
            ['name'=>'Support Resources & Tools', 'url'=> '/the-b2b-cfo-difference/support-resources-and-tools'],
            ['name'=>'Career Change', 'url'=> '/the-b2b-cfo-difference/career-change'],
            ['name'=>'Branding & MarketingOur ', 'url'=> '/the-b2b-cfo-difference/branding-and-marketing'],
            ['name'=>'Locations', 'url'=> '/the-b2b-cfo-difference/our-locations']            
        ];
        return $differenceFooter;
    }

}
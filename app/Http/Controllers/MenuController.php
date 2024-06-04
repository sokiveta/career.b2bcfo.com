<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function top() {        
        $navlinks = [
            ['name'=>'Home', 'url'=>'http://localhost/career.b2bcfo.com/public/'],
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
            ['name'=>'The B2B CFO® Difference', 'url'=>'http://localhost/career.b2bcfo.com/public/the-b2b-cfo-difference'],
            ['name'=>'Contact Us', 'url'=>'https://www.b2bcfo.com/contact-us/'],
            ['name'=>'Public Notice', 'url'=>'https://www.b2bcfo.com/public-notice/'],
            ['name'=>'Our Awards', 'url'=>'https://news.b2bcfo.com/#my-tabs|3'],
            ['name'=>'Legal', 'url'=>'https://www.b2bcfo.com/legal/'],
            ['name'=>'Sitemap', 'url'=>'https://www.b2bcfo.com/sitemap_index.xml'],
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
    public function videos() {        
        $videolinks = [
            ['name'=>'NDA', 'url'=>'http://localhost/career.b2bcfo.com/public/non-disclosure-agreement'],
            ['name'=>'OA', 'url'=>'http://localhost/career.b2bcfo.com/public/operating-agreement'],
            ['name'=>'Videos:', 'url'=>''],
            ['name'=>'Our Why', 'url'=>'http://localhost/career.b2bcfo.com/public/our-why'],
            ['name'=>'5 Needs of CFOs', 'url'=>'http://localhost/career.b2bcfo.com/public/5-needs-of-cfos'],
            ['name'=>'Million Dollar Video', 'url'=>'http://localhost/career.b2bcfo.com/public/million-dollar-video']
        ];
        return $videolinks;
    }
    public function differenceSquares() {        
      $differenceSquares = [
        [
            "colo"=>"bg-d0",
            "text"=>"People & Thought Leadership",
            "link"=>"http://localhost/career.b2bcfo.com/public/the-b2b-cfo-difference/people-and-thought-leadership"
        ],
        [
            "colo"=>"bg-d1",
            "text"=>"Training & Professional Development",
            "link"=>"http://localhost/career.b2bcfo.com/public/the-b2b-cfo-difference/training-and-professional-development"
        ],
        [
            "colo"=>"bg-d2",
            "text"=>"Higher Fees & The Large Check",
            "link"=>"http://localhost/career.b2bcfo.com/public/the-b2b-cfo-difference/higher-fees-and-the-large-check"
        ],
        [
            "colo"=>"bg-d3",
            "text"=>"Support, Resources & Tools",
            "link"=>"http://localhost/career.b2bcfo.com/public/the-b2b-cfo-difference/support-resources-and-tools"
        ],
        [
            "colo"=>"bg-d4",
            "text"=>"Career Change",
            "link"=>"http://localhost/career.b2bcfo.com/public/the-b2b-cfo-difference/career-change"
        ],
        [
            "colo"=>"bg-d5",
            "text"=>"Branding Branding & Marketing",
            "link"=>"http://localhost/career.b2bcfo.com/public/the-b2b-cfo-difference/branding-and-marketing"
        ],
        [
            "colo"=>"bg-d6",
            "text"=>"Our Current Locations",
            "link"=>"http://localhost/career.b2bcfo.com/public/the-b2b-cfo-difference/our-locations"
        ]
        ];
      return $differenceSquares;
    }
    public function everyThing() {        
        $everyThing = [
            ['name'=>'Home', 'url'=> '/'],
            ['name'=>'Calendar', 'url'=> '/calendar'],
            ['name'=>'Calendar - Josh', 'url'=> '/calendar/josh'],
            ['name'=>'Calendar - Denise', 'url'=> '/calendar/denise'],
            ['name'=>'5 Needs of CFOs', 'url'=> '/5-needs-of-cfos'],
            ['name'=>'Million Dollar Video', 'url'=> '/million-dollar-video'],
            ['name'=>'Our Why', 'url'=> '/our-why'],
            ['name'=>'NDA', 'url'=> '/non-disclosure-agreement'],
            ['name'=>'OA', 'url'=> '/operating-agreement'],
            ['name'=>'The B2B CFO Difference', 'url'=> '/the-b2b-cfo-difference'],
            ['name'=>'People & Thought Leadership', 'url'=> '/the-b2b-cfo-difference/people-and-thought-leadership'],
            ['name'=>'Training & Professional Development', 'url'=> '/the-b2b-cfo-difference/training-and-professional-development'],
            ['name'=>'Higher Fees & The Large Check', 'url'=> '/the-b2b-cfo-difference/higher-fees-and-the-large-check'],
            ['name'=>'Support Resources & Tools', 'url'=> '/the-b2b-cfo-difference/support-resources-and-tools'],
            ['name'=>'Career Change', 'url'=> '/the-b2b-cfo-difference/career-change'],
            ['name'=>'Branding & MarketingOur ', 'url'=> '/the-b2b-cfo-difference/branding-and-marketing'],
            ['name'=>'Locations', 'url'=> '/the-b2b-cfo-difference/our-locations']
        ];
        return $everyThing;
    }

}

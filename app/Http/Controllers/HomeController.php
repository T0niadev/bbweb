<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section1;
use App\Models\Section2;
use App\Models\Section3;
use App\Models\Section4;
use App\Models\AboutUs;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\Gallery;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $section1 = Section1::latest()->first();
        $section2 = Section2::latest()->first();
        $section3 = Section3::latest()->first();
        $section4 = Section4::latest()->first();
        $aboutus = AboutUs::latest()->first();
        $teams = Team::all();
        $testimonials = Testimonial::all();
        $galleries = Gallery::all();
        $blogs = Blog::all();


        return view('welcome', compact('blogs', 'galleries', 'section1', 'section2', 'section3', 'section4', 'aboutus', 'teams', 'testimonials'));
    }
    public function j()
    {
        return view('j');
    }
}

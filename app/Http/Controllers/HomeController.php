<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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


     public function home()
     {
         return view('home');
     }
    public function index()
    {
        $Experiences = DB::table('experiences')->limit('12')->get();
        return view('front.index', compact('Experiences'));
    }

    public function destination($slung)
    {
        $Experiences = DB::table('experiences')->where('slung',$slung)->get();
        return view('front.destination', compact('Experiences'));
    }
    public function contact()
    {
        return view('front.contact');
    }

    public function blog()
    {
        return view('front.blog');
    }

    public function destinations()
    {
        return view('front.destinations');
    }

    public function tanzania()
    {
        $Experiences = DB::table('experiences')->limit('12')->get();
        return view('front.tanzania' , compact('Experiences'));
    }

    public function kenya()
    {
        $Experiences = DB::table('experiences')->limit('12')->get();
        return view('front.kenya', compact('Experiences'));
    }

    public function conferencing()
    {
        return view('front.conferencing');
    }

    public function guide()
    {
        return view('front.guide');
    }

    public function copyright()
    {
        return view('front.copyright');
    }

    public function policy()
    {
        return view('front.privacy');
    }



}

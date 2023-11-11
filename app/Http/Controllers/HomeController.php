<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('front.index');
    }

    public function destination()
    {
        return view('front.destination');
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

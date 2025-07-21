<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function about()
    {
         $name="Mathivathan";
        return view('pages.about',compact('name'));
    }

     public function contact()
    {
        return view('pages.contact');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function blogdetails()
    {
        return view('pages.blog-details');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function error()
    {
        return view('pages.error');
    }

     public function home()
    {
        return view('pages.home');
    }



}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function features()
    {
        return view('features');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactForm(Request $request)
    {
        return view('contact', ['data' => $request]);
    }
}

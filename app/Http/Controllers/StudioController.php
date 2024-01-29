<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function index(){
        return view('home');
    }

    public function services(){
        return view('services');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function team(){
        return view('team');
    }

    public function contact()
    {
        return view('home', ['scrollToContact' => true]);
    }
    
    public function contactForm(Request $request){
        return view('home', ['data' => $request]);
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home() {
        return view('frontend.home');
    }

    public function services() {
        return view('frontend.services');
    }

    public function about() {
        return view('frontend.about');
    }

    public function contact() {
        return view('frontend.contact');
    }

    public function jobs() {
        return view('frontend.jobs');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Show the homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.home');
    }
}

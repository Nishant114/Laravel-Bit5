<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $title = "About us";

        return view('about')->with('title',$title);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class AboutUsController extends Controller
{
    public function aboutUs()
    {

        return view('about-us');
    }
}

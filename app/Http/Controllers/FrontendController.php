<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function indexAboutUs()
    {
        return view("aboutus");
    }
    public function indexContact()
    {
        return view("contact");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function about()
    {
      return view('pages.abouts');
    }
    public function contact()
    {
      return view('pages.contacts');
    }
}

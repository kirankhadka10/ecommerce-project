<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        if (auth()->user()->role == "Admin") {
            return redirect('/admin');
        }
        return redirect('/');
    }
}

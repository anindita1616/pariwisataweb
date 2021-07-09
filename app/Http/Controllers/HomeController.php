<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.homepage');
    }
    public function redirects()
    {
        $role = Auth::user()->role;
        if ($role == 'admin') {
            return view('dashboard');
        } else {
            return view('front.homepage');
        }
    }
}

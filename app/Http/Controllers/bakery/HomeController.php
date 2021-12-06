<?php

namespace App\Http\Controllers\bakery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('bakery.test.demo');
    }
    public function admin()
    {
        return view('admin.demo.test');
    }
    public function signin()
    {
        return view('loginform.view.signin');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatestNewsController extends Controller
{
    public function index()
    {
        return view('latestnews');
    }
}
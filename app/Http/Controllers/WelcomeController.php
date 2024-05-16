<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $item = DB::table('_category')->get();
        $our_products = DB::table('our_products')->get();

        return view('welcome', [
            '_category' => $item,
            'our_products' => $our_products,
        ]);
    }
}

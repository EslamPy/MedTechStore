<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index()
    {
        $result = DB::table('_category')->get();

        return view('shop', ['_category' => $result]);
    }
}

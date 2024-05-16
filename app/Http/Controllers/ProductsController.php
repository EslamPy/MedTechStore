<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $items = DB::table('_category')->get();

        return view('Products', ['_category' => $items]);
    }
}

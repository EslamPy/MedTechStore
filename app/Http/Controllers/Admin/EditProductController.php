<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditProductController extends Controller
{
    public function index()
    {
        return view('Admin.edit-product');
    }
}

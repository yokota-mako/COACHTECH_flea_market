<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FleaMarketController extends Controller
{
    public function index()
    {
        return view('index');
    }
}

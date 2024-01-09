<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Comic;

class HomeController extends Controller
{
    public function index()
    {
        $data = Comic::inRandomOrder()->limit(5)->get();
        // $products = Product::inRandomOrder()->limit(5)->get();
        // dd($products);
        return view('home', compact('data'));
    }
}

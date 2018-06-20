<?php

namespace App\Http\Controllers;
 
use App\Http\Requests;
use Illuminate\Http\Request;
 
class ProductController extends Controller
{
   /**
    * Show the index page.
    *
    * @var App\Product $products
    * @return Illuminate\View\View
    */
    public function index()
    {
        $products = \App\Product::all();
        return view('index', compact('products'));
    }
}
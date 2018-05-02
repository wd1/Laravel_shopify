<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function getHome()
    {
        return redirect("/login");
        // return view('admin.pages.shopify_link');
    }
}

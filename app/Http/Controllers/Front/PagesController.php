<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{

    public function getHome()
    {
        return redirect("/login");
        // return view('admin.pages.shopify_link');
    }

    public function getAPIV1(Request $request)
    {
        $apikey = $request->input('key');
        
        if(Auth::user()){
            echo json_encode(auth()->user());
        } else {
            $users =  User::all();
            foreach ($users as $user) {
                // echo $user->apikey;
                if($user->apikey == $apikey) {
                    echo json_encode($user);
                }
            }
        }
    }
}

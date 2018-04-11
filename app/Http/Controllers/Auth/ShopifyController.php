<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ShopifyController extends Controller
{
    public function access(Request $request)
    {
        $shop = '';

        if(Session:has('access_token'))
        {
            $shop = $request->session()->get('shop');
            $access_token = $request->session()->get('access_token');
            $shopify = App::make('ShopifyAPI',[
                'API_KEY'     =>
                'API_SECRET'  =>
                'SHOP_DOMAIN' =>$shop,
                'ACCESS_TOKEN'=>$access_token
            ]);

            try{
                $call = $shopify->call(['URL'=>'shop.json', 'METHOD'=>'GET']);
            }
            catch (Exception e) 
            {
                $call = $e->getMessage();
            }
            return view('shopify.index', compact('call'));
        } else {
            if (isset($_GET['shop']) && $_GET['shop'] !=null )
            {
                session(['shop' => $_GET['shop']]);
                $shop = $_GET['shop'];
                return $this->doAuth($shop);
            } else {
                return view('welcome');
            }
        }
    }

}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class ShopifyController extends Controller
{
    public function access(Request $request)
    {
        $shop = '';

        if(Session::has('access_token'))
        {
            $shop = $request->session()->get('shop');
            $access_token = $request->session()->get('access_token');
            $shopify = \App::make('ShopifyAPI',[
                'API_KEY'     => '523993ed46a672f471f10a40859e8509',
                'API_SECRET'  => '1a1fe365c8e59d9f1ce47ed2637b9c7c',
                'SHOP_DOMAIN' =>$shop,
                'ACCESS_TOKEN'=>$access_token
            ]);

            try{
                $call = $shopify->call(['URL'=>'shop.json', 'METHOD'=>'GET']);
            }
            catch (Exception $e) 
            {
                $call = $e->getMessage();
            }
            // return redirect()->route('admin.dashboard');
            // if ($this->auth->attempt([
            //     'username'     => 'aoto.daiki@yandex.com',
            //     'password'  => 'asdf1234',
            //     'activated'  => 1,
            // ], false)) {

                return view('admin.pages.dashboard');
                // return redirect('/');
            // } else {

            //     return view('auth.login');
            // }
            // return view('auth.login');
            // return view('shopify.index', compact('call'));
        } else {
            if (isset($_GET['shop']) && $_GET['shop'] !=null )
            {
                session(['shop' => $_GET['shop']]);
                $shop = $_GET['shop'];
                return $this->doAuth($shop);
            } else {
                // return view('auth.login');
                return redirect('/login');
            }
        }
    }
    public function doAuth($shop)
    {
        $shopify = \App::make('ShopifyAPI',[
            'API_KEY'     => '523993ed46a672f471f10a40859e8509',
            'API_SECRET'  => '1a1fe365c8e59d9f1ce47ed2637b9c7c',
            'SHOP_DOMAIN' =>$shop,
            'ACCESS_TOKEN'=>''
        ]);
        $permission_url = $shopify->installURL(
            [
                'permissions' => array('read_orders','write_orders','read_products','write_products','read_customers','write_customers'),
                'redirect' => 'https://nymbl.io/dashboard/register_login'
            ]
        );
        // return view('auth.login');
        return view('auth.escapeIFrame', ['installUrl' => $permission_url]);
    }

    public function authCallback()
    {
        if (isset($_GET['code']))
        {
            $shop = $_GET['shop'];
            $shopify = \App::make('ShopifyAPI',[
                'API_KEY'     => '523993ed46a672f471f10a40859e8509',
                'API_SECRET'  => '1a1fe365c8e59d9f1ce47ed2637b9c7c',
                'SHOP_DOMAIN' =>$shop,
                'ACCESS_TOKEN'=>''
            ]);

            $access_token = $shopify->getAccessToken($_GET['code']);
            session(['shop' => $shop, 'access_token' => $accessToken]);

            try
            {
                $shopinfo = $shopify->call(['URL' => 'shop.json', 'METHOD' => 'GET']);
            }
            catch (Exception $e)
            {
                $shopinfo = $e->getMessage();
            }

            $shop = Shop::firstOrNev(['name' => $shop]);
            $shop->name = Session::get('shop');
            $shop->access_token = $accessToken;
            $shop->shop_name = $shopinfo->shop->name;
            $shop->email = $shopinfo->shop->email;
            $shop->owner = $shopinfo->shop->shop_owner;
            $shop->save();

            // return redirect('/');
            return redirect('/login');
            // return view('auth.login');
        }
    }

    public function linkShop()
    {
            //https://zacshopify.auth0.com/authorize?client_id=39N7cl60QG2JNHuPNh64kZXlLWFm7Cp9&response_type=code&connection=shopify&prompt=consent&redirect_uri=https://manage.auth0.com/tester/callback?connection=shopify&scope=openid%20profile
            $shop = 'demostore1-2.myshopify.com';
            $shopify = \App::make('ShopifyAPI',[
                'API_KEY'     => '523993ed46a672f471f10a40859e8509',
                'API_SECRET'  => '1a1fe365c8e59d9f1ce47ed2637b9c7c',
                'SHOP_DOMAIN' =>$shop,
                'ACCESS_TOKEN'=>''
            ]);

            $access_token = $shopify->getAccessToken('aaa');
            session(['shop' => $shop, 'access_token' => $accessToken]);

            try
            {
                $shopinfo = $shopify->call(['URL' => 'shop.json', 'METHOD' => 'GET']);
            }
            catch (Exception $e)
            {
                $shopinfo = $e->getMessage();
            }

            $shop = Shop::firstOrNev(['name' => $shop]);
            $shop->name = Session::get('shop');
            $shop->access_token = $accessToken;
            $shop->shop_name = $shopinfo->shop->name;
            $shop->email = $shopinfo->shop->email;
            $shop->owner = $shopinfo->shop->shop_owner;
            $shop->save();

            // return redirect('/');
            // return view('auth.login');
            return redirect('/login');

       
    }
}

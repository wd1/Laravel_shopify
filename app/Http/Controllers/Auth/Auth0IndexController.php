<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Auth0IndexController extends Controller
{
    /**
     * Redirect to the Auth0 hosted login page
     * 
     * @return mixed
     */
    public function login()
    {
        //https://zacshopify.auth0.com/authorize?client_id=39N7cl60QG2JNHuPNh64kZXlLWFm7Cp9&response_type=code&connection=shopify&prompt=consent&redirect_uri=https://manage.auth0.com/tester/callback?connection=shopify&scope=openid%20profile
        //https://zacshopify.auth0.com/authorize?response_mode=query&scope=openid%20email%20email_verified&response_type=code&redirect_uri=http%3A%2F%2Flocalhost%2Fauth0%2Fcallback&client_id=dc0d7RQ8YrxiaZjRxk9MJJqwaN3eYBC8&state=5adf47a3985229.28057435
        // return \App::make('auth0')->login(null, null, ['scope' => 'openid email email_verified'], 'code');
        // return redirect('/user');
        // return redirect('https://apps.shopify.com/nymbl');
        // return redirect('https://zacshopify.auth0.com/authorize?client_id=dc0d7RQ8YrxiaZjRxk9MJJqwaN3eYBC8&amp;connection=shopify&amp;prompt=consent&amp;redirect_uri=https://apps.shopify.com/nymbl');
        $shopify = \App::make('ShopifyAPI',[
            'API_KEY'     => '523993ed46a672f471f10a40859e8509',
            'API_SECRET'  => '1a1fe365c8e59d9f1ce47ed2637b9c7c',
            'SHOP_DOMAIN' =>'demostore1-2.myshopify.com',
            'ACCESS_TOKEN'=>''
        ]);
        $permission_url = $shopify->installURL(
            [
                'permissions' => array('read_orders','write_orders','read_products','write_products','read_customers','write_customers'),
                'redirect' => 'https://apps.shopify.com/nymbl'
            ]
        );
        // return view('auth.login');
        return view('auth.escapeIFrame', ['installUrl' => $permission_url]);
    }

    /**
     * Log out of Auth0
     * 
     * @return mixed
     */
    public function logout()
    {
        \Auth::logout();
        return  \Redirect::intended('/');
    }
}

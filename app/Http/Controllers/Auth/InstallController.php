<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class InstallController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Auth guard
     *
     * @var
     */
    protected $auth;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * LoginController constructor.
     * @param Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->auth = $auth;
        $sh = \App::make('ShopifyAPI', ['API_KEY' => '1c06f823f80fe177c960e57f9424f04f', 'API_SECRET' => '954609206564ee424552f5849dc8c444', 'SHOP_DOMAIN' => 'nymbltest.myshopify.com', 'ACCESS_TOKEN' => '']);
        $authorization_uri = $sh->installURL([
            'permissions' => array('write_orders', 'write_products'),
            'redirect' => 'http://nymbl.io/dashboard/'  // update this to where Shopify should redirect the user
        ]);
        echo sprintf('<a href=\'%s\'>Shopify Login</a>', $authorization_uri);
    }

}

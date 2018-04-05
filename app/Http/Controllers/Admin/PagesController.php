<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function getDashboard()
    {
        $sh = \App::make('ShopifyAPI', ['API_KEY' => '1c06f823f80fe177c960e57f9424f04f', 'API_SECRET' => '954609206564ee424552f5849dc8c444', 'SHOP_DOMAIN' => 'nymbltest.myshopify.com', 'ACCESS_TOKEN' => '']);
        $authorization_uri = $sh->installURL([
            'permissions' => array('write_orders', 'write_products'),
            'redirect' => 'https://nymbl.io/dashboard'  // update this to where Shopify should redirect the user
        ]);
        echo sprintf('<a href=\'%s\'>Shopify Login</a>', $authorization_uri);
        // $sh = App::make('ShopifyAPI', ['API_KEY' => '', 'API_SECRET' => '', 'SHOP_DOMAIN' => '']);
        // $sh = \App::make('ShopifyAPI', ['API_KEY' => '1c06f823f80fe177c960e57f9424f04f', 'API_SECRET' => '954609206564ee424552f5849dc8c444', 'SHOP_DOMAIN' => 'nymbltest.myshopify.com', 'ACCESS_TOKEN' => '']);
        // try
        // {
        //     // $verify = $sh->verifyRequest(Input::all());
        //     // if ($verify)
        //     {
        //         $code = 'accesscode';
        //         $accessToken = $sh->getAccessToken($code);
        //     }
        //     // else
        //     // {
        //     //     // Issue with data
        //     // }

        // }
        // catch (Exception $e)
        // {
        //     echo '<pre>Error: ' . $e->getMessage() . '</pre>';
        // }
        // return view('admin.pages.dashboard');
    }
	
	public function getBlank()
    {
        return view('admin.pages.blank');
    }
}

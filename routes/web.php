<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',         ['as' => 'front.home',   'uses' => 'Front\PagesController@getHome']);


Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function()
{
    Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'PagesController@getDashboard']);
	Route::get('/blank', ['as' => 'admin.blank', 'uses' => 'PagesController@getBlank']);
});

// auth routes setup
Auth::routes();

Route::get('register_login', ['as' => 'auth.register_login', 'uses' => 'Auth\RegisterController@getRegister_login']);
// registration activation routes
Route::get('activation/key/{activation_key}', ['as' => 'activation_key', 'uses' => 'Auth\ActivationKeyController@activateKey']);
Route::get('activation/resend', ['as' =>  'activation_key_resend', 'uses' => 'Auth\ActivationKeyController@showKeyResendForm']);
Route::post('activation/resend', ['as' =>  'activation_key_resend.post', 'uses' => 'Auth\ActivationKeyController@resendKey']);

// username forgot_username
Route::get('username/reminder', ['as' =>  'username_reminder', 'uses' => 'Auth\ForgotUsernameController@showForgotUsernameForm']);
Route::post('username/reminder', ['as' =>  'username_reminder.post', 'uses' => 'Auth\ForgotUsernameController@sendUserameReminder']);
Route::get('/show_products', function() { 
    // Code put here will run when you navigate to /show_products 
    // This creates an instance of the Shopify API wrapper and 
    // authenticates our app. 
    $shopify = App::make('ShopifyAPI', [ 
        'API_KEY'       => '523993ed46a672f471f10a40859e8509', 
        'API_SECRET'    => '1a1fe365c8e59d9f1ce47ed2637b9c7c', 
        'SHOP_DOMAIN'   => 'pavlotest.myshopify.com', 
        'ACCESS_TOKEN'  => '' 
    ]); 

    // Continue.. 
}); 
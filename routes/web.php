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


Route::group(['namespace' => 'Admin', 'prefix' => '', 'middleware' => 'auth'], function()
{
    Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'PagesController@getDashboard']);
	Route::get('/blank', ['as' => 'admin.blank', 'uses' => 'PagesController@getBlank']);
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/login', 'Auth\ShopifyController@access');
    Route::get('authCallback', 'Auth\ShopifyController@authCallback');
    Route::get('linkShop', 'Auth\ShopifyController@linkShop');
    Route::post('/upload', ['as' =>  'upload', 'uses' => 'Admin\PagesController@upload']);
    // Route::get('/upload', ['as' =>  'upload', 'uses' => 'Admin\PagesController@upload']);
});

// auth routes setup
Auth::routes();

Route::get('/auth0login', 'Auth\Auth0IndexController@login' )->name( 'auth0login' );
Route::get('/auth0logout', 'Auth\Auth0IndexController@logout' )->name( 'auth0logout' )->middleware('auth');

Route::get( '/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );
Route::get('register_login', ['as' => 'auth.register_login', 'uses' => 'Auth\LoginController@getRegister_login']);
// registration activation routes
Route::get('activation/key/{activation_key}', ['as' => 'activation_key', 'uses' => 'Auth\ActivationKeyController@activateKey']);
Route::get('activation/resend', ['as' =>  'activation_key_resend', 'uses' => 'Auth\ActivationKeyController@showKeyResendForm']);
Route::post('activation/resend', ['as' =>  'activation_key_resend.post', 'uses' => 'Auth\ActivationKeyController@resendKey']);

// username forgot_username
Route::get('username/reminder', ['as' =>  'username_reminder', 'uses' => 'Auth\ForgotUsernameController@showForgotUsernameForm']);
Route::post('username/reminder', ['as' =>  'username_reminder.post', 'uses' => 'Auth\ForgotUsernameController@sendUserameReminder']);


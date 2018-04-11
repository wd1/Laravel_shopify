<?php
$sh = \App::make('ShopifyAPI', ['API_KEY' => '1c06f823f80fe177c960e57f9424f04f', 'API_SECRET' => '954609206564ee424552f5849dc8c444', 'SHOP_DOMAIN' => 'nymbltest2.myshopify.com', 'ACCESS_TOKEN' => '']);
$authorization_uri = $sh->installURL([
	'permissions' => array('write_orders', 'write_products'),
	'redirect' => 'https://nymbl.io/dashboard/register_login'  // update this to where Shopify should redirect the user
]);
// echo sprintf('<a href=\'%s\'>Shopify Login</a>', $authorization_uri);
header('Location: '.$authorization_uri);
die();
// $sh = \App::make('ShopifyAPI', ['API_KEY' => '1c06f823f80fe177c960e57f9424f04f', 'API_SECRET' => '954609206564ee424552f5849dc8c444', 'SHOP_DOMAIN' => 'nymbltest.myshopify.com', 'ACCESS_TOKEN' => '']);
// try
// {
// 	// $verify = $sh->verifyRequest(Input::all());
// 	// if ($verify)
// 	{
// 		$code = 'accesscode';
// 		$accessToken = $sh->getAccessToken($code);
// 		echo $accessToken;
// 	}
// 	// else
// 	// {
// 	//     // Issue with data
// 	// }

// }
// catch (Exception $e)
// {
// 	echo '<pre>Error: ' . $e->getMessage() . '</pre>';
// }
?>
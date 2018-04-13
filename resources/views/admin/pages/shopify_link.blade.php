<?php
$sh = \App::make('ShopifyAPI', ['API_KEY' => '523993ed46a672f471f10a40859e8509', 'API_SECRET' => '1a1fe365c8e59d9f1ce47ed2637b9c7c', 'SHOP_DOMAIN' => 'Nymblstoretest.myshopify.com', 'ACCESS_TOKEN' => '']);
$authorization_uri = $sh->installURL([
	'permissions' => array('write_orders', 'write_products'),
	// 'redirect' = 'https://nymbltest5.myshopify.com/admin/apps/nymbl.io/dashboard/register_login'
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
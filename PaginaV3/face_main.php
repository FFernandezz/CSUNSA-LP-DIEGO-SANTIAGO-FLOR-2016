<?php
session_start();
require_once ('/facebook-sdk-v5/autoload.php');
$fb = new Facebook\Facebook([
  'app_id' => '1092800427409218',
  'app_secret' => '6c1867a05c35a117eea688375c7f43cd',
  'default_graph_version' => 'v2.6',
  ]);
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // optional
$location ="http://localhost:8083/face/PaginaV3/home.php";

	
try {
	if (isset($_SESSION['facebook_access_token'])) {
		$accessToken = $_SESSION['facebook_access_token'];
	} else {
  		$accessToken = $helper->getAccessToken();
	}
} catch(Facebook\Exceptions\FacebookResponseException $e) {
 	// When Graph returns an error
 	echo 'Graph returned an error: ' . $e->getMessage();
  	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
 	// When validation fails or other local issues
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
  	exit;
 }

 ?>
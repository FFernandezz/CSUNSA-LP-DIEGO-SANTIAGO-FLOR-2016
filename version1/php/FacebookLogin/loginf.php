
<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<?php
/*	FACEBOOK LOGIN BASIC - PHP SDK V4.0
 *	file 			- index.php
 * 	Developer 		- Krishna Teja G S
 *	Website			- http://packetcode.com/apps/fblogin-basic/
 *	Date 			- 27th Sept 2014
 *	license			- GNU General Public License version 2 or later
*/

/* INCLUSION OF LIBRARY FILEs*/

	require_once( 'Facebook4/FacebookSession.php');
	require_once( 'Facebook4/FacebookRequest.php' );
	require_once( 'Facebook4/FacebookResponse.php' );
	require_once( 'Facebook4/FacebookSDKException.php' );
	require_once( 'Facebook4/FacebookRequestException.php' );
	require_once( 'Facebook4/FacebookRedirectLoginHelper.php');
	require_once( 'Facebook4/FacebookAuthorizationException.php' );
	require_once( 'Facebook4/GraphObject.php' );
	require_once( 'Facebook4/GraphUser.php' );
	require_once( 'Facebook4/GraphSessionInfo.php' );
	require_once( 'Facebook4/Entities/AccessToken.php');
	require_once( 'Facebook4/HttpClients/FacebookCurl.php' );
	require_once( 'Facebook4/HttpClients/FacebookHttpable.php');
	require_once( 'Facebook4/HttpClients/FacebookCurlHttpClient.php');

///* USE NAMESPACES */

	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequest;
	use Facebook\FacebookResponse;
	use Facebook\FacebookSDKException;
	use Facebook\FacebookRequestException;
	use Facebook\FacebookAuthorizationException;
	use Facebook\GraphObject;
	use Facebook\GraphUser;
	use Facebook\GraphSessionInfo;
	use Facebook\FacebookHttpable;
	use Facebook\FacebookCurlHttpClient;
	use Facebook\FacebookCurl;
/*PROCESS*/
	//require '/vendor/autoload.php';
	//1.Stat Session
	 session_start();
	//2.Use app id,secret and redirect url
	 $app_id = '1530962373878691';
	 $app_secret = 'e7ccd645125287d8d2ab71026a618c77';
	 $redirect_url='http://localhost:8083/LP/php/FacebookLogin/loginf.php';

	 /*
		hi: Diego Ranilla Gallegos
		Su ID: 1056127771140962
	 */
	 
	 //3.Initialize application, create helper object and get fb sess
	 FacebookSession::setDefaultApplication($app_id,$app_secret);
	 $helper = new FacebookRedirectLoginHelper($redirect_url);
	 $sess = $helper->getSessionFromRedirect();

	//4. if fb sess exists echo name 
	 	
?>
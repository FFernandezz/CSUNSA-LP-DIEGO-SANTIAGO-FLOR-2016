
<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/main.css" />


        <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    	<script type="text/javascript" src="js/cambiarpestanna.js"></script>
		<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
  
		<title>Helios by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<title>FACEBOOK</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
		<style>
			bodyd{
				margin: 100px auto;
				width: 400px;
				text-align: center;
			}
		</style>
	</head>



<?php
/*	FACEBOOK LOGIN BASIC - PHP SDK V4.0
 *	file 			- index.php
 * 	Developer 		- Krishna Teja G S
 *	Website			- http://packetcode.com/apps/fblogin-basic/
 *	Date 			- 27th Sept 2014
 *	license			- GNU General Public License version 2 or later
*/

/* INCLUSION OF LIBRARY FILEs*/

	require_once( 'FacebookLogin/Facebook4/FacebookSession.php');
	require_once( 'FacebookLogin/Facebook4/FacebookRequest.php' );
	require_once( 'FacebookLogin/Facebook4/FacebookResponse.php' );
	require_once( 'FacebookLogin/Facebook4/FacebookSDKException.php' );
	require_once( 'FacebookLogin/Facebook4/FacebookRequestException.php' );
	require_once( 'FacebookLogin/Facebook4/FacebookRedirectLoginHelper.php');
	require_once( 'FacebookLogin/Facebook4/FacebookAuthorizationException.php' );
	require_once( 'FacebookLogin/Facebook4/GraphObject.php' );
	require_once( 'FacebookLogin/Facebook4/GraphUser.php' );
	require_once( 'FacebookLogin/Facebook4/GraphSessionInfo.php' );
	require_once( 'FacebookLogin/Facebook4/Entities/AccessToken.php');
	require_once( 'FacebookLogin/Facebook4/HttpClients/FacebookCurl.php' );
	require_once( 'FacebookLogin/Facebook4/HttpClients/FacebookHttpable.php');
	require_once( 'FacebookLogin/Facebook4/HttpClients/FacebookCurlHttpClient.php');

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
	 $redirect_url='http://localhost:8083/LP/home.html';

	 FacebookSession::setDefaultApplication($app_id,$app_secret);
	 $helper = new FacebookRedirectLoginHelper($redirect_url);
	 $sess = $helper->getSessionFromRedirect();

	//4. if fb sess exists echo name 
?>


	<body >
		
	</body>
</html>



    <body class="homepage">
    	<div id="page-wrapper">
			<!-- Header -->
				<div id="header">
					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo"><img src="images/Logo.png" alt="logo"></a></h1>	
							</header>

							<a href="home.html"><button class="button">Entrar</button></a>


								<button class="btn btn-info"  data-toggle="modal" data-target="#loginfacebook">Registrar</button>

    							<div class="modal fade" id="loginfacebook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    		<div class="modal-dialog">
    			<div class="modal-content">
	    				<div class="modal-header">
	    					<!--button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times</button-->
	    					<h4 style="color:black;text-align: center">Publicar Evento</h4>
	    				</div>
	    				<div class="modal-body" style="color: black">
	    					
	    				</div>
	    				<div class="modal-footer">
	    					<button type="submit"  class="btn btn-primary" onclick="registrar_evento">publicar</button>

						<?php echo "<a href='".$helper->getLoginUrl()."' class='btn btn-primary'>Ingresar Facebok</a>"; ?>
	    					<button  type="button" class="btn btn-primary" data-dismiss="modal">cerrar</button>
	    				</div>
    					</div>
    				</div>
    			</div>

    	<audio class="audio-bg">
		    <!--source src="audio/music.mp3" ubicar musica-->
		</audio>
       	<script src="js/jquery-1.11.3.min.js"></script>
		 <script src="bootstrap/js/bootstrap.min.js"></script>		
    </body>
</html>

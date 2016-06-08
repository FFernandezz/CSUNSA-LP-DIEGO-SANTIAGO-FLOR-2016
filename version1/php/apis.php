<?php
	//require 'FacebookLogin/loginf.php';
	/************FACEBOOK***********************************/
	echo "<p>funciona el primer if</p>";
	//if(isset($sess)){ //si inicio session
	//	echo "<p>funciona el primer if</p>";
	 		//create request object,execute and capture response
		//$request = new FacebookRequest($sess, 'GET', '/me');
		/*$request = new FacebookRequest($sess, 'GET', '/me');
		// from response get graph object
		$response = $request->execute();
		$graph = $response->getGraphObject(GraphUser::className());//original
		// use graph object methods to get user details
		//$graphNode = $response->getGraphNode();
		
		$name= $graph->getName();
		//$email= $graph->getEmail();//pueda que no se muestre debido a que el usiario no quiere que vean
		$id_user =$graph->getId();

		//////echo "hi:  $name</br>";
		//echo " $email";
		//echo "Su ID: $id_user";
		$image = 'https://graph.facebook.com/'.$id_user.'/picture?width=30';
		echo "</br> <img src='$image' /><br><br>";
		//$email = $graph->getProperty('email');
		//echo "your email is $email <br><Br>";	
		/* handle the result */
		//$logoutUrl = 'http://localhost:8083/helios/index.php/logout.php&access_token=0' . $facebook->getAccessToken();

		//echo '</br> <a href='.$helper->getLogoutUrl($sess,$redirect_url).'>Logout with facebook</a>';*/
		//echo "<a href='".$helper->getLogoutUrl($sess,$redirect_url)."' class='btn btn-danger'>Salir Facebok</a>";
	//}else{
	//	echo "<p>funciona el segundo if</p>";
		//else echo login
		//echo '<a href='.$helper->getLoginUrl().'>Login with facebook</a>';
		//echo "'<a href='.$helper->getLoginUrl().' class='btn btn-primary'>Iniciar session con Facebok!</a>";
		//echo "<a href='".$helper->getLoginUrl()."' class='btn btn-primary'>Ingresar Facebok</a>";
	//}

?>
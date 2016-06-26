<?php
    include ("login.php");//es para logearse
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>QueCuentas</title>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <link rel="stylesheet" href="dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/css/font-awesome.css">
        <link rel="stylesheet" href="dist/css/animate.css">
        <link rel="stylesheet" href="dist/css/templatemo_misc.css">
        <link rel="stylesheet" href="dist/css/templatemo_style.css">

        <script src="js/jquery-1.11.3.min.js"></script><!--para el slide-->
        <script src="js/angular.min.js"></script>
        <script src="js/controller.js"></script>

        <script src="dist/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
 
        <div class="site-main" id="sTop">
            <div class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/QueCuentas-1044586538954749/?fref=ts" class="fa fa-facebook"></a></li>
                                <li><a href="https://www.youtube.com/watch?v=gDVCG0VP8NI" class="fa fa-youtube-play"></a></li>
                                <li><a href="#" class="fa fa-vimeo-square"></a></li>
                                
                            </ul>
                        </div> <!-- /.col-md-12 -->
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
                
            </div> <!-- /.site-header -->
            <div class="site-slider">
                <div class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="overlay"></div>
                                <img src="dist/img/fondo2.jpg" alt="">
                                <div class="slider-caption visible-md visible-lg">
                                    <!--h2>QueCuentas <b>?</b></h2>
                                    <p>Registrate y encontraras todas las novedades de tu ciudad...</p-->
                                    <img src="images/Logo.png" style="width:400px;height:340px;margin:auto; position:relative; top:-200px;left:40px">
                                    <br>
                                    <div style="position:relative; top:-200px">

                                    <a href="index2.php" class="slider-btn">Iniciar</a>
                                    <br>
                                    <br>
                                    <button onclick="location.href= <?php echo "'".$loginUrl ."'";?>" style="height: 40px;width: 201px; border-radius:5px"><img src="images/Log_facebook.png" style="height: 45px;width: 202px;position: relative; right:13px;top:-10px" ></button>
                                    </div>    
                                </div>
                            </li>
                            <li>
                                <div class="overlay"></div>
                                <img src="dist/img/fondo4.jpg" alt="">
                                <div class="slider-caption visible-md visible-lg">
                                    <img src="images/Logo.png" style="width:400px;height:340px;margin:auto; position:relative; top:-200px;left:40px">
                                    <br>
                                    <div style="position:relative; top:-200px">

                                    <a href="index2.php" class="slider-btn">Iniciar</a>
                                    <br>
                                    <br>
                                    <button onclick="location.href= <?php echo "'".$loginUrl ."'";?>" style="height: 40px;width: 201px; border-radius:5px"><img src="images/Log_facebook.png" style="height: 45px;width: 202px;position: relative; right:13px;top:-10px"></button>
                                    </div>    
                                </div>
                            </li>
                        </ul>
                    </div> <!-- /.flexslider -->
                </div> <!-- /.slider -->
            </div> <!-- /.site-slider -->
        </div> <!-- /.site-main -->

     
        <script src="dist/js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="dist/js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="dist/js/bootstrap.js"></script>
        <script src="dist/js/plugins.js"></script>
        <script src="dist/js/main.js"></script>

    </body>
</html>
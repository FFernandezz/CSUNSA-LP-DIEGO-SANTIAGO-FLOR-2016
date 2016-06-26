<?php
  include("login.php");//una vez logeado podremos obtener los datos de las personas
?>


<!DOCTYPE html>
<html ng-app="Myfirstapp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>QueCuentas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="css/main.css"> <!-- hoja de estilo -->
  <script src="js/jquery-1.11.3.min.js"></script><!--para el slide-->
  <script src="js/angular.min.js"></script>
  <script src="js/controller_register.js"></script>
  <script src="http://maps.googleapis.com/maps/js"></script>
  <script>
    function initialize(){
      var mapProp = {
        center:new google.maps.LatLng(),
        zoom:5,
      };
    }
  </script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-yellow sidebar-mini" ng-controller="FirstController">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>QC</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>QueCuentas</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Crear un nuevo evento-->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-plus"></i></a>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-danger">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Tienes notificaciones</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
            
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src= <?php echo "'".$image."'" ?> class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $profile['name'] ?> </span> 
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src= <?php echo "'".$image."'"?> class="img-circle" alt="User Image">

                <p>
                   <?php echo $profile['name'] ?>  - Web Developer
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Publicaciones<br>0</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Seguidores<br>0</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Seguidos<br>0</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Ver Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src= <?php echo "'".$image."'"?> class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $profile['name'] ?> </p>
             <!-- Si esta conectado text-success, Online -->
          <p> <?php echo $profile['email'] ?> </p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header"></li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-home"></i> <span>Home</span> 
          </a>
        </li>
        <li >
          <a href="#">
            <i class="fa fa-heart"></i>
            <span>Favoritos</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-group"></i>
            <span>Seguidos</span>
          </a>
        </li>
        <li>
          <a href="nuevo_evento.php">
            <i class="fa fa-plus"></i> <span>Crear Evento</span>
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="contenedor">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Eventos Populares
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="index2.html"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Seguidos</li>
      </ol>

      <table id="tabla">
                    <tr>
                      <td ng-repeat="post in posts">
                      <section class="evento">
                        <section class="flip">
                        <section class="front"><img src="images/eventos/clei.jpg" alt="Norway" style="width:240px ;height: 200px;"></section>
                          <section class="back"> 
                            <p>{{post.Portada}}</p>
                            <button class="boton3" id="even1" data-toggle="modal" data-target={{"#"+post.Id_evento}}> info</button>
                          </section>          
                        </section>
                      <section class="titulo">
                        {{post.Titulo}} 
                       
                      </section>
                      </section>
                      </td>
                    </tr>
      </table>
    </section>
        
    <!-- Main content aqui escribir lo de los eventos principal-->
      
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

</div>

<div ng-repeat="post in posts" id="informacion">
        <div class="modal fade" id={{post.Id_evento}} tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 style="color:black;text-align: center">{{post.Titulo}}</h4>
            </div>
            <div class="modal-body" style="color: black">
              <div class="form-group">
                <p class="data_descript">Descripción:</p>
                <p>{{post.Descripcion}}</p>
              </div>
              <div class="form-group">
                <p class="data_descript">Dirección:</p>
                <p>{{post.Direccion}}</p>
              </div>
              <div class="form-group">
                <p class="data_descript">Hora:</p>
                <p>{{post.Hora}}</p>
              </div>
              <div class="form-group">
                <p class="data_descript">Fecha:</p>
                <p>{{post.Fecha}}</p>
              </div>
            </div>
            <div class="modal-footer">
              <button  type="button" class="btn btn-primary" data-dismiss="modal">cerrar</button>
            </div>
          </div>
        </div>
      </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

<?php 

require_once("connection/conn.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Portal Realbase | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
        -->
        <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="starter.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>P</b>RB</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Portal</b>Realbase</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <?php
          include("navbar_right.php");
        ?>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo utf8_encode($_SESSION['fullname']); ?></p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
        <!-- /.search form -->

        <?php
        include("menu.php")
        ?>
        <!-- BEGIN LUIS ALMEIDA -->
        <!-- Sidebar Menu -->
      <!--   <ul class="sidebar-menu">
      <li class="header">Menu</li> -->
      <!-- Optionally, you can add icons to the links -->
        <!--   <li class="active"><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

          <li><a href="#"><i class="fa fa-shopping-cart"></i> <span>Compras</span></a></li>

          <li><a href="#"><i class="fa fa-balance-scale"></i> <span>Comercial & Vendas</span></a></li>

          <li><a href="#"><i class="fa fa-cogs"></i> <span>Produção</span></a></li>

          <li><a href="#"><i class="fa fa-bank"></i> <span>Gestão</span></a></li>

          <li><a href="#"><i class="fa fa-legal"></i> <span>Auditorias</span></a></li>

          <li><a href="#"><i class="fa fa-file-o"></i> <span>Ocorrências</span></a></li>
        -->

          <!-- <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Comercia</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="#">Link in level 2</a></li>
              <li><a href="#">Link in level 2</a></li>
            </ul>
          </li> -->
<!--         </ul>
<--></-->

<!-- END LUIS ALMEIDA -->
<!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Bem vindo ao Portal Realbase <br>
      <small>Recreating DNA</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
<!--       <li class="active">Here</li>
 -->    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <br><br><br>
 <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
      <a href="http://www.realbase.pt/filesender" target="_blank">
        <span class="info-box-icon bg-aqua"><i class="fa fa-send"></i></span>
        <div class="info-box-content">
          <span class="info-box-text"></span>
          <span class="info-box-number">FILESENDER</a></span>
          <span class="info-box-text">Plataforma de gestão de ficheiros</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
      <a href="http://www.realbase.pt/calc" target="_blank">
        <span class="info-box-icon bg-aqua"><i class="fa fa-calculator"></i></span>
        <div class="info-box-content">
          <span class="info-box-text"></span>
          <span class="info-box-number">CALCULADORA</a></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
      <a href="http://www.realbase.pt/suporte" target="_blank">
        <span class="info-box-icon bg-aqua"><i class="fa  fa-medkit"></i></span>
        <div class="info-box-content">
          <span class="info-box-text"></span>
          <span class="info-box-number">SUPORTE | TICKETS</a></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>
     <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
      <a href="http://www.realbase.pt/epace" target="_blank">
        <span class="info-box-icon bg-aqua"><i class="fa fa-gears"></i></span>
        <div class="info-box-content">
          <span class="info-box-text"></span>
          <span class="info-box-number">PACE</a></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
      <a href="http://www.realbase.pt" target="_blank">
        <span class="info-box-icon bg-aqua"><i class="fa fa-safari"></i></span>
        <div class="info-box-content">
          <span class="info-box-text"></span>
          <span class="info-box-number">SITE REALBASE</a></span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>
   

    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="info-box">
      <a href="http://localhost:8888/prbnov/manutencoes.php" target="_blank">
        <span class="info-box-icon bg-aqua"><i class="fa fa-shopping-cart"></i></span>
        <div class="info-box-content">
          <span class="info-box-text"></span>
          <span class="info-box-number">MANUTENÇÃO</a></span>
           <span class="info-box-text">Recursos Patrimoniais</span>
        </div><!-- /.info-box-content -->
      </div><!-- /.info-box -->
    </div>
   
    
  This is a simple text sentece.



<!-- Your Page Content Here -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="pull-right hidden-xs">
    SGQ&CoC
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; 2016 <a href="#">Portal Realbase</a>.</strong> Todos os direitos reservados.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane active" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript::;">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>  
            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
              <p>Will be 23 on April 24th</p>
            </div>
          </a>
        </li>
      </ul><!-- /.control-sidebar-menu -->

      <h3 class="control-sidebar-heading">Tasks Progress</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript::;">
            <h4 class="control-sidebar-subheading">
              Custom Template Design
              <span class="label label-danger pull-right">70%</span>
            </h4>
            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
            </div>
          </a>
        </li>
      </ul><!-- /.control-sidebar-menu -->

    </div><!-- /.tab-pane -->
    <!-- Stats tab content -->
    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <form method="post">
        <h3 class="control-sidebar-heading">General Settings</h3>
        <div class="form-group">
          <label class="control-sidebar-subheading">
            Report panel usage
            <input type="checkbox" class="pull-right" checked>
          </label>
          <p>
            Some information about this general settings option
          </p>
        </div><!-- /.form-group -->
      </form>
    </div><!-- /.tab-pane -->
  </div>
</aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
      immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
       </body>
       </html>

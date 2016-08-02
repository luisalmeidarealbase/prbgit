<?php 

require_once("connection/conn.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if (!isset($_SESSION['fullname'])) {
	header('location: index.php');
}

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
						<p><?php echo utf8_decode($_SESSION['fullname']); ?></p>
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

	<div class="box box-info collapsed-box">
		<div class="box-header with-border">
			<h3 class="box-title">Instruções de trabalho</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
				<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
			</div>
		</div><!-- /.box-header -->

		<div class="box-body" style="display: none;">


			<!-- content here please -->
			<div class="col-md-8">
              <!-- <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Obsoletos</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
              	<div class="box-group" id="accordion">
              		<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
              		<div class="panel box box-primary">
              			<div class="box-header with-border">
              				<h4 class="box-title">
              					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class="">

              						<?php 
              						
              						$dir = "modelos_obsoletos/";

              						$filesQuantity = new FilesystemIterator($dir, FilesystemIterator::SKIP_DOTS);
              						//printf("There were %d Files", iterator_count($fi));

              						?>
              						Instruções de trabalho - <?php echo iterator_count($filesQuantity)." ficheiros";?>
              					</a>
              				</h4>
              			</div>
              			<div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true">
              				<div class="box-body">
              					<div class="box-body">
              						<div class="table-responsive">
              							<table class="table no-margin">
              								<thead>
              									<tr>
              										<th>Nome documento</th>
              										<th>Extensão</th>
              										<th>Status</th>
              										
              									</tr>
              								</thead>
              								<tbody>
              									<?php

              									$dir = "modelos_obsoletos/";

									// Open a directory, and read its contents
              									if (is_dir($dir)){
              										if ($dh = opendir($dir)){

              											while (($file = readdir($dh)) !== false){

              												$ext = substr($file, strpos($file, ".") + 1);
              												$mark    = '.';
              												$fileName =  strstr($file, $mark, true);


              												?>
              												<tr>
              													<td><?php echo $fileName;?></td>
              													<td><?php echo $ext;?></td>
              													<td><a href="<?php echo $dir.$file; ?>"><span class="label label-info">Ver / Download</span></a></td>

              												</tr>
              												<?php	
              											}
              											closedir($dh);
              										}
              									}
              									?>
              								</tbody>
              							</table>
              						</div><!-- /.table-responsive -->
              					</div>




              				</div>
              			</div>
              		</div>
              		<div class="panel box box-primary">
              			<div class="box-header with-border">
              				<h4 class="box-title">
              					<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
              						Modelos
              					</a>
              				</h4>
              			</div>
              			<div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
              				<div class="box-body">
              					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              				</div>
              			</div>
              		</div>
              		<div class="panel box box-primary">
              			<div class="box-header with-border">
              				<h4 class="box-title">
              					<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
              						Procedimentos
              					</a>
              				</h4>
              			</div>
              			<div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
              				<div class="box-body">
              					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              				</div>
              			</div>
              		</div>
              	</div>
              </div><!-- /.box-body -->
          </div><!-- /.box -->
      </div>

  </div><!-- /.box-body -->

  <div class="box-footer clearfix" style="display: none;">
     <!--  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
     <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a> -->
 </div><!-- /.box-footer -->
 
 <div class="box box-info collapsed-box">
 	<div class="box-header with-border">
 		<h3 class="box-title">Modelos</h3>
 		<div class="box-tools pull-right">
 			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
 			<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
 		</div>
 	</div><!-- /.box-header -->

 	<div class="box-body" style="display: none;">


 		<!-- content here please -->
 		<div class="col-md-6">
              <!-- <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Obsoletos</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
              	<div class="box-group" id="accordion">
              		<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
              		<div class="panel box box-primary">
              			<div class="box-header with-border">
              				<h4 class="box-title">
              					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class="">
              						Modelos
              					</a>
              				</h4>
              			</div>
              			<div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true">
              				<div class="box-body">
              					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              				</div>
              			</div>
              		</div>
              		<div class="panel box box-primary">
              			<div class="box-header with-border">
              				<h4 class="box-title">
              					<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
              						Modelos
              					</a>
              				</h4>
              			</div>
              			<div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
              				<div class="box-body">
              					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              				</div>
              			</div>
              		</div>
              		<div class="panel box box-primary">
              			<div class="box-header with-border">
              				<h4 class="box-title">
              					<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
              						Procedimentos
              					</a>
              				</h4>
              			</div>
              			<div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
              				<div class="box-body">
              					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              				</div>
              			</div>
              		</div>
              	</div>
              </div><!-- /.box-body -->
          </div><!-- /.box -->
      </div>

  </div><!-- /.box-body -->

  <div class="box-footer clearfix" style="display: none;">
     <!--  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
     <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a> -->
 </div><!-- /.box-footer -->
 
 <div class="box box-info collapsed-box">
 	<div class="box-header with-border">
 		<h3 class="box-title">Procedimentos</h3>
 		<div class="box-tools pull-right">
 			<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
 			<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
 		</div>
 	</div><!-- /.box-header -->

 	<div class="box-body" style="display: none;">


 		<!-- content here please -->
 		<div class="col-md-6">
              <!-- <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Obsoletos</h3>
              </div><!-- /.box-header -->
              <div class="box-body">
              	<div class="box-group" id="accordion">
              		<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
              		<div class="panel box box-primary">
              			<div class="box-header with-border">
              				<h4 class="box-title">
              					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" class="">
              						Instruções de trabalho
              					</a>
              				</h4>
              			</div>
              			<div id="collapseOne" class="panel-collapse collapse in" aria-expanded="true">
              				<div class="box-body">
              					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              				</div>
              			</div>
              		</div>
              		<div class="panel box box-primary">
              			<div class="box-header with-border">
              				<h4 class="box-title">
              					<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
              						Modelos
              					</a>
              				</h4>
              			</div>
              			<div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
              				<div class="box-body">
              					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              				</div>
              			</div>
              		</div>
              		<div class="panel box box-primary">
              			<div class="box-header with-border">
              				<h4 class="box-title">
              					<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
              						Procedimentos
              					</a>
              				</h4>
              			</div>
              			<div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
              				<div class="box-body">
              					Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              				</div>
              			</div>
              		</div>
              	</div>
              </div><!-- /.box-body -->
          </div><!-- /.box -->
      </div>

  </div><!-- /.box-body -->

  <div class="box-footer clearfix" style="display: none;">
     <!--  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
     <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a> -->
 </div><!-- /.box-footer -->
 
</div>



</div>






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
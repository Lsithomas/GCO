<?php
session_start();
if (!isset($_SESSION['login'])) {
header ('Location: login.php');
exit();
}
include ('config.php');
$result = mysql_query("SELECT iduser,login,images,nom,prenom,place FROM membre WHERE login = '".$_SESSION['login']. "'") or die(mysql_error());
$donnees_login = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title>LSI - GESTION COMMERCIAL</title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="<?php echo $rootsite; ?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?php echo $rootsite; ?>assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?php echo $rootsite; ?>assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $rootsite; ?>assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $rootsite; ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $rootsite; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $rootsite; ?>assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $rootsite; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $rootsite; ?>assets/css/responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $rootsite; ?>assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $rootsite; ?>assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $rootsite; ?>assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?php echo $rootsite; ?>assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
	<link href="<?php echo $rootsite; ?>assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>

	<!-- BEGIN CORE JS FRAMEWORK--> 
	<script src="<?php echo $rootsite; ?>assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
	<script src="<?php echo $rootsite; ?>assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
	<script src="<?php echo $rootsite; ?>assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script> 
	<script src="<?php echo $rootsite; ?>assets/plugins/breakpoints.js" type="text/javascript"></script> 
	<script src="<?php echo $rootsite; ?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
	<script src="<?php echo $rootsite; ?>assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
	<!-- END CORE JS FRAMEWORK --> 
	<!-- BEGIN PAGE LEVEL JS --> 	
	<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script> 	
	<script src="<?php echo $rootsite; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
	<script src="<?php echo $rootsite; ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
	<script src="<?php echo $rootsite; ?>assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
	<script src="<?php echo $rootsite; ?>assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript" ></script>
	<script src="<?php echo $rootsite; ?>assets/plugins/jquery-datatable/extra/js/TableTools.min.js" type="text/javascript" ></script>
	<script type="text/javascript" src="<?php echo $rootsite; ?>assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
	<script type="text/javascript" src="<?php echo $rootsite; ?>assets/plugins/datatables-responsive/js/lodash.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/datatables.js" type="text/javascript"></script>
	<link href="<?php echo $rootsite; ?>assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>

	<!-- END PAGE LEVEL PLUGINS --> 	
	
	<!-- BEGIN CORE TEMPLATE JS --> 
	<script src="<?php echo $rootsite; ?>assets/js/core.js" type="text/javascript"></script> 
	<script src="<?php echo $rootsite; ?>assets/js/chat.js" type="text/javascript"></script> 
	<script src="<?php echo $rootsite; ?>assets/js/demo.js" type="text/javascript"></script> 
	<link href="<?php echo $rootsite; ?>assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $rootsite; ?>assets/plugins/boostrap-slider/css/slider.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo $rootsite; ?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo $rootsite; ?>assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?php echo $rootsite; ?>assets/plugins/jquery-superbox/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- END PLUGIN CSS -->
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="<?php echo $rootsite; ?>assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $rootsite; ?>assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $rootsite; ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $rootsite; ?>assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="<?php echo $rootsite; ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $rootsite; ?>assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $rootsite; ?>assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
	<!-- END NEED TO WORK ON -->

</head>
<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse"> 
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="navbar-inner">
		<!-- BEGIN NAVIGATION HEADER -->
		<div class="header-seperation"> 
			<!-- BEGIN MOBILE HEADER -->
			<ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
				<li class="dropdown">
					<a id="main-menu-toggle" href="#main-menu" class="">
						<div class="iconset top-menu-toggle-white"></div>
					</a>
				</li>		 
			</ul>
			<!-- END MOBILE HEADER -->
			<!-- BEGIN LOGO -->	
			<a href="#">
				<img src="<?php echo $rootsite; ?>assets/img/logo.png" class="logo" alt="" data-src="<?php echo $rootsite; ?>assets/img/logo.png" data-src-retina="<?php echo $rootsite; ?>assets/img/logo2x.png" width="106" height="21"/>
			</a>
			<!-- END LOGO --> 
			<!-- BEGIN LOGO NAV BUTTONS -->
			<ul class="nav pull-right notifcation-center">	
				<li class="dropdown" id="header_task_bar">
					<a href="#" class="dropdown-toggle active" data-toggle="">
						<div class="iconset top-home"></div>
					</a>
				</li>
				<li class="dropdown" id="header_inbox_bar">
					<a href="#" class="dropdown-toggle">
						<div class="iconset top-messages"></div>
						<span class="badge" id="msgs-badge">2</span>
						</a>
				</li>
				<!-- BEGIN MOBILE CHAT TOGGLER -->
				<li class="dropdown" id="portrait-chat-toggler" style="display:none">
					<a href="#sidr" class="chat-menu-toggle">
						<div class="iconset top-chat-white"></div>
					</a>
				</li>
				<!-- END MOBILE CHAT TOGGLER -->				        
			</ul>
			<!-- END LOGO NAV BUTTONS -->
		</div>
		<!-- END NAVIGATION HEADER -->
		<!-- BEGIN CONTENT HEADER -->
		<div class="header-quick-nav"> 
			<!-- BEGIN HEADER LEFT SIDE SECTION -->
			<div class="pull-left"> 
				<!-- BEGIN SLIM NAVIGATION TOGGLE -->
				<ul class="nav quick-section">
					<li class="quicklinks">
						<a href="#" class="" id="layout-condensed-toggle">
							<div class="iconset top-menu-toggle-dark"></div>
						</a>
					</li>
				</ul>
				<!-- END SLIM NAVIGATION TOGGLE -->				
				<!-- BEGIN HEADER QUICK LINKS -->
				<ul class="nav quick-section">
					<li class="quicklinks"><a href="#" class=""><div class="iconset top-reload"></div></a></li>
					<li class="quicklinks"><span class="h-seperate"></span></li>
					<li class="quicklinks"><a href="#" class=""><div class="iconset top-tiles"></div></a></li>
					<!-- BEGIN SEARCH BOX -->
					<li class="m-r-10 input-prepend inside search-form no-boarder">
						<span class="add-on"><span class="iconset top-search"></span></span>
						<input name="" type="text" class="no-boarder" placeholder="Search Dashboard" style="width:250px;">
					</li>
					<!-- END SEARCH BOX -->
				</ul>
				<!-- BEGIN HEADER QUICK LINKS -->				
			</div>
			<!-- END HEADER LEFT SIDE SECTION -->
			<!-- BEGIN HEADER RIGHT SIDE SECTION -->
			<div class="pull-right"> 
				<div class="chat-toggler">	
					<!-- BEGIN NOTIFICATION CENTER -->
					<a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom" data-content="" data-toggle="dropdown" data-original-title="Notifications">
						<div class="user-details"> 
							<div class="username">
								<!-- <span class="badge badge-important">3</span> -->&nbsp;<?php echo $donnees_login['prenom']; ?><span class="bold">&nbsp;<?php echo $donnees_login['nom']; ?></span>									
							</div>
													
						</div> 
						<div class="iconset top-down-arrow"></div>
					</a>	
					<div id="notification-list" style="display:none">
						<div style="width:300px">
							<!-- BEGIN NOTIFICATION MESSAGE -->
							<div class="notification-messages info">
								<div class="user-profile">
									<img src="<?php echo $rootsite; ?>assets/img/profiles/d.jpg" alt="" data-src="<?php echo $rootsite; ?>assets/img/profiles/d.jpg" data-src-retina="<?php echo $rootsite; ?>assets/img/profiles/d2x.jpg" width="35" height="35">
								</div>
								<div class="message-wrapper">
									<div class="heading">Nouvelle Version de GESTCO annoncé</div>
									<div class="description">La version 2.0.0 de GESTCO est annoncé pour le 15 Avril 2014</div>
									<div class="date pull-left">Il y a une minute</div>										
								</div>
								<div class="clearfix"></div>									
							</div>
							<!-- END NOTIFICATION MESSAGE -->	
						</div>				
					</div>
					<!-- END NOTIFICATION CENTER -->
					<!-- BEGIN PROFILE PICTURE -->
					<div class="profile-pic"> 
						<img src="<?php echo $rootsite; ?>assets/img/profiles/<?php echo $donnees_login['prenom']; ?>.jpg" alt="" data-src="<?php echo $rootsite; ?>assets/img/profiles/<?php echo $donnees_login['prenom']; ?>.jpg" data-src-retina="<?php echo $rootsite; ?>assets/img/profiles/<?php echo $donnees_login['prenom']; ?>.jpg" width="35" height="35" /> 
					</div>  
					<!-- END PROFILE PICTURE -->     			
				</div>
				<!-- BEGIN HEADER NAV BUTTONS -->
				<ul class="nav quick-section">
					<!-- BEGIN SETTINGS -->
					<li class="quicklinks"> 
						<a data-toggle="dropdown" class="dropdown-toggle pull-right" href="#" id="user-options">						
							<div class="iconset top-settings-dark"></div> 	
						</a>
						<ul class="dropdown-menu pull-right" role="menu" aria-labelledby="user-options">
							<li><a href="<?php echo $rootsite; ?>core/user/user-profile.php">Gestion Utilisateur</a></li>
							<li class="divider"></li>                
							<li><a href="logout.php"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Déconnexion</a></li>
						</ul>
					</li>
					<!-- END SETTINGS -->
				</ul>
				<!-- END HEADER NAV BUTTONS -->
			</div>
			<!-- END HEADER RIGHT SIDE SECTION -->
		</div> 
		<!-- END CONTENT HEADER --> 
	</div>
	<!-- END TOP NAVIGATION BAR --> 
</div>
<!-- END HEADER -->
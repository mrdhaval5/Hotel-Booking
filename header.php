<!-- Admin header-->
<?php
session_start();
if(!isset($_SESSION['a_id']))
{

	header("location:admin_login.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hotel Honest</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mug house Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- tabs -->
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //tabs -->
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
</head>
<body>
<!-- banner -->
	<div class="banner-1">
		<div class="header-bottom">
			<div class="header">
				<div class="container">
					<div class="w3_agile_logo">
						<h1><a href="index.html"><span>Hotel</span>Honest</a></h1>
					</div>
					<div class="header-nav">
						<nav class="navbar navbar-default">
							<div class="navbar-header navbar-left">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
								<nav class="link-effect-12">
									<ul class="nav navbar-nav w3_agile_nav">
										<li><a href="adminhome.php"><span>Home</span></a></li>

										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Room</span> <b class="caret"></b></a>
											<ul class="dropdown-menu agile_short_dropdown">
												<li><a href="admin_room.php">Add</a></li>
												<li><a href="view_room.php">View</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Short Codes">Gallery</span> <b class="caret"></b></a>
											<ul class="dropdown-menu agile_short_dropdown">
												<li><a href="admin_gallery.php">Add</a></li>
												<li><a href="view_gallery.php">View</a></li>
											</ul>
										</li>
										
										<li ><a href="view_booking.php"><span>Booking</span></a></li>
										
										<li><a href="view_review.php"><span>Review</span></a></li>
										<li><a href="logout.php"><span>Logout</span></a></li>
										

									</ul>	
								</nav>
							</div>
						</nav>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
<!-- header -->
	
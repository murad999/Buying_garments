<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- TITLE -->
		<title>Agency Home</title>

		<!-- favicon -->
		<link rel="shortcut icon" href="{{asset('frontend/assets/images/favicon.ico')}}" type="image/x-icon">
       
		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900" rel="stylesheet">
		
        <!--font-awesome & lightbox-->
		<link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome-all.css')}}" type="text/css"/>
		<link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}" type="text/css"/>
		<link rel="stylesheet" href="{{asset('frontend/assets/css/lightbox.css')}}" type="text/css"/>
		
        <!--owl.carousel-->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}" type="text/css">
		
        <!--aos & bootstrap-->
		<link rel="stylesheet" href="{{asset('frontend/assets/css/aos.css')}}" type="text/css"/>
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/webslidemenu.css')}}" type="text/css">
        
		<!--SLIDER REVOLUTION CSS SETTINGS -->
        <link rel="stylesheet" href="{{asset('frontend/rs-plugin/css/layers.css')}}" type="text/css"/>
        <link rel="stylesheet" href="{{asset('frontend/rs-plugin/css/settings.css')}}" type="text/css" /> 
        
        <!--style.css-->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}" type="text/css">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		
	</head>

	<body>
		
		<!-- Pre-loader Start -->
		<div id="PreloaderG1">
			<div id="PreloaderG2">
				<div class="cssload-thecube">
					<div class="cssload-cube cssload-c1"></div>
					<div class="cssload-cube cssload-c2"></div>
					<div class="cssload-cube cssload-c4"></div>
					<div class="cssload-cube cssload-c3"></div>
				</div>
			</div>
		</div>
		<!-- Pre-loader End -->
		
		
		<!--start main-menu-->
		<div class="wsmenucontainer ">
			<div class="container">
				<div id="overlapblackbg"></div>
				<div class="wsmobileheader "> <a id="wsnavtoggle" class="animated-arrow hag"><span></span></a> <a class="smallogo hag"><img src="{{asset('frontend/assets/images/alogo.png')}}" width="87" alt="Image" /></a> <a class="callusicon" href="#"><span class="fab fa-phone"></span></a> </div>
				
				<!--Main Menu HTML Code-->
				<div class="wsmain h-ag">
					<div class="smllogo "><a href="#"><img src="{{asset('frontend/assets/images/alogo.png')}}" alt="Image"/></a></div>
					<nav class="wsmenu clearfix">
					  <ul class="mobile-sub wsmenu-list">
						<li><a href="#">Home<span class="arrow"></span></a>
						  <ul class="wsmenu-submenu">
							<li><a href="index.html"> Home Agency</a></li>
							<li><a href="car-repair.html"> Home Car Repair </a></li>
						  </ul>
						</li>
						<li><a href="about.html">About</a></li>
						<li><a href="#">Pages <span class="arrow"></span></a>
						  <div class="megamenu ">
							<div class="container-fluid">
							  <div class="row">
								<ul class="col-lg-3 col-md-6 link-list">
								  <li class="title">Group i</li>
								  <li><a href="index.html"> Home Car Repair </a></li>
							      <li><a href="agency.html"> Home Agency</a></li>
						          <li><a href="about.html">About</a></li>
						          <li><a href="service.html">Service</a></li>
								</ul>
								<ul class="col-lg-3 col-md-6 link-list">
								  <li class="title">Group ii</li>
							      <li><a href="blog.html"> Sidebar Layout </a></li>
							      <li><a href="blog-single.html"> Single Post</a></li>
						          <li><a href="contact.html">Contact</a></li>
								</ul>
								<ul class="col-lg-3 col-md-6 link-list">
								  <li class="title">Group iii</li>
								  <li><a href="#">upcoming</a></li>
								  <li><a href="#">upcoming</a></li>
								  <li><a href="#">upcoming</a></li>
								  <li><a href="#">upcoming</a></li>
								</ul>
								<div class="col-lg-3 col-md-6">
								  <h3 class="title">New Arrival </h3>
								  <div id="demo" class="carousel slide" data-ride="carousel">

									<!-- The slideshow -->
									<div class="carousel-inner">
									  <div class="carousel-item active"><img src="{{asset('frontend/assets/images/menu1.jpg')}}" alt="Image" />
										<div class="carousel-caption">
										  <h3>Car Repairing 01</h3>
										</div>
									  </div>
									  <div class="carousel-item"><img src="{{asset('frontend/assets/images/menu2.jpg')}}" alt="Image" />
										<div class="carousel-caption">
										  <h3>Car Repairing 02</h3>
										</div>
									  </div>
									  <div class="carousel-item"><img src="{{asset('frontend/assets/images/menu3.jpg')}}" alt="Image" />
										<div class="carousel-caption">
										  <h3>Car Repairing 03</h3>
										</div>
									  </div>
									  <div class="carousel-item"><img src="{{asset('frontend/assets/images/menu4.jpg')}}" alt="Image" />
										<div class="carousel-caption">
										  <h3>Car Repairing 04</h3>
										</div>
									  </div>
									</div>

									<!-- Left and right controls -->
									<a class="carousel-control-prev" href="#demo" data-slide="prev"> <span class="carousel-control-prev-icon"></span> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <span class="carousel-control-next-icon"></span> </a>                        </div>
								</div>
							  </div>
							</div>
						  </div>
						</li>
						<li><a href="service.html">Service</a></li>
						<li><a href="#">Blog <span class="arrow"></span></a>
						  <ul class="wsmenu-submenu">
							<li><a href="blog.html"> Sidebar Layout </a></li>
							<li><a href="blog-single.html"> Single Post</a></li>
						  </ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
						<li class="searchs">
							<a href="#search" ><i class="fas fa-search"></i></a>
						</li>
					  </ul>
					</nav>
				</div>
				<!--Menu HTML Code-->
			</div>
			
			<div id="search">
				<button type="button" class="close">×</button>
				<form>
					<input type="search" value="" placeholder="Type Here ....." />
					<button type="submit" class="btn btn-primary hvr-sweep-to-right">Search</button>
				</form>
			</div>
		</div>
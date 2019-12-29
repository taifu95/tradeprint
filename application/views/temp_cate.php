<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Printing - DialaPrint</title>
    <meta name="description" content="Printing template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes" />
    <meta name="author" content="Netbase">
    <!--Add css lib-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/front/css/style-main.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php echo base_url()?>assets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/jqwidgets/styles/jqx.light.css" type="text/css" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/jsgrid.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/menu.css"> -->

	<link rel="stylesheet" href="<?php echo base_url()?>assets/menu/demo/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/menu/dist/css/navik-horizontal-default-menu.min.css">
    <style>
        /* Carousel Styles */
    </style>
</head>

<body>
    <!--Header: Begin-->
    <header>
        <!--Top Header: Begin-->
        <section id="top-header" class="clearfix">
            <div class="container">
                <div class="row">
                    <div class="top-links col-lg-7 col-md-6 col-sm-5 col-xs-6">
                        <ul>
							<li>
								<div class="logo hd-pd ">
									<a href="<?php echo base_url()?>">
										<img src="<?php echo base_url()?>assets/front/images/logo.png" alt="printshop logo">
									</a>
								</div>
							</li>
                            <li class="visible-md visible-lg" style="line-height:30px;padding-top:5px">
                                <div class="search-form dropdowSCContent">
									<form method="POST" action="#">
                                        <input type="text" name="search" placeholder="Search">
                                        <input type="submit" name="search" value="Search">
                                        <i class="fa fa-search"></i>
                                    </form>
								</div>
                            </li>
                        </ul>
                    </div>
                    <div class="top-header-right f-right col-lg-5 col-md-6 col-sm-7 col-xs-6">
                        <div class="w-header-right">
							<a href="<?php echo base_url()?>admin/login">
								<div class="th-hotline">
									<i class="fa fa-user"></i>
									<span>Log In / Register</span>
								</div>
							</a>
                            <div class="language-w clearfix">
                            <div class="th-hotline">
                                <i class="fa fa-phone"></i>
                                <span>1.866.614.8002</span>
							</div>
							<div class="language-w clearfix">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Top Header: End-->
        <!--Main Header: Begin-->
        <section class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 visible-md visible-lg">
						<nav class="navbar navbar-inverse" style="display:none">

							<div class="collapse navbar-collapse js-navbar-collapse">
								<ul class="nav navbar-nav">
									<li class="dropdown mega-dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">All Products <span class="caret"></span></a>
										<ul class="dropdown-menu mega-dropdown-menu">
											<li class="col-sm-3">
												<ul>
													<li class="dropdown-header">Main Products</li>
													<div id="menCollection" class="carousel slide" data-ride="carousel">
														<div class="carousel-inner">
															<div class="item active">
																<a href="#"><img src="http://localhost//assets/product/MjMsIDEyLCAyMDE5LCAwMywyNSwzNGNvbXBfQ29tcHMtU3RhY2stYW5kLXNpbmdsZS04MDB4ODAwLmpwZw==.jpg" class="img-responsive" alt="product 1"></a>
																<h4><small>Summer dress floral prints</small></h4>
															</div>
															<!-- End Item -->
															<div class="item">
																<a href="#"><img src="http://localhost//assets/product/MjMsIDEyLCAyMDE5LCAwMywyNCw0OGNvbXBfQ29tcHMtc3RhY2stODAweDgwMC5qcGc=.jpg" class="img-responsive" alt="product 2"></a>
																<h4><small>Gold sandals with shiny touch</small></h4>
															</div>
															<!-- End Item -->
															<div class="item">
																<a href="#"><img src="http://localhost//assets/product/MjMsIDEyLCAyMDE5LCAwMywyNCw0MGNvbXBfQ29tcHMtaGFuZC04MDB4ODAwLmpwZw==.jpg" class="img-responsive" alt="product 3"></a>
																<h4><small>Denin jacket stamped</small></h4>
															</div>
															<!-- End Item -->
														</div>
													</div>
												</ul>
											</li>
											<li class="col-sm-3">
												<ul>
													<li class="dropdown-header">Features</li>
													<li><a href="#">Auto Carousel</a></li>
													<li><a href="#">Carousel Control</a></li>
													<li><a href="#">Left & Right Navigation</a></li>
													<li><a href="#">Four Columns Grid</a></li>
													<li class="divider"></li>
													<li class="dropdown-header">Fonts</li>
													<li><a href="#">Glyphicon</a></li>
													<li><a href="#">Google Fonts</a></li>
												</ul>
											</li>
											<li class="col-sm-3">
												<ul>
													<li class="dropdown-header">Plus</li>
													<li><a href="#">Navbar Inverse</a></li>
													<li><a href="#">Pull Right Elements</a></li>
													<li><a href="#">Coloured Headers</a></li>
													<li><a href="#">Primary Buttons & Default</a></li>
												</ul>
											</li>
											<li class="col-sm-3">
												<ul>
													<li class="dropdown-header">Much more</li>
													<li><a href="#">Easy to Customize</a></li>
													<li><a href="#">Calls to action</a></li>
													<li><a href="#">Custom Fonts</a></li>
													<li><a href="#">Slide down on Hover</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="dropdown mega-dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cards & Stationary <span class="caret"></span></a>
										<ul class="dropdown-menu mega-dropdown-menu">
											<li class="col-sm-3">
												<ul>
													<li class="dropdown-header">Features</li>
													<li><a href="#">Auto Carousel</a></li>
													<li><a href="#">Carousel Control</a></li>
													<li><a href="#">Left & Right Navigation</a></li>
													<li><a href="#">Four Columns Grid</a></li>
													<li class="divider"></li>
													<li class="dropdown-header">Fonts</li>
													<li><a href="#">Glyphicon</a></li>
													<li><a href="#">Google Fonts</a></li>
												</ul>
											</li>
											<li class="col-sm-3">
												<ul>
													<li class="dropdown-header">Plus</li>
													<li><a href="#">Navbar Inverse</a></li>
													<li><a href="#">Pull Right Elements</a></li>
													<li><a href="#">Coloured Headers</a></li>
													<li><a href="#">Primary Buttons & Default</a></li>
												</ul>
											</li>
											<li class="col-sm-3">
												<ul>
													<li class="dropdown-header">Much more</li>
													<li><a href="#">Easy to Customize</a></li>
													<li><a href="#">Calls to action</a></li>
													<li><a href="#">Custom Fonts</a></li>
													<li><a href="#">Slide down on Hover</a></li>
												</ul>
											</li>
											<li class="col-sm-3">
												<ul>
													<li class="dropdown-header">Women Collection</li>
													<div id="womenCollection" class="carousel slide" data-ride="carousel">
														<div class="carousel-inner">
															<div class="item active">
																<a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
																<h4><small>Summer dress floral prints</small></h4>
																<button class="btn btn-primary" type="button">49,99 €</button>
																<button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
															</div>
															<!-- End Item -->
															<div class="item">
																<a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
																<h4><small>Gold sandals with shiny touch</small></h4>
																<button class="btn btn-primary" type="button">9,99 €</button>
																<button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
															</div>
															<!-- End Item -->
															<div class="item">
																<a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
																<h4><small>Denin jacket stamped</small></h4>
																<button class="btn btn-primary" type="button">49,99 €</button>
																<button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>
															</div>
															<!-- End Item -->
														</div>
														<!-- End Carousel Inner -->
														<!-- Controls -->
														<a class="left carousel-control" href="#womenCollection" role="button" data-slide="prev">
															<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
															<span class="sr-only">Previous</span>
														</a>
														<a class="right carousel-control" href="#womenCollection" role="button" data-slide="next">
															<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
															<span class="sr-only">Next</span>
														</a>
													</div>
													<!-- /.carousel -->
													<li class="divider"></li>
													<li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="#">Flyers &</a></li>
									<li><a href="#">Store locator</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My account <span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
										</ul>
									</li>
									<li><a href="#">My cart (0) items</a></li>
								</ul>
							</div>
							<!-- /.nav-collapse -->
						</nav>
						<div class="navik-header header-shadow navik-mega-menu">
						<div class="container">
						<div class="navik-header-container">
							<div class="logo" data-mobile-logo="demo/images/logo-dark.png" data-sticky-logo="demo/images/logo-dark.png">
								<a href="43-mega-menu-light.html#"><img src="<?php echo base_url()?>assets/front/images/logo.png" alt="printshop logo"></a>
							</div>
							
							<!-- Burger menu -->
							<div class="burger-menu">
								<div class="line-menu line-half first-line"></div>
								<div class="line-menu"></div>
								<div class="line-menu line-half last-line"></div>
							</div>
							<nav class="navik-menu menu-caret submenu-top-border">
								<ul>
									<li class="current-menu mega-menu"><a href="43-mega-menu-light.html#">Home</a>
										<ul>
											<li>

												<!-- Mega menu container -->
												<div class="mega-menu-container">
													<div class="row">

														<!-- Column -->
														<div class="col-md-6 col-lg-3">
															<div class="mega-menu-box">
																<div class="mega-menu-thumbnail">
																	<a href="43-mega-menu-light.html#">
																		<img src="<?php echo base_url()?>assets/menu/demo/images/mega-menu-thumbnail-01.jpg" alt="thumbnail"/>
																	</a>
																</div>
																<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Sodales luctus nunc</a></h4>
																<div class="mega-menu-desc">
																	Donec tellus faucibus dolor viverra neca blandit at justo pendisse dolor turpis lobortis sodales felis justo hendrerit fermentum quam fusce mattis nibh nulla.
																</div>
															</div>
														</div>

														<!-- Column -->
														<div class="col-md-6 col-lg-3">
															<div class="mega-menu-box">
																<div class="mega-menu-thumbnail">
																	<a href="43-mega-menu-light.html#">
																		<img src="<?php echo base_url()?>assets/menu/demo/images/mega-menu-thumbnail-02.jpg" alt="thumbnail"/>
																	</a>
																</div>
																<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Mauris cursus eros</a></h4>
																<div class="mega-menu-desc">
																	Quisque vitae sapien neque in fusce amet enim nec nisl gravida rutrum sed id justo sem adipiscing aliquam potenti morbi vehicula.
																</div>
															</div>
														</div>

														<!-- Column -->
														<div class="col-md-6 col-lg-3">
															<div class="mega-menu-box">
																<div class="mega-menu-thumbnail">
																	<a href="43-mega-menu-light.html#">
																		<img src="<?php echo base_url()?>assets/menu/demo/images/mega-menu-thumbnail-03.jpg" alt="thumbnail"/>
																	</a>
																</div>
																<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Praesent nec luctus</a></h4>
																<div class="mega-menu-desc">
																	Laoreet eu ornare at nulla sit luctus neque dapibus rhoncus malesuada metus vivamus sodales quam nullam fringilla magna ut elit varius varius lobortis hendrerit.
																</div>
															</div>
														</div>

														<!-- Column -->
														<div class="col-md-6 col-lg-3">
															<div class="mega-menu-box">
																<div class="mega-menu-thumbnail">
																	<a href="43-mega-menu-light.html#">
																		<img src="<?php echo base_url()?>assets/menu/demo/images/mega-menu-thumbnail-04.jpg" alt="thumbnail"/>
																	</a>
																</div>
																<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Etiam semper mauris</a></h4>
																<div class="mega-menu-desc">
																	Placerat justo vitae massa molestie vehicula ultricies pharetra nisl sem fermentum a sollicitudin sed nam dapibus ultrices justo sed sem congue molestie.
																</div>
															</div>
														</div>

													</div>
												</div>

											</li>
										</ul>
									</li>
									<li class="mega-menu"><a href="43-mega-menu-light.html#">About Us</a>
										<ul>
											<li>

												<!-- Mega menu container -->
												<div class="mega-menu-container">
													<div class="row">

														<!-- Column -->
														<div class="col-lg-4">

															<div class="mega-menu-box">
																<div class="mega-menu-media">
																	<div class="mega-menu-media-img">
																		<div class="mega-menu-thumbnail">
																			<a href="43-mega-menu-light.html#">
																				<img src="<?php echo base_url()?>assets/menu/demo/images/mega-menu-thumbnail-05.jpg" alt="thumbnail"/>
																			</a>
																		</div>
																	</div>
																	<div class="mega-menu-media-info">
																		<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Aliquam metus vitae</a></h4>
																		<div class="mega-menu-desc">
																			Donec nec faucibus lobortis viverra blandit sem justo
																		</div>
																	</div>
																</div>
															</div>

															<div class="mega-menu-box">
																<div class="mega-menu-media">
																	<div class="mega-menu-media-img">
																		<div class="mega-menu-thumbnail">
																			<a href="43-mega-menu-light.html#">
																				<img src="<?php echo base_url()?>assets/menu/demo/images/mega-menu-thumbnail-06.jpg" alt="thumbnail"/>
																			</a>
																		</div>
																	</div>
																	<div class="mega-menu-media-info">
																		<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Donec neca faucibus</a></h4>
																		<div class="mega-menu-desc">
																			Aliquam ultrices ullamcoroe ultrices gravida dictum
																		</div>
																	</div>
																</div>
															</div>

															<div class="mega-menu-box">
																<div class="mega-menu-media">
																	<div class="mega-menu-media-img">
																		<div class="mega-menu-thumbnail">
																			<a href="43-mega-menu-light.html#">
																				<img src="<?php echo base_url()?>assets/menu/demo/images/mega-menu-thumbnail-07.jpg" alt="thumbnail"/>
																			</a>
																		</div>
																	</div>
																	<div class="mega-menu-media-info">
																		<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Lobortis sem mauris</a></h4>
																		<div class="mega-menu-desc">
																			Integer aliquet magna neca tellus orci quis semper
																		</div>
																	</div>
																</div>
															</div>

														</div>

														<!-- Column -->
														<div class="col-lg-4">

															<div class="mega-menu-box">
																<div class="mega-menu-media">
																	<div class="mega-menu-media-img">
																		<div class="mega-menu-thumbnail">
																			<a href="43-mega-menu-light.html#">
																				<img src="<?php echo base_url()?>assets/menu/demo/images/mega-menu-thumbnail-08.jpg" alt="thumbnail"/>
																			</a>
																		</div>
																	</div>
																	<div class="mega-menu-media-info">
																		<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Fusce semper ante</a></h4>
																		<div class="mega-menu-desc">
																			Laoreet tellus a consectetur bibendum dolor posuere
																		</div>
																	</div>
																</div>
															</div>

															<div class="mega-menu-box">
																<div class="mega-menu-media">
																	<div class="mega-menu-media-img">
																		<div class="mega-menu-thumbnail">
																			<a href="43-mega-menu-light.html#">
																				<img src="<?php echo base_url()?>assets/menu/demo/images/mega-menu-thumbnail-09.jpg" alt="thumbnail"/>
																			</a>
																		</div>
																	</div>
																	<div class="mega-menu-media-info">
																		<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Aliquam ipsum sem</a></h4>
																		<div class="mega-menu-desc">
																			Sollicitudin ut gravida libero commodo sit malesuada
																		</div>
																	</div>
																</div>
															</div>

															<div class="mega-menu-box">
																<div class="mega-menu-media">
																	<div class="mega-menu-media-img">
																		<div class="mega-menu-thumbnail">
																			<a href="43-mega-menu-light.html#">
																				<img src="<?php echo base_url()?>assets/menu/demo/images/mega-menu-thumbnail-10.jpg" alt="thumbnail"/>
																			</a>
																		</div>
																	</div>
																	<div class="mega-menu-media-info">
																		<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Posuere himenaeos</a></h4>
																		<div class="mega-menu-desc">
																			Porta gravida hendrerit vitae blandit in phasellus ipsum
																		</div>
																	</div>
																</div>
															</div>

														</div>

														<!-- Column -->
														<div class="col-lg-4">

															<div class="mega-menu-box">
																<div class="mega-menu-thumbnail">
																	<a href="43-mega-menu-light.html#">
																		<img src="<?php echo base_url()?>assets/menu/demo/images/mega-menu-thumbnail-11.jpg" alt="thumbnail"/>
																	</a>
																</div>
																<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Etiam semper mauris</a></h4>
																<div class="mega-menu-desc">
																	Consequater placerat justo vitae massa molestie ultricies pharetra nisl sem fermentum a sollicitudin amet condimentum.
																</div>
															</div>

														</div>

													</div>
												</div>

											</li>
										</ul>
									</li>
									<li class="mega-menu"><a href="43-mega-menu-light.html#">Shop</a>
										<ul>
											<li>

												<!-- Mega menu container -->
												<div class="mega-menu-container">
													<div class="row">

														<!-- Column -->
														<div class="col-md-6 col-lg-3">

															<div class="mega-menu-box">
																<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Aliquam metus vitae</a></h4>
																<ul class="mega-menu-list">
																	<li>
																		<a href="43-mega-menu-light.html#">Quisque orci augue</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Laoreet amet ante</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Aenean quam vitae</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Aliquam ac semper</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Nulla ligula puvinar</a>
																	</li>
																</ul>
															</div>

															<div class="mega-menu-box">
																<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Donec neca faucibus</a></h4>
																<ul class="mega-menu-list">
																	<li>
																		<a href="43-mega-menu-light.html#">Laoreet amet ante</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Quisque orci augue</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Nulla ligula pulvinar</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Aenean quam vitae</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Aliquam ac lobortis</a>
																	</li>
																</ul>
															</div>

														</div>

														<!-- Column -->
														<div class="col-md-6 col-lg-3">

															<div class="mega-menu-box">
																<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Lobortis sem mauris</a></h4>
																<ul class="mega-menu-list">
																	<li>
																		<a href="43-mega-menu-light.html#">Aenean quam vitae</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Nulla ligula pulvinar</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Quisque orci augue</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Aliquam ac lobortis</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Laoreet sem sodales</a>
																	</li>
																</ul>
															</div>

															<div class="mega-menu-box">
																<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Fusce semper ipsum</a></h4>
																<ul class="mega-menu-list">
																	<li>
																		<a href="43-mega-menu-light.html#">Aenean quam vitae</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Aliquam ac lobortis</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Laoreet amet ante</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Nulla ligula pulvinar</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Quisque orci augue</a>
																	</li>
																</ul>
															</div>

														</div>

														<!-- Column -->
														<div class="col-md-6 col-lg-3">

															<div class="mega-menu-box">
																<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Gravida mauris congue</a></h4>
																<ul class="mega-menu-list">
																	<li>
																		<a href="43-mega-menu-light.html#">Laoreet amet interdum</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Quisque sapien auguer</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Nulla ligula pulvinar</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Aenean condimentum</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Aliquam naca lobortis</a>
																	</li>
																</ul>
															</div>

															<div class="mega-menu-box">
																<h4 class="mega-menu-heading"><a href="43-mega-menu-light.html#">Aliquam ipsum commodo</a></h4>
																<ul class="mega-menu-list">
																	<li>
																		<a href="43-mega-menu-light.html#">Fusce adipiscing neque</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Quis laoreet pretium</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Aenean pellentesque</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Aenean sodales conubia</a>
																	</li>
																	<li>
																		<a href="43-mega-menu-light.html#">Cursus inceptos aliquamer</a>
																	</li>
																</ul>
															</div>

														</div>

														<!-- Column -->
														<div class="col-md-6 col-lg-3">

															<div class="mega-menu-box">
																<div class="mega-menu-thumbnail">
																	<img src="<?php echo base_url()?>assets/menu/demo/images/mega-menu-thumbnail-12.png" alt="thumbnail"/>
																</div>
															</div>

														</div>

													</div>
												</div>

											</li>
										</ul>
									</li>
									<li><a href="43-mega-menu-light.html#">Gallery</a>
										<ul>
											<li><a href="43-mega-menu-light.html#">Dropdown menu</a></li>
											<li><a href="43-mega-menu-light.html#">Dropdown menu</a></li>
											<li><a href="43-mega-menu-light.html#">Dropdown menu</a></li>
											<li><a href="43-mega-menu-light.html#">Dropdown menu</a></li>
										</ul>
									</li>
									<li><a href="43-mega-menu-light.html#">News</a></li>
									<li class="submenu-right"><a href="43-mega-menu-light.html#">Contact Us</a>
										<ul>
											<li><a href="43-mega-menu-light.html#">Dropdown menu</a></li>
											<li><a href="43-mega-menu-light.html#">Dropdown menu</a></li>
											<li><a href="43-mega-menu-light.html#">Dropdown menu</a></li>
											<li><a href="43-mega-menu-light.html#">Dropdown menu</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
						</div>
						</div>
                    </div>
                    <div class="col-sm-1 col-sm-offset-5 col-xs-offset-2 col-xs-2 visible-sm visible-xs mbmenu-icon-w">
                        <span class="mbmenu-icon hd-pd">
							<i class="fa fa-bars"></i>
						</span>
                    </div>
                    <div class="col-lg-1 col-md-2 col-sm-2 col-xs-3 headerCS">
                        <div class="cart-w SC-w hd-pd ">
                            <span class="mcart-icon dropdowSCIcon">
								<i class="fa fa-shopping-cart"></i>
								<span class="mcart-dd-qty">0</span>
                            </span>
                            <div class="mcart-dd-content dropdowSCContent clearfix">
								<div id="backet_box"></div>
                                <!-- <div class="mcart-item-w clearfix1">
                                    <ul>
                                        <li class="mcart-item">
                                            <img src="<?php echo base_url()?>assets/front/images/product/mcart-postcard.jpg" alt="postcard cards">
                                            <div class="mcart-info">
                                                <a href="detail.html" class="mcart-name">Postcards Cards</a>
                                                <span class="mcart-qty">1 x </span>
                                                <span class="mcart-price">$ 10.09</span>
                                                <span class="mcart-remove-item">
													<i class="fa fa-times-circle"></i>
												</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div> -->
                                <div class="mcart-total clearfix">
                                    <table>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total_bud">£0</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="mcart-links buttons-set clearfix">
                                    <a href="checkout" style="width:100%" class="gbtn mcart-link-checkout">Checkout</a>
                                </div>
                            </div>
                        </div>
                        <div class="search-w SC-w hd-pd ">
                            <span class="search-icon dropdowSCIcon">
								<i class="fa fa-search"></i>
							</span>
                            <div class="search-safari">
                                <div class="search-form dropdowSCContent">
                                    <form method="POST" action="#">
                                        <input type="text" name="search" placeholder="Search" />
                                        <input type="submit" name="search" value="Search">
                                        <i class="fa fa-search"></i>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Main Header: End-->
    </header>
    <!--Header: End-->
    <!--Main category : Begin-->

    <body>

        <main id="main category">
            <section class="header-page">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs">
                            <h1 class="mh-title">Business Cards</h1>
                        </div>
                        <div class="breadcrumb-w col-sm-9">
                            <span>You are here:</span>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="<?php echo base_url()?>">Home</a>
                                </li>
                                <li>
                                    <span>Business Cards</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- TESTIMONIALS -->
            <section class="category-w parten-bg">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-12">
                            <div id="customers-testimonials" class="owl-carousel">

                                <!--TESTIMONIAL 1 -->
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="img-responsive" src="https://image.freepik.com/free-photo/spaghetti-with-carbonara-sauce_1216-324.jpg" alt="">
                                        <div class="item-details">
                                            <h5>Chicken for two Roasted <span>$21</span></h5>
                                            <p>There was a time when Chinese food in this country meant (Americanized) Cantonese food.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--END OF TESTIMONIAL 1 -->
                                <!--TESTIMONIAL 2 -->
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="img-responsive" src="https://image.freepik.com/free-photo/dishes-with-healthy-waffles_1220-367.jpg" alt="">
                                        <div class="item-details">
                                            <h5>Chicken for two Roasted <span>$21</span></h5>
                                            <p>There was a time when Chinese food in this country meant (Americanized) Cantonese food.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--END OF TESTIMONIAL 2 -->
                                <!--TESTIMONIAL 3 -->
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="img-responsive" src="https://image.freepik.com/free-photo/top-view-of-tasty-noodles-with-prawns_1203-1769.jpg" alt="">
                                        <div class="item-details">
                                            <h5>Chicken for two Roasted <span>$21</span></h5>
                                            <p>There was a time when Chinese food in this country meant (Americanized) Cantonese food.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--END OF TESTIMONIAL 3 -->
                                <!--TESTIMONIAL 4 -->
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="img-responsive" src="https://image.freepik.com/free-photo/burguer-with-garnish_1088-72.jpg" alt="">
                                        <div class="item-details">
                                            <h5>Chicken for two Roasted <span>$21</span></h5>
                                            <p>There was a time when Chinese food in this country meant (Americanized) Cantonese food.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--END OF TESTIMONIAL 4 -->
                                <!--TESTIMONIAL 5 -->
                                <div class="item">
                                    <div class="shadow-effect">
                                        <img class="img-responsive" src="https://image.freepik.com/free-photo/delicious-pastry-with-chicken_1203-1616.jpg" alt="">
                                        <div class="item-details">
                                            <h5>Chicken for two Roasted <span>$21</span></h5>
                                            <p>There was a time when Chinese food in this country meant (Americanized) Cantonese food.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--END OF TESTIMONIAL 5 -->
                            </div>
                        </div>
                    </div>
                </div>
			</section>
			<?php
				$detail = json_decode($info['detail']);
			?>
            <!-- END OF TESTIMONIALS -->
            <section class="category-w parten-bg">
                <div class="container">
                    <div class="row">
                        <aside id="sidebar_cate" class="col-sm-6 col-xs-12">
							<div role="tabpanel" class="tab-pane" id="ideals">
								<div class=" col-sm-6 col-xs-12 ideals-w">
									<?php
										foreach($img as $temp){
											$img = $temp["c_img"];
											$desc = $temp["c_img"];
											$c_name = $temp["c_name"];
										}
										$img_arr = explode(",",$img);
										foreach($img_arr as $r_img){
									?>
									<div class="ideal">
										<img src="<?php echo base_url()?>/assets/product/<?php echo $r_img?>" alt="First slide" style="width:100%" class="slide_img">
									</div>
									<?php } ?>
								</div>
							</div>
							<div class="row" style="margin : 0px 10px">
								
								<p style="margin-top:20px"><?php echo $detail[0]->descrip?></p>
								<button type="button" class="collapsible">Article Guide <i class="fa fa-angle-right" style="float:right;margin-right:20px"></i></button>
								<div class="content">
									<p><?php echo $detail[0]->artic?></p>
								</div>
								<button type="button" class="collapsible">Artwork Templates <i class="fa fa-angle-right" style="float:right;margin-right:20px"></i></button>
								<div class="content">
									<p></p>
								</div>
							</div>
                        </aside>
                        <!--Category product grid : Begin -->
                        <section class="category grid col-sm-6 col-xs-12">
                            <!-- <div class="row">
                                <div class="col-xs-12 category-image visible-md visible-lg">
                                    <a href="category_grid.html#" title="category image">
									<img src="<?php echo base_url()?>assets/front/images/banner/category/top-business-card-large.jpg" alt="Business card">
								</a>
                                </div>
                                <div class="col-xs-12 category-image visible-sm">
                                    <a href="category_grid.html#" title="category image">
									<img src="<?php echo base_url()?>assets/front/images/banner/category/top-business-card-medium.jpg" alt="Business card">
								</a>
                                </div>
                                <div class="col-xs-12 category-image visible-xs">
                                    <a href="category_grid.html#" title="category image">
									<img src="<?php echo base_url()?>assets/front/images/banner/category/top-business-card-small.jpg" alt="Business card">
								</a>
                                </div>
                            </div> -->
							<div class="top-toolbar row">
	                            <h3 class="sidebar-title"><?php echo $detail[0]->c_name?></h3>
								<div id="detail"></div>
							</div>
							<div>
								<table>
									<thead>
										<tr class="h_class">
											<th>Quantity</th>
											<th class='saver_h'>Saver</th>
											<th class='standard_h'>Standard</th>
											<th class='exp_h' style="background : linear-gradient(70deg,#55c300 0,#cef35a 100%)">Express</th>
										</tr>
									</thead>
									<tbody id="cat_price">
									</tbody>
								</table>
							</div><!-- <div id="art"> -->
						</section>
						<section class="add-to-cart-w">
							<div class="container">
								<div class="row">
									<div class="col-md-12 col-sm-12 upload-add-cart"  style="float:right">
										<div class="row">
											<div class="upload-file col-md-12 col-sm-12 col-xs-12" style="float:right;margin-top:0px">
												<div class="atc-header">
													<!-- <span class="number visible-480 visible-xs">2</span> -->
													<h3>Artwork Service</h3>
												</div>
												<!-- <div id="art_service"></div> -->
												<div class="options-list-w">
													<div class="row">
														<div class="block-options col-md-12 col-sm-12" style="width:100%">
															<div class="options-col">
															<!-- "Just Print - Free", "File Check -£2.50 ", "File Check with Proofing -£6.50", "File Assit -£15.00" -->
																<span class="cur-option-w">
																	<span class="cur-option-val">File Check -£2.50</span>
																	<i class="fa fa-angle-down"></i>
																</span>
																<ul class="d-none po-list">
																	
																</ul>
															</div>
														</div>
													</div>
												</div>
												<p class="upload-allow" style='margin-top : 10px'>
													We’ll double check your print ready files before printing. Accepted files: PDF, EPS, TIFF, JPEG.
												</p>
											</div>
										</div>
										<div class="row">
											<div class="add-to-cart col-md-12 col-sm-12 col-xs-12" style="float:right">
												<div class="quantity-price-w row" style="width:100%">
													<div class="price-total col-xs-6">
														<label>Total:</label>
														<span class="price">£0</span>
													</div>
													<div class="col-xs-6 quantity">
														<label>incl. VAT</label>
														<span class="price_vat">£0</span>
													</div>
													<div class="add-cart-btn-w col-xs-12">
														<button type="button" class="add-cart-btn btn" style="width:100%" id="add_basket">
															<i class="fa fa-shopping-cart"></i>
															Add To Basket
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Category product grid : End -->
					</div>
					
                </div>
			</section>
			
			<section class="product-info-w">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<ul class="nav nav-tabs" role="tablist" style="float:left">
								<li role="presentation" class="active"><a href="detail.html#features" style="padding:10px 45px" aria-controls="features" role="tab" data-toggle="tab">Details</a></li>
								<li role="presentation"><a href="detail.html#paper" style="padding:10px 45px" aria-controls="paper" role="tab" data-toggle="tab">Paper & Specs</a></li>
							</ul>
						</div>
					</div>
					<div class="row" style="margin-top:20px">
						<div class="tab-content clearfix">
							<div role="tabpanel" class="tab-pane active" id="features">
								<div class="product-image v-middle" style="width:25%">
									<div class="col-sm-12 col-xs-12">
										<img src="<?php echo base_url()?>/assets/product/<?php echo $img_arr[0]?>" alt="ideal 1" style="">
									</div>
								</div>
								
								<div class="product-shortdescript v-middle">
									<div class="col-sm-12 col-xs-12">
										<div class="v-middle">
											<h3>Classic Business Cards</h3>
											<ul>
												<li><i class="fa fa-check"></i> Thick, premium quality cardstock</li>
												<li><i class="fa fa-check"></i> Vibrant full color printing</li>
												<li><i class="fa fa-check"></i> Gloss, matte or uncoated finish</li>
												<li><i class="fa fa-check"></i> Standard, square, slim or any custom size</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="paper">
								
								<div class="paper-des v-middle">
									<div class="col-sm-11 col-sm-offset-1">
										<div class="v-middle">
											<h3>13 pt. Cardstock, Uncoated Paper</h3>
											<ul>
												<li><i class="fa fa-check"></i> Lighter weight uncoated cardstock</li>
												<li><i class="fa fa-check"></i> Requires scoring prior to folding</li>
												<li><i class="fa fa-check"></i> Paper from sustainable sources, 30% recycled content</li>
												<li><i class="fa fa-check"></i> Some natural fibers may be visible</li>
												<li><i class="fa fa-check"></i> Excellent writability</li>
												<li><i class="fa fa-check"></i> Recommended for Appointment Cards, Invitations and Note Cards</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="product-image v-middle" style="width:25%">
									<div class="col-sm-12">
										<img src="<?php echo base_url()?>/assets/product/<?php echo $img_arr[0]?>" alt="ideal 1" style="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="container">

                    <div class="row" style="margin-top:10px">
                        <div class="col-md-12 visible-md visible-lg cate-bottom-banner">
                            <a href="category_grid.html#" title="category bottom banner">
							<img src="<?php echo base_url()?>assets/front/images/banner/category/category-bottom-banner-large.jpg" alt="Business card">
						</a>
                        </div>
                        <div class="col-sm-12 visible-sm cate-bottom-banner">
                            <a href="category_grid.html#" title="category bottom banner">
							<img src="<?php echo base_url()?>assets/front/images/banner/category/category-bottom-banner-medium.jpg" alt="Business card">
						</a>
                        </div>
                        <div class="col-xs-12 visible-xs cate-bottom-banner">
                            <a href="category_grid.html#" title="category bottom banner">
							<img src="<?php echo base_url()?>assets/front/images/banner/category/category-bottom-banner-small.jpg" alt="Business card">
						</a>
                        </div>
                    </div>
				</div>
			</section>
			
        </main>
        <!-- Main Category: End -->
        <!--Footer : Begin-->
        <footer>
		<div class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12 about-us footer-col">
						<h2>About Us</h2>
						<div class="footer-content">
							<a href="<?php echo base_url()?>" title="Cmsmart logo footer" class="logo-footer">
								<img src="<?php echo base_url()?>assets/front/images/footer-logo.png">
							</a>
							<ul class="info">
								<li>
									<i class="fa fa-home"></i>
									<span>102580 Santa Monica Los Angeles</span>
								</li>
								<li>
									<i class="fa fa-phone"></i>
									<span>+3 045 224 33 12</span>
								</li>
								<li>
									<i class="fa fa-envelope-o"></i>
									<span><a href="mailto:support@netbaseteam.net" title="send mail to Cmsmart">support@netbaseteam.net</a></span>
								</li>
							</ul>
							<ul class="footer-social">
								<li>
									<a href="about-us.html#" title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="about-us.html#" title="Twiter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="about-us.html#" title="Google plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 corporate footer-col">
						<h2>Corporate</h2>
						<div class="footer-content">
							<ul>
								<li>
									<a href="<?php echo base_url()?>about_us" title="About us">About</a>
								</li>
								<li>
									<a href="<?php echo base_url()?>contact" title="Contact Us">Contact Us</a>
								</li>
								<li>
									<a href="<?php echo base_url()?>faq" title="FAQ">FAQ</a>
								</li>
								<li>
									<a href="<?php echo base_url()?>faq" title="Terms of Service">Terms of Service</a>
								</li>
								<li>
									<a href="<?php echo base_url()?>faq" title="Privacy Policy">Privacy Policy</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-xs-12 other-info footer-col hidden-sm">
						<h2>Other Info</h2>
						<div class="footer-content">
							<p>
								Printmart provides fast online printing for both homes and businesses. We  provide high quality business cards, postcards, flyers, brochures, stationery and  other premium online print products.
							</p>
							<img src="<?php echo base_url()?>assets/front/images/footer-payment.png" alt="Payment method">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="copy-right">Central - Copyright © 2015 <a title="Cmsmart - Magento theme" href="about-us.html#">netbaseteam.com</a>. All Rights Reserved</p>
						<a href="about-us.html#" id="back-to-top">
							<i class="fa fa-chevron-up"></i>
							Top
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
        <div id="sitebodyoverlay"></div>
        <nav id="mb-main-menu" class="main-menu">
            <div class="mb-menu-title">
                <h3>Navigation</h3>
                <span id="close-mb-menu">
				<i class="fa fa-times-circle"></i>
			</span>
            </div>
            <ul class="cate_list">
                <li class="level0 parent col1 all-product">
                    <a href="category_grid.html#">
                        <span>All Product</span>
                        <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i>
                    </a>
                    <ul class="level0">
                        <li class="level1">
                            <a href="category_grid.html#" title="Business Card">Business Card</a>
                        </li>
                        <li class="level1">
                            <a href="category_grid.html#" title="Premium Business Card">Premium Business Card</a>
                        </li>
                        <li class="level1">
                            <a href="category_grid.html#" title="Free Business Card">Free Business Card</a>
                        </li>
                        <li class="level1">
                            <a href="category_grid.html#" title="Marketing Materials">Marketing Materials</a>
                        </li>
                        <li class="level1">
                            <a href="category_grid.html#" title="Dance Marketing Kit">Dance Marketing Kit</a>
                        </li>
                        <li class="level1 view-all-pro">
                            <a href="category_grid.html#" title="view all product">View all</a>
                        </li>
                    </ul>
                </li>
                <li class="level0 parent col1">
                    <a href="category_grid.html#" title="Business Cards">
                        <span>Business Cards</span>
                        <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i>
                    </a>
                    <ul class="level0">
                        <li class="level1 nav-1-1 first item">
                            <a href="category_grid.html#" title="Premium Business Cards">Premium Business Cards</a>
                        </li>
                        <li class="level1 nav-1-2 item">
                            <a href="category_grid.html#" title="Free Business Cards">Free Business Cards</a>
                        </li>
                        <li class="level1 nav-1-3 item">
                            <a href="category_grid.html#" title="Die-Cut Business Cards">Die-Cut Business Cards</a>
                        </li>
                        <li class="level1 nav-1-4 item">
                            <a href="category_grid.html#" title="Standard Business Cards">Standard Business Cards</a>
                        </li>
                        <li class="level1 nav-1-5 item">
                            <a href="category_grid.html#" class="Personal Business Cards">Personal Business Cards</a>
                        </li>
                        <li class="level1 nav-1-6 item">
                            <a href="category_grid.html#" title="Business Card Holders">Business Card Holders</a>
                        </li>
                        <li class="level1 nav-1-7 item">
                            <a href="category_grid.html#" title="Networking Cards">Networking Cards</a>
                        </li>
                        <li class="level1 nav-1-8 item">
                            <a href="category_grid.html#" title="Appointment Cards">Appointment Cards</a>
                        </li>
                        <li class="level1 nav-1-9 last item">
                            <a href="category_grid.html#" title="Mommy Cards">Mommy Cards</a>
                        </li>
                    </ul>
                </li>
                <li class="level0">
                    <a href="category_grid.html#" title="Marketing">Marketing</a>
                </li>
                <li class="level0">
                    <a href="category_grid.html#" title="Postcards">Postcards</a>
                </li>
                <li class="level0">
                    <a href="category_grid.html#" title="Stickers & Badges">Stickers & Badges</a>
                </li>
                <li class="level0" title="Promotional">
                    <a href="category_grid.html#">Promotional</a>
                </li>
            </ul>
        </nav>
        <!--Add js lib-->

        <script type="text/javascript" src="<?php echo base_url()?>assets/front/js/jquery/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/front/js/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/front/js/bootstrap.min.js"></script>
        <!-- <script type="text/javascript" src="<?php echo base_url()?>assets/front/js/modernizr.js"></script>  -->
        <script type="text/javascript" src="<?php echo base_url()?>assets/front/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/front/js/theme.js"></script>

        <!-- Jqx -->
        <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxcore.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxdata.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxbuttons.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxscrollbar.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxnotification.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxdatatable.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxcheckbox.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxlistbox.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxdropdownlist.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxcombobox.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxradiobutton.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxdatetimeinput.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxcalendar.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/scripts/demos.js"></script>

        <script src="<?php echo base_url()?>assets/admin/assets/js/jsgrid/jsgrid.min.js"></script>

		<script src="<?php echo base_url()?>assets/menu/dist/js/navik.menu.js"></script> <!-- Navik navigation jQuery -->
		<script src="<?php echo base_url()?>assets/menu/demo/custom.js"></script> <!-- Custom jQuery -->

        <script>
			$(document).ready(function(){
				$(".dropdown").hover(            
					function() {
						$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
						$(this).toggleClass('open');        
					},
					function() {
						$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
						$(this).toggleClass('open');
					}
				);
			});

			var atr_keys_buc = "";
			var bu_id = 0;
			var t_budget = 0;//Selected Total budget

			function remove(id){
				$("#backet_box").find('#bu'+id).remove();
				buc_num= parseInt($(".mcart-dd-qty").text());
				buc_num--;
				$(".mcart-dd-qty").text(buc_num);
			}
			$("#add_basket").click(function(){
				var img_sr = $(".slide_img")[0].src;
				bu_id++;
				// var aj_arr1 = {};
				// var busket_text = "";
				// for (var i = 0; i < $(".drp_cus").length; i++) {
				// 	var temp_str = "";
				// 	temp_str = $(".drp_cus")[i].innerText;
				// 	var n = $(".drp_cus")[i].innerText.endsWith("\n");
				// 	var str_len = $(".drp_cus")[i].innerText.length - 1;
				// 	if (n == true) {
				// 		aj_arr1[atr_keys_buc[i]] = temp_str.slice(0, str_len);
				// 	} else {
				// 		aj_arr1[atr_keys_buc[i]] = $(".drp_cus")[i].innerText;
				// 	}
				// }
				// aj_arr1 = JSON.stringify(aj_arr1);
				// aj_arr1 = aj_arr1.replace("{","");
				// aj_arr1 = aj_arr1.replace("}","");
				// $("#backet_box")[0].innerHTML ="";
				// var buc_num = 0;
				var buc_num = parseInt($(".mcart-dd-qty").text());
				buc_num++;
				t_budget += parseFloat($(".price").text().replace("£",""));
				$(".total_bud").text("£"+t_budget);
				$("#backet_box").append('<div class="mcart-item-w clearfix1" id="bu'+bu_id+'">'+
					'<ul>'+
						'<li class="mcart-item">'+
							'<img src="'+img_sr+'" alt="postcard cards" style="height:50px">'+
							'<div class="mcart-info">'+
								'<a href="detail.html" class="mcart-name">'+$(".sidebar-title").text()+'</a>'+
								'<span class="mcart-price">'+$(".price").text()+'</span>'+
								'<span class="mcart-remove-item" id='+bu_id+' onclick="remove('+bu_id+')">'+
									'<i class="fa fa-times-circle"></i>'+
								'</span>'+
							'</div>'+
						'</li>'+
					'</ul>'+
				'</div>');
				$(".mcart-dd-qty").text(buc_num);
				// $(".mcart-remove-item").click(function(){
				// 	$("#backet_box").find('#bu'+this.id).remove();
				// })
			})

			// $("tbody").scrollWidth= 
            $(".c_cate").click(function() {
                document.location = "<?php echo base_url()?>home/f_cate_view?id=" + this.title;
            })
            get_card(<?php echo $this->input->get("id")?>);

            function get_card(id) {
                $.ajax({
                    url: "<?php echo base_url()?>admin/get_cate_info",
                    type: "POST",
                    data: {
                        id: id
                    },
                    success: function(res) {
						var res = JSON.parse(res);
                        var quantity = JSON.parse(res.quantity);
                        var service = JSON.parse(res.service);
						res = JSON.parse(res.detail);
						
                        var c_value = res[0].c_value;
                        var c_name = res[0].c_name;
						$("#detail_name").text("Category Details : " + c_name);
						// Price
						var sel_p = 0;
						var total = 0;
						// End of price
						var vat = parseFloat(res[0].vat);
						var art_price = res[0].art1;
                        c_value = JSON.parse(c_value);
						var atr = c_value.attributes;
						atr_keys_buc = Object.keys(atr); //This is used for busket
						var atr_keys = Object.keys(atr);
                        $("#detail")[0].innerHTML = "";
                        for (var i = 0; i < atr_keys.length; i++) {
                            $("#detail").append("<li style='padding: 10px;list-style:none'><div><span>" + atr_keys[i] + "</span></div><div id='temp" + i + "' class='drp_cus'></div></li>");

                            var end_arr = [];
                            for (var j = 0; j < atr[atr_keys[i]].length; j++) {
                                end_arr.push(atr[atr_keys[i]][j]);
                            }
                            $("#temp" + i).jqxDropDownList({
                                source: end_arr,
                                placeHolder: "Select Time",
                                selectedIndex: 0,
                                width: "100%",
                                height: 30
                            });
                        }
                        if (quantity.length >= 1) {
                            $("#detail").append("<li style='padding: 10px;list-style:none'><div><span>Quantity</span><div id='quantity'></div></li>");
                            var quantity_src = [];
                            for (var i = 0; i < quantity.length; i++) {
                                quantity_src.push(quantity[i]['quantity']);
                            }
                            $("#quantity").jqxDropDownList({
                                source: quantity_src,
                                placeHolder: "Select Quantity",
                                selectedIndex: 0,
                                width: "100%",
                                height: 30
							});
							var a_ser;
							$(".cur-option-val")[0].innerHTML = "";
							$(".cur-option-val").append("File Check -£ "+res[0].art1);
							for(var i = 0; i < 3 ; i++){
								a_ser = "<li value='0'><span>Just Print - Free</span></li>"+
											"<li value="+res[0].art1+"><span>File Check -£ "+res[0].art1+"</span></li>"+
											"<li value="+res[0].art2+"><span>File Check with Proofing -£ "+res[0].art2+"</span></li>"+
											"<li value="+res[0].art3+"><span>File Assit - £"+res[0].art3+"</span></li>";
							}
							$(".d-none").append(a_ser);
							$(".d-none").find("li").click(function(){
								art_price = $(this).val();
								$(".cur-option-val").text($(this).text());
								total = (parseFloat(sel_p) * (1 + vat) / 100 + parseFloat(art_price)).toFixed(2);
								$(".price").text("£" + total);
							})
							
						}
                        $(".product-hover").click(function() {
							var url_index = window.btoa(id);;
							document.location = "<?php echo base_url()?>admin/gallery?ind=" + url_index;
						})
                        var aj_arr = {};
                        for (var i = 0; i < $(".drp_cus").length; i++) {
                            var temp_str = "";
                            temp_str = $(".drp_cus")[i].innerText;
                            var n = $(".drp_cus")[i].innerText.endsWith("\n");
                            var str_len = $(".drp_cus")[i].innerText.length - 1;
                            if (n == true) {
                                aj_arr[atr_keys[i]] = temp_str.slice(0, str_len);
                            } else {
                                aj_arr[atr_keys[i]] = $(".drp_cus")[i].innerText;
                            }
                        }
                        aj_arr = JSON.stringify(aj_arr);
                        $.ajax({
                            url: "<?php echo base_url()?>admin/get_price",
                            data: {
                                data: aj_arr,
                                c_name: c_name
                            },
                            type: "POST",
                            success: function(res_price) {
                                var res_price = JSON.parse(res_price);
                                window.db = db;
                                var db = {
                                    loadData: function(filter) {
                                        return $.grep(this.clients, function(client) {
                                            return (!filter.Quantity || client.Quantity.indexOf(filter.Quantity) > -1) && (!filter.Saver || client.Saver === filter.Saver) && (!filter.Standard || client.Standard.indexOf(filter.Standard) > -1) && (!filter.Express || client.Express === filter.Express);
                                        });
                                    },
                                    insertItem: function(insertingClient) {
                                        this.clients.push(insertingClient);
                                    },
                                    updateItem: function(updatingClient) {},

                                    deleteItem: function(deletingClient) {
                                        var clientIndex = $.inArray(deletingClient, this.clients);
                                        this.clients.splice(clientIndex, 1);
                                    }
                                };
								db.clients = [];
								$("#cat_price")[0].innerHTML = "";
								// Change the Talbe Height;
								if(res_price.length < 5){
									$("thead").css("paddingRight","0px");
									$("#cat_price").css('height',100 * res_price.length);
								}
                                for (var i = 0; i < res_price.length; i++) {
									var temp = {};
									sel_p = res_price[0]['price_express'];//first selected value

                                    temp.Quantity = res_price[i]['quantity'];
                                    temp.Saver = res_price[i]['price_saver'];
                                    temp.Standard = res_price[i]['price_stand'];
                                    temp.Express = res_price[i]['price_express'];
									db.clients.push(temp);
									var app_temp = "";
									if(i == 0){
										app_temp = "<tr><th>"+res_price[i]['quantity']+"</th>"+
														"<td class='saver'>£"+res_price[i]['price_saver']+"</td>"+
														"<td class='standard'>£"+res_price[i]['price_stand']+"</td>"+
														"<td class='exp' style='background-color:#a1b949'><div style='border : 2px solid #a1b949;' class='exp_div'>£"+res_price[i]['price_express']+"</div></td></tr>";
									}
									else{
										app_temp = "<tr><th>"+res_price[i]['quantity']+"</th>"+
														"<td class='saver'>£"+res_price[i]['price_saver']+"</td>"+
														"<td class='standard'>£"+res_price[i]['price_stand']+"</td>"+
														"<td class='exp'><div style='border : 2px solid #a1b949;' class='exp_div'>£"+res_price[i]['price_express']+"</div></td></tr>";
									}
									$("#cat_price").append(app_temp);	
								}
								// Display Total
								total = (parseFloat(sel_p) * (100 + vat) / 100 + parseFloat(art_price)).toFixed(2);
								$(".price").text("£" + total);
								// End of display total
								$("#cat_price").find("td").click(function(){
									var th_s = $("#cat_price").find("th").css("color","black");
									// console.log(this[0].innerText);
									var sel_val = $(this).text().replace('£',"");
									for(var i= 0; i< th_s.length ; i++){
										th_s[i].style.color = "black";
									}
									var h_s = $(".h_class").find("th");
									for(var i = 0; i < h_s.length; i++){
										h_s[i].style.color = "black";
									}
									var td_s = $("#cat_price").find("td");
									for(var i = 0; i < td_s.length; i++){
										td_s[i].style.backgroundColor = "white";
										td_s[i].style.color = "black";
									}
									if(this.className == "saver"){
										$('.saver_h').css('color','#2B7DC2');
										this.style.backgroundColor = "#2B7DC2";
									}
									if(this.className == "standard"){
										$('.standard_h').css('color','#2B7DC2');
										this.style.backgroundColor = "#2B7DC2";
									}
									if(this.className == "exp"){
										this.style.backgroundColor = "#95c43e";
									}
									this.parentNode.firstElementChild.style.color="#2B7DC2";
									total = (parseFloat(sel_val) * (100 + vat) / 100 + parseFloat(art_price)).toFixed(2);
									$(".price").text("£" + total);
								})
                            }
                        })
                        $(".drp_cus").on("change", function() {
							aj_arr = {};
							for (var i = 0; i < $(".drp_cus").length; i++) {
								var temp_str = "";
								temp_str = $(".drp_cus")[i].innerText;
								var n = $(".drp_cus")[i].innerText.endsWith("\n");
								var str_len = $(".drp_cus")[i].innerText.length - 1;
								if (n == true) {
									aj_arr[atr_keys[i]] = temp_str.slice(0, str_len);
								} else {
									aj_arr[atr_keys[i]] = $(".drp_cus")[i].innerText;
								}
							}
							aj_arr = JSON.stringify(aj_arr);
							$.ajax({
								url: "<?php echo base_url()?>admin/get_price",
								data: {
									data: aj_arr,
									c_name: c_name
								},
								type: "POST",
								success: function(res_price) {
									var res_price = JSON.parse(res_price);
									window.db = db;
									var db = {
										loadData: function(filter) {
											return $.grep(this.clients, function(client) {
												return (!filter.Quantity || client.Quantity.indexOf(filter.Quantity) > -1) && (!filter.Saver || client.Saver === filter.Saver) && (!filter.Standard || client.Standard.indexOf(filter.Standard) > -1) && (!filter.Express || client.Express === filter.Express);
											});
										},
										insertItem: function(insertingClient) {
											this.clients.push(insertingClient);
										},
										updateItem: function(updatingClient) {},

										deleteItem: function(deletingClient) {
											var clientIndex = $.inArray(deletingClient, this.clients);
											this.clients.splice(clientIndex, 1);
										}
									};
									db.clients = [];
									$("#cat_price")[0].innerHTML = "";
									// Change the Talbe Height;
									if(res_price.length < 5){
										$("thead").css("paddingRight","0px");
										$("#cat_price").css('height',100 * res_price.length);
									}
									for (var i = 0; i < res_price.length; i++) {
										var temp = {};
										sel_p = res_price[0]['price_express'];//first selected value

										temp.Quantity = res_price[i]['quantity'];
										temp.Saver = res_price[i]['price_saver'];
										temp.Standard = res_price[i]['price_stand'];
										temp.Express = res_price[i]['price_express'];
										db.clients.push(temp);
										var app_temp = "";
										if(i == 0){
											app_temp = "<tr><th>"+res_price[i]['quantity']+"</th>"+
															"<td class='saver'>£"+res_price[i]['price_saver']+"</td>"+
															"<td class='standard'>£"+res_price[i]['price_stand']+"</td>"+
															"<td class='exp' style='background-color:#a1b949'><div style='border : 2px solid #a1b949;' class='exp_div'>£"+res_price[i]['price_express']+"</div></td></tr>";
										}
										else{
											app_temp = "<tr><th>"+res_price[i]['quantity']+"</th>"+
															"<td class='saver'>£"+res_price[i]['price_saver']+"</td>"+
															"<td class='standard'>£"+res_price[i]['price_stand']+"</td>"+
															"<td class='exp'><div style='border : 2px solid #a1b949;' class='exp_div'>£"+res_price[i]['price_express']+"</div></td></tr>";
										}
										$("#cat_price").append(app_temp);	
									}
									// Display Total
									total = (parseFloat(sel_p) * (100 + vat) / 100 + parseFloat(art_price)).toFixed(2);
									$(".price").text("£" + total);
									// End of display total
									$("#cat_price").find("td").click(function(){
										var th_s = $("#cat_price").find("th").css("color","black");
										// console.log(this[0].innerText);
										var sel_val = $(this).text().replace('£',"");
										for(var i= 0; i< th_s.length ; i++){
											th_s[i].style.color = "black";
										}
										var h_s = $(".h_class").find("th");
										for(var i = 0; i < h_s.length; i++){
											h_s[i].style.color = "black";
										}
										var td_s = $("#cat_price").find("td");
										for(var i = 0; i < td_s.length; i++){
											td_s[i].style.backgroundColor = "white";
											td_s[i].style.color = "black";
										}
										if(this.className == "saver"){
											$('.saver_h').css('color','#2B7DC2');
											this.style.backgroundColor = "#2B7DC2";
										}
										if(this.className == "standard"){
											$('.standard_h').css('color','#2B7DC2');
											this.style.backgroundColor = "#2B7DC2";
										}
										if(this.className == "exp"){
											this.style.backgroundColor = "#95c43e";
										}
										this.parentNode.firstElementChild.style.color="#2B7DC2";
										total = (parseFloat(sel_val) * (1 + vat) / 100 + parseFloat(art_price)).toFixed(2);
										
										$(".price").text("£" + total);
									})
									
								}
							})
						})
                    }
                })
			}
			// Collpase of the article
			var coll = document.getElementsByClassName("collapsible");
				var i;

				for (i = 0; i < coll.length; i++) {
				coll[i].addEventListener("click", function() {
					this.classList.toggle("active");
					var content = this.nextElementSibling;
					if (content.style.display === "block") {
					content.style.display = "none";
					} else {
					content.style.display = "block";
					}
				});
			}
            //
        </script>
    </body>

</html>
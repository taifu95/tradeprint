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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/menu.css">

	<link rel="stylesheet" href="<?php echo base_url()?>assets/menu/demo/style.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/mine/mine.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/menu/dist/css/navik-horizontal-default-menu.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/toastr/toastr.min.css">
	<?php 
		$col = json_decode($color,true);
	?>
    <style>
		/* Carousel Styles */
			#main_menu .mega-menu-box{
				display : inline-grid;
				width : 24%;
			}
		.navik-header-container{
			display : inline-block;
			width : 100%;
			background-color : transparent;
		}
		.navik-header{
			background-color : transparent;
		}
		.burger-menu{
			right : 0px;
		}
		.navik-header.sticky{
			position : absolute;
		}
		#top-header{
			background-color : <?php echo $col[0]['header']?>;
		}
		.main-header{
			background : <?php echo $col[0]['menu']?>;
		}
		@media (max-width : 1200px){
			#main_menu .mega-menu-box{
				display : inline-grid;
				width : 32%;
			}
		}
		@media (max-width : 760px){
			#main_menu .mega-menu-box{
				display : inline-grid;
				width : 50%;
				margin-bottom : 15px;
			}
		}
		@media (max-width : 540px){
			#main_menu .mega-menu-box{
				display : inline-block;
				width : 100%;
				margin-bottom : 10px;
			}
		}
		@media (max-width: 480px){
			#top-header {
				width : 100%;
			}
		}
		.search-form form input[type="text"]{
			padding : 0px;
			z-index : 100000000;
			padding-left : 40px;
			vertical-align : middle;
		}
		.search-result {
			position: absolute;
			margin-top: 5px;
			background-color : white;
			width: 100%;
			z-index: 1000000000;
			box-shadow : inset 0px 0px 1px rgba(51, 15, 15, 0.38);
		}
		.search-result p{
			margin : 0px;
		}
		.search-result p a {
			color : black !important;
		}


    </style>
</head>

<body>
    <!--Header: Begin-->
    <header>
        <!--Top Header: Begin-->
        <section id="top-header" class="clearfix">
            <div class="container">
                <div class="row">
                    <div class="top-links col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <ul>
                            <li class="visible-md visible-lg" style="line-height:30px;margin-top:15px;width:100%">
                                <div class="search-form dropdowSCContent">
									<form method="POST" action="#">
                                        <input type="text" name="search" placeholder="Search" style="width:100%;max-width:100%" id="pro_search">
                                        <!-- <input type="submit" name="search" value="Search"> -->
                                        <i class="fa fa-search" style="padding-left:10px"></i>
                                    </form>
								</div>
								<div class="search-result">
								</div>
                            </li>
                        </ul>
                    </div>
                    <div class="top-header-right f-right col-lg-6 col-md-6 col-sm-6 col-xs-6">
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
                    <div class="col-lg-9 col-md-8">
						<div class="navik-header header-shadow navik-mega-menu">
							<div class="container">
								<div class="navik-header-container">
									<div class="logo" data-mobile-logo="<?php echo base_url()?>assets/front/images/logo.png" data-sticky-logo="<?php echo base_url()?>assets/front/images/logo.png">
										<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/front/images/logo.png" alt="printshop logo" id="log"></a>
									</div>
									
									<!-- Burger menu -->
									<div class="burger-menu">
										<div class="line-menu line-half first-line"></div>
										<div class="line-menu"></div>
										<div class="line-menu line-half last-line"></div>
									</div>
									<nav class="navik-menu menu-caret submenu-top-border">
										<ul>
											<li class="current-menu mega-menu"><a href="">All Product</a>
												<ul>
													<li>
														<!-- Mega menu container -->

														<div class="mega-menu-container">
															<div class="row">
																<!-- Column -->
																<?php 
																$top = $menu['top'];
																$menu = $menu['menu'];
																	// for($i = 0 ; $i < count($menu); $i++){
																?>
																<!-- <div class="col-md-6 col-lg-3"> -->
																<div class="col-lg-12" id="main_menu">
																	<?php 
																	for($i = 0;$i < count($top); $i++){
																		;
																	?>
																	<div class="mega-menu-box">
																		<h4 class="mega-menu-heading"><span><?php echo $top[$i]['top_cate']?></span></h4>
																		<ul class="mega-menu-list">
																			<?php 
																				for($j =0 ; $j < count($menu);$j++){
																					if($menu[$j]['top_cate'] == $top[$i]['top_cate'] && $menu[$j]['visible'] == 0){
																			?>
																			<li>
																				<a href="<?php echo base_url()?>home/f_cate_view?id=<?php echo $menu[$j]["id"]?>"><?php echo $menu[$j]["c_name"]?></a>
																			</li>
																			<?php }} ?>
																		</ul>
																	</div>
																	<?php } ?>
																</div>
																<?php 
																	// }
																?>
																<!-- <div class="col-md-6 col-lg-3">
																	<div class="mega-menu-box">
																		<div class="mega-menu-thumbnail">
																			<img src="http://localhost//assets/product/MjMsIDEyLCAyMDE5LCAwMywyNCw0MGNvbXBfQ29tcHMtaGFuZC04MDB4ODAwLmpwZw==.jpg" alt="thumbnail"/>
																		</div>
																	</div>
																</div> -->
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li class="mega-menu"><a href="43-mega-menu-light.html#">Home</a>
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
											<li class="mega-menu"><a href="<?php echo base_url()?>about_us">About Us</a>
												<ul>
													<li>

														<!-- Mega menu container -->
														<div class="mega-menu-container">
															<div class="row">

																<!-- Column -->
																<div class="col-lg-8">

																	<div class="mega-menu-box">
																		<div class="mega-menu-media">
																			<!-- <div class="mega-menu-media-img">
																				<div class="mega-menu-thumbnail">
																					<a href="43-mega-menu-light.html#">
																						<img src="<?php echo base_url()?>assets/menu/demo/images/mega-menu-thumbnail-05.jpg" alt="thumbnail"/>
																					</a>
																				</div>
																			</div> -->
																			<div class="mega-menu-media-info">
																				<h4 class="mega-menu-heading"><a href="<?php echo base_url()?>about_us">Our goal is to help you succeed.</a></h4>
																				<div class="mega-menu-desc">
																					That’s why we do so much more than put ink on paper.
																					We are a print partner for thousands of marketing, creative and print professionals, just like you. We’ll work with you to provide the best products and service to your clients. We’ll offer you support and advice to help you increase your customer base and revenue, to ultimately grow your business.
																					Because when you succeed, we succeed
																				</div>
																			</div>
																		</div>
																	</div>

																</div>

																<!-- Column -->
																<div class="col-lg-4">

																	<div class="mega-menu-box">
																		<div class="mega-menu-thumbnail">
																			<a href="<?php echo base_url()?>about_us">
																				<img src="<?php echo base_url()?>assets/front/images/abouts/about01.jpg" alt="thumbnail"/>
																			</a>
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
											<li class="submenu-right"><a href="<?php echo base_url()?>contact">Contact Us</a>
												<ul>
													<li><a href="43-mega-menu-light.html#">Dropdown menu</a></li>
													<li><a href="43-mega-menu-light.html#">Dropdown menu</a></li>
													<li><a href="43-mega-menu-light.html#">Dropdown menu</a></li>
													<li><a href="43-mega-menu-light.html#">Dropdown menu</a></li>
												</ul>
											</li>
										</ul>
									</nav>

									<!-- <div class="col-lg-1 col-md-2 col-sm-2 col-xs-3 headerCS">
										<div class="cart-w SC-w hd-pd ">
											<span class="mcart-icon dropdowSCIcon">
												<i class="fa fa-shopping-cart"></i>
												<span class="mcart-dd-qty">0</span>
											</span>
											<div class="mcart-dd-content dropdowSCContent clearfix">
												<div id="backet_box"></div>
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
									</div> -->
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </section>
        <!--Main Header: End-->
	</header>
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
    <style>
        /* Carousel Styles */
        
        .carousel-indicators .active {
            background-color: #fff;
        }
        
        .carousel-inner img {
            width: 100%;
			max-height: 460px;
			border-radius : 20px;
        }
        
        .carousel-control {
            width: 0;
        }
        
        .carousel-control.left,
        .carousel-control.right {
            opacity: 1;
            filter: alpha(opacity=100);
            background-image: none;
            background-repeat: no-repeat;
            text-shadow: none;
        }
        
        .carousel-control.left span {
            margin-left: 15px;
        }
        
        .carousel-control.right span {
            margin-right: 15px;
        }
        
        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-prev,
        .carousel-control .icon-next {
            position: absolute;
            top: 45%;
            z-index: 5;
            display: inline-block;
        }
        
        .carousel-control .glyphicon-chevron-left,
        .carousel-control .icon-prev {
            left: 0;
        }
        
        .carousel-control .glyphicon-chevron-right,
        .carousel-control .icon-next {
            right: 0;
        }
        
        .carousel-control.left span,
        .carousel-control.right span {}
        
        .carousel-control.left span:hover,
        .carousel-control.right span:hover {
            opacity: .7;
            filter: alpha(opacity=70);
		}
		.collapsible {
			margin-top : 30px;
			background-color: #fbfbfb;
			border-top : 1px solid #ccc;
			color: #017cc0;
			cursor: pointer;
			padding: 18px 0px 0px 18px;
			width: 100%;
			/* border: none; */
			text-align: left;
			outline: none;
			font-size: 15px;
		}
		.content:first-child {
			border-bottom : 1px solid #ccc;
		}

		.active, .collapsible:hover {
			background-color: #fbfbfb;
		}

		.content {
			padding: 10px 18px 0px 18px;
			display: none;
			overflow: hidden;
			background-color: #f1f1f1;
		}
		table { 
			width: 100%; 
			border-collapse: collapse;
			margin:50px auto;
			border-spacing : 0;
		}
		table {
			width: 100%;
			display:table;
		}
		thead {
			display: inline-block;
			width: 100%;
			/* height: 20px; */
		}
		tbody {
			height: 400px;
			display: inline-block;
			width: 100%;
			overflow: auto;
		}

		/* Zebra striping */
		tr:nth-of-type(odd) { 
			background: #eee; 
		}
		tr {
			display: table;
			table-layout: fixed;
			width: 100%;
			padding : 3px;
		}

		th { 
			background: #eee; 
			color: black; 
			font-weight: bold; 
			}

		td, th { 
			/* padding: 20px 0px; */
			text-align : center !important; 
			border: 1px solid #eee; 
			text-align: left; 
			font-size: 18px;
			border : 2px solid #eee;
		}
		thead {
			padding-right : 15px;
		}
		/* @media (max-width : 1400px){
			thead {
				padding-right : 0x;
			}
		} */
		thead tr th {
			padding : 20px 0px;
		}
		td {
			background :white;
			cursor :pointer;
		}
		td:hover {
			background :#0092d3;
			color : white;
		}
		.exp_div{
			padding : 20px 0px;
		}
		.exp_div:hover{
			background : #a1b949;
		}
		.sidebar-title{
			margin-bottom : 20px;
			border-radius : 5px;
		}
		@media(max-width: 1200px){
			.upload-add-cart{
				width : 50%
			}
		}
		@media(max-width: 768px){
			.upload-add-cart{
				width : 100%;
			}
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
                    <div class="top-links col-lg-7 col-md-6 col-sm-5 col-xs-6">
                        <ul>
                            <li class="visible-md visible-lg">
                                <a href="myaccount-dashboard.html">
                                    <i class="fa fa-lock"></i>
                                    <!-- Account -->
                                </a>
                            </li>
                            <li class="visible-md visible-lg">
                                <a href="wishlist.html">
                                    <i class="fa fa-heart"></i>
                                    <!-- Wishlist -->
                                </a>
                            </li>
                            <li>
                                <a href="login.html">
                                    <i class="fa fa-user"></i>
                                    <!-- Login -->
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <a href="register.html">
                                    <i class="fa fa-pencil"></i>
                                    <!-- Sign Up -->
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <a href="category_grid.html#">
                                    <i class="fa fa-facebook"></i>
                                    <!-- Connect with facebook -->
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <a href="category_grid.html#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <a href="category_grid.html#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li class="hidden-xs">
                                <a href="category_grid.html#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="top-header-right f-right col-lg-5 col-md-6 col-sm-7 col-xs-6">
                        <div class="w-header-right">
                            <div class="block-currency">
                                <div class="currency-active">
                                    <span class="currency-name">
										currency:<span> usd</span><i class="fa fa-angle-down"></i>

                                    </span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="category_grid.html#" title="Select currency japan">
                                            <span>JPY</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="Select currency japan">
                                            <span>Euro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="Select currency japan">
                                            <span>Pound St.</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="language-w clearfix">
                                <div class="language-active">
                                    <span class="language-name">Language: <span>English</span><i class="fa fa-angle-down"></i>
                                    </span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="category_grid.html#" title="Select Australia language">
                                            <span>Australia</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="Select Japan language">
                                            <span>Japan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="Select France language">
                                            <span>France</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="th-hotline">
                                <i class="fa fa-phone"></i>
                                <span>1.866.614.8002</span>
                            </div>
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
                    <div class="col-lg-4 col-md-2 col-sm-4 col-xs-5 w-logo">
                        <div class="logo hd-pd ">
                            <a href="index.html">
								<img src="<?php echo base_url()?>assets/front/images/logo.png" alt="printshop logo">
							</a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8 visible-md visible-lg">
                        <nav id="main-menu" class="main-menu clearfix">
                            <ul>
                                <li class="level0 parent col1 hd-pd">
                                    <a href="index.html#"><span>All Products</span><i class="fa fa-chevron-down"></i></a>
                                    <ul class="level0" style="height:inherit">
                                        <?php 
											$category1 = json_decode($category);
											$i = 0;
											foreach($category1 as $temp1){
											?>
                                            <li class="level1 nav-1-<?php echo $i?> first item">
                                                <a style="cursor:pointer" class="c_cate" style="padding:0px" title="<?php echo $temp1->id?>"><?php echo $temp1->c_name?></a>
                                            </li>
                                            <?php
											$i++;
											}
										?>
                                    </ul>
                                </li>
                                <li class="level0 parent col1 hd-pd">
                                    <a href="category_grid.html" title="Business Cards">
                                        <span>Business Cards</span>
                                        <i class="fa fa-chevron-down"></i>
                                    </a>
                                    <ul class="level0">
                                        <li class="level1 nav-1-1 first item">
                                            <a href="category_grid.html" title="Premium Business Cards">Premium Business Cards</a>
                                        </li>
                                        <li class="level1 nav-1-2 item">
                                            <a href="category_grid.html" title="Free Business Cards">Free Business Cards</a>
                                        </li>
                                        <li class="level1 nav-1-3 item">
                                            <a href="category_grid.html" title="Die-Cut Business Cards">Die-Cut Business Cards</a>
                                        </li>
                                        <li class="level1 nav-1-4 item">
                                            <a href="category_grid.html" title="Standard Business Cards">Standard Business Cards</a>
                                        </li>
                                        <li class="level1 nav-1-5 item">
                                            <a href="category_grid.html" class="Personal Business Cards">Personal Business Cards</a>
                                        </li>
                                        <li class="level1 nav-1-6 item">
                                            <a href="category_grid.html" title="Business Card Holders">Business Card Holders</a>
                                        </li>
                                        <li class="level1 nav-1-7 item">
                                            <a href="category_grid.html" title="Networking Cards">Networking Cards</a>
                                        </li>
                                        <li class="level1 nav-1-8 item">
                                            <a href="category_grid.html" title="Appointment Cards">Appointment Cards</a>
                                        </li>
                                        <li class="level1 nav-1-9 last item">
                                            <a href="category_grid.html" title="Mommy Cards">Mommy Cards</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="level0 hd-pd">
                                    <a href="category_grid.html" title="Marketing">Marketing</a>
                                </li>
                                <li class="level0 hd-pd">
                                    <a href="category_list.html" title="Postcards">Postcards</a>
                                </li>
                                <li class="level0 hd-pd" title="About Us">
                                    <a href="category_list.html">About Us</a>
                                </li>
                            </ul>
                        </nav>
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
								<span class="mcart-dd-qty">2</span>
                            </span>
                            <div class="mcart-dd-content dropdowSCContent clearfix">
                                <div class="mcart-item-w clearfix1">
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
                                </div>

                                <div class="mcart-item-w clearfix">
                                    <ul>
                                        <li class="mcart-item iteam2">
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
                                </div>
                                <div class="mcart-total clearfix">
                                    <table>
                                        <tr>
                                            <td>Sub-Total</td>
                                            <td>$ 10.09</td>
                                        </tr>
                                        <tr>
                                            <td>Eco Tax (-2.00)</td>
                                            <td>$ 2.00</td>
                                        </tr>
                                        <tr>
                                            <td>VAT (20%)</td>
                                            <td>$ 2.018</td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td>$ 10.108</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="mcart-links buttons-set clearfix">
                                    <a href="cart.html" class="gbtn mcart-link-cart">View Cart</a>
                                    <a href="checkout.html" class="gbtn mcart-link-checkout">Checkout</a>
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
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
									<?php
										foreach($img as $temp1){
											$img1 = $temp1["c_img"];
											$c_name1 = $temp1["c_name"];
										}
										$img_arr1 = explode(",",$img1);
										$p = 0;
										foreach($img_arr1 as $r_img1){
											if($p == 0){
									?>
										<li data-target="#carousel-example-generic" data-slide-to="<?php echo $p?>" class="active"></li>
									<?php } else { ?>
										<li data-target="#carousel-example-generic" data-slide-to="<?php echo $p?>"></li>
									<?php } 
										$p++;
									}?>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <?php
										foreach($img as $temp){
											$img = $temp["c_img"];
											$desc = $temp["c_img"];
											$c_name = $temp["c_name"];
										}
										$img_arr = explode(",",$img);
										$i = 0;
										foreach($img_arr as $r_img){
											if($i == 0){
									?>
									<div class="item active">
										<img src="<?php echo base_url()?>/assets/product/<?php echo $r_img?>" alt="First slide" style="height : 400px">
										<div class="action">
										</div>
									</div>
									<?php } else { ?>
										<div class="item">
											<img src="<?php echo base_url()?>/assets/product/<?php echo $r_img?>" alt="First slide" style="height : 400px">
										</div>
									<?php } 
										$i++;
									}?>
								</div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
							</div>
							<div role="tabpanel" class="tab-pane" id="ideals">
								<div class="col-md-8 col-md-offset-2 col-xs-12 ideals-w">
									<?php for($i= 0;$i<3;$i++){?>
									<div class="ideal">
										<img src="<?php echo base_url()?>/assets/product/<?php echo $r_img?>" alt="First slide" style="height : 400px">
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
										<tr>
											<th>Quantity</th>
											<th>Saver</th>
											<th>Standard</th>
											<th style="background : linear-gradient(70deg,#55c300 0,#cef35a 100%)">Express</th>
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
																	<li><span>Just Print - Free</span></li>
																	<li><span>File Check -£2.50</span></li>
																	<li><span>File Check with Proofing -£6.50</span></li>
																	<li><span>File Assit -£15.00</span></li>
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
														<span class="price">£13.50</span>
													</div>
													<div class="col-xs-6 quantity">
														<label>incl. VAT</label>
														<span class="price">£13.50</span>
													</div>
													<div class="add-cart-btn-w col-xs-12">
														<button type="button" class="add-cart-btn btn" style="width:100%">
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
                        <div class="col-md-3 col-sm-4 col-xs-12 about-us footer-col">
                            <h2>About Us</h2>
                            <div class="footer-content">
                                <a href="index.html" title="Cmsmart logo footer" class="logo-footer">
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
                                        <span><a href="mailto:support@dialaprint.co.uk" title="send mail to Cmsmart">support@dialaprint.co.uk</a></span>
                                    </li>
                                </ul>
                                <ul class="footer-social">
                                    <li>
                                        <a href="category_grid.html#" title="Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="Twiter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="Google plus">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 corporate footer-col">
                            <h2>Corporate</h2>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="category_grid.html#" title="About us">About</a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="Green">Green</a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="Afiliates">Afiliates</a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="Non-profits and Government">Non-profits and Government</a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="Terms of Service">Terms of Service</a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="Privacy Policy">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-12 support footer-col">
                            <h2>Support</h2>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="category_grid.html#" title="My Account">My Account</a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="Design Guide">Design Guide</a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="FAQ">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="Design Service">Design Services</a>
                                    </li>
                                    <li>
                                        <a href="category_grid.html#" title="Contact Us">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-12 other-info footer-col hidden-sm">
                            <h2>Other Info</h2>
                            <div class="footer-content">
                                <p>
                                    Printmart provides fast online printing for both homes and businesses. We provide high quality business cards, postcards, flyers, brochures, stationery and other premium online print products.
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
                            <p class="copy-right">Central - Copyright © 2015 <a title="Cmsmart - Magento theme" href="category_grid.html#">dialaprint.co.uk</a>. All Rights Reserved</p>
                            <a href="category_grid.html#" id="back-to-top">
                                <i class="fa fa-chevron-up"></i> Top
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

        <script>
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
                        c_value = JSON.parse(c_value);
                        var atr = c_value.attributes;
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
                        if (quantity.length > 1) {
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
						}
                        // $("#detail").append("<li style='padding: 10px;list-style:none'><div><span>Artwork Service</span><div id='art_service'></div></li>");
                        // var art_src = [
                        //     "Just Print - Free", "File Check -£2.50 ", "File Check with Proofing -£6.50", "File Assit -£15.00"
                        // ];

                        // $("#art_service").jqxDropDownList({
                        //     source: art_src,
                        //     placeHolder: "Select Quantity",
                        //     selectedIndex: 0,
                        //     width: "100%",
                        //     height: 30
                        // });
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
                                for (var i = 0; i < res_price.length; i++) {
                                    var temp = {};
                                    temp.Quantity = res_price[i]['quantity'];
                                    temp.Saver = res_price[i]['price_saver'];
                                    temp.Standard = res_price[i]['price_stand'];
                                    temp.Express = res_price[i]['price_express'];
									db.clients.push(temp);
									var app_temp = "<tr><th>"+res_price[i]['quantity']+"</th>"+
														"<td>£"+res_price[i]['price_saver']+"</td>"+
														"<td>£"+res_price[i]['price_stand']+"</td>"+
														"<td class='exp'><div style='border : 2px solid #a1b949;' class='exp_div'>£"+res_price[i]['price_express']+"</div></td></tr>";
									$("#cat_price").append(app_temp);
								}
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
									for (var i = 0; i < res_price.length; i++) {
										var temp = {};
										temp.Quantity = res_price[i]['quantity'];
										temp.Saver = res_price[i]['price_saver'];
										temp.Standard = res_price[i]['price_stand'];
										temp.Express = res_price[i]['price_express'];
										db.clients.push(temp);
										var app_temp = "<tr><th>"+res_price[i]['quantity']+"</th>"+
															"<td>£"+res_price[i]['price_saver']+"</td>"+
															"<td>£"+res_price[i]['price_stand']+"</td>"+
															"<td class='exp'><div style='border : 2px solid #a1b949;' class='exp_div'>£"+res_price[i]['price_express']+"</div></td></tr>";
										$("#cat_price").append(app_temp);
									}
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
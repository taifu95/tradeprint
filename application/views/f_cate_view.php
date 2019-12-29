
    <!--Header: End-->
    <!--Main category : Begin-->
	<style>
		
		.trust-w .block-trust{
			opacity: 1;
			-webkit-opacity : 1;
			-webkit-transform : none;
			transform : none;
		}
		.cke_top{
			background-color : #fbfbfb;
		}

	</style>
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
									<div class="artwork-template-accordion-content show">
										<ul class="product-tpl-list inline-block mid">
											<li>

												<a href="<?php echo base_url()?>img/templates-icons.png" class="product-tpl product-tpl--ps">
													<span class="sr-only">Template Photoshop</span>
												</a>
											</li>
											<li>

												<a href="/dam/jcr:610754ec-9d54-4865-b8d9-056f4fc2d536/BUSINESSCARD_TEMPLATES-AI.zip" class="product-tpl product-tpl--ai">
													<span class="sr-only">Template Illustrator</span>
												</a>
											</li>
											<li>

												<a href="/dam/jcr:d84c454f-1907-4302-8684-892f0c5243e0/BUSINESSCARD_TEMPLATES-ID.zip" class="product-tpl product-tpl--id">
													<span class="sr-only">Template InDesign</span>
												</a>
											</li>
											<li>

												<a href="/dam/jcr:c2153ead-b49a-46f3-a5b7-0c83ce387fd7/BUSINESSCARD_TEMPLATES-PDF.zip" class="product-tpl product-tpl--pdf">
													<span class="sr-only">Template PDF</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
                        </aside>
                        <!--Category product grid : Begin -->
                        <section class="category grid col-sm-6 col-xs-12">
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
			<section class="trust-w hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 block-trust trust-col-quantity">
							<div class="tr-icon"><i class="fa fa-eur"></i></div>
							<div class="tr-text">
								<h3>Competitive Prices</h3>
								<span class="tr-line"></span>
								<p>Hard-to-beat pricing with trade buyers in mind.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 block-trust trust-col-time-delivery">
							<div class="tr-icon"><i class="fa fa-wechat"></i></div>
							<div class="tr-text">
								<h3>UK Customer Support</h3>
								<span class="tr-line"></span>
								<p>Print experts available from 8am to 6pm every weekday.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 block-trust trust-col-eco-minded">
							<div class="tr-icon"><i class="fa fa-leaf"></i></div>
							<div class="tr-text">
								<h3>White Label Packaging</h3>
								<span class="tr-line"></span>
								<p>
								Deliver direct to your clients with peace of mind.
								</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 block-trust trust-col-eco-money">
							<div class="tr-icon"><i class="fa fa-thumbs-up"></i></div>
							<div class="tr-text">
								<h3>Outstanding Quality</h3>
								<span class="tr-line"></span>
								<p>
								We pride ourselves on the quality of our products.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php 
			$ext = json_decode($category,true);
			$detail = $ext[0]['detail'];
			$specs = $ext[0]['specs'];
			// print_r(json_decode($ext,true));
			?>
			<style>
				.product-image{
					vertical-align : top;
				}
				.product-info-w .product-image img{
					margin-top : 20px;
				}
				@media (max-width : 1023px){
					.product-info-w .product-image{
						display : none;
					}
				}
			</style>
			<section class="product-info-w" style="padding-top:30px">
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
										<div class="v-middle" style="display:inline-block;width:100%">
											<textarea id="editor3" name="editor3"  class="editor3">
                                            <?php 
											?>
											</textarea>
											<div id="ck_val" style="display:none"><?php echo $detail?></div>
										</div>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="paper">
								
								<div class="paper-des v-middle">
									<div class="col-sm-11 col-sm-offset-1">
										<div class="v-middle" style="display:inline-block;width:100%">
											<textarea id="editor2" name="editor2"  class="editor2">
                                            <?php 
											?>
											</textarea>
											<div id="ck_val_specs" style="display:none"><?php echo $specs?></div>
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
		<!-- <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxeditor.js"></script> -->
        <script type="text/javascript" src="<?php echo base_url()?>assets/scripts/demos.js"></script>

        <script src="<?php echo base_url()?>assets/admin/assets/js/jsgrid/jsgrid.min.js"></script>

		<script src="<?php echo base_url()?>assets/menu/dist/js/navik.menu.js"></script> <!-- Navik navigation jQuery -->
		<script src="<?php echo base_url()?>assets/menu/demo/custom.js"></script> <!-- Custom jQuery -->
		<script src="<?php echo base_url()?>assets/mine/search.js"></script>	
		
		<script src="<?php echo base_url()?>assets/admin/assets/js/editor/ckeditor/ckeditor.js"></script>
		<script src="<?php echo base_url()?>assets/admin/assets/js/editor/ckeditor/styles.js"></script>
		<script src="<?php echo base_url()?>assets/admin/assets/js/editor/ckeditor/adapters/jquery.js"></script>
		<script src="<?php echo base_url()?>assets/admin/assets/js/editor/ckeditor/ckeditor.custom.js"></script>>
		<script>
			

			CKEDITOR.replace('editor3', {
				on :
				{
					instanceReady : function ( evt )
					{
						// Hide the editor top bar.
						document.getElementById( 'cke_1_top').style.display = 'none';
					}
				},
				width: '100%',
				styles : {
					"background-color" : '#fbfbfb'
				},
				contentsCss : 'body{background-color:#fbfbfb}',
				height: 500,
				readOnly : true,
				// toolbar: []
			});
			CKEDITOR.instances.editor3.setData( $("#ck_val").text() );
			
			CKEDITOR.replace('editor2', {
				on :
				{
					// setData : function(evt){
					// 	$("#ck_val_specs").text()
					// },
					instanceReady : function ( evt )
					{
						document.getElementById( 'cke_2_top').style.display = 'none';
					}
				},
				width: '100%',
				styles : {
					"background-color" : '#fbfbfb'
				},
				contentsCss : 'body{background-color:#fbfbfb}',
				height: 500,
				readOnly : true,
				// toolbar: []
			});
			CKEDITOR.instances.editor2.setData( $("#ck_val_specs").text() );
			// var editor = CKEDITOR.inline( 'editor2', {
			// 	removePlugins: 'toolbar'
			// } );
			$(document).ready(function(){
				alert('sdfsdfds');
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
			function reportWindowSize() {

				if(window.innerWidth <= 770){
					$("#log").css("width","130px");
				}
			}
			window.onresize = reportWindowSize;
			if(window.width <= 770){
				$("#log").css("width","130px");
			}
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
                            $("#detail").append("<li style='padding: 10px;list-style:none'><div style='width:30%;display:inline-block;vertical-align:middle'><span>" + atr_keys[i] + "</span></div><div style='width:35%;display:inline-block;vertical-align:middle' id='temp" + i + "' class='drp_cus'></div></li>");

                            var end_arr = [];
                            for (var j = 0; j < atr[atr_keys[i]].length; j++) {
                                end_arr.push(atr[atr_keys[i]][j]);
                            }
                            $("#temp" + i).jqxDropDownList({
                                source: end_arr,
                                placeHolder: "Select Time",
                                selectedIndex: 0,
                                width: "70%",
                                height: 30
                            });
                        }
                        if (quantity.length >= 1) {
                            $("#detail").append("<li style='padding: 10px;list-style:none'><div><span style='width:30%;display:inline-block;vertical-align:middle'>Quantity</span><div id='quantity'  style='width:70%;display:inline-block;vertical-align:middle'></div></li>");
                            var quantity_src = [];
                            for (var i = 0; i < quantity.length; i++) {
                                quantity_src.push(quantity[i]['quantity']);
                            }
                            $("#quantity").jqxDropDownList({
                                source: quantity_src,
                                placeHolder: "Select Quantity",
                                selectedIndex: 0,
                                width: "70%",
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
								if(res_price.length > 5){
									$("thead").css("paddingRight","15px");
									// $("#cat_price").css('height',100 * res_price.length);
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
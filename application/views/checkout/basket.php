
<!-- Bootstrap & CSS form Wizard Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/mine/bootstrap-css-wizard.css">
<!-- Bootstrap & CSS form Wizard Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/mine/checkout.css">
<style>

</style>
<main class="main">
	<div class="container">
		<div class="tabbable">
		  	<ul class="nav nav-tabs wizard">
		    	<li class="active" id="basket" data-href="<?= base_url()?>checkout"><a href="#" data-toggle="tab" aria-expanded="false">Basket</a></li>
		    	<li id="upload_artwork" data-href="<?= base_url()?>checkout/upload_artwork"><a href="#w4" data-toggle="tab" aria-expanded="false">Upload Artwork</a></li>
		    	<li id="delivery_payment" data-href="<?= base_url()?>checkout/delivery_payment"><a href="#stateinfo" data-toggle="tab" aria-expanded="false">Delivery & Payment</a></li>
		    	<li id="order_success" data-href="<?= base_url()?>checkout/order_success"><a href="#companydoc" data-toggle="tab" aria-expanded="false">Order Success</a></li>
		  	</ul>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-8">
				<div class="element-container">
					<div class="element-container-header"><h4>Your Basket(1)</h4></div>
					<div class="element-container-body">
						<div class="row">
							<div class="col-sm-12 col-md-9">
								<h3 class="product_title">Classic Curve Pens</h3>
								<p>
									Qty:25, Format:50 x 6 mm, lnk Color: Black, Pen Name: Foer, Pen Material: Plastic, Printing Process: Pad Printing, Pen Category: Cheap Pens, Colour Options : White/Lime, Printing Colors: 1/10 Pantone (spot) colors On Standard Turnaround
								</p>
								<p>
									<small>Artwork Service <b>File Check</b> (&pound;2.50+ VAT)</small>
								</p>
								<p><h4><strong>Delivery by 12/01/2020 on Standard Turnaround (13 days)*</strong></h4></p>
							</div>
							<div class="col-sm-12 col-md-3">
								<div class="element-container-price">
									<h4 class="main-price">&pound;38.68</h4>
									<span class="small-vat">&pound;46.42 incl.VAT</span>
								</div>
								<div class="element-container-remove-link">
									<a class="" href="#">Remove</a>
								</div>
							</div>
							<div class="col-md-12 col-md-9" style="margin-top: 2rem">
								<div class="row">
									<div class="col-sm-12 col-md-4">
										<label class="control-label" for="your_reference">Your reference</label>
									</div>
									<div class="col-sm-12 col-md-8">
										<input class="form-control" name="your_reference" placeholder="(e.g. Tom's Flyers)">
									</div>
									<div class="col-sm-12 col-md-4">
										<label class="control-label" for="your_po_number">Your PO Number</label>
									</div>
									<div class="col-sm-12 col-md-8">
										<input class="form-control" name="your_po_number" placeholder="(e.g. PO102923)">
									</div>
								</div>
							</div>
							<div class="col-md-3"></div>
						</div>

					</div>
				</div>
				<div class="alert alert-danger custom-alert">
					<p>*When ordered by 6pm (or 11am for Same Day), based on next day courier.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="row">
					<div class="col-md-12 text-center" style="padding-top: 1.5rem; padding-bottom: 1.5rem">
						<a class="checkout-link-tag" href="#" style="font-size: 18px; text-transform: uppercase;">Continue Shopping</a>
					</div>
					<div class="col-md-12">
						<div class="element-container">
							<div class="element-container-header">
								<h4>Summery</h4>
							</div>
							<div class="element-container-body">
								<div class="row checkout-review">
									<div class="col-xs-6">SUB TOTAL</div>
									<div class="col-xs-6" style="text-align: right"><strong>&pound;38.68</strong></div>
									<div class="col-xs-6">VAT</div>
									<div class="col-xs-6" style="text-align: right"><strong>&pound;7.74</strong></div>
									<div class="col-xs-6">TOTAL</div>
									<div class="col-xs-6"><h4 class="main-price">&pound;46.42</h4></div>
								</div>
                                <div class="divider-custom"></div>
								<div class="row">
									<div class="col-md-12">
										<button class="btn btn-danger btn-danger-full btn-checkout">CHECKOUT</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="discount-code-container">
							<div class="d-inline-block" >DISCOUNT CODE</div>
							<i class="fa fa-plus-circle float-right" id="plus_coupon_code"></i>
							<div class="input-group mb-3" id="input-coupon-code">
								<input type="text" class="form-control" placeholder="" style="margin-bottom:0 !important">
								<div class="input-group-btn" style="vertical-align: top !important">
									<button class="btn btn-primary" type="button">APPLY</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</main>


<!--Footer : Begin-->
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12 about-us footer-col">
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
                                <span><a href="mailto:support@dialaprint.co.uk" title="send mail to Cmsmart">support@dialaprint.co.uk</a></span>
                            </li>
                        </ul>
                        <ul class="footer-social">
                            <li>
                                <a href="checkout.html#" title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="checkout.html#" title="Twiter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="checkout.html#" title="Google plus">
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
                                <a href="checkout.html#" title="About us">About</a>
                            </li>
                            <li>
                                <a href="checkout.html#" title="Green">Green</a>
                            </li>
                            <li>
                                <a href="checkout.html#" title="Afiliates">Afiliates</a>
                            </li>
                            <li>
                                <a href="checkout.html#" title="Non-profits and Government">Non-profits and Government</a>
                            </li>
                            <li>
                                <a href="checkout.html#" title="Terms of Service">Terms of Service</a>
                            </li>
                            <li>
                                <a href="checkout.html#" title="Privacy Policy">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 support footer-col">
                    <h2>Support</h2>
                    <div class="footer-content">
                        <ul>
                            <li>
                                <a href="checkout.html#" title="My Account">My Account</a>
                            </li>
                            <li>
                                <a href="checkout.html#" title="Design Guide">Design Guide</a>
                            </li>
                            <li>
                                <a href="checkout.html#" title="FAQ">FAQ</a>
                            </li>
                            <li>
                                <a href="checkout.html#" title="Design Service">Design Services</a>
                            </li>
                            <li>
                                <a href="checkout.html#" title="Contact Us">Contact Us</a>
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
                    <p class="copy-right">Central - Copyright © 2015 <a title="Cmsmart - Magento theme" href="checkout.html#">dialaprint.co.uk</a>. All Rights Reserved</p>
                    <a href="checkout.html#" id="back-to-top">
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
            <a href="checkout.html#">
                <span>All Product</span>
                <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i>
            </a>
            <ul class="level0">
                <li class="level1">
                    <a href="checkout.html#" title="Business Card">Business Card</a>
                </li>
                <li class="level1">
                    <a href="checkout.html#" title="Premium Business Card">Premium Business Card</a>
                </li>
                <li class="level1">
                    <a href="checkout.html#" title="Free Business Card">Free Business Card</a>
                </li>
                <li class="level1">
                    <a href="checkout.html#" title="Marketing Materials">Marketing Materials</a>
                </li>
                <li class="level1">
                    <a href="checkout.html#" title="Dance Marketing Kit">Dance Marketing Kit</a>
                </li>
                <li class="level1 view-all-pro">
                    <a href="checkout.html#" title="view all product">View all</a>
                </li>
            </ul>
        </li>
        <li class="level0 parent col1">
            <a href="checkout.html#" title="Business Cards">
                <span>Business Cards</span>
                <i class="fa fa-chevron-down"></i><i class="fa fa-chevron-right"></i>
            </a>
            <ul class="level0">
                <li class="level1 nav-1-1 first item">
                    <a href="checkout.html#" title="Premium Business Cards">Premium Business Cards</a>
                </li>
                <li class="level1 nav-1-2 item">
                    <a href="checkout.html#" title="Free Business Cards">Free Business Cards</a>
                </li>
                <li class="level1 nav-1-3 item">
                    <a href="checkout.html#" title="Die-Cut Business Cards">Die-Cut Business Cards</a>
                </li>
                <li class="level1 nav-1-4 item">
                    <a href="checkout.html#" title="Standard Business Cards">Standard Business Cards</a>
                </li>
                <li class="level1 nav-1-5 item">
                    <a href="checkout.html#" class="Personal Business Cards">Personal Business Cards</a>
                </li>
                <li class="level1 nav-1-6 item">
                    <a href="checkout.html#" title="Business Card Holders">Business Card Holders</a>
                </li>
                <li class="level1 nav-1-7 item">
                    <a href="checkout.html#" title="Networking Cards">Networking Cards</a>
                </li>
                <li class="level1 nav-1-8 item">
                    <a href="checkout.html#" title="Appointment Cards">Appointment Cards</a>
                </li>
                <li class="level1 nav-1-9 last item">
                    <a href="checkout.html#" title="Mommy Cards">Mommy Cards</a>
                </li>
            </ul>
        </li>
        <li class="level0">
            <a href="checkout.html#" title="Marketing">Marketing</a>
        </li>
        <li class="level0">
            <a href="checkout.html#" title="Postcards">Postcards</a>
        </li>
        <li class="level0">
            <a href="checkout.html#" title="Stickers & Badges">Stickers & Badges</a>
        </li>
        <li class="level0" title="Promotional">
            <a href="checkout.html#">Promotional</a>
        </li>
    </ul>
</nav>
<!--Add js lib-->
<script type="text/javascript" src="<?php echo base_url()?>assets/front/js/jquery/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/front/js/jquery/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/front/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/front/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/front/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/front/js/theme.js"></script>
<script src="<?php echo base_url()?>assets/mine/search.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/mine/bootstrap-css-wizard.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#plus_coupon_code").on("click", function(){
			$(this).css("display","none");
			$("#input-coupon-code").css("display","table");
		})
	})
</script>	




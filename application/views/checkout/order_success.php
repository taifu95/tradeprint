
<!-- Bootstrap & CSS form Wizard Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/mine/bootstrap-css-wizard.css">
<!-- Bootstrap & CSS form Wizard Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/mine/checkout.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/mine/bootstrap-css-vertical-tabs.css">
<style type="text/css">
    #customer-detail{
        padding-bottom: 40px;
        background-color: #B6DAEF;
    }
    .customer-detail-title{
        border-bottom: 2px dashed #68A3CA;
        padding-bottom:10px;
        margin-bottom: 15px;
        margin-top: 40px;
    }
    .customer-detail-title h3{
        font-weight: 700;
        font-size:22px;
        color:#2366A0;
    }
    .customer-name{
        font-weight: 700;
        font-size:18px;
        margin-bottom: 5px;
    }
    #customer-detail h6{
        color:#2366A0;
        margin-bottom: 2px;
    }
</style>
<main class="main">
	<div class="container">
		<div class="tabbable">
		  	<ul class="nav nav-tabs wizard">
		    	<li class="completed" data-href="<?= base_url()?>checkout"><a href="#" data-toggle="tab" aria-expanded="false">Basket</a></li>
		    	<li class="completed" data-href="<?= base_url()?>checkout/upload_artwork"><a href="#w4" data-toggle="tab" aria-expanded="false">Upload Artwork</a></li>
		    	<li class="completed" data-href="<?= base_url()?>checkout/delivery_payment"><a href="#stateinfo" data-toggle="tab" aria-expanded="false">Delivery & Payment</a></li>
		    	<li class="active" data-href="<?= base_url()?>checkout/order_success"><a href="#companydoc" data-toggle="tab" aria-expanded="false">Order Success</a></li>
		  	</ul>
		</div>
		<div class="row">
			<div class='col-xs-12 col-sm-6'><h3>Order Confirmation</h3></div>
            <div class="col-xs-12 col-sm-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <span>Order Total: <label>$470.00</label></span>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <button class="btn btn-success w-100">Place Order</button>
                    </div>
                </div>
            </div>
		</div>
	</div>
    <div id="customer-detail">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="customer-detail-title">
                        <h3>Your Information</h3>
                    </div>
                    <div class="customer-detail-content">
                        <h3 class="customer-name">Joeseph Northwoods Doe</h3>
                        <h6>jane@northwoods.com</h6>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="customer-detail-title"><h3>Payment</h3></div>
                    <div class="customer-detail-content">
                        <img src="<?=base_url()?>assets/front/images/footer-payment.png" style="margin-bottom: 5px;">
                        <h6>Paypal ending in 1234</h6>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="customer-detail-title"><h3>Billing Address</h3></div>
                    <div class="customer-detail-content">
                        <h3 class="customer-name">Joseph Northwoods Doe</h3>
                        <h6>123 Main Street,</h6>
                        <h6>Suit 2010,</h6>
                        <h6>Minneapolis, MN 55441</h6>
                        <h6>United States</h6>
                        <h6>(111)111-1111</h6>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="customer-detail-title"><h3>Mailing Address</h3></div>
                    <div class="customer-detail-content">
                        <h3 class="customer-name">Joseph Northwoods Doe</h3>
                        <h6>123 Main Street,</h6>
                        <h6>Suite 2010,</h6>
                        <h6>Minneapolis, MN 55441</h6>
                        <h6>United States</h6>
                        <h6>(111)111-1111<h6>
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
		$("#address_manually").on("change",function(){
            if($(this).prop("checked")){
                $(".custom-billing-address-form").show();
            }
            else{
                $(".custom-billing-address-form").hide();

            }
        })
	})
</script>	
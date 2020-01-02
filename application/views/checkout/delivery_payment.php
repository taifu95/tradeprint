
<!-- Bootstrap & CSS form Wizard Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/mine/bootstrap-css-wizard.css">
<!-- Bootstrap & CSS form Wizard Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/mine/checkout.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/mine/bootstrap-css-vertical-tabs.css">
<style type="text/css">
    .element-container-alt{
        margin-bottom:20px;
    }
    .element-container-alt-header{
        padding: 1.5rem 0px 1.5rem 4rem;
        background-color: #4a4646;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
    }
    .element-container-alt-header h4{
        color:#fff;
        text-transform: uppercase;
        font-weight: 600;        
    }
    .element-container-alt-body{
        background-color: #dedede;
        padding:20px 40px;
    }
    .no-border{
        border:none;
    }
    .price-table{
        padding:0;
        margin:0;
    }
    .price-table thead th{
        padding: 0;
        text-align: left !important;
        font-size: 14px;
        font-weight: 600;
        border:none;
        background:none;
        padding:5px 0px 8px 0px;
    }
    .price-table tbody{
        height: auto !important;
    }
    .price-table tr{
        background:none;
    }
    .price-table tr td{
        background: none;
        border:none;
        font-size: 14px;
        font-weight: 600;
        text-align: left !important;
        padding:2px 0px;
    }
    .ptitle{
        width: 60%;
    }
    .custom-billing-address-form{
        display: none;
    }
</style>
<main class="main">
	<div class="container">
		<div class="tabbable">
		  	<ul class="nav nav-tabs wizard">
		    	<li class="completed" data-href="<?= base_url()?>checkout"><a href="#" data-toggle="tab" aria-expanded="false">Basket</a></li>
		    	<li class="completed" data-href="<?= base_url()?>checkout/upload_artwork"><a href="#w4" data-toggle="tab" aria-expanded="false">Upload Artwork</a></li>
		    	<li class="active" data-href="<?= base_url()?>checkout/delivery_payment"><a href="#stateinfo" data-toggle="tab" aria-expanded="false">Delivery & Payment</a></li>
		    	<li data-href="<?= base_url()?>checkout/order_success"><a href="#companydoc" data-toggle="tab" aria-expanded="false">Order Success</a></li>
		  	</ul>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-8 ">
                <div class="element-container-alt">
                    <div class="element-container-alt-header">
                        <h4>Delivery</h4>
                    </div>
                    <div class="element-container-alt-body">
                        <h3>Add New Delivery Address</h3>
                        <div class="row" style="margin-top: 10px">
                            <div class="col-xs-12 col-sm-4">
                                <label class="control-label">Postcode*</label>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <input class="form-control" type="text">
                            </div>
                            <div class="col-xs-12 col-sm-4"></div>
                            <div class="col-xs-12 col-sm-8" style="margin-top: 10px">
                                <input type="checkbox" id="address_manually">Enter Address Manually
                            </div>
                            <form class="custom-billing-address-form">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <label class="control-label">First Name*</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <input class="form-control" name="firstname" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <label class="control-label">Last Name*</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <input class="form-control" name="lastname" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <label class="control-label">Company Name</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <input class="form-control" name="company_name" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <label class="control-label">Address*</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <input class="form-control" name="address1" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4"></div>
                                    <div class="col-xs-12 col-sm-8">
                                        <input class="form-control" name="address2" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <label class="control-label">Town*</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <input class="form-control" name="town" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <label class="control-label">Country*</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <input class="form-control" name="country" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <label class="control-label">Delivery Contact Number*</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <input class="form-control" name="contact_number" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <input type="checkbox"  name="save_as_billing_address" >Save as Billing Address
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <input type="checkbox"  name="save_as_default_address" >Save as Default Address
                                    </div>
                                </div>
                                <div class="row text-center" style="margin-top: 10px">
                                    <button class="btn btn-danger" style="width: 140px" type="submit">ADD</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div> 
                <div class="element-container-alt">
                    <div class="element-container-alt-header">
                        <h4>Billing Address</h4>
                    </div>
                </div>    
                <div class="element-container-alt">
                    <div class="element-container-alt-header">
                        <h4>Payment Method</h4>
                    </div>
                </div>        
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="element-container">
                    <div class="element-container-header">
                        <h4>Summery</h4>
                    </div>
                    <div class="element-container-body">
                        <div class="row checkout-review no-border" style="padding-bottom: 0px">
                            <div class="col-xs-6">SUB TOTAL</div>
                            <div class="col-xs-6" style="text-align: right"><strong>&pound;38.68</strong></div>
                            <div class="col-xs-6">VAT</div>
                            <div class="col-xs-6" style="text-align: right"><strong>&pound;7.74</strong></div>
                            <div class="col-xs-6">TOTAL</div>
                            <div class="col-xs-6"><h4 class="main-price">&pound;46.42</h4></div>
                        </div>
                    </div>
                </div>
                <div class="element-container">
                    <div class="element-container-header">
                        <h4>Your Basket(2)</h4>
                    </div>
                    <div class="element-container-body" style="padding-top: 1rem">
                        <div class="product-detail">
                            <div class="row">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th class="ptitle"></th>
                                            <th class="pprice">Price</th>
                                            <th class="pvat">VAT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ptitle">Classic Curve Pens</td>
                                            <td class="pprice">&pound;36.18</td>
                                            <td class="pvat">&pound;7.24</td>
                                        </tr>
                                        <tr>
                                            <td class="ptitle">File Check</td>
                                            <td class="pprice">&pound;2.5</td>
                                            <td class="pvat">&pound;0.50</td>
                                        </tr>
                                        <tr>
                                            <td class="ptitle">Total</td>
                                            <td class="pprice">&pound;36.68</td>
                                            <td class="pvat">&pound;7.74</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row" style="margin-top: 20px">
                                <p>
                                    Qty:25, Format:50 x 6 mm, lnk Color: Black, Pen Name: Foer, Pen Material: Plastic, Printing Process: Pad Printing, Pen Category: Cheap Pens, Colour Options : White/Lime, Printing Colors: 1/10 Pantone (spot) colors On Standard Turnaround
                                </p>
                            </div>
                        </div>
                        <div class="divider-custom"></div>
                        <div class="product-detail">
                            <div class="row">
                                <table class="price-table">
                                    <thead>
                                        <tr>
                                            <th class="ptitle"></th>
                                            <th class="pprice">Price</th>
                                            <th class="pvat">VAT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ptitle">Classic Curve Pens</td>
                                            <td class="pprice">&pound;36.18</td>
                                            <td class="pvat">&pound;7.24</td>
                                        </tr>
                                        <tr>
                                            <td class="ptitle">File Check</td>
                                            <td class="pprice">&pound;2.5</td>
                                            <td class="pvat">&pound;0.50</td>
                                        </tr>
                                        <tr>
                                            <td class="ptitle">Total</td>
                                            <td class="pprice">&pound;36.68</td>
                                            <td class="pvat">&pound;7.74</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row" style="margin-top: 20px">
                                <p>
                                    Qty:25, Format:50 x 6 mm, lnk Color: Black, Pen Name: Foer, Pen Material: Plastic, Printing Process: Pad Printing, Pen Category: Cheap Pens, Colour Options : White/Lime, Printing Colors: 1/10 Pantone (spot) colors On Standard Turnaround
                                </p>
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
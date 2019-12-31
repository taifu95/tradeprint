
	<style>
		.StripeElement {
			box-sizing: border-box;

			height: 40px;

			padding: 10px 12px;

			border: 1px solid transparent;
			border-radius: 4px;
			background-color: white;

			box-shadow: 0 1px 3px 0 #e6ebf1;
			-webkit-transition: box-shadow 150ms ease;
			transition: box-shadow 150ms ease;
		}

		.StripeElement--focus {
			box-shadow: 0 1px 3px 0 #cfd7df;
		}

		.StripeElement--invalid {
			border-color: #fa755a;
		}

		.StripeElement--webkit-autofill {
			background-color: #fefde5 !important;
		}
		/* input, */
            .StripeElement {
            height: 40px;
            padding: 10px 12px;
            width : 100%;
            color: #32325d;
            background-color: white;
            border: 1px solid transparent;
            border-radius: 4px;

            box-shadow: 0 1px 3px 0 #1f272f;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

            .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
		}
		.form-row .details-button{
			font-size  : 16px;
			background-color : #dc3545;
			padding : 10px;
			width : 100%;
			color :  white;
			margin-top : 20px;
		}
	</style>

    <!--Header: End-->
    <!--Main index : End-->
    <main class="main">
        <section class="header-page">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <h1 class="mh-title">Checkout</h1>
                    </div>
                    <div class="breadcrumb-w col-sm-9">
                        <span class="hidden-xs">You are here:</span>
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url()?>">Home</a>
                            </li>
                            <li>
                                <span>Checkout</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="checkout" class="pr-main">
            <div class="container">
                <div class="cart-view-top">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h1>Shopping Cart</h1>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 right">
                        <h1>Continue Shopping</h1>
                    </div>
                    <div id="login-pane" class="col-md-12 col-sm-12 col-xs-12">
                        <p>Please fill in the fields below to complete your order.<a id="login-modal-trigger" href="checkout.html#"> Already registered? Click here to login.</a></p>
                    </div>
                </div>

                <div class="onepage">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div id="div_billto">
                            <div class="pane round-box">
                                <h3 class="title"><span class="icon icon-one">1</span>BILLING INFO</h3>
                                <div class="pane-inner">
                                    <ul id="table_billto" class="adminform user-details no-border">
                                        <li class="short">
                                            <div class="field-wrapper">
                                                <label for="company_field" class="company">Company Name </label>
                                                <br>
                                                <input type="text" maxlength="64" value="Shipment" size="30" name="company" id="company_field">
                                            </div>
                                        </li>

                                        <li class="short right">
                                            <div class="field-wrapper">

                                                <label for="email_field" class="email">
                                                    E-Mail<em>*</em> </label>
                                                <br>

                                                <input type="text" maxlength="100" class="required" value="" size="30" name="email" id="email_field">
                                            </div>
                                        </li>

                                        <li class="short">
                                            <div class="field-wrapper">

                                                <label for="title_field" class="title">Title</label>
                                                <br>

                                                <select style="width: 210px" class="vm-chzn-select" name="title" id="title">
                                                    <option selected="selected" value="">-- Select --</option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Mrs">Mrs</option>
                                                </select>

                                            </div>
                                        </li>

                                        <li class="short right">
                                            <div class="field-wrapper">
                                                <label for="first_name_field" class="first_name">First Name</label>
                                                <br>

                                                <input type="text" maxlength="32" value="" size="30" name="first_name" id="first_name_field">
                                            </div>
                                        </li>

                                        <li class="short">
                                            <div class="field-wrapper">

                                                <label for="middle_name_field" class="middle_name">
                                                    Middle Name </label>
                                                <br>

                                                <input type="text" maxlength="32" value="" size="30" name="middle_name" id="middle_name_field">
                                            </div>
                                        </li>

                                        <li class="short right">
                                            <div class="field-wrapper">

                                                <label for="last_name_field" class="last_name">
                                                    Last Name </label>
                                                <br>

                                                <input type="text" maxlength="32" value="" size="30" name="last_name" id="last_name_field">
                                            </div>
                                        </li>

                                        <li class="short">
                                            <div class="field-wrapper">

                                                <label for="zip_field" class="zip">
                                                    Zip / Postal Code<em>*</em> </label>
                                                <br>

                                                <input type="text" maxlength="32" class="required" value="" size="30" name="zip" id="zip_field">
                                            </div>
                                        </li>

                                        <li class="short right">
                                            <div class="field-wrapper">

                                                <label for="virtuemart_country_id_field" class="virtuemart_country_id">
                                                    Country<em>*</em> </label>
                                                <br>

                                                <select style="width: 210px" class="vm-chzn-select required" name="virtuemart_country_id" id="virtuemart_country_id" onchange="loadstatebt(this)">
                                                    <option selected="selected" value="">-- Select --</option>
                                                    <option value="1">Afghanistan</option>
                                                    <option value="2">Albania</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">American Samoa</option>
                                                    <option value="5">Andorra</option>
                                                    <option value="6">Angola</option>
                                                    <option value="7">Anguilla</option>
                                                    <option value="8">Antarctica</option>
                                                    <option value="9">Antigua and Barbuda</option>
                                                    <option value="10">Argentina</option>
                                                </select>

                                            </div>
                                        </li>
                                        <li class="short">
                                            <div class="field-wrapper">

                                                <label for="virtuemart_city" class="virtuemart_state_id">
                                                    City<em>*</em> </label>
                                                <br>

                                                <select style="width: 210px" name="virtuemart_city" class="vm-chzn-select" id="virtuemart_city">
                                                    <option value="">-- Select --</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="short right">
                                            <div class="field-wrapper">

                                                <label for="virtuemart_state_id_field" class="virtuemart_state_id">
                                                    State / Province / Region<em>*</em> </label>
                                                <br>

                                                <select style="width: 210px" name="virtuemart_state_id" class="vm-chzn-select" id="virtuemart_state_id">
                                                    <option value="">-- Select --</option>
                                                </select>
                                            </div>
                                        </li>

                                        <li class="short">
                                            <div class="field-wrapper">

                                                <label for="phone_1_field" class="phone_1">
                                                    Phone </label>
                                                <br>

                                                <input type="text" maxlength="32" value="" size="30" name="phone_1" id="phone_1_field">
                                            </div>
                                        </li>

                                        <li class="short right">
                                            <div class="field-wrapper">

                                                <label for="phone_2_field" class="phone_2">
                                                    Mobile phone </label>
                                                <br>

                                                <input type="text" maxlength="32" value="" size="30" name="phone_2" id="phone_2_field">
                                            </div>
                                        </li>
                                        <li class="long">
                                            <div class="field-wrapper">

                                                <label for="address_1_field" class="address_1">
                                                    Address 1<em>*</em> </label>
                                                <br>

                                                <input type="text" maxlength="64" class="required" value="" size="30" name="address_1" id="address_1_field">
                                            </div>
                                        </li>
                                        <li class="long">
                                            <div class="field-wrapper">

                                                <label for="fax_field" class="fax">
                                                    Fax </label>
                                                <br>

                                                <input type="text" maxlength="32" value="" size="30" name="fax" id="fax_field">
                                            </div>
                                        </li>

                                    </ul>

                                    <ul id="user-actions-trigger">
                                        <li>
                                            <input type="checkbox" id="register">
                                            <label class="registers">Create an account for later use</label>
                                            <ul id="user-register-fields">

                                                <li class="short">
                                                    <div class="field-wrapper username">
                                                        <label for="username_field" class="username">
                                                            Username <em>*</em>
                                                        </label>
                                                        <br>
                                                        <input type="text" maxlength="25" value="" size="30" name="username" id="username_field">
                                                    </div>
                                                </li>

                                                <li class="short">
                                                    <div class="field-wrapper name">
                                                        <label for="name_field" class="name">
                                                            Displayed Name <em>*</em>
                                                        </label>
                                                        <br>
                                                        <input type="text" maxlength="25" value="" size="30" name="name" id="name_field">
                                                    </div>
                                                </li>

                                                <li class="short">
                                                    <div class="field-wrapper password">
                                                        <label for="password_field" class="password">
                                                            Password <em>*</em>
                                                        </label>
                                                        <br>
                                                        <input type="password" class="inputbox" size="30" name="password" id="password_field">

                                                    </div>
                                                </li>

                                                <li class="short">
                                                    <div class="field-wrapper password2">
                                                        <label for="password2_field" class="password2">
                                                            Confirm Password <em>*</em>
                                                        </label>
                                                        <br>
                                                        <input type="password" class="inputbox" size="30" name="password2" id="password2_field">

                                                    </div>
                                                </li>

                                                <li class="long">
                                                    <div class="field-wrapper agreed">
                                                        <label for="agreed_field" class="agreed">
                                                            I agree to the Terms of Service <em>*</em>
                                                        </label>
                                                        <input type="checkbox" value="1" id="agreed_field" name="agreed">
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!-- Cos 2 -->

                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div id="right-pane-top" class="col-md-12 col-sm-12 col-xs-12">
                            <div id="shipping_method" class="col-md-12 col-sm-12 col-xs-12">
                                <div class="shipment-pane">
                                    <div class="pane round-box">
                                        <h3 class="title">
											<span class="icon icon-three">2</span>
											Payment method		
										</h3>

										<div class="pane-inner" style="padding-bottom:50px">
											<div id="paypal-button-container"></div>
										<!-- </div>
                                        <div class="pane-inner" style="visibility: visible;"> -->
                                            <form action="/charge" method="post" id="payment-form">
												<div class="form-row">
													<label for="card-element">
													Credit or debit card
													</label>
													<div id="card-element">
													<!-- A Stripe Element will be inserted here. -->
													</div>

													<!-- Used to display form errors. -->
													<div id="card-errors" role="alert"></div>
												</div>
												<div class="form-row">
													<button class="details-button" type="button">Submit Payment</button>
												</div>
											</form>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="checkfull" class="col-md-8 col-sm-12 col-xs-12">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <!-- render layout -->

                            <fieldset class="round-box" id="cart-contents">
                                <h3 class="title"><span class="icon fa fa-check"></span>ORDER REVIEWS</h3>
                                <table cellspacing="0" cellpadding="0" border="0" class="cart-summary no-border">
                                    <tbody>
                                        <tr clas="top-header">
                                            <th align="left" class="th-name">Products Name</th>
                                            <th width="10%" class="th-price">Price</th>
                                            <th width="10%" class="th-tax"><span class="priceColor2">Tax</span></th>
                                            <th width="15%" class="th-quanlity">Quanlity</th>
                                            <th width="15%" class="th-discount"><span class="priceColor2">Action</span></th>
                                            <th width="15%" align="left" class="th-total th-last">SubTotal</th>
                                        </tr>

                                        <tr valign="top" id="product_row_0" class="product-detail-row product-detail-last-row sectiontableentry1">
                                            <td align="left" class="pro_name">
                                                <img class="cart-images" src="<?php echo base_url()?>assets/front/images/op-img01.jpg">
                                                <a class="product-name" href="checkout.html#">Wall Graphics</a>
                                            </td>
                                            <td align="left" class="base-price">
                                                <div class="PricebasePrice vm-display vm-price-value"><span class="vm-price-desc"></span><span class="PricebasePrice">$139.00</span></div>
                                            </td>
                                            <td align="right" class="pro_tax"><span class="priceColor2"><div class="PricetaxAmount vm-display vm-price-value"><span class="vm-price-desc"></span><span class="PricetaxAmount">$11.17</span></div>
                        </span>
                        </td>
                        <td align="left" class="product-quanlity">
                            <input type="text" id="quantity_0" value="1" maxlength="4" size="3" name="quantity[0]" class="quantity-input js-recalculate" title="Update Quantity In Cart">
                        </td>

                        <td align="left" class="product-quanlity action">
                            <a data-pid="0" href="checkout.html#" align="middle" title="DUpdate Quantity In Cart" name="update" class="fa fa-refresh"> </a>
                            <a data-pid="0" href="checkout.html#" align="middle" title="Delete Product From Cart" name="remove" class="fa fa-times-circle"> </a>
                        </td>

                        <td align="right" id="subtotal_with_tax_0" colspan="0" class="sub-total td-last"><span class="line-through">$152.90</span></td>
                        </tr>
                        <!--Begin of SubTotal, Tax, Shipment, Coupon Discount and Total listing -->
                        <!--  Total -->
                        <tr class="pr-total">
                            <td colspan="6">
                                <table>
                                    <tbody>
                                        <tr class="first">
                                            <td>SubTotal:</td>
                                            <td class="pr-right">
                                                <div class="PricesalesPrice vm-display vm-price-value"><span class="vm-price-desc"></span><span class="PricesalesPrice">$122.90</span></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Discount:</td>
                                            <td class="pr-right">
                                                <span id="total_amount" class="priceColor2">$-30.00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tax:</td>
                                            <td class="pr-right"><span id="total_tax" class="priceColor2">$11.17</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shipment:</td>
                                            <td class="pr-right"><span id="shipment" class="priceColor2">0</span></td>
                                        </tr>
                                        <tr class="last">
                                            <td>Total:</td>
                                            <td class="pr-right"><strong id="bill_total">$122.90</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <!--  End Total -->
                        <tr class="coupon-pane">
                            <td align="left" class="border-radius-lb" colspan="6">
                                <input type="text" onfocus="if(this.value=='Enter your Coupon code') this.value='';" onblur="if(this.value=='') this.value='Enter your Coupon code';" value="Enter your Coupon code" alt="Enter your Coupon code" class="coupon" maxlength="50" size="20" id="coupon_code" name="coupon_code">
                                <span class="details-button"><input type="button" value="Save" title="Save" class="details-button" id="coupon_code_button"></span>
                            </td>
                        </tr>

                        </tbody>
                        </table>
                        </fieldset>

                        <div id="right-pane-bottom">
                            <div class="customer-note">
                                <p class="comment">Notes and special requests</p>
                                <textarea class="inputbox" rows="1" cols="60" name="customer_note" id="customer_note_field"></textarea>
                            </div>
                            <fieldset class="vm-fieldset-tos">
                                <input id="tos" class="terms-of-service" type="checkbox" name="tos" value="1">
                                <span>Click here to read terms of service and check the box to accept them.</span>
                                <div class="checkout-button-top">
                                    <a href="checkout.html#" class="vm-button-correct"><span>Confirn Purchase</span></a>
                                </div>
                            </fieldset>
                        </div>
                        <!-- right-pane-bottom -->

                    </div>

                </div>
        </section>
    </main>
    <!--Main index : End-->

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
	<script src="https://js.stripe.com/v3/"></script>
	<script src="https://www.paypal.com/sdk/js?client-id=sb"></script> 
    <!-- // Required. Replace SB_CLIENT_ID with your sandbox client ID. -->
  
	<script>
		function reportWindowSize() {

		if(window.innerWidth <= 770){
				$("#log").css("width","130px");
			}
		}
		window.onresize = reportWindowSize;
		if(window.width <= 770){
			$("#log").css("width","130px");
		}
		$(".c_cate").click(function(){
			document.location = "<?php echo base_url()?>home/f_cate_view?id="+this.title;
		})
		paypal.Buttons({
            env: 'sandbox',
            client: {
                sandbox: 'demo_sandbox_client_id',
                production: 'demo_production_client_id'
            },
            style: {
                tagline : 'false',
                width : '100%',
                color : 'gold',
                layout: 'horizontal',
                fundingicons : 'false'
            },
            funding: {
                disallowed: [ 
                    paypal.FUNDING.CREDIT
                ]
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: window.pricing['pricing-' + window.pricingOption].amount
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // alert('Transaction completed by ' + details.payer.name.given_name);∂
                    if(details.status == 'COMPLETED'){
                        // Submit the form
                        var formData = new FormData(document.getElementById('payment-form'));

                        formData.append('amount',window.pricing['pricing-' + window.pricingOption].amount);
                        formData.append('plan_id',window.pricing['pricing-' + window.pricingOption].planId);
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            // url: "script/pushPayment",
                            url : "/paypal_charge",
                            data: formData,
                            processData: false,
                            contentType: false,
                            type: 'POST',
                            success: function(data) {
                                document.location = 'success';
                            },
                            error:function(data,xhr){
                                document.location = 'fail';
                            }
                        });
                    }
                });
            }
        }).render('#paypal-button-container');
		var stripe = Stripe('pk_test_46w4ByCLOSEL67ymYTMgrkxA00zYIZQDfL');

		// Create an instance of Elements.
		var elements = stripe.elements();

		// Custom styling can be passed to options when creating an Element.
		// (Note that this demo uses a wider set of styles than the guide below.)
		var style = {
			base: {
				color: '#32325d',
				fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
				fontSmoothing: 'antialiased',
				fontSize: '16px',
				'::placeholder': {
				color: '#aab7c4'
				}
			},
			style: {
                
            },
			invalid: {
				color: '#fa755a',
				iconColor: '#fa755a'
			}
		};

		// Create an instance of the card Element.
		var card = elements.create('card', {
			style: style,
			hidePostalCode : true
		});

		// Add an instance of the card Element into the `card-element` <div>.
		card.mount('#card-element');

		// Handle real-time validation errors from the card Element.
		card.addEventListener('change', function(event) {
		var displayError = document.getElementById('card-errors');
		if (event.error) {
			displayError.textContent = event.error.message;
		} else {
			displayError.textContent = '';
		}
		});

		// Handle form submission.
		var form = document.getElementById('payment-form');
		form.addEventListener('submit', function(event) {
		event.preventDefault();

		stripe.createToken(card).then(function(result) {
			if (result.error) {
			// Inform the user if there was an error.
			var errorElement = document.getElementById('card-errors');
			errorElement.textContent = result.error.message;
			} else {
			// Send the token to your server.
			stripeTokenHandler(result.token);
			}
		});
		});

		// Submit the form with the token ID.
		function stripeTokenHandler(token) {
		// Insert the token ID into the form so it gets submitted to the server
		var form = document.getElementById('payment-form');
		var hiddenInput = document.createElement('input');
		hiddenInput.setAttribute('type', 'hidden');
		hiddenInput.setAttribute('name', 'stripeToken');
		hiddenInput.setAttribute('value', token.id);
		form.appendChild(hiddenInput);

		// Submit the form
		form.submit();
		}
	</script>
    <!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->
</body>

</html>
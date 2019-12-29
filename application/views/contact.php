<!--Header: End-->
	<!--Main index : End-->
	<main class="main">
		<section class="header-page">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 hidden-xs">
						<h1 class="mh-title">Contact</h1>
					</div>
					<div class="breadcrumb-w col-sm-8">
						<span class="hidden-xs">You are here:</span>
						<ul class="breadcrumb">
							<li>
								<a href="<?php echo base_url()?>">Home</a>
							</li>
							<li>
								<span>Contact</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="pr-contact" class="pr-main">
			<div class="container"><h1 class="ct-header">Contact us</h1></div>
			<div class="contact-map">
			<!--<img src="<?php echo base_url()?>assets/front/images/maps.jpg" />-->
				<iframe width="100%" height="500" frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=vi&geocode=&q=Avenue+of+the+Americas,+New+York,+Ti%E1%BB%83u+bang+New+York,+Hoa+K%E1%BB%B3&aq=0&oq=new+york+Av&sll=10.879183,106.799662&sspn=0.012833,0.021136&gl=VN&ie=UTF8&hq=&hnear=Avenue+of+the+Americas,+New+York,+Hoa+K%E1%BB%B3&t=m&z=14&ll=40.76054,-73.979975&output=embed" marginwidth="0" marginheight="0" scrolling="no"></iframe>		
			</div>
			
			<div class="container">
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="address">
						<i class="fa fa-home"></i>
						<p>
						<span>Stress: 15 Sweet Love Stress</span><br/>
						<span>Suburb: Pyanama</span><br/>
						<span>State: Maryland </span><br/>
						<span>Zip Code: 12345 </span><br/>
						<span>Country: USA </span>
						</p>
					</div>
					<div class="phone">
						<i class="fa fa-phone"></i>
						<p>
						<span>Telephone: +321 5441600</span>						
						</p>
					</div>
					
					<div class="fax">
						<i class="fa fa-fax"></i>
						<p>
						<span>Fax: +321 5441601 </span>						
						</p>
					</div>
					
					<div class="website">
						<i class="fa fa-globe"></i>
						<p>
						<span>Website: cmsmart.net </span>						
						</p>
					</div>
				</div>
				<form id="contact-form" class="form-validate form-horizontal" method="post">
					<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea aria-required="true" required="required" class="required invalid" rows="10" cols="50" id="jform_contact_message" name="contact_message" aria-invalid="true" >Message *</textarea>
						<p>Ask us a question and we'll write back to you promptly! Simply fill out the form below and click Send Email.</p>
						<p>Thanks. Items marked with an asterisk (<span class="star">*</span>) are required fields.</p>
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-12">
						<input class="name" id="name" type="text" placeholder="Enter your name *" required="required">
						<input class="email" id="email" type="email" placeholder="Enter E-mail *" required="required">
						<input class="mesage" id="mesage" type="text" placeholder="Enter Mesage Subject *" required="required">
						<div class="button">
						<input class="subject" type="checkbox" name="subject" id="subject" placeholder="Enter Mesage Subject *" required="required">
						<span>Send copy to yourself</span>
						</div>
						<button type="submit" class="sendmail">Submit</button>
					</div>
				</form>
			</div>
		</section>
	</main><!--Main index : End-->

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
									<a href="about_us" title="About us">About</a>
								</li>
								<li>
									<a href="contact" title="Contact Us">Contact Us</a>
								</li>
								<li>
									<a href="faq" title="FAQ">FAQ</a>
								</li>
								<li>
									<a href="faq" title="Terms of Service">Terms of Service</a>
								</li>
								<li>
									<a href="faq" title="Privacy Policy">Privacy Policy</a>
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
	<script type="text/javascript" src="<?php echo base_url()?>assets/front/js/modernizr.js"></script> 
    <script type="text/javascript" src="<?php echo base_url()?>assets/front/js/owl.carousel.min.js"></script>  
	<script type="text/javascript" src="<?php echo base_url()?>assets/front/js/theme.js"></script>
	<script src="<?php echo base_url()?>assets/mine/search.js"></script>	
	<script src="<?php echo base_url()?>assets/admin/assets/toastr/toastr.min.js"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	  <![endif]-->
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

		$("#contact-form").submit(function(event){
			event.preventDefault();
			var fs = new FormData(document.getElementById("contact-form"));
			fs.append("email",$("#email").val());
			fs.append("name",$("#name").val());
			fs.append("subject",$("#mesage").val());
			$.ajax({
				url : "<?php echo base_url()?>contact/send_email",
				type : "POST",
				data : fs,
				processData : false,
				contentType : false,
				success : function (res){
					if(res == 'success'){
						toastr.options = {
							closeButton: !0,
							progressBar: !0,
							showMethod: "slideDown",
							timeOut: 4e3
						}, toastr.success("Your message was sent to support team.", "Thank your for contact!").css(({
							width: "500px",
							"max-width": "500px"
						}));
						$("#email").val("");
						$("#name").val("");
						$("#mesage").val("");
						$("#jform_contact_message").val("");
					}
				}
			})
		})
	  </script>
</body>
</html>

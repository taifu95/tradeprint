<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Creative admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo base_url()?>assets/admin/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/admin/assets/images/favicon.png" type="image/x-icon">
    <title>Creative - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/toastr/toastr.min.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url()?>assets/admin/assets/css/light-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/responsive.css">
    <style>
        .login-divider {
            opacity: 0;
        }
        body{
            background-image : url("/assets/bg.jpg");
            background-size : 100%100%;
        }
    </style>
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="loader loader-7">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
        <div class="container-fluid p-0">
            <!-- login page start-->
            <div class="authentication-main m-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="auth-innerright">
                            <div class="authentication-box">
                                <div class="card-body h-100-d-center">
                                    <div class="cont text-center b-light">
                                        <div>
                                            <form class="theme-form" id="login_form">
                                                <h4>LOGIN</h4>
                                                <h6>Enter your Username and Password</h6>
                                                <div class="form-group">
                                                    <label class="col-form-label pt-0">Your Name</label>
                                                    <input class="form-control" type="text" required="" id="name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label">Password</label>
                                                    <input class="form-control" type="password" required="" id="password">
                                                </div>
                                                <div class="checkbox p-0">
                                                    <input id="checkbox1" type="checkbox">
                                                    <label for="checkbox1">Remember me</label>
                                                </div>
                                                <div class="form-group form-row mt-3 mb-0">
                                                    <button class="btn btn-primary btn-block" type="submit">LOGIN</button>
                                                </div>
                                                <div class="login-divider"></div>
                                            </form>
                                        </div>
                                        <div class="sub-cont">
                                            <div class="img">
                                                <div class="img__text m--up">
                                                    <h2>New User?</h2>
                                                    <p>Sign up and discover great amount of new opportunities!</p>
                                                </div>
                                                <div class="img__text m--in">
                                                    <h2>One of us?</h2>
                                                    <p>If you already has an account, just sign in. We've missed you!</p>
                                                </div>
                                                <div class="img__btn"><span class="m--up">Sign up</span><span class="m--in">Sign in</span></div>
                                            </div>
                                            <div>
                                                <form class="theme-form" id="reg_form">
                                                    <h4 class="text-center">NEW USER</h4>
                                                    <h6 class="text-center">Enter your Username and Password For Signup</h6>
                                                    <div class="form-group" style="margin-top:70px">
                                                        <input class="form-control" type="text" placeholder="User Name" id="r_name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" placeholder="Email" id="r_email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" type="password" placeholder="Password" id="r_pwd">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-sm-12">
                                                            <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                                                        </div>
                                                    </div>
                                                    <div class="login-divider"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- login page end-->
        </div>
    </div>
    <!-- latest jquery-->
    <script src="<?php echo base_url()?>assets/admin/assets/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?php echo base_url()?>assets/admin/assets/js/bootstrap/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="<?php echo base_url()?>assets/admin/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?php echo base_url()?>assets/admin/assets/js/sidebar-menu.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="<?php echo base_url()?>assets/admin/assets/js/login.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo base_url()?>assets/admin/assets/js/script.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/toastr/toastr.min.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <script>
        $("#login_form").submit(function() {
            $.ajax({
                url: "<?php echo base_url()?>Admin/login_user",
                type: "POST",
                data: {
                    name: $("#name").val(),
                    password: $("#password").val()
                },
                success: function(res) {
                    if (res == "fail") {
                        toastr.options = {
                            closeButton: !0,
                            progressBar: !0,
                            showMethod: "slideDown",
                            timeOut: 4e3
                        }, toastr.error("Fail to login", "1").css(({
                            width: "500px",
                            "max-width": "500px"
                        }));
                    } else {
                        document.location = "<?php echo base_url()?>admin/dash";
                    }
                }
            });
            return false;
        });
        $("#reg_form").submit(function() {
            $.ajax({
                url: "<?php echo base_url()?>Admin/sign_up",
                type: "POST",
                data: {
                    name: $("#r_name").val(),
                    email: $("#r_email").val(),
                    password: $("#r_pwd").val()
                },
                success: function(res) {
                    if (res == "fail") {
                        toastr.options = {
                            closeButton: !0,
                            progressBar: !0,
                            showMethod: "slideDown",
                            timeOut: 4e3
                        }, toastr.error("Input another user name or email ,please ", "1").css(({
                            width: "500px",
                            "max-width": "500px"
                        }));
                    } else {
                        document.location = "<?php echo base_url()?>admin/dash";
                    }
                }
            });
            return false;
        });
    </script>
</body>

</html>
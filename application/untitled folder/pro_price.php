<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Creative admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo base_url()?>assets/admin//assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/admin//assets/images/favicon.png" type="image/x-icon">
    <title>Creative - Premium Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin//assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin//assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin//assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin//assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin//assets/css/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/jsgrid.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin//assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin//assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin//assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin//assets/css/whether-icon.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/bootstrap.css">
    <!-- App css-->
    <!-- Datatable -->

	<!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/jqwidgets/styles/jqx.base.css" type="text/css" /> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/jqwidgets/styles/jqx.light.css" type="text/css" /> -->
    <!-- End of databele -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin//assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url()?>assets/admin//assets/css/light-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin//assets/css/responsive.css">
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
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row">
                <div class="main-header-left d-lg-none">
                    <div class="logo-wrapper">
                        <a href="index.html"><img src="<?php echo base_url()?>assets/admin/assets/images/creative-logo1.png" alt=""></a>
                    </div>
                </div>
                <div class="mobile-sidebar d-block">
                    <div class="media-body text-right switch-sm">
                        <label class="switch">
                            <input id="sidebar-toggle" type="checkbox" checked="checked"><span class="switch-state"></span>
                        </label>
                    </div>
                </div>
                <div class="vertical-mobile-sidebar"><i class="fa fa-bars sidebar-bar"></i></div>
                <div class="nav-right col left-menu-header">
                    <ul class="nav-menus-left">
                        <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                        <li>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Category <span class="mx-2 badge badge-pill badge-primary">2</span></button>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Admin</a><a class="dropdown-item" href="#">Shopify</a><a class="dropdown-item" href="#">Ecommerce</a><a class="dropdown-item" href="#">Prestashop</a></div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Status<span class="mx-2 badge badge-pill badge-primary">7</span></button>
                                <div class="dropdown-menu p-0">
                                    <ul class="status-dropdown">
                                        <li>
                                            <h6 class="mb-0">Ongoing Projects</h6>
                                        </li>
                                        <li>
                                            <p class="mb-0">HTML5 Validation Report</p>
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <p class="mb-0">Bootstrap Admin Templates</p>
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <p class="mb-0">Goggle Crome Extension</p>
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <p class="mb-0">Clients Projects</p>
                                            <div class="progress sm-progress-bar">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Order<span class="mx-2 badge badge-pill badge-primary">1</span></button>
                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Paypal</a><a class="dropdown-item" href="#">Credit Card</a><a class="dropdown-item" href="#">Visa</a><a class="dropdown-item" href="#">Paytm</a></div>
                            </div>
                        </li>
                    </ul>
                    <div class="d-xl-none mobile-toggle-left pull-right"><i data-feather="more-horizontal"></i></div>
                </div>
                <div class="nav-right col pull-right right-menu">
                    <ul class="nav-menus">
                        <li>
                            <form class="form-inline search-form"><span class="mobile-search search-icon"><i class="fa fa-search"></i></span></form>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><span class="media user-header"><img class="mr-2 rounded-circle img-35" src="<?php echo base_url()?>assets/admin/assets/images/dashboard/user.png" alt=""><span class="media-body"><span class="f-12 f-w-600">Elana Saint</span><span class="d-block">Admin</span></span>
                                    </span>
                                </button>
                                <div class="dropdown-menu p-0">
                                    <ul class="profile-dropdown">
                                        <li class="gradient-primary-1">
                                            <h6 class="mb-0">Elana Saint</h6><span>Web Designer</span>
                                        </li>
                                        <li><i data-feather="user"> </i>Profile</li>
                                        <li><i data-feather="message-square"> </i>Inbox</li>
                                        <li><i data-feather="file-text"> </i>Taskboard</li>
                                        <li><i data-feather="settings"> </i>Settings</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><i data-feather="bell"></i><span class="notification badge badge-pill badge-danger f-10">2</span></button>
                                <div class="dropdown-menu p-0">
                                    <ul class="notification-dropdown">
                                        <li class="gradient-primary-1">
                                            <h6>Notifications</h6><span>You have 6 unread messages</span>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <div class="notification-icons bg-success mr-3"><i class="mt-0" data-feather="thumbs-up"></i></div>
                                                <div class="media-body">
                                                    <h6>Someone Likes Your Posts</h6>
                                                    <p class="mb-0"> 2 Hours Ago</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="pt-0">
                                            <div class="media">
                                                <div class="notification-icons bg-info mr-3"><i class="mt-0" data-feather="message-circle"></i></div>
                                                <div class="media-body">
                                                    <h6>3 New Comments</h6>
                                                    <p class="mb-0"> 1 Hours Ago</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="bg-light txt-dark"><a href="#">All </a> notification</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a class="right_side_toggle" href="#"><i data-feather="message-square"></i></a></li>
                        <li>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"><i data-feather="droplet"></i></button>
                                <div class="dropdown-menu p-0">
                                    <ul class="droplet-dropdown">
                                        <li class="gradient-primary-1 text-center">
                                            <h6>Grid Dashboard</h6><span>Easy Grid inside dropdown</span>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-sm-4 col-6 droplet-main"><i data-feather="file-text"></i><span class="d-block">Content</span></div>
                                                <div class="col-sm-4 col-6 droplet-main"><i data-feather="activity"></i><span class="d-block">Activity</span></div>
                                                <div class="col-sm-4 col-6 droplet-main"><i data-feather="users"></i><span class="d-block">Contacts</span></div>
                                                <div class="col-sm-4 col-6 droplet-main"><i data-feather="clipboard"></i><span class="d-block">Reports</span></div>
                                                <div class="col-sm-4 col-6 droplet-main"><i data-feather="anchor"></i><span class="d-block">Automation</span></div>
                                                <div class="col-sm-4 col-6 droplet-main"><i data-feather="settings"></i><span class="d-block">Settings</span></div>
                                            </div>
                                        </li>
                                        <li class="text-center">
                                            <button class="btn btn-primary btn-air-primary">Follows Up</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <form class="form-inline search-full">
                    <div class="form-group form-control-plaintext">
                        <input type="search" placeholder="Search.."><i class="icon-close close-search"></i>
                    </div>
                </form>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="page-sidebar iconcolor-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper"><a href="<?php echo base_url()?>admin/dash"><img src="<?php echo base_url()?>assets/admin/assets/images/creative-logo.png" alt=""></a></div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <ul class="sidebar-menu">
                        <?php 
                            $menu =json_decode($menu,true);
                            for($i = 0; $i<count($menu); $i++){
                        ?>
                        <li>
                            <a class="sidebar-header" href="<?php echo $menu[$i]["link"]?>"><i data-feather=<?php echo $menu[$i]["icon_name"]?>></i><span><?php echo $menu[$i]["menu_name"]?></span></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            <!-- Right sidebar Start-->
            <div class="right-sidebar" id="right_side_bar">
                <div>
                    <div class="container p-0">
                        <div class="modal-header p-l-20 p-r-20">
                            <div class="col-sm-8 p-0">
                                <h6 class="modal-title font-weight-bold">Contacts Status</h6>
                            </div>
                            <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
                        </div>
                    </div>
                    <div class="friend-list-search mt-0">
                        <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
                    </div>
                    <div class="p-l-30 p-r-30">
                        <div class="chat-box">
                            <div class="people-list friend-list custom-scrollbar">
                                <ul class="list">
                                    <li class="clearfix"><img class="rounded-small user-image" src="<?php echo base_url()?>assets/admin/assets/images/user/2.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Vincent Porter</div>
                                            <div class="status"> Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-small user-image" src="<?php echo base_url()?>assets/admin/assets/images/user/3.jpg" alt="">
                                        <div class="status-circle away"></div>
                                        <div class="about">
                                            <div class="name">Ain Chavez</div>
                                            <div class="status"> 28 minutes ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-small user-image" src="<?php echo base_url()?>assets/admin/assets/images/user/10.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Kori Thomas</div>
                                            <div class="status"> Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-small user-image" src="<?php echo base_url()?>assets/admin/assets/images/user/11.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Erica Hughes</div>
                                            <div class="status"> Online</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-small user-image" src="<?php echo base_url()?>assets/admin/assets/images/user/11.png" alt="">
                                        <div class="status-circle offline"></div>
                                        <div class="about">
                                            <div class="name">Ginger Johnston</div>
                                            <div class="status"> 2 minutes ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-small user-image" src="<?php echo base_url()?>assets/admin/assets/images/user/6.jpg" alt="">
                                        <div class="status-circle away"></div>
                                        <div class="about">
                                            <div class="name">Prasanth Anand</div>
                                            <div class="status"> 2 hour ago</div>
                                        </div>
                                    </li>
                                    <li class="clearfix"><img class="rounded-small user-image" src="<?php echo base_url()?>assets/admin/assets/images/user/7.jpg" alt="">
                                        <div class="status-circle online"></div>
                                        <div class="about">
                                            <div class="name">Hileri Jecno</div>
                                            <div class="status"> Online</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>General</h3>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/dash">Home</a></li>
                                    <li class="breadcrumb-item">Product Prices</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="card o-hidden">
                                <div class="bg-primary b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center"><i data-feather="database"></i></div>
                                        <div class="media-body"><span class="m-0">Earnings</span>
                                            <h4 class="mb-0 counter">6659</h4><i class="icon-bg" data-feather="database"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="card o-hidden">
                                <div class="bg-secondary b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                                        <div class="media-body"><span class="m-0">Products</span>
                                            <h4 class="mb-0 counter">9856</h4><i class="icon-bg" data-feather="shopping-bag"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="card o-hidden">
                                <div class="bg-primary b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                                        <div class="media-body"><span class="m-0">Messages</span>
                                            <h4 class="mb-0 counter">893</h4><i class="icon-bg" data-feather="message-circle"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="card o-hidden">
                                <div class="bg-primary b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                                        <div class="media-body"><span class="m-0">New User</span>
                                            <h4 class="mb-0 counter">45631</h4><i class="icon-bg" data-feather="user-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 box-col-12">
                            <div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="text-uppercase">Product List</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="icofont icofont-double-left"></i></li>
                                                <li><i class="view-html fa fa-code"></i></li>
                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                <li><i class="icofont icofont-error close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-4 col-lg-12 box-col-12">
                                                <ul class="icon-lists border navs-icon inline-nav">
                                                    <li><a href="<?php echo base_url()?>admin/list_product"><i data-feather="box"></i><span> Category</span></a></li>
                                                    <?php 
                                                        $category = json_decode($category,true);
                                                        for($i = 0; $i < count($category); $i++){
                                                    ?>
                                                        <?php if($i%4 == 0) { ?>
                                                            <li class="pl-navs-inline" onclick="get_card(<?php echo $category[$i]['id']?>)"><a style="cursor:pointer"><i class="fa fa-angle-right"></i><span> <?php echo $category[$i]["c_name"]?>&nbsp;&nbsp;&nbsp;</span> <span class="badge badge-primary"><?php echo $category[$i]["total_item"]?></span></a></li>
                                                        <?php } ?>
                                                        <?php if($i%4 == 1) { ?>
                                                            <li class="pl-navs-inline" onclick="get_card(<?php echo $category[$i]['id']?>)"><a style="cursor:pointer"><i class="fa fa-angle-right"></i><span> <?php echo $category[$i]["c_name"]?>&nbsp;&nbsp;&nbsp;</span> <span class="badge badge-secondary"><?php echo $category[$i]["total_item"]?></span></a></li>
                                                        <?php } ?>
                                                        <?php if($i%4 == 2) { ?>
                                                            <li class="pl-navs-inline" onclick="get_card(<?php echo $category[$i]['id']?>)"><a style="cursor:pointer"><i class="fa fa-angle-right"></i><span> <?php echo $category[$i]["c_name"]?>&nbsp;&nbsp;&nbsp;</span> <span class="badge badge-info"><?php echo $category[$i]["total_item"]?></span></a></li>
                                                        <?php } ?>
                                                        <?php if($i%4 == 3) { ?>
                                                            <li class="pl-navs-inline" onclick="get_card(<?php echo $category[$i]['id']?>)"><a style="cursor:pointer"><i class="fa fa-angle-right"></i><span> <?php echo $category[$i]["c_name"]?>&nbsp;&nbsp;&nbsp;</span> <span class="badge badge-success"><?php echo $category[$i]["total_item"]?></span></a></li>
                                                        <?php } ?>
                                                    <?php
                                                        }
                                                    ?>
                                                </ul>
                                            </div>
                                            <div class="col-xl-8 col-lg-12 box-col-12">
                                                <div id="basicScenario"></div>        
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2019 © Creative All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Hand crafted & made with<i class="fa fa-heart"></i></p>
                        </div>
                    </div>
                </div>
            </footer>
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
    <script src="<?php echo base_url()?>assets/admin/assets/js/prism/prism.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/clipboard/clipboard.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/counter/counter-custom.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/custom-card/custom-card.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/chat-menu.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/general-widget.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/height-equal.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo base_url()?>assets/admin/assets/js/script.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->

    <!-- Datatalbe -->
    <script src="<?php echo base_url()?>assets/admin/assets/js/jsgrid/jsgrid.min.js"></script>
    <!-- <script src="<?php echo base_url()?>assets/admin/assets/js/jsgrid/griddata.js"></script> -->
    <!-- <script src="<?php echo base_url()?>assets/admin/assets/js/jsgrid/jsgrid.js"></script> -->
    <!-- End of datatable -->
    <script>
        (function($) {
            function get_card(id){
                $.ajax({
                    url : "<?php echo base_url()?>admin/get_cate_info",
                    type : "POST",
                    data : {
                        id : id
                    },
                    success: function(res){
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
                        for(var i = 0; i < atr_keys.length ;i++){
                            $("#detail").append("<li style='padding: 10px'><div><span>"+atr_keys[i]+"</span></div><div id='temp"+i+"' class='drp_cus'></div></li>");
                                
                            var end_arr = [];
                            for(var j = 0; j<atr[atr_keys[i]].length ;j ++){
                                end_arr.push(atr[atr_keys[i]][j]);
                            }
                            $("#temp"+i).jqxDropDownList({ source: end_arr, placeHolder: "Select Time",selectedIndex:0, width: "100%", height: 30});
                        }
                        if(quantity.length>1){
                            $("#detail").append("<li style='padding: 10px'><div><span>Quantity</span><div id='quantity'></div></li>");
                            var quantity_src = [];
                            for(var i = 0; i < quantity.length; i++){
                                quantity_src.push(quantity[i]['quantity']);
                            }
                            $("#quantity").jqxDropDownList({ source: quantity_src, placeHolder: "Select Quantity",selectedIndex:0, width: "100%", height: 30});
                        }
                        $("#detail").append("<li style='padding: 10px'><div><span>Artwork Service</span><div id='art_service'></div></li>");
                            var art_src = [
                                "Just Print - Free","File Check -£2.50 ","File Check with Proofing -£6.50","File Assit -£15.00"
                            ];
                            
                        $("#art_service").jqxDropDownList({ source: art_src, placeHolder: "Select Quantity",selectedIndex:0, width: "100%", height: 30});
                        // Gallery
                        if(res[0].c_img == null || res[0].c_img == ""){
                            $("#gallery")[0].innerHTML = "";
                            $("#gallery").append('<div class="blog-box blog-grid text-center product-box">'+
                                                        '<div class="product-img"><img class="img-fluid top-radius-blog" src="<?php echo base_url()?>assets/admin/assets/images/ecommerce/02.jpg" alt="">'+
                                                            '<div class="product-hover">'+
                                                                '<ul>'+
                                                                    '<li><i class="icon-pencil"></i></li>'+
                                                                '</ul>'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>');
                        }
                        if(res[0].c_img != null || res[0].c_img == ""){
                            $("#gallery")[0].innerHTML = "";
                            temp_gallery = res[0].c_img.split(",");
                            $("#gallery").append('<div class="blog-box blog-grid text-center product-box">'+
                                                        '<div class="product-img"><img class="img-fluid top-radius-blog" src="<?php echo base_url()?>/assets/product/'+temp_gallery[0]+'" alt="">'+
                                                            '<div class="product-hover">'+
                                                                '<ul>'+
                                                                    '<li><i class="icon-pencil"></i></li>'+
                                                                '</ul>'+
                                                            '</div>'+
                                                        '</div>'+
                                                    '</div>');
                        }
                        // End of Gallery
                        $(".product-hover").click(function(){
                            var url_index = window.btoa(id);;
                            document.location = "<?php echo base_url()?>admin/gallery?ind="+url_index;
                        })
                        $("#cat_desc")[0].innerHTML = "";
                        var c_desc = res[0].descrip;
                        var c_artic = res[0].artic;
                        if(c_desc == null){
                            c_desc = "";
                        }
                        if(c_artic == null){
                            c_artic = "";
                        }
                        $("#cat_desc").append('<ul class="nav nav-tabs nav-material mb-0" id="top-tab" role="tablist">'+
                                                    '<li class="nav-item"><a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false">Description</a>'+
                                                        '<div class="material-border"></div>'+
                                                    '</li>'+
                                                    '<li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">Article Guide</a>'+
                                                        '<div class="material-border"></div>'+
                                                    '</li>'+
                                                    '<li class="nav-item" id="save_desc">'+
                                                        '<button class="btn btn-default btn-lg" data-original-title="" title=""> <span class="icon-save"></span></button>'+
                                                    '</li>'+
                                                '</ul>');
                        $("#cat_desc").append('<div class="tab-content" id="top-tabContent">'+
                                                    '<div class="tab-pane fade active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">'+
                                                        '<textarea class="form-control" id="text1" placeholder = "Please Insert Description">'+c_desc+'</textarea>'+
                                                    '</div>'+
                                                    '<div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">'+
                                                        '<textarea class="form-control" id="text2" placeholder = "Please Insert Article Guide">'+c_artic+'</textarea>'+
                                                    '</div>'+
                                                '</div>');
                        $("#save_desc").click(function(){
                            console.log($("#text1").val());
                            console.log($("#text2").val());
                            $.ajax({
                                url : "<?php echo base_url()?>admin/save_desc",
                                type : "POST",
                                data : {
                                    id : id,
                                    desc : $("#text1").val(),
                                    artic : $("#text2").val()
                                },
                                success : function(res){
                                    if(res == "success"){
                                        toastr.options = {
                                            closeButton: !0,
                                            progressBar: !0,
                                            showMethod: "slideDown",
                                            timeOut: 4e3
                                        }, toastr.success("Success", "1").css(({
                                            width: "500px",
                                            "max-width": "500px"
                                        }));
                                    }
                                    else{
                                        toastr.options = {
                                            closeButton: !0,
                                            progressBar: !0,
                                            showMethod: "slideDown",
                                            timeOut: 4e3
                                        }, toastr.error("Fail", "1").css(({
                                            width: "500px",
                                            "max-width": "500px"
                                        }));
                                    }
                                    
                                }
                            })
                            
                        })
                        var aj_arr = {};
                        for(var i = 0; i <  $(".drp_cus").length; i++){
                            aj_arr[atr_keys[i]] = $(".drp_cus")[i].outerText;
                            // console.log($(".drp_cus").jqxDropDownList());
                        }
                        aj_arr = JSON.stringify(aj_arr);
                        $.ajax({
                            url : "<?php echo base_url()?>admin/get_price",
                            data : {
                                data : aj_arr
                            },
                            type : "POST",
                            success : function(res_price){
                                var res_price = JSON.parse(res_price);
                                var q_quantity = [];
                                var price_saver = [];
                                var price_stand = [];
                                var price_express = [];
                                for(var i = 0; i < res_price.length; i++){
                                    price_saver.push(res_price[i]['price_saver']);
                                    price_stand.push(res_price[i]['price_stand']);
                                    price_express.push(res_price[i]['price_express']);
                                    q_quantity.push(res_price[i]['quantity']);
                                }
                                console.log(price_saver);
                                $("#cat_price")[0].innerHTML = "";
                                "use strict";
                                $("#cat_price").jsGrid({
                                    width: "100%",
                                    filtering: true,
                                    editing: true,
                                    inserting: true,
                                    sorting: true,
                                    paging: true,
                                    autoload: true,
                                    pageSize: 15,
                                    pageButtonCount: 5,
                                    deleteConfirm: "Do you really want to delete the client?",
                                    controller: db,
                                    fields: [
                                        { name: "Quantity", type: "text", width: 150 },
                                        { name: "Saver", type: "number", width: 50 },
                                        { name: "Express", type: "text", width: 200 },
                                        { name: "Standard", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                                        { name: "Married", type: "checkbox", title: "Is Married", sorting: false },
                                        { type: "control" }
                                    ]
                                });
                                $("#sort").click ( function() {
                                    var field = $("#sortingField").val();
                                    $("#sorting-table").jsGrid("sort", field);
                                });
                                var selectedItems = [];
                                var selectItem = function(item) {
                                    selectedItems.push(item);
                                };
                                var unselectItem = function(item) {
                                    selectedItems = $.grep(selectedItems, function(i) {
                                        return i !== item;
                                    });
                                };
                                var deleteSelectedItems = function() {
                                    if(!selectedItems.length || !confirm("Are you sure?"))
                                        return;
                                    deleteClientsFromDb(selectedItems);
                                    var $grid = $("#batchDelete");
                                    $grid.jsGrid("option", "pageIndex", 1);
                                    $grid.jsGrid("loadData");
                                    selectedItems = [];
                                };
                                var deleteClientsFromDb = function(deletingClients) {
                                    db.clients = $.map(db.clients, function(client) {
                                        return ($.inArray(client, deletingClients) > -1) ? null : client;
                                    });
                                };
                                // $("#cat_price").append("<tr>");
                            }
                        })
                        // $(".drp_cus").on("change",function(){
                        //     for(var i = 0; i <  $(".drp_cus").length; i++){
                        //         aj_arr[atr_keys[i]] = $(".drp_cus")[i].outerText;
                        //     }
                        //     console.log(aj_arr);
                        // })
                    }
                })
            }
            $.ajax({
                url : "<?php echo base_url()?>admin/get_all_pro",
                type : "POST",
                success : function(res){
                    var res = JSON.parse(res);
                    // console.log(res);
                    console.log(res.length);
                    // for(var i = 0; i < res.length ;i++){
                    //     // db.clients[i]["Quantity"] = res[i]['product_name'];
                    //     console.log(res[i]["product_name"]);
                    // }
                }
            });
            // db.clients = [
            //     {
            //         "Name": "Otto Clay",
            //         "Saver": 61,
            //         "Standard": 6,
            //         "Express": "Ap #897-1459 Quam Avenue",
            //         
            //     }
            // ];
            // var db = {
            //     loadData: function(filter) {
            //         return $.grep(this.clients, function(client) {
            //             return (!filter.Name || client.Name.indexOf(filter.Name) > -1)
            //                 && (!filter.Age || client.Age === filter.Age)
            //                 && (!filter.Address || client.Address.indexOf(filter.Address) > -1)
            //                 && (!filter.Country || client.Country === filter.Country)
            //         });
            //     },
            //     insertItem: function(insertingClient) {
            //         this.clients.push(insertingClient);
            //     },
            //     updateItem: function(updatingClient) { },

            //     deleteItem: function(deletingClient) {
            //         var clientIndex = $.inArray(deletingClient, this.clients);
            //         this.clients.splice(clientIndex, 1);
            //     }
            // };
            // window.db = db;
            
            "use strict";
            $("#basicScenario").jsGrid({
                width: "100%",
                filtering: true,
                editing: true,
                inserting: true,
                sorting: true,
                paging: true,
                autoload: true,
                pageSize: 15,
                pageButtonCount: 5,
                deleteConfirm: "Do you really want to delete the client?",
                controller: db,
                fields: [
                    { name: "Quantity", type: "text", width: 150 },
                    { name: "Saver", type: "number", width: 50 },
                    { name: "Express", type: "text", width: 200 },
                    { name: "Standard", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                    { name: "Married", type: "checkbox", title: "Is Married", sorting: false },
                    { type: "control" }
                ]
            });
            $("#sort").click ( function() {
                var field = $("#sortingField").val();
                $("#sorting-table").jsGrid("sort", field);
            });
            var selectedItems = [];
            var selectItem = function(item) {
                selectedItems.push(item);
            };
            var unselectItem = function(item) {
                selectedItems = $.grep(selectedItems, function(i) {
                    return i !== item;
                });
            };
            var deleteSelectedItems = function() {
                if(!selectedItems.length || !confirm("Are you sure?"))
                    return;
                deleteClientsFromDb(selectedItems);
                var $grid = $("#batchDelete");
                $grid.jsGrid("option", "pageIndex", 1);
                $grid.jsGrid("loadData");
                selectedItems = [];
            };
            var deleteClientsFromDb = function(deletingClients) {
                db.clients = $.map(db.clients, function(client) {
                    return ($.inArray(client, deletingClients) > -1) ? null : client;
                });
            };
        })(jQuery);
        'use strict';
        (function() {
            var db = {
                loadData: function(filter) {
                    return $.grep(this.clients, function(client) {
                        return (!filter.Quantity || client.Quantity.indexOf(filter.Quantity) > -1)
                            && (!filter.Saver || client.Saver === filter.Saver)
                            && (!filter.Standard || client.Standard.indexOf(filter.Standard) > -1)
                            && (!filter.Express || client.Express === filter.Express)
                    });
                },
                insertItem: function(insertingClient) {
                    this.clients.push(insertingClient);
                },
                updateItem: function(updatingClient) { },

                deleteItem: function(deletingClient) {
                    var clientIndex = $.inArray(deletingClient, this.clients);
                    this.clients.splice(clientIndex, 1);
                }
            };
            window.db = db;
            db.countries = [
                { Name: "India", Id: 0 },
                { Name: "United States", Id: 1 },
                { Name: "Canada", Id: 2 },
                { Name: "United Kingdom", Id: 3 },
                { Name: "France", Id: 4 },
                { Name: "Brazil", Id: 5 },
                { Name: "China", Id: 6 },
                { Name: "Russia", Id: 7 }
            ];
            db.clients = [
                {
                    "Quantity": "Otto Clay",
                    "Saver": 61,
                    "Standard": 6,
                    "Express": "Ap #897-1459 Quam Avenue",
                    
                },
                {
                    "Quantity": "Connor Johnston",
                    "Saver": 73,
                    "Standard": 7,
                    "Express": "Ap #370-4647 Dis Av.",
                    
                },
                {
                    "Quantity": "Lacey Hess",
                    "Saver": 29,
                    "Standard": 7,
                    "Express": "Ap #365-8835 Integer St.",
                    
                },
                {
                    "Quantity": "Timothy Henson",
                    "Saver": 78,
                    "Standard": 1,
                    "Express": "911-5143 Luctus Ave",
                    
                },
                {
                    "Quantity": "Ramona Benton",
                    "Saver": 43,
                    "Standard": 5,
                    "Express": "Ap #614-689 Vehicula Street",
                    
                },
                {
                    "Quantity": "Ezra Tillman",
                    "Saver": 51,
                    "Standard": 1,
                    "Express": "P.O. Box 738, 7583 Quisque St.",
                    
                },
                {
                    "Quantity": "Dante Carter",
                    "Saver": 59,
                    "Standard": 1,
                    "Express": "P.O. Box 976, 6316 Lorem, St.",
                    
                },
                {
                    "Quantity": "Christopher Mcclure",
                    "Saver": 58,
                    "Standard": 1,
                    "Express": "847-4303 Dictum Av.",
                    
                },
                {
                    "Quantity": "Ruby Rocha",
                    "Saver": 62,
                    "Standard": 2,
                    "Express": "5212 Sagittis Ave",
                    
                },
                {
                    "Quantity": "Imelda Hardin",
                    "Saver": 39,
                    "Standard": 5,
                    "Express": "719-7009 Auctor Av.",
                    
                },
                {
                    "Quantity": "Jonah Johns",
                    "Saver": 28,
                    "Standard": 5,
                    "Express": "P.O. Box 939, 9310 A Ave",
                    
                },
                {
                    "Quantity": "Herman Rosa",
                    "Saver": 49,
                    "Standard": 7,
                    "Express": "718-7162 Molestie Av.",
                    
                },
                {
                    "Quantity": "Arthur Gay",
                    "Saver": 20,
                    "Standard": 7,
                    "Express": "5497 Neque Street",
                    
                },
                {
                    "Quantity": "Xena Wilkerson",
                    "Saver": 63,
                    "Standard": 1,
                    "Express": "Ap #303-6974 Proin Street",
                    
                },
                {
                    "Quantity": "Lilah Atkins",
                    "Saver": 33,
                    "Standard": 5,
                    "Express": "622-8602 Gravida Ave",
                    
                },
                {
                    "Quantity": "Malik Shepard",
                    "Saver": 59,
                    "Standard": 1,
                    "Express": "967-5176 Tincidunt Av.",
                    
                },
                {
                    "Quantity": "Keely Silva",
                    "Saver": 24,
                    "Standard": 1,
                    "Express": "P.O. Box 153, 8995 Praesent Ave",
                    
                },
                {
                    "Quantity": "Hunter Pate",
                    "Saver": 73,
                    "Standard": 7,
                    "Express": "P.O. Box 771, 7599 Ante, Road",
                    
                },
                {
                    "Quantity": "Mikayla Roach",
                    "Saver": 55,
                    "Standard": 5,
                    "Express": "Ap #438-9886 Donec Rd.",
                    
                },
                {
                    "Quantity": "Upton Joseph",
                    "Saver": 48,
                    "Standard": 4,
                    "Express": "Ap #896-7592 Habitant St.",
                    
                },
                {
                    "Quantity": "Jeanette Pate",
                    "Saver": 59,
                    "Standard": 2,
                    "Express": "P.O. Box 177, 7584 Amet, St.",
                    
                },
                {
                    "Quantity": "Kaden Hernandez",
                    "Saver": 79,
                    "Standard": 3,
                    "Express": "366 Ut St.",
                    
                },
                {
                    "Quantity": "Kenyon Stevens",
                    "Saver": 20,
                    "Standard": 3,
                    "Express": "P.O. Box 704, 4580 Gravida Rd.",
                    
                },
                {
                    "Quantity": "Jerome Harper",
                    "Saver": 31,
                    "Standard": 5,
                    "Express": "2464 Porttitor Road",
                    
                },
                {
                    "Quantity": "Jelani Patel",
                    "Saver": 36,
                    "Standard": 2,
                    "Express": "P.O. Box 541, 5805 Nec Av.",
                    
                },
                {
                    "Quantity": "Keaton Oconnor",
                    "Saver": 21,
                    "Standard": 1,
                    "Express": "Ap #657-1093 Nec, Street",
                    
                },
                {
                    "Quantity": "Bree Johnston",
                    "Saver": 31,
                    "Standard": 2,
                    "Express": "372-5942 Vulputate Avenue",
                    
                },
                {
                    "Quantity": "Maisie Hodges",
                    "Saver": 70,
                    "Standard": 7,
                    "Express": "P.O. Box 445, 3880 Odio, Rd.",
                    
                },
                {
                    "Quantity": "Kuame Calhoun",
                    "Saver": 39,
                    "Standard": 2,
                    "Express": "P.O. Box 609, 4105 Rutrum St.",
                    
                },
                {
                    "Quantity": "Carlos Cameron",
                    "Saver": 38,
                    "Standard": 5,
                    "Express": "Ap #215-5386 A, Avenue",
                    
                },
                {
                    "Quantity": "Fulton Parsons",
                    "Saver": 25,
                    "Standard": 7,
                    "Express": "P.O. Box 523, 3705 Sed Rd.",
                    
                },
                {
                    "Quantity": "Wallace Christian",
                    "Saver": 43,
                    "Standard": 3,
                    "Express": "416-8816 Mauris Avenue",
                    
                },
                {
                    "Quantity": "Caryn Maldonado",
                    "Saver": 40,
                    "Standard": 1,
                    "Express": "108-282 Nonummy Ave",
                    
                },
                {
                    "Quantity": "Whilemina Frank",
                    "Saver": 20,
                    "Standard": 7,
                    "Express": "P.O. Box 681, 3938 Egestas. Av.",
                    
                },
                {
                    "Quantity": "Emery Moon",
                    "Saver": 41,
                    "Standard": 4,
                    "Express": "Ap #717-8556 Non Road",
                    
                },
                {
                    "Quantity": "Price Watkins",
                    "Saver": 35,
                    "Standard": 4,
                    "Express": "832-7810 Nunc Rd.",
                    
                },
                {
                    "Quantity": "Lydia Castillo",
                    "Saver": 59,
                    "Standard": 7,
                    "Express": "5280 Placerat, Ave",
                    
                },
                {
                    "Quantity": "Lawrence Conway",
                    "Saver": 53,
                    "Standard": 1,
                    "Express": "Ap #452-2808 Imperdiet St.",
                    
                },
                {
                    "Quantity": "Kalia Nicholson",
                    "Saver": 67,
                    "Standard": 5,
                    "Express": "P.O. Box 871, 3023 Tellus Road",
                    
                },
                {
                    "Quantity": "Brielle Baxter",
                    "Saver": 45,
                    "Standard": 3,
                    "Express": "Ap #822-9526 Ut, Road",
                    
                },
                {
                    "Quantity": "Valentine Brady",
                    "Saver": 72,
                    "Standard": 7,
                    "Express": "8014 Enim. Road",
                    
                },
                {
                    "Quantity": "Rebecca Gardner",
                    "Saver": 57,
                    "Standard": 4,
                    "Express": "8655 Arcu. Road",
                    
                },
                {
                    "Quantity": "Vladimir Tate",
                    "Saver": 26,
                    "Standard": 1,
                    "Express": "130-1291 Non, Rd.",
                    
                },
                {
                    "Quantity": "Vernon Hays",
                    "Saver": 56,
                    "Standard": 4,
                    "Express": "964-5552 In Rd.",
                    
                },
                {
                    "Quantity": "Allegra Hull",
                    "Saver": 22,
                    "Standard": 4,
                    "Express": "245-8891 Donec St.",
                    
                },
                {
                    "Quantity": "Hu Hendrix",
                    "Saver": 65,
                    "Standard": 7,
                    "Express": "428-5404 Tempus Ave",
                    
                },
                {
                    "Quantity": "Kenyon Battle",
                    "Saver": 32,
                    "Standard": 2,
                    "Express": "921-6804 Lectus St.",
                    
                },
                {
                    "Quantity": "Gloria Nielsen",
                    "Saver": 24,
                    "Standard": 4,
                    "Express": "Ap #275-4345 Lorem, Street",
                    
                },
                {
                    "Quantity": "Illiana Kidd",
                    "Saver": 59,
                    "Standard": 2,
                    "Express": "7618 Lacus. Av.",
                    
                },
                {
                    "Quantity": "Adria Todd",
                    "Saver": 68,
                    "Standard": 6,
                    "Express": "1889 Tincidunt Road",
                    
                },
                {
                    "Quantity": "Kirsten Mayo",
                    "Saver": 71,
                    "Standard": 1,
                    "Express": "100-8640 Orci, Avenue",
                    
                },
                {
                    "Quantity": "Willa Hobbs",
                    "Saver": 60,
                    "Standard": 6,
                    "Express": "P.O. Box 323, 158 Tristique St.",
                    
                },
                {
                    "Quantity": "Alexis Clements",
                    "Saver": 69,
                    "Standard": 5,
                    "Express": "P.O. Box 176, 5107 Proin Rd.",
                    
                },
                {
                    "Quantity": "Akeem Conrad",
                    "Saver": 60,
                    "Standard": 2,
                    "Express": "282-495 Sed Ave",
                    
                },
                {
                    "Quantity": "Montana Silva",
                    "Saver": 79,
                    "Standard": 6,
                    "Express": "P.O. Box 120, 9766 Consectetuer St.",
                    
                },
                {
                    "Quantity": "Kaseem Hensley",
                    "Saver": 77,
                    "Standard": 6,
                    "Express": "Ap #510-8903 Mauris. Av.",
                    
                },
                {
                    "Quantity": "Christopher Morton",
                    "Saver": 35,
                    "Standard": 5,
                    "Express": "P.O. Box 234, 3651 Sodales Avenue",
                    
                },
                {
                    "Quantity": "Wade Fernandez",
                    "Saver": 49,
                    "Standard": 6,
                    "Express": "740-5059 Dolor. Road",
                    
                },
                {
                    "Quantity": "Illiana Kirby",
                    "Saver": 31,
                    "Standard": 2,
                    "Express": "527-3553 Mi Ave",
                    
                },
                {
                    "Quantity": "Kimberley Hurley",
                    "Saver": 65,
                    "Standard": 5,
                    "Express": "P.O. Box 637, 9915 Dictum St.",
                    
                },
                {
                    "Quantity": "Arthur Olsen",
                    "Saver": 74,
                    "Standard": 5,
                    "Express": "887-5080 Eget St.",
                    
                },
                {
                    "Quantity": "Brody Potts",
                    "Saver": 59,
                    "Standard": 2,
                    "Express": "Ap #577-7690 Sem Road",
                    
                },
                {
                    "Quantity": "Dillon Ford",
                    "Saver": 60,
                    "Standard": 1,
                    "Express": "Ap #885-9289 A, Av.",
                    
                },
                {
                    "Quantity": "Hannah Juarez",
                    "Saver": 61,
                    "Standard": 2,
                    "Express": "4744 Sapien, Rd.",
                    
                },
                {
                    "Quantity": "Vincent Shaffer",
                    "Saver": 25,
                    "Standard": 2,
                    "Express": "9203 Nunc St.",
                    
                },
                {
                    "Quantity": "George Holt",
                    "Saver": 27,
                    "Standard": 6,
                    "Express": "4162 Cras Rd.",
                    
                },
                {
                    "Quantity": "Tobias Bartlett",
                    "Saver": 74,
                    "Standard": 4,
                    "Express": "792-6145 Mauris St.",
                    
                },
                {
                    "Quantity": "Xavier Hooper",
                    "Saver": 35,
                    "Standard": 1,
                    "Express": "879-5026 Interdum. Rd.",
                    
                },
                {
                    "Quantity": "Declan Dorsey",
                    "Saver": 31,
                    "Standard": 2,
                    "Express": "Ap #926-4171 Aenean Road",
                    
                },
                {
                    "Quantity": "Clementine Tran",
                    "Saver": 43,
                    "Standard": 4,
                    "Express": "P.O. Box 176, 9865 Eu Rd.",
                    
                },
                {
                    "Quantity": "Pamela Moody",
                    "Saver": 55,
                    "Standard": 6,
                    "Express": "622-6233 Luctus Rd.",
                    
                },
                {
                    "Quantity": "Julie Leon",
                    "Saver": 43,
                    "Standard": 6,
                    "Express": "Ap #915-6782 Sem Av.",
                    
                },
                {
                    "Quantity": "Shana Nolan",
                    "Saver": 79,
                    "Standard": 5,
                    "Express": "P.O. Box 603, 899 Eu St.",
                    
                },
                {
                    "Quantity": "Vaughan Moody",
                    "Saver": 37,
                    "Standard": 5,
                    "Express": "880 Erat Rd.",
                    
                },
                {
                    "Quantity": "Randall Reeves",
                    "Saver": 44,
                    "Standard": 3,
                    "Express": "1819 Non Street",
                    
                },
                {
                    "Quantity": "Dominic Raymond",
                    "Saver": 68,
                    "Standard": 1,
                    "Express": "Ap #689-4874 Nisi Rd.",
                    
                },
                {
                    "Quantity": "Lev Pugh",
                    "Saver": 69,
                    "Standard": 5,
                    "Express": "Ap #433-6844 Auctor Avenue",
                    
                },
                {
                    "Quantity": "Desiree Hughes",
                    "Saver": 80,
                    "Standard": 4,
                    "Express": "605-6645 Fermentum Avenue",
                    
                },
                {
                    "Quantity": "Idona Oneill",
                    "Saver": 23,
                    "Standard": 7,
                    "Express": "751-8148 Aliquam Avenue",
                    
                },
                {
                    "Quantity": "Lani Mayo",
                    "Saver": 76,
                    "Standard": 1,
                    "Express": "635-2704 Tristique St.",
                    
                },
                {
                    "Quantity": "Cathleen Bonner",
                    "Saver": 40,
                    "Standard": 1,
                    "Express": "916-2910 Dolor Av.",
                    
                },
                {
                    "Quantity": "Sydney Murray",
                    "Saver": 44,
                    "Standard": 5,
                    "Express": "835-2330 Fringilla St.",
                    
                },
                {
                    "Quantity": "Brenna Rodriguez",
                    "Saver": 77,
                    "Standard": 6,
                    "Express": "3687 Imperdiet Av.",
                    
                },
                {
                    "Quantity": "Alfreda Mcdaniel",
                    "Saver": 38,
                    "Standard": 7,
                    "Express": "745-8221 Aliquet Rd.",
                    
                },
                {
                    "Quantity": "Zachery Atkins",
                    "Saver": 30,
                    "Standard": 1,
                    "Express": "549-2208 Auctor. Road",
                    
                },
                {
                    "Quantity": "Amelia Rich",
                    "Saver": 56,
                    "Standard": 4,
                    "Express": "P.O. Box 734, 4717 Nunc Rd.",
                    
                },
                {
                    "Quantity": "Kiayada Witt",
                    "Saver": 62,
                    "Standard": 3,
                    "Express": "Ap #735-3421 Malesuada Avenue",
                    
                },
                {
                    "Quantity": "Lysandra Pierce",
                    "Saver": 36,
                    "Standard": 1,
                    "Express": "Ap #146-2835 Curabitur St.",
                    
                },
                {
                    "Quantity": "Cara Rios",
                    "Saver": 58,
                    "Standard": 4,
                    "Express": "Ap #562-7811 Quam. Ave",
                    
                },
                {
                    "Quantity": "Austin Andrews",
                    "Saver": 55,
                    "Standard": 7,
                    "Express": "P.O. Box 274, 5505 Sociis Rd.",
                    
                },
                {
                    "Quantity": "Lillian Peterson",
                    "Saver": 39,
                    "Standard": 2,
                    "Express": "6212 A Avenue",
                    
                },
                {
                    "Quantity": "Adria Beach",
                    "Saver": 29,
                    "Standard": 2,
                    "Express": "P.O. Box 183, 2717 Nunc Avenue",
                    
                },
                {
                    "Quantity": "Oleg Durham",
                    "Saver": 80,
                    "Standard": 4,
                    "Express": "931-3208 Nunc Rd.",
                    
                },
                {
                    "Quantity": "Casey Reese",
                    "Saver": 60,
                    "Standard": 4,
                    "Express": "383-3675 Ultrices, St.",
                    
                },
                {
                    "Quantity": "Kane Burnett",
                    "Saver": 80,
                    "Standard": 1,
                    "Express": "759-8212 Dolor. Ave",
                    
                },
                {
                    "Quantity": "Stewart Wilson",
                    "Saver": 46,
                    "Standard": 7,
                    "Express": "718-7845 Sagittis. Av.",
                    
                },
                {
                    "Quantity": "Charity Holcomb",
                    "Saver": 31,
                    "Standard": 6,
                    "Express": "641-7892 Enim. Ave",
                    
                },
                {
                    "Quantity": "Kyra Cummings",
                    "Saver": 43,
                    "Standard": 4,
                    "Express": "P.O. Box 702, 6621 Mus. Av.",
                    
                },
                {
                    "Quantity": "Stuart Wallace",
                    "Saver": 25,
                    "Standard": 7,
                    "Express": "648-4990 Sed Rd.",
                    
                },
                {
                    "Quantity": "Carter Clarke",
                    "Saver": 59,
                    "Standard": 6,
                    "Express": "Ap #547-2921 A Street",
                    
                }
            ];
        }());
    </script>
    <!-- Plugin used-->
</body>

</html>
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/datatables.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url()?>assets/admin/assets/css/light-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/responsive.css">
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
                    <div class="logo-wrapper"><a href="<?php echo base_url()?>admin/dash"><img src="<?php echo base_url()?>assets/admin/assets/images/creative-logo1.png" alt=""></a></div>
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
                                <h3>Support Ticket</h3>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/dash">Home</a></li>
                                    <li class="breadcrumb-item active">Support Ticket</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Support Ticket List</h5><span>List of ticket opend by customers</span>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Order</span>
                                                            <h3 class="total-num counter">2563</h3>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="text-md-right">
                                                                <ul>
                                                                    <li>Profit<span class="product-stts txt-success ml-2">8989<i class="icon-angle-up f-12 ml-1"></i></span></li>
                                                                    <li>Loss<span class="product-stts txt-danger ml-2">2560<i class="icon-angle-down f-12 ml-1"></i></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-showcase">
                                                        <div class="progress sm-progress-bar">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Pending</span>
                                                            <h3 class="total-num counter">8943</h3>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="text-md-right">
                                                                <ul>
                                                                    <li>Profit<span class="product-stts txt-success ml-2">8989<i class="icon-angle-up f-12 ml-1"></i></span></li>
                                                                    <li>Loss<span class="product-stts txt-danger ml-2">2560<i class="icon-angle-down f-12 ml-1"></i></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-showcase">
                                                        <div class="progress sm-progress-bar">
                                                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Running</span>
                                                            <h3 class="total-num counter">2500</h3>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="text-md-right">
                                                                <ul>
                                                                    <li>Profit<span class="product-stts txt-success ml-2">8989<i class="icon-angle-up f-12 ml-1"></i></span></li>
                                                                    <li>Loss<span class="product-stts txt-danger ml-2">2560<i class="icon-angle-down f-12 ml-1"></i></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-showcase mt-4">
                                                        <div class="progress sm-progress-bar">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Smooth</span>
                                                            <h3 class="total-num counter">2060</h3>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="text-md-right">
                                                                <ul>
                                                                    <li>Profit<span class="product-stts txt-success ml-2">8989<i class="icon-angle-up f-12 ml-1"></i></span></li>
                                                                    <li>Loss<span class="product-stts txt-danger ml-2">2560<i class="icon-angle-down f-12 ml-1"></i></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-showcase mt-4">
                                                        <div class="progress sm-progress-bar">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Done</span>
                                                            <h3 class="total-num counter">5600</h3>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="text-md-right">
                                                                <ul>
                                                                    <li>Profit<span class="product-stts txt-success ml-2">8989<i class="icon-angle-up f-12 ml-1"></i></span></li>
                                                                    <li>Loss<span class="product-stts txt-danger ml-2">2560<i class="icon-angle-down f-12 ml-1"></i></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-showcase mt-4">
                                                        <div class="progress sm-progress-bar">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card ecommerce-widget">
                                                <div class="card-body support-ticket-font">
                                                    <div class="row">
                                                        <div class="col-5"><span>Cancle</span>
                                                            <h3 class="total-num counter">2560</h3>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="text-md-right">
                                                                <ul>
                                                                    <li>Profit<span class="product-stts txt-success ml-2">8989<i class="icon-angle-up f-12 ml-1"></i></span></li>
                                                                    <li>Loss<span class="product-stts txt-danger ml-2">2560<i class="icon-angle-down f-12 ml-1"></i></span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-showcase">
                                                        <div class="progress sm-progress-bar">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="display" id="basic-6">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">Name</th>
                                                    <th colspan="2">HR Information</th>
                                                    <th colspan="4">Contact</th>
                                                </tr>
                                                <tr>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                    <th>Office</th>
                                                    <th>Skill</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/1.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Tiger Nixon</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>System Architect</td>
                                                    <td>$320,800</td>
                                                    <td>Edinburgh</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5421</td>
                                                    <td>t.nixon@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/2.png" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Garrett Winters</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Accountant</td>
                                                    <td>$170,750</td>
                                                    <td>Tokyo</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>8422</td>
                                                    <td>g.winters@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/3.png" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Ashton Cox</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Junior Technical Author</td>
                                                    <td>$86,000</td>
                                                    <td>San Francisco</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1562</td>
                                                    <td>a.cox@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/4.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Cedric Kelly</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>$433,060</td>
                                                    <td>Edinburgh</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>6224</td>
                                                    <td>c.kelly@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/5.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Airi Satou</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Accountant</td>
                                                    <td>$162,700</td>
                                                    <td>Tokyo</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>5407</td>
                                                    <td>a.satou@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/6.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Brielle Williamson</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Integration Specialist</td>
                                                    <td>$372,000</td>
                                                    <td>New York</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 55%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>4804</td>
                                                    <td>b.williamson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/7.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Herrod Chandler</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Sales Assistant</td>
                                                    <td>$137,500</td>
                                                    <td>San Francisco</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>9608</td>
                                                    <td>h.chandler@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/8.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Rhona Davidson</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Integration Specialist</td>
                                                    <td>$327,900</td>
                                                    <td>Tokyo</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>6200</td>
                                                    <td>r.davidson@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/9.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Colleen Hurst</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Javascript Developer</td>
                                                    <td>$205,500</td>
                                                    <td>San Francisco</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 24%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2360</td>
                                                    <td>c.hurst@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/10.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Sonya Frost</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Software Engineer</td>
                                                    <td>$103,600</td>
                                                    <td>Edinburgh</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 58%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1667</td>
                                                    <td>s.frost@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/11.png" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Jena Gaines</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Office Manager</td>
                                                    <td>$90,560</td>
                                                    <td>London</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>3814</td>
                                                    <td>j.gaines@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/12.png" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Quinn Flynn</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Support Lead</td>
                                                    <td>$342,000</td>
                                                    <td>Edinburgh</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>9497</td>
                                                    <td>q.flynn@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/1.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Charde Marshall</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Regional Director</td>
                                                    <td>$470,600</td>
                                                    <td>San Francisco</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>6741</td>
                                                    <td>c.marshall@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/2.png" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Haley Kennedy</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>$313,500</td>
                                                    <td>London</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>3597</td>
                                                    <td>h.kennedy@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/3.png" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Tatyana Fitzpatrick</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Regional Director</td>
                                                    <td>$385,750</td>
                                                    <td>London</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1965</td>
                                                    <td>t.fitzpatrick@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/4.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Michael Silva</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Marketing Designer</td>
                                                    <td>$198,500</td>
                                                    <td>London</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1581</td>
                                                    <td>m.silva@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/5.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Paul Byrd</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>$725,000</td>
                                                    <td>New York</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>3059</td>
                                                    <td>p.byrd@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/6.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Gloria Little</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Systems Administrator</td>
                                                    <td>$237,500</td>
                                                    <td>New York</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1721</td>
                                                    <td>g.little@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/7.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Bradley Greer</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Software Engineer</td>
                                                    <td>$132,000</td>
                                                    <td>London</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2558</td>
                                                    <td>b.greer@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/8.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Dai Rios</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Personnel Lead</td>
                                                    <td>$217,500</td>
                                                    <td>Edinburgh</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>2290</td>
                                                    <td>d.rios@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/9.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Jenette Caldwell</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Development Lead</td>
                                                    <td>$345,000</td>
                                                    <td>New York</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>1937</td>
                                                    <td>j.caldwell@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/10.jpg" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Yuri Berry</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>$675,000</td>
                                                    <td>New York</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>6154</td>
                                                    <td>y.berry@datatables.net</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media"><img class="rounded-circle img-30 mr-3" src="<?php echo base_url()?>assets/admin/assets/images/user/11.png" alt="Generic placeholder image">
                                                            <div class="media-body align-self-center">
                                                                <div>Caesar Vance</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>$106,450</td>
                                                    <td>New York</td>
                                                    <td>
                                                        <div class="progress-showcase">
                                                            <div class="progress sm-progress-bar">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>8330</td>
                                                    <td>c.vance@datatables.net</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Salary</th>
                                                    <th>Office</th>
                                                    <th>Skill</th>
                                                    <th>Extn.</th>
                                                    <th>E-mail</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
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
    <script src="<?php echo base_url()?>assets/admin/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/counter/counter-custom.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/chat-menu.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/support-ticket-custom.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo base_url()?>assets/admin/assets/js/script.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>
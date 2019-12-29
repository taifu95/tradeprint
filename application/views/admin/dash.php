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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/vector-map.css">
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
                                <h3>Dashboard</h3>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/dash">Home</a></li>
                                    <li class="breadcrumb-item">Dashboard</li>
                                </ol>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 xl-100">
                            <div class="row">
                                <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                                    <div class="card">
                                        <div class="card-body tag-card">
                                            <div class="progressbar-widgets">
                                                <div class="media media-widgets">
                                                    <div class="media-body">
                                                        <p class="mb-0">Total Sale</p>
                                                        <h3 class="mt-0 mb-0 f-w-600"><i data-feather="dollar-sign"></i><span class="counter">841,162</span></h3>
                                                    </div><span class="badge flat-badge-secondary">3.56%<i class="fa fa-caret-up"></i></span>
                                                </div>
                                                <div class="progress sm-progress-bar progress-animate">
                                                    <div class="progress-gradient-secondary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span class="font-secondary">75%</span><span class="animate-circle"></span></div>
                                                </div><span class="tag-content-secondary tag-hover-effect"><i data-feather="trending-up"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                                    <div class="card">
                                        <div class="card-body tag-card">
                                            <div class="progressbar-widgets">
                                                <div class="media media-widgets">
                                                    <div class="media-body">
                                                        <p class="mb-0">Total Purchase</p>
                                                        <h3 class="mt-0 mb-0 f-w-600"><i data-feather="dollar-sign"></i><span class="counter">123,461</span><span><i class="font-success" data-feather="trending-up"></i></span></h3>
                                                    </div><span class="badge flat-badge-success">3.56%<i class="fa fa-caret-up"></i></span>
                                                </div>
                                                <div class="progress sm-progress-bar progress-animate">
                                                    <div class="progress-gradient-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span class="font-success">80%</span><span class="animate-circle"></span></div>
                                                </div><span class="tag-content-success tag-hover-effect"><i data-feather="trending-up">     </i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                                    <div class="card bg-primary">
                                        <div class="card-body tag-card">
                                            <div class="progressbar-widgets">
                                                <div class="media media-widgets">
                                                    <div class="media-body">
                                                        <p class="mb-0 font-light">Active Customers</p>
                                                        <h3 class="mt-0 mb-0 f-w-600"><span class="counter">10,14,125</span><span><i class="font-light" data-feather="trending-up"></i></span></h3>
                                                    </div><span class="badge flat-badge-light font-primary">01.36<i class="fa fa-caret-up"></i></span>
                                                </div>
                                                <div class="progress sm-progress-bar progress-animate">
                                                    <div class="progress-gradient-light" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
                                                </div><span class="tag-content-light tag-light tag-hover-effect"><i data-feather="trending-up">    </i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 xl-50 col-md-6 box-col-6">
                                    <div class="card">
                                        <div class="card-body tag-card">
                                            <div class="progressbar-widgets">
                                                <div class="media media-widgets">
                                                    <div class="media-body">
                                                        <p class="mb-0">New Customers</p>
                                                        <h3 class="mt-0 mb-0 f-w-600"><span class="counter">9,00,563</span><span><i class="font-primary" data-feather="trending-up"></i></span></h3>
                                                    </div><span class="badge flat-badge-primary">6.23%<i class="fa fa-caret-up"></i></span>
                                                </div>
                                                <div class="progress sm-progress-bar progress-animate">
                                                    <div class="progress-gradient-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
                                                </div><span class="tag-content-primary tag-hover-effect"><i data-feather="trending-up">     </i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 xl-100 box-col-12">
                            <div class="card sales-overview">
                                <div class="card-header">
                                    <h5>Sales Overview</h5>
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
                                <div class="card-body p-0">
                                    <div class="row m-0 dashboard-btn-groups">
                                        <div class="col-lg-6">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button class="btn btn-outline-light btn-js" type="button">Hours</button>
                                                <button class="btn btn-outline-light btn-js" type="button">Day</button>
                                                <button class="btn btn-outline-light btn-js" type="button">Week</button>
                                                <button class="btn btn-outline-light btn-js active" type="button">Month</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="btn-group pull-right" role="group" aria-label="Basic example">
                                                <button class="btn btn-outline-light btn-js1" type="button">From Date</button>
                                                <button class="btn btn-outline-light btn-js1" type="button">To Date</button>
                                                <button class="btn btn-outline-light btn-js1 active" type="button"><i data-feather="calendar"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-value-box pull-right">
                                            <div class="value-square-box-primary"></div><span>Profit</span>
                                        </div>
                                        <div class="dashboard-rounded-chart flot-chart-container"></div>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="example-head"></code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 xl-100 box-col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Sales By Category</h5>
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
                                <div class="card-body p-0">
                                    <div class="sales-product-table table-responsive">
                                        <table class="table table-bordernone">
                                            <tbody>
                                                <tr>
                                                    <td><img class="img-fluid" src="<?php echo base_url()?>assets/admin/assets/images/dashboard/sale-product-1.png" alt=""></td>
                                                    <td><span>Latest </span><span class="d-block">Niky Black shoes</span></td>
                                                    <td><span class="badge badge-pill pill-badge-secondary">21,562</span></td>
                                                    <td><span>28.21%</span></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="<?php echo base_url()?>assets/admin/assets/images/dashboard/sale-product-2.png" alt=""></td>
                                                    <td><span>Latest Men </span><span class="d-block">Shirt</span></td>
                                                    <td><span>15,102</span></td>
                                                    <td><span>18.00%</span></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="<?php echo base_url()?>assets/admin/assets/images/dashboard/sale-product-3.png" alt=""></td>
                                                    <td><span>Latest Women </span><span class="d-block">Purse</span></td>
                                                    <td><span>9562</span></td>
                                                    <td><span>08.54%</span></td>
                                                </tr>
                                                <tr>
                                                    <td><img class="img-fluid" src="<?php echo base_url()?>assets/admin/assets/images/dashboard/sale-product-4.png" alt=""></td>
                                                    <td><span>Latest </span><span class="d-block">Women Sandals</span></td>
                                                    <td><span>1002</span></td>
                                                    <td><span>01.33%</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="example-head2"></code></pre>
                                    </div>
                                </div>
                                <div class="card-footer sales-product-table-footer">
                                    <div class="media"><a class="btn btn-outline-light">Last Week<i class="fa fa-angle-double-right ml-2"></i></a>
                                        <div class="media-body"><a class="pull-right" href="#">View More Reports               </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 xl-100 box-col-12">
                            <div class="knob-widgets card">
                                <div class="row card-body">
                                    <div class="col-md-6">
                                        <div class="knob-block text-center">
                                            <input class="knob" data-width="230" data-height="230" data-thickness=".060" data-angleoffset="90" data-displayinput="false" data-fgcolor="#fb2e63" data-bgcolor="#f2f4ff" data-linecap="round" value="75">
                                            <div class="knob-content-center">
                                                <h6 class="f-w-600">March. 2019</h6><span class="f-w-600">Total Invest</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="knob-live-content text-center">
                                            <div class="setting-dot">
                                                <div class="setting-bg pull-right"><i class="fa fa-spin fa-cog"></i></div>
                                            </div>
                                            <div class="small-bar">
                                                <div class="ct-small-left flot-chart-container"></div>
                                            </div>
                                            <div class="span badge badge-pill pill-badge-secondary"> <i class="fa fa-circle"></i>Live</div>
                                        </div>
                                        <div class="knob-bottom-widgets text-center">
                                            <h6 class="f-w-600">This Invest Cycle</h6>
                                            <h5 class="f-w-600"><i data-feather="dollar-sign"></i>785,000</h5>
                                            <h6 class="f-w-600 mb-0">Current Balance This Invest Cycle</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 xl-100 box-col-12">
                            <div class="card sales-overview">
                                <div class="card-header">
                                    <h5>Our Growth</h5>
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
                                <div class="card-body chart-block">
                                    <canvas id="our-growth"></canvas>
                                    <div class="chart-value-box pull-right">
                                        <div class="value-square-box-warning"></div><span>Profit</span>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="example-head3"></code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 xl-50 box-col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Our Best Seller</h5>
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
                                <div class="card-body p-0">
                                    <div class="sales-product-table table-responsive">
                                        <table class="table table-bordernone">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Number</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Account</th>
                                                    <th scope="col">Sealing</th>
                                                    <th scope="col">Percentage</th>
                                                    <th scope="col">Custmoize</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <td>
                                                        <div class="d-inline-block align-middle"><img class="img-radius img-30 align-top m-r-15 rounded-circle" src="<?php echo base_url()?>assets/admin/assets/images/user/2.png" alt="">
                                                            <div class="d-inline-block">
                                                                <h6 class="f-w-600">Nick Stone</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span>NikyBlack87@gmail.com</span></td>
                                                    <td><span>21,562</span></td>
                                                    <td><span>28.21%</span></td>
                                                    <td><span class="badge badge-pill pill-badge-secondary">Edit</span></td>
                                                </tr>
                                                <tr>
                                                    <td>02</td>
                                                    <td>
                                                        <div class="d-inline-block align-middle"><img class="img-radius img-30 align-top m-r-15 rounded-circle" src="<?php echo base_url()?>assets/admin/assets/images/user/5.jpg" alt="">
                                                            <div class="d-inline-block">
                                                                <h6 class="f-w-600">Milano Esco</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span>Milanoesco56@gmal.com</span></td>
                                                    <td><span>15,102</span></td>
                                                    <td><span>18.00%</span></td>
                                                    <td><span class="badge badge-pill pill-badge-success">Edit</span></td>
                                                </tr>
                                                <tr>
                                                    <td>03</td>
                                                    <td>
                                                        <div class="d-inline-block align-middle"><img class="img-radius img-30 align-top m-r-15 rounded-circle" src="<?php echo base_url()?>assets/admin/assets/images/user/3.jpg" alt="">
                                                            <div class="d-inline-block">
                                                                <h6 class="f-w-600">Wiltor Noice</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span>Wiltornoice34@gmail.com</span></td>
                                                    <td><span>9562</span></td>
                                                    <td><span>08.54%</span></td>
                                                    <td><span class="badge badge-pill pill-badge-warning">Edit</span></td>
                                                </tr>
                                                <tr>
                                                    <td>04</td>
                                                    <td>
                                                        <div class="d-inline-block align-middle"><img class="img-radius img-30 align-top m-r-15 rounded-circle" src="<?php echo base_url()?>assets/admin/assets/images/user/4.jpg" alt="">
                                                            <div class="d-inline-block">
                                                                <h6 class="f-w-600">Anna Strong</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><span>Annastrong67@gmail.com</span></td>
                                                    <td><span>1002</span></td>
                                                    <td><span>01.33%</span></td>
                                                    <td><span class="badge badge-pill pill-badge-primary">Edit</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="example-head4"></code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 xl-50 box-col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="call-chat-card text-center">
                                        <div class="setting-dot">
                                            <div class="setting-bg pull-right"><i class="fa fa-spin fa-cog"></i></div>
                                        </div>
                                        <div class="call-images"><img class="img-fluid" src="<?php echo base_url()?>assets/admin/assets/images/dashboard/call-chat-1.png" alt=""><img class="img-fluid" src="<?php echo base_url()?>assets/admin/assets/images/dashboard/call-chat-2.png" alt=""></div>
                                        <h5 class="f-w-600">11:36</h5>
                                        <div class="call-chart-height">
                                            <div class="call-chart"></div>
                                        </div>
                                        <div class="call-chat-bottom">
                                            <div class="text-center">
                                                <div class="d-inline-block"><i data-feather="pause"></i></div>
                                                <div class="d-inline-block"><a class="bg-secondary call-receive"><i data-feather="phone"></i></a></div>
                                                <div class="d-inline-block"><i data-feather="volume-2"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 xl-100 box-col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Work Plan</h5>
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
                                    <div class="work-plan text-center"><img class="img-fluid" src="<?php echo base_url()?>assets/admin/assets/images/dashboard/work-plan.png" alt="">
                                        <h6>10:00 AM</h6>
                                        <h5 class="f-w-600">5 Year Celebration</h5>
                                        <p>Discussion About our new project and etc....</p>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="example-head5"></code></pre>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination pagination-lg theme-pagination">
                                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                                            <li class="page-item"><a class="page-link" href="#">22</a></li>
                                            <li class="page-item"><a class="page-link" href="#">23</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">24</a></li>
                                            <li class="page-item"><a class="page-link" href="#">25</a></li>
                                            <li class="page-item"><a class="page-link" href="#">26</a></li>
                                            <li class="page-item"><a class="page-link" href="#">27</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 xl-100 box-col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Location </h5>
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
                                    <div class="row dashboard-map">
                                        <div class="col-md-8">
                                            <div class="jvector-map-height" id="world"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="map-right-box">
                                                <div class="media">
                                                    <div class="map-box bg-warning box-color-warning"><i data-feather="users"></i></div>
                                                    <div class="media-body"><span>Total New User</span>
                                                        <h5>53,952,718</h5>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="map-box bg-primary box-color-primary"><i data-feather="droplet"></i></div>
                                                    <div class="media-body"><span>Bounce Date</span>
                                                        <h5>96%</h5>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="map-box bg-secondary box-color-secondary"><i data-feather="clock"></i></div>
                                                    <div class="media-body"><span>Session duartion</span>
                                                        <h5>06:12:56</h5>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="map-box bg-success box-color-success"><i data-feather="coffee"></i></div>
                                                    <div class="media-body"><span>Session</span>
                                                        <h5>06:12:56      </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head6" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="example-head6"></code></pre>
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
    <script src="<?php echo base_url()?>assets/admin/assets/js/chart/chartjs/chart.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/chart/chartist/chartist.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/chart/knob/knob.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/chart/knob/knob-chart.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/prism/prism.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/clipboard/clipboard.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/counter/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/counter/counter-custom.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/custom-card/custom-card.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/dashboard/default.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/notify/index.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/chat-menu.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/tooltip-init.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/animation/wow/wow.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?php echo base_url()?>assets/admin/assets/js/script.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
</body>

</html>
<div class="welcome-popup modal fade" id="loadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
                <div class="modal-header"></div>
                <div class="contain p-50">
                    <div class="text-center">
                        <h3>Welcome! <?php echo $_SESSION["user_name"]?></h3>
                        <p> </p>
                        <button class="btn btn-primary btn-lg txt-white" type="button" data-dismiss="modal" aria-label="Close">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
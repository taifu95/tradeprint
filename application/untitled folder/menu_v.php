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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/prism.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url()?>assets/admin/assets/css/light-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/responsive.css">

    <link rel="stylesheet" href="<?php echo base_url()?>assets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets/jqwidgets/styles/jqx.light.css" type="text/css" />
    <style>
        .jqx-widget-content-light{
            border-radius : 10px;
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
                                <h3>Menu</h3>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/dash">Home</a></li>
                                    <li class="breadcrumb-item active">Menu (Front End)</li>
                                </ol>
                            </div>
                            <div class="col-lg-6">
                                <!-- Bookmark Start-->
                                <div class="bookmark pull-right">
                                    <ul>
                                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                                        <li><a href="#" data-container="body" data-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                                        <li><a href="#"><i class="bookmark-search" data-feather="star"></i></a>
                                            <form class="form-inline search-form">
                                                <div class="form-group form-control-search">
                                                    <input type="text" placeholder="Search..">
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Bookmark Ends-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Menu (Drag and Drop)</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-double-left"></i>
                                                <li><i class="view-html fa fa-code"></i></li>
                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                <li><i class="icofont icofont-error close-card"></i></li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id='jqxWidget'>
                                        <div style='float: left;'>
                                            <div id='treeA' style='visibility: hidden; float: left; margin-left: 0px;'>
                                                <ul>
                                                    <li id='home' item-selected='true'>Home</li>
                                                    <li item-expanded='true'>Solutions
                                                        <ul>
                                                            <li>Education</li>
                                                        </ul>
                                                    </li>
                                                    <li>Financial services</li>
                                                    <li>Community</li>
                                                </ul>
                                            </div>
                                            <div style='visibility: hidden; float: left; margin-left: 20px;' id="treeB">
                                                <ul>
                                                    <li>Products
                                                    </li>
                                                    <li item-expanded='true'>Support
                                                        <ul>
                                                            <li>Support home</li>
                                                            <li>Customer Service</li>
                                                        </ul>
                                                    </li>
                                                    <li>Knowledge base</li>
                                                    <li>Forum</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div style="font-size: 13px; font-family: Verdana; padding-top: 20px; clear: both;">
                                                <b>Events Log:</b>
                                                <div id="dragStartLog">
                                                </div>
                                                <div id="dragEndLog">
                                                </div>
                                                <br />
                                                <b>Note:</b>
                                                <br />
                                                Dragging of "Community" is disabled.
                                                <br />
                                                Dropping of "Forum" is disabled.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6">
                            <div class="card b-r-0">
                                <div class="card-header">
                                    <h5>Link</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="icofont icofont-double-left"></i>
                                                <li><i class="view-html fa fa-code"></i></li>
                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                <li><i class="icofont icofont-error close-card"></i></li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                    <div class="code-box-copy">
                                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                                        <pre><code class="language-html" id="example-head1">
                                            </code></pre>
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
    <script src="<?php echo base_url()?>assets/admin/assets/js/prism/prism.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/clipboard/clipboard.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/custom-card/custom-card.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/chat-menu.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/height-equal.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- JQX -->

    <script type="text/javascript" src="<?php echo base_url()?>assets/scripts/demos.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxpanel.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxdragdrop.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxtree.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/jqwidgets/jqxcheckbox.js"></script>
    <!-- END of jqx -->
    <!-- Theme js-->
    <script src="<?php echo base_url()?>assets/admin/assets/js/script.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <script type="text/javascript">
        $(document).ready(function () {
            // Create jqxTree
            var source = [
                { label: "Item 1", expanded: true, items: [
                    { label: "Item 1.1" },
                    { label: "Item 1.2", selected: true }
                ]
                },
                { label: "Item 2" },
                { label: "Item 3" },
                { label: "Item 4", items: [
                    { label: "Item 4.1" },
                    { label: "Item 4.2" }
                ]
                },
                { label: "Item 5" },
                { label: "Item 6" },
                { label: "Item 7" }
            ];
            var source1 = [
                { label: "Item 1", expanded: true, items: [
                    { label: "Item 1.1" },
                    { label: "Item 1.2", selected: true }
                ]
                },
                { label: "Item 2" }
            ];
            $('#treeA').jqxTree({ allowDrag: true, allowDrop: false, height: '300px', width: '300px', source: source,
                dragStart: function (item) {
                    if (item.label == "Community")
                        return false;
                },
                dragEnd: function (item, dropItem, args, dropPosition, tree) {
                    if (item.label == "Forum")
                        return false;
                }
            });
            $('#treeB').jqxTree({ allowDrag: true, allowDrop: true, height: '300px', width: '300px' , source: source1,
                dragEnd: function (item, dropItem, args, dropPosition, tree) {
                    console.log(item.level);
                    if (item.label == "Forum")
                        return false;
                }
            });
            $('#treeA').css('visibility', 'visible');
            $('#treeB').css('visibility', 'visible');
            $("#treeA, #treeB").on('dragStart', function (event) {
                $("#dragStartLog").text("Drag Start: " + event.args.label);
                $("#dragEndLog").text("");
            });
            $("#treeA, #treeB").on('dragEnd', function (event) {
                $("#dragEndLog").text("Drag End");
                 if (event.args.label) {
                    var ev = event.args.originalEvent;
                    var x = ev.pageX;
                    var y = ev.pageY;
                    if (event.args.originalEvent && event.args.originalEvent.originalEvent && event.args.originalEvent.originalEvent.touches) {
                        var touch = event.args.originalEvent.originalEvent.changedTouches[0];
                        x = touch.pageX;
                        y = touch.pageY;
                    }
                }
            });
        });
    </script>
</body>

</html>
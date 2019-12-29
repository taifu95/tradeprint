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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/owlcarousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/rating.css">
    <!-- Plugins css Ends-->

    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/select2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/dropzone.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/bootstrap.css">
    <!-- App css-->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url()?>assets/admin/assets/css/light-1.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/toastr/toastr.min.css">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/responsive.css">
    <style>
        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            }

        .btn-1 {
            border: none;
            color: gray;
            background-color: white;
            padding: 8px 8px;
            border-radius: 8px;
            font-size: 20px;
            font-weight: bold;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
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
                            <a class="sidebar-header" href="<?php echo $menu[$i]["link"]?>"><i data-feather=<?php echo $menu[$i]["icon_name"]?>></i><span><?php echo $menu[$i]["menu_name"]?></span></a>
                        </li>
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
                                <h3>Edit Category</h3>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/dash">Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/list_product">Product</a></li>
                                    <li class="breadcrumb-item active">Edit Category</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="card">
                        <div class="row product-page-main">
                            <div class="col-xl-6">
                                <form class="dropzone digits" id="multiFileUpload" action="<?php echo base_url()?>Admin/upload_cate">
                                    <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
                                        <h6 class="mb-0">Drop files here or click to upload.</h6>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xl-6">
                                <div class="row" id="pro_gal">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-body add-post">
                            </div>
                        </div>
                    </div>
                    <?php
                        $detail_arr = json_decode($info['detail'],true);
                        $detail = $detail_arr[0]['detail'];
                        $specs = $detail_arr[0]['specs'];
                    ?>
                    <div class="card">
                        <div class="row product-page-main">
                            <div class="col-sm-12">
                                <ul class="nav nav-tabs nav-material mb-0" id="top-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="top-home-tab" data-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false">Details</a>
                                        <div class="material-border"></div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false">Paper & Specs</a>
                                        <div class="material-border"></div>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" id="art-top-tab" data-toggle="tab" href="#top-art" role="tab" aria-controls="top-art" aria-selected="false">Upload Artwork Templates</a>
                                        <div class="material-border"></div>
                                    </li>
                                    
                                </ul>
                                <div class="row" style="margin:5px;">
                                    <div class="col-lg-12">
                                        <a class="btn btn-danger btn-lg" id="save" data-original-title="" style="float:right;cursor:pointer;color:white" title=""><span class="fa fa-save"></span> Save</a>
                                    </div>
                                </div>
                                <div class="tab-content" id="top-tabContent" style="padding-top:20px">
                                    <input type="hidden" value="<?php echo $index?>" id="cat_id">
                                    <div class="tab-pane fade active show" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                                        <textarea id="editor1" name="editor1" cols="30" rows="10" class="editor1">
                                            
                                        </textarea>
                                        <div id='ck_val' style="display:none">
                                            <?php echo $detail?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                                        <textarea id="editor2" name="editor2" cols="30" rows="10" class="editor">
                                            
                                        </textarea>
                                        <div id='ck_val_specs' style="display:none">
                                            <?php echo $specs?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="top-art" role="tabpanel" aria-labelledby="art-top-tab">
                                        <div class="row">
                                            <div class="col-sm-14 col-xl-3">
                                                <div class="ribbon-vertical-left-wrapper card">
                                                    <div class="card-body">
                                                        <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-warning"><i class="fa fa-file-pdf-o"></i></div>
                                                        <?php if($detail_arr[0]['art_pho'] != "" || $detail_arr[0]['art_pho'] != NULL){?>
                                                            <a href="<?php echo base_url()?>assets/art/<?php echo $detail_arr[0]['art_pho']?>" _blank id='art_pho'><p>Click here to download</p></a>
                                                        <?php } else {
                                                        ?>
                                                        <a href="#" _blank id='art_pho'><p>Click here to download</p></a>
                                                        <?}?>
                                                        <form class="dropzone digits" id="upload_pho" action="<?php echo base_url()?>Admin/upload_cate_pho">
                                                            <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
                                                                <h6 class="mb-0">Drop files here or click to upload(Photo).</h6>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-14 col-xl-3">
                                                <div class="ribbon-vertical-left-wrapper card">
                                                    <div class="card-body">
                                                        <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-primary"><i class="icofont icofont-love"></i></div>
                                                        <?php if($detail_arr[0]['art_ai'] != "" || $detail_arr[0]['art_ai'] != NULL){?>
                                                            <a href="<?php echo base_url()?>assets/art/<?php echo $detail_arr[0]['art_ai']?>" _blank id='art_ai'><p>Click here to download</p></a>
                                                        <?php } else {
                                                        ?>
                                                        <a href="#" _blank id='art_ai'><p>Click here to download</p></a>
                                                        <?}?>
                                                        <form class="dropzone digits" id="upload_ai" action="<?php echo base_url()?>Admin/upload_cate_ai">
                                                            <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
                                                                <h6 class="mb-0">Drop files here or click to upload(AI).</h6>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-14 col-xl-3">
                                                <div class="ribbon-vertical-left-wrapper card">
                                                    <div class="card-body">
                                                        <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-secondary"><i class="icon-gift"></i></div>
                                                        <?php if($detail_arr[0]['art_id'] != "" || $detail_arr[0]['art_id'] != NULL ){?>
                                                            <a href="<?php echo base_url()?>assets/art/<?php echo $detail_arr[0]['art_id']?>" _blank id='art_id'><p>Click here to download</p></a>
                                                        <?php } else {
                                                        ?>
                                                        <a href="#" _blank id='art_id'><p>Click here to download</p></a>
                                                        <?}?>
                                                        <form class="dropzone digits" id="upload_id" action="<?php echo base_url()?>Admin/upload_cate_id">
                                                            <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
                                                                <h6 class="mb-0">Drop files here or click to upload(ID).</h6>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-14 col-xl-3">
                                                <div class="ribbon-vertical-left-wrapper card">
                                                    <div class="card-body">
                                                        <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-success"><i class="icon-signal"></i></div>
                                                        <?php if($detail_arr[0]['art_pdf'] != "" || $detail_arr[0]['art_pdf'] != NULL ){?>
                                                            <a href="<?php echo base_url()?>assets/art/<?php echo $detail_arr[0]['art_pdf']?>" _blank id='art_pdf'><p>Click here to download</p></a>
                                                        <?php } else {
                                                        ?>
                                                        <a href="#" _blank id='art_pdf'><p>Click here to download</p></a>
                                                        <?}?>
                                                        <form class="dropzone digits" id="upload_pdf" action="<?php echo base_url()?>Admin/upload_cate_pdf">
                                                            <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
                                                                <h6 class="mb-0">Drop files here or click to upload(PDF).</h6>
                                                            </div>
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
    <script src="<?php echo base_url()?>assets/admin/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/rating/jquery.barrating.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/rating/rating-script.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/owlcarousel/owl.carousel.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/chat-menu.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/ecommerce.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/product-list-custom.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/general-widget.js"></script>

    <script src="<?php echo base_url()?>assets/admin/assets/js/dropzone/dropzone-pro.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/dropzone/dropzone-script.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/select2/select2.full.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/select2/select2-custom.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/form-validation-custom.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <script src="<?php echo base_url()?>assets/admin/assets/js/ecommerce.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/product-list-custom.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <!-- Theme js-->
    <script src="<?php echo base_url()?>assets/admin/assets/js/editor/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/editor/ckeditor/styles.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/editor/ckeditor/adapters/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/editor/ckeditor/ckeditor.custom.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/script.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/theme-customizer/customizer.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/toastr/toastr.min.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <script>
        function del(id){
            $.ajax({
                url : "<?php echo base_url()?>admin/del_cate_gallery",
                type : "POST",
                data : {
                    id : id
                },
                success : function (res){
                    var img_arr = res;
                    img_arr = img_arr.split(",");
                    $("#pro_gal")[0].innerHTML = "";
                    var base_url = "http://"+window.location.host;
                    for(var i = 0; i < img_arr.length; i++){
                        $("#pro_gal").append('<div class="col-md-6 col-xl-3 set-col-6">'+
                                                '<div class="blog-box blog-grid text-center product-box">'+
                                                    '<div class="product-img"><img class="img-fluid top-radius-blog" style="height:200px" src="'+base_url+'/assets/product/'+img_arr[i]+'" alt="">'+
                                                        '<div class="product-hover"  onclick="del('+i+')">'+
                                                            '<ul>'+
                                                                '<input value="'+img_arr[i]+'" type="hidden" class="name"><li><i class="icon-close"></i></li>'+
                                                            '</ul>'+
                                                        '</div>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>');
                    }
                }
            })
        }
        $.ajax({
            url : "<?php echo base_url()?>admin/get_cate_gallery",
            type : "POST",
            success : function (res){
                var res = JSON.parse(res);
                var img_arr = res[0]["c_img"];
                img_arr = img_arr.split(",");
                var base_url = "http://"+window.location.host;
                for(var i = 0; i < img_arr.length; i++){
                    $("#pro_gal").append('<div class="col-md-6 col-xl-3 set-col-6">'+
                                            '<div class="blog-box blog-grid text-center product-box">'+
                                                '<div class="product-img"><img class="img-fluid top-radius-blog" style="height:200px" src="'+base_url+'/assets/product/'+img_arr[i]+'" alt="">'+
                                                    '<div class="product-hover"  onclick="del('+i+')">'+
                                                        '<ul>'+
                                                            '<input value="'+img_arr[i]+'" type="hidden" class="name"><li><i class="icon-close"></i></li>'+
                                                        '</ul>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>');
                }
            }
        })
        CKEDITOR.replace('editor2', {
            uiColor: '#CCEAEE'
        });
        CKEDITOR.instances.editor1.setData( $("#ck_val").text() );
        CKEDITOR.instances.editor2.setData( $("#ck_val_specs").text() );
        $("#save").click(function(){
            // var content = $('textarea.editor1').val();
            var content = "";
            // content = JSON.stringify(content);$query = $this->db->query($sql);
            var type = 'detail';
            if($("#top-tab").find(".nav-item").find(".active").text() == "Details"){
                type = 'detail';
                content = CKEDITOR.instances['editor1'].getData();
            }
            if($("#top-tab").find(".nav-item").find(".active").text() == "Paper & Specs"){
                type="spec";
                content = CKEDITOR.instances['editor2'].getData();
            }
            if($("#top-tab").find(".nav-item").find(".active").text() != "Paper & Specs" && $("#top-tab").find(".nav-item").find(".active").text() != "Details"){
                toastr.options = {
                    closeButton: !0,
                    progressBar: !0,
                    showMethod: "slideDown",
                    timeOut: 4e3
                }, toastr.error("Please select Details or PAPER & SPECS", "").css(({
                    width: "500px",
                    "max-width": "500px"
                }));
                return;
            }
            $.ajax({
                url : "<?php echo base_url()?>admin/save_detail",
                data : {
                    id : $("#cat_id").val(),
                    content : content,
                    type : type
                },
                type : "POST",
                success : function(res){
                    if(res == "success"){
                        toastr.options = {
                            closeButton: !0,
                            progressBar: !0,
                            showMethod: "slideDown",
                            timeOut: 4e3
                        }, toastr.success("Success", "").css(({
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
                        }, toastr.error("Fail", "").css(({
                            width: "500px",
                            "max-width": "500px"
                        }));
                    }
                }
            })
        })

    </script>
</body>

</html>
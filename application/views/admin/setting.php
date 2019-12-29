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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/dropzone.css">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/jsgrid.css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/assets/css/style.css">1
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
            border: 2px solid gray;
            color: gray;
            background-color: white;
            padding: 8px 20px;
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
                                <h3>Settings</h3>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/dash">Home</a></li>
                                    <li class="breadcrumb-item active">Settings</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts                    -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-xl-6 xl-100">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Settings</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="icon-tab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" id="icon-home-tab" data-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home" aria-selected="true"><i class="icofont icofont-ui-home"></i>Slider</a></li>
                                        <li class="nav-item"><a class="nav-link" id="profile-icon-tab" data-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile-icon" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Front Card</a></li>
                                        <li class="nav-item"><a class="nav-link" id="contact-icon-tab" data-toggle="tab" href="#contact-icon" role="tab" aria-controls="contact-icon" aria-selected="false"><i class="icofont icofont-color-bucket"></i>Color</a></li>
                                    </ul>
                                    <div class="tab-content" id="icon-tabContent" style="margin-top:20px">
                                        <div class="tab-pane fade show active" id="icon-home" role="tabpanel" aria-labelledby="icon-home-tab">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Title</label>
                                                <input class="form-control" id="s_title" type="text" placeholder="Title of the Slides" data-original-title="" title="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Content</label>
                                                <textarea class="form-control" id="s_content" type="text" placeholder="Our A5 flyers and leaflets are our bestselling size.This is because they're perfect for potential prospects to carry around and are extremely cost effective. We currently have an offer of 1000 flyers and leaflets for only £ 24!" data-original-title="" title="" rows="5"></textarea>
                                            </div>    
                                        </div>
                                        <div class="tab-pane fade" id="profile-icon" role="tabpanel" aria-labelledby="profile-icon-tab">
                                        <div class="form-group">
                                                <label for="exampleFormControlInput1">Title</label>
                                                <input class="form-control" id="c_title" type="text" placeholder="Title of the Cards" data-original-title="" title="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Content</label>
                                                <textarea class="form-control" id="c_content" type="text" placeholder="Our A5 flyers and leaflets are our bestselling size.This is because they're perfect for potential prospects to carry around and are extremely cost effective. We currently have an offer of 1000 flyers and leaflets for only £ 24!" data-original-title="" title="" rows="5"></textarea>
                                            </div> 
                                        </div>
                                        <div class="tab-pane fade" id="contact-icon" role="tabpanel" aria-labelledby="contact-icon-tab">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label pt-0" style="padding-top:10px !important">Header</label>
                                                <div class="col-sm-9">
                                                <input class="form-control" type="color" id="h_color" value="#563d7c" data-original-title="" title="">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label pt-0" style="padding-top:10px !important">Menu</label>
                                                <div class="col-sm-9">
                                                <input class="form-control" type="color" id="m_color" value="#563d7c" data-original-title="" title="">
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="upload-btn-wrapper">
                                        <form id="upload_form">    
                                            <button class="btn-1">Upload a file</button>
                                            <input type="file" name="myfile" id="myfile"/>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="form-group">
                                        <button class="btn btn-danger btn-lg" data-original-title="" id="s_save" title="" style="float:right"><span class="fa fa-edit"></span> Save</button>
                                        <button class="btn btn-danger btn-lg" data-original-title="" id="c_save" title="" style="float:right;display:none"><i class="icofont icofont-color-bucket"></i> Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xl-6 xl-100">
                            <div class="card">
                                <div class="card-header">
                                    <h5>File Upload</h5>
                                </div>
                                <div class="card-body">
                                    <div id="basicScenario"><div>
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
    <script src="<?php echo base_url()?>assets/admin/assets/js/chat-menu.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <script src="<?php echo base_url()?>assets/admin/assets/js/jsgrid/jsgrid.min.js"></script>
    <!-- Theme js-->
    <script src="<?php echo base_url()?>assets/admin/assets/js/dropzone/dropzone-set.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/dropzone/dropzone-script.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/jsgrid/jsgrid.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/jsgrid/griddata.js"></script>
    <!-- <script src="<?php echo base_url()?>assets/admin/assets/js/jsgrid/jsgrid.js"></script> -->
    <script src="<?php echo base_url()?>assets/admin/assets/js/script.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/js/theme-customizer/customizer.js"></script>
    <script src="<?php echo base_url()?>assets/admin/assets/toastr/toastr.min.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <script>
        var up_img = false;
        var s_type = "";
        $("#myfile").on("change",function(){
            up_img = true;
        })
        $(".nav-tabs").find("li").click(function(){
            if($(this).text() == "Color"){
                $(".upload-btn-wrapper").css("display","none");
                $("#c_save").css("display","block");
                $("#s_save").css("display","none");
            }
            else{
                $(".upload-btn-wrapper").css("display","block");
                $("#c_save").css("display","none");
                $("#s_save").css("display","block");
            }
        })
        // Get and Update Color
        $.ajax({
            url : "<?php echo base_url()?>admin/get_color",
            type : "POST",
            success : function(res){
                var res  = JSON.parse(res);
                $("#h_color").val(res[0]['header']);
                $("#m_color").val(res[0]['menu']);
            }
        })
        $("#c_save").click(function(){
            $.ajax({
                url : "<?php echo base_url()?>/admin/update_color",
                data : {
                    h_color : $("#h_color").val(),
                    m_color : $("#m_color").val()
                },
                type : "POST",
                success : function(res){
                    if(res == "success"){
                        toastr.options = {
                            closeButton: !0,
                            progressBar: !0,
                            showMethod: "slideDown",
                            timeOut: 4e3
                        }, toastr.success("Update Header Color", "Success").css(({
                            width: "500px",
                            "max-width": "500px"
                        }));
                        return false;
                    }
                }
            })
            
        })
        // END OF COLOR
        $("#s_save").click(function(){            
            // var ref_this = $("ul#nav_tab li a").find(".active");
            var ac_tab = $("ul#icon-tab li").find(".active").text();
            var title = "";
            var content = "";
            if(ac_tab == "Slider"){
                title = $("#s_title").val();
                content = $("#s_content").val();
                s_type = "Slider";
            }
            if(ac_tab == "Front Card"){
                title = $("#c_title").val();
                content = $("#c_content").val();
                s_type = "Front Card";
            }
            if(up_img == false){
                toastr.options = {
                    closeButton: !0,
                    progressBar: !0,
                    showMethod: "slideDown",
                    timeOut: 4e3
                }, toastr.error("Please Select Image", "1").css(({
                    width: "500px",
                    "max-width": "500px"
                }));
                return false;
            }
            var fd = new FormData(document.getElementById("upload_form"));
            fd.append('title',title);
            fd.append('content',content);
            fd.append('s_type',s_type);
            $.ajax({
                url:"<?php echo base_url()?>admin/save_front",
                // secureuri: false,
                type:'post',
                data : fd,
                processData :false,
                contentType : false,
                success : function(res){
                    if(res == 'success'){
                        $("#s_title").val("");
                        $("#s_content").val("");
                        $("#c_title").val("");
                        $("#c_content").val("");
                        up_img = false;
                        toastr.options = {
                            closeButton: !0,
                            progressBar: !0,
                            showMethod: "slideDown",
                            timeOut: 4e3
                        }, toastr.success("Success!", "1").css(({
                            width: "500px",
                            "max-width": "500px"
                        }));
                        $("#basicScenario").jsGrid("loadData");
                    }
                    else{
                        toastr.options = {
                            closeButton: !0,
                            progressBar: !0,
                            showMethod: "slideDown",
                            timeOut: 4e3
                        }, toastr.error("Please Select Another Image", "1").css(({
                            width: "500px",
                            "max-width": "500px"
                        }));
                    }
                    
                }
            })
        })
        // Datatable
        $("#basicScenario").jsGrid({
            width: "100%",
            // filtering: true,
            editing: true,
            inserting: false,
            sorting: true,
            paging: true,
            autoload: true,
            pageSize: 15,

            pageButtonCount: 5,
            deleteConfirm: "Do you really want to delete the Template?",
            controller: {
                loadData : function(filter){
                    return $.ajax({
                        type : "GET",
                        url : '<?php echo base_url()?>admin/get_front',
                        // data : filter
                    });
                },
                deleteItem : function(item)
                {
                    return $.ajax({
                        type : "DELETE",
                        url : '<?php echo base_url()?>admin/del_front',
                        data : item,
                        success : function (res){
                                toastr.options = {
                                closeButton: !0,
                                progressBar: !0,
                                showMethod: "slideDown",
                                timeOut: 4e3
                            }, toastr.success("Success!", "1").css(({
                                width: "500px",
                                "max-width": "500px"
                            }));
                        }
                    });
                },

                // updateItem : function(item)
                // {
                //     $.ajax({
                //         type : "PUT",
                //         url : 'main_category/update_main_category',
                //         data : item
                //     });
                //     $("#basicScenario").jsGrid("loadData");
                // }
                
            },

            fields: [
                { name : 'Image', editing : false, type: "text", width: "30%",
                    itemTemplate: function(val, item) {
                        var scr_val = "<?php echo base_url()?>assets/upload/"+val;
                        return $("<img>").attr("src", scr_val).css({ height: 100, width: "100%" });
                    },
                    insertTemplate: function() {
                        var insertControl = this.insertControl = $("<input>").prop("type", "file");
                        return insertControl;
                    },
                    editoptions : function(){
                        value 
                    },
                    insertValue: function() {
                        return this.insertControl[0].files[0]; 
                    },
                    align: "center"
                },
                { name: "Title", type: "text", width: "20%"},
                { name: "Content", type: "textarea", width: "35%"},
                { name: "Type", type: "text", width: "15%"},
                { name : "id", visible: false},                
                { type: "control", editButton: true, modeSwitchButton: false}

            ]
        });
        
    </script>
</body>

</html>
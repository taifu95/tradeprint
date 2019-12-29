$(document).ready(function(){
    $("#messageNotification").jqxNotification({
        width: 450, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "success"
    });
    $("#messageNotification_sugg").jqxNotification({
        width: 850, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "success"
    });
    $("#messageNotification_error").jqxNotification({
        width: 450, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "error"
    });
    $("#messageNotification_file").jqxNotification({
        width: 450, position: "bottom-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "error"
    });
    var body_left = 0;
    body_left = (window.innerWidth - 1200) / 2;
    $(".wrapper").css("marginLeft",body_left);
    function reportWindowSize() {
        body_left = (window.innerWidth - 1200) / 2;
        $(".wrapper").css("marginLeft",body_left);
    }
    window.onresize = reportWindowSize;
    // $('#jqxFileUpload').jqxFileUpload({browseTemplate: 'success', uploadTemplate: 'primary',  cancelTemplate: 'danger', width: "100%", uploadUrl: 'update_ad/bg_upload', fileInputName: 'fileToUpload'});
    // $('#jqxFileUpload').on('select', function (event) {
    //     var args = event.args;
    //     var fileName = args.file;
    //     var fileSize = args.size; // Note: Internet Explorer 9 and earlier do not support getting the file size.
    //     // Your code here.
    //     if(fileSize / 1024/1024 >4){
    //         // return;
    //         $("#error_file_text")[0].textContent = "Sorry, your file is too large.(Max:4M)";
    //         $("#error_file_text")[0].style.fontSize = '20px';
    //         $("#messageNotification_file").jqxNotification("open");
    //         // $('#jqxFileUpload').jqxFileUpload('cancelFile', 1);
    //     }
    // });
    // $("#jqxFileUploadBrowseButton")[0].style.width = "100%";
    // $("#jqxFileUploadBrowseButton")[0].innerText = "Browse for new Background";
    // $('#jqxFileUpload').on('uploadEnd', function (event) {
    //     var args = event.args;
    //     var fileName = args.file;
    //     var serverResponce = args.response;
    //     $("#error_noti_text")[0].textContent = serverResponce;
    //     $("#error_noti_text")[0].style.fontSize = '20px';
    //     $("#messageNotification_error").jqxNotification("open");
    //     get_bg();
    // });
    // THis is background
    var background_cha = "false";
    $("#userfile1").on("change",function(event){
        background_cha = "true";
        var _URL = window.URL;
        var file, img;
        if ((file = this.files[0])) {
            img = new Image();
            img.onload = function () {
                console.log(this.width);
                console.log(this.height);
                if(this.width != 576 || this.height!=384){
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#error_noti_text")[0].textContent = "Overlay image width is 576px and height is 384px!";
                    $("#messageNotification_error").jqxNotification("open");
                    $("#create")[0].disabled = true;
                    $("#update")[0].disabled = true;
                    // $("#up_im")[0].title = "Change your upload Image";
                    // return;
                }
                else{
                    $("#create")[0].disabled = false;
                    $("#update")[0].disabled = false;
                }
            };
            // $("#back_img")[0].onload = function(){
            //     console.log(this.width);
            //     console.log(this.height);
            //     if(this.width != 576 && this.height!=384){
            //         $("#error_noti_text")[0].style.fontSize = '20px';
            //         $("#error_noti_text")[0].textContent = "Overlay image width is 576px and height is 384px!";
            //         $("#messageNotification_error").jqxNotification("open");
            //         $("#create")[0].disabled = true;
            //         $("#update")[0].disabled = true;
            //         // $("#up_im")[0].title = "Change your upload Image";
            //         // return;
            //     }
            //     else{
            //         $("#create")[0].disabled = false;
            //         $("#update")[0].disabled = false;
            //     }
            // }
            img.src = _URL.createObjectURL(file);
            $(".img")[0].src = _URL.createObjectURL(file);
            // $(".img")[0].src = img.src;
        }
        // console.log($("#fileinput-new"));
        // $("#fileinput-new").hidden = "hidden";
        // $("#fi-ex1")[0].innerText = "Change";
        // $("#dis1")[0].style.display = 'none';
    })
    // This is overlay Image
    var overlay_cha = 'false';
    $("#userfile").on("change",function(event){
        overlay_cha = "true";
        var _URL = window.URL;
        var file, img;
        if ((file = this.files[0])) {
            img = new Image();
            img.onload = function () {
            };
            img.src = _URL.createObjectURL(file);
            $("#up_img")[0].src = img.src;
        }
        // $("#fi-ex")[0].innerText = "Change";
        $("#dis")[0].style.display = 'none';
    })
    // Business
    var bus_source =
    {
        datatype: "json",
        datafields: [
            { name: 'id' },
            { name: 'temp_num' },
            { name: 'business_name' }
        ],
        id: 'id',
        url: 'add_template/get_business_all'
    };
    var dataAdapter_bus = new $.jqx.dataAdapter(bus_source);
    $("#business_name").jqxComboBox({source: dataAdapter_bus, displayMember: "business_name", 
        valueMember: "business_name",multiSelect: false, width: "80%", height: 39, 
        placeHolder:"BUSINESS NAME",
        renderer: function (index, label, value) {

            var table = '<span>'+value+":  ("+dataAdapter_bus['loadedData'][index].temp_num+')</span>';
            return table;
        }
        
    }); 
    // End of Business

    var bg_path = "";
    var busi_name = "";
    
    var co_so = [
        "left",
        "center",
        "right"
    ]
 
    $("#combobox").jqxComboBox({ selectedIndex: 0, source: co_so, dropDownHorizontalAlignment: 'left', dropDownWidth: 140, width: "100%", height: 25});
    
    // $("#userfile").on("change",function(event){
    //     // console.log($(".fileinput-exists img")[12]);
    //     $("#dis")[0].style.display = 'none';
    // });
    var sel_ind = 0;
    var te_name = "";

    // Initial functions
    get_init();
    function get_init(){
        $(".img")[0].src= "img/Blank_Template.png";
        $("#tmp_he").val("30");
        $("#tmp_wi").val('30');
        $("#tmp_le").val("30");
        $("#tmp_to").val("30");
        $("#fo_co").val("000000");
        $("#fo_le").val("10");
        $("#fo_ri").val('10');
        $("#fo_si").val("20");
        $("#fo_to").val("10");
        $("#fo_we").val('300');
        $("#combobox").jqxComboBox('selectIndex',0);
        init_temp();
    }
    // get_data();
    get_bg();
    get_drop();
    function get_data(){
        $.ajax({
            url:'add_template/get_temp',
            method:'post',
            data:{
                sel_ind : sel_ind
            },
            dataType:'JSON',
            success:function(res){
                if(res.length > 0){
                    var items = $("#business_name").jqxComboBox('getItems');
                    for(var i = 0; i< items.length;i++){
                        if(res[0].bus_name ==items[i].value){
                            $("#business_name").jqxComboBox('selectedIndex',i); 
                        }
                    }
                    te_name = res[0].temp_name;
                    $("#tmp_wi").val(res[0].tmp_wi);
                    bg_path = res[0].bg_url;
                    $(".img")[0].src= res[0].bg_url;
                    $("#tmp_he").val(res[0].tmp_he);
                    $("#tmp_le").val(res[0].tmp_le);
                    $("#tmp_to").val(res[0].tmp_to);
                    $("#fo_co").val(res[0].fo_co);
                    $("#fo_le").val(res[0].fo_le);
                    $("#fo_ri").val(res[0].fo_ri);
                    $("#fo_si").val(res[0].fo_si);
                    $("#fo_to").val(res[0].fo_to);
                    $("#fo_we").val(res[0].fo_we);
                    
                    if(res[0].fo_al == "left"){
                        $("#combobox").jqxComboBox({selectedIndex:0});
                    }
                    if(res[0].fo_al == "center"){
                        $("#combobox").jqxComboBox({selectedIndex:1});
                    }
                    if(res[0].fo_al == "right"){
                        $("#combobox").jqxComboBox({selectedIndex:2});
                    }
                    $("#player_id").val(res[0].player_id);
                    $("#advertise_id").val(res[0].advertise_id);
                    var player_id_sta = res[0].player_id.split(',');
                    $("#locat").find('.form-check-input').each(function(){
                    // $(".form-check-input").each(function(){
                        for(var i= 0 ; i < player_id_sta.length ; i++){
                            if($(this).parent().text().trim() == player_id_sta[i]){
                                $(this)[0].checked = true;
                                return;
                            }
                            else{
                                $(this)[0].checked = false;
                            }
                        }
                    });
                    $("#contract_id").val(res[0].contract_id);
                    init_temp();
                }
                else{
                    $("#tmp_wi").val(10);
                    $(".img")[0].src= "assets/img/bg/test.jpg";
                    bg_path = "assets/img/bg/test.jpg";
                    $("#tmp_he").val(10);
                    $("#tmp_le").val(0);
                    $("#tmp_to").val(0);
                    $("#fo_co").val(0);
                    $("#fo_le").val(0);
                    $("#fo_ri").val(0);
                    $("#fo_si").val(20);
                    $("#fo_to").val(0);
                    $("#fo_we").val(100);
                    $("#combobox").jqxComboBox({selectedIndex:0});
                }
            }
        });
    }
    function get_drop(){
        var drp_source =
        {
            datatype: "json",
            data: {
                busi_sel: busi_name
            },
            datafields: [
                { name: 'id' },
                { name: 'tbl_id' },
                { name: 'temp_name' }
            ],
            id: 'id',
            url: 'add_template/get_temp_name'
        };
        // create a new instance of the jqx.dataAdapter.
        var dataAdapter_drp = new $.jqx.dataAdapter(drp_source);
        // Create a jqxDropDownList
        $("#drop").jqxDropDownList({ source: dataAdapter_drp, displayMember: "temp_name", valueMember: "tbl_id",selectedIndex:0, width: "70%", height: 40,placeHolder:"Select Template"})
        // $("#drop").jqxDropDownList('selectIndex',0)
    }
    var em_sel = 'false';
    $("#em_sel").on('change',function(){
        if($(this)[0].checked == true){
            em_sel = 'true';
        }
        else{
            em_sel = 'false';
        }
    })
    // var locat = $(".form-check-input");
    // $(".form-check-input").on('change',function(){
    //     console.log(locat);
    //     for(var i = 0; i< locat.length; i++){
    //         if(locat[i].checked == true){
    //             $("#player_id").val();
    //         } 
    //     }
    // })
    $("#locat").find('.form-check-input').each(function(){
        // $(".form-check-input").each(function(){
            $(this).on("change",function(e){
                var text = '';
                $("#locat").find(".form-check-input").each(function(){
                    text += $(this).prop("checked")==true?$(this).parent().text().trim()+",":'';
                })
                $("#player_id").val(text);
            })
        // })
    })
    $("#drop").on('change',function(event){
        var args = event.args;
        if (args) {
        // index represents the item's index.                      
            var index = args.index;
            var item = args.item;
            var value = item.value;
            sel_ind = value;
        }
        get_data();
        
    })
    $("#business_name").on('select',function(event){
        var args = event.args;
        var index = args.index;
        var item = args.item;
        var value = item.value;
        busi_name = value;
        // $("#advertise_id").val(item.originalItem.temp_num);
        $("#advertise_id").val(value);
        $("#dataTable").jqxDataTable('updateBoundData');
        get_drop();
    })
    function init_temp(){        
        $("#up_img")[0].style.width = $("#tmp_wi").val() +"px";
        $("#up_img")[0].style.height = $("#tmp_he").val() +"px";
        $("#ca_ti")[0].style.left = $("#tmp_le").val() +"px";
        $("#ca_ti")[0].style.top = $("#tmp_to").val() +"px";
        $("#ad_ti")[0].style.fontSize = $("#fo_si").val() +"px";
        $("#ad_ti")[0].style.fontWeight = $("#fo_we").val();
        $("#ad_ti")[0].style.color = $("#fo_co").val();
        $("#ad_ti")[0].style.left = $("#fo_le").val() +"px";
        $("#ad_ti")[0].style.right = $("#fo_ri").val() +"px";
        $("#ad_ti")[0].style.top = $("#fo_to").val() +"px";
        $("#ad_ti")[0].style.textAlign = $("#combobox").val();
    }
    var empty_bg = "";
    function get_bg(){
        $.ajax({
            url:'add_template/get_bg',
            method:'post',
            data:{
            },
            dataType:'JSON',
            success:function(res){
            }
        })
    }    
    var up_ty = "";
    $("#update").on('click',function(){
        up_ty = 'false';
        $("#temp_name").val(te_name);
    })
    $("#create").on('click',function(){
        up_ty = 'true';
        $("#temp_name").val("");
    })
    $("#send").click(function(){

        // var up_ty = $(".togglebutton")[0].childNodes[1].childNodes[1].checked;
        var fd = new FormData(document.getElementById('upload_form'));
        var fd_bg = new FormData(document.getElementById('upload_form1'));

        var bus_name = $("#business_name").val();

        if(bus_name == ""){
            $("#error_noti_text")[0].textContent = "Select Business Name!";
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#messageNotification_error").jqxNotification("open");
            return false;
        }
        if($("#drop").val() == "" && up_ty == 'false'){
            $("#error_noti_text")[0].textContent = "Select Template Name!";
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#messageNotification_error").jqxNotification("open");
            $("#drop").focus();
            return false;
        }
        if($("#player_id").val()==""){
            $("#error_noti_text")[0].textContent = "Select Location!";
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#messageNotification_error").jqxNotification("open");
            return false;
        }
        if($("#advertise_id").val()==""){
            $("#error_noti_text")[0].textContent = "Select Business Name!";
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#messageNotification_error").jqxNotification("open");
            return false;
        }
        if($("#contract_id").val()==""){
            $("#error_noti_text")[0].textContent = "Insert Contract ID!";
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#messageNotification_error").jqxNotification("open");
            $("#contract_id").focus();
            return false;
        }
        // if(overlay_cha == 'false'){
        //     $("#error_noti_text")[0].textContent = "Select Overlay image!";
        //     $("#error_noti_text")[0].style.fontSize = '20px';
        //     $("#messageNotification_error").jqxNotification("open");
        //     return false;
        // }
        
        fd.append('ad_con',$("#ad_ti")[0].innerText);
        fd.append('temp_id',$("#drop").val());
        fd.append('player_id',$("#player_id").val());
        fd.append('advertise_id',$("#advertise_id").val());
        fd.append('contract_id',$("#contract_id").val());

        fd.append('up_ty',up_ty);
        fd.append('background_cha',background_cha);
        if(background_cha == 'true'){
            fd.append('bg_url','assets/img/bg/'+ $("#userfile1")[0].files[0]['name']);
        }
        if(background_cha == 'false'){
            fd.append('bg_url',bg_path);
        }
        fd_bg.append('background_cha',background_cha);


        fd.append('bus_name',bus_name);
        fd.append('temp_name',$("#temp_name").val());
        fd.append('up_ind',$("#drop").val());
        fd.append('tmp_wi',$("#tmp_wi").val());
        fd.append('tmp_he',$("#tmp_he").val());
        fd.append('tmp_le',$("#tmp_le").val());
        fd.append('tmp_to',$("#tmp_to").val());
        fd.append('fo_co',$("#fo_co").val());
        fd.append('fo_le',$("#fo_le").val());
        fd.append('fo_ri',$("#fo_ri").val());
        fd.append('fo_si',$("#fo_si").val());
        fd.append('fo_to',$("#fo_to").val());
        fd.append('fo_al',$("#combobox").val());
        fd.append('fo_we',$("#fo_we").val());
        // Emergency status OK
        fd.append('em_sel',em_sel);
        $.ajax({
            url:'add_template/bg_upload',
            type:'post',
            data : fd_bg,
            processData :false,
            contentType : false,
            // dataType:'JSON',
            success:function(res){
                if(background_cha == 'true'){
                    fd.append('bg_url',res);
                }
                if(res == "Error uploading file!"){
                    $("#error_noti_text")[0].textContent = "Background file size too big or Select the image!";
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#messageNotification_error").jqxNotification("open");
                }
                if(res == "Format not allowed or file size too big!"){
                    $("#error_noti_text")[0].textContent = "Format not allowed or file size too big!";
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#messageNotification_error").jqxNotification("open");
                }
                else{
                    $.ajax({
                        // url:'update_ad/do_upload',
                        url:'add_template/save_temp',
                        // secureuri: false,
                        type:'post',
                        data : fd,
                        processData :false,
                        contentType : false,
                        // url:'add_template/save_temp',
                        // method:'post',
                        // data:{
                        // up_ty : up_ty,
                        // bg_url : $(".img")[0].src,
                        // bus_name : bus_name,
                        // temp_name : $("#temp_name").val(),
                        // up_ind : $("#drop").val(),
                        // tmp_wi : $("#tmp_wi").val(),
                        // tmp_he : $("#tmp_he").val(),
                        // tmp_le : $("#tmp_le").val(),
                        // tmp_to : $("#tmp_to").val(),
                        // fo_co : $("#fo_co").val(),
                        // fo_le : $("#fo_le").val(),
                        // fo_ri : $("#fo_ri").val(),
                        // fo_si : $("#fo_si").val(),
                        // fo_to : $("#fo_to").val(),
                        // fo_al : $("#combobox").val(),
                        // fo_we : $("#fo_we").val()
                        // },
                        dataType:'JSON',
                        success:function(res){
                            // var res = JSON.parse(res);
                            if(res == "Error uploading file!"){
                                $("#error_noti_text")[0].textContent = "file size too big or Select the image!";
                                $("#error_noti_text")[0].style.fontSize = '20px';
                                $("#messageNotification_error").jqxNotification("open");
                            }
                            else if(res == "Format not allowed or file size too big!"){
                                $("#error_noti_text")[0].textContent = "Format not allowed or file size too big!";
                                $("#error_noti_text")[0].style.fontSize = '20px';
                                $("#messageNotification_error").jqxNotification("open");
                            }
                            else{
                                // $("#ad_ti")[0].textContent = res[0].ad_con;
                                // var img_path = res.slice(16);
                                $(".close").click();
                                $("#ad_ti")[0].textContent = $('#exampleFormControlTextarea1').val();
                                $("#up_img")[0].src="assets/upload/"+res[0].cre_date+res[0].name;
                                
                                // image
                                $("#tmp_wi").val($("#up_img")[0].width);
                                $("#tmp_he").val($("#up_img")[0].height);
                                $("#tmp_le").val($("#ca_ti")[0].offsetLeft);
                                $("#tmp_to").val($("#ca_ti")[0].offsetTop);
                                $("#tmp_wi").focus();
                                $("#contract_id").val("");
                                // $("#drop").jqxDropDownList('updateBoundData');
                                $("#noti_text")[0].style.fontSize = '20px';
                                $("#noti_text")[0].textContent = "Success!";
                                $("#messageNotification").jqxNotification("open");
                                // font
                                // $("#tmp_wi").val($("#up_img")[0].width);
                                // $("#tmp_he").val($("#up_img")[0].height);
                                $("#locat").find('.form-check-input').each(function(){
                                    $(this)[0].checked = false;
                                });
                                $("#player_id").val("");
                                $("#em_sel")[0].checked = false;
                                $("#advertise_id").val("");
                                get_drop();
                                $("#dataTable").jqxDataTable('updateBoundData');
                                $("#noti_text")[0].style.fontSize = '20px';
                            }
                        }
                    })
                }
            }
        });
    })
    // $(".togglebutton").on("change",function(){
    //     if($(".togglebutton")[0].childNodes[1].childNodes[1].checked == true){
    //         $("#temp_name").val("");
    //         $(".togglebutton")[0].childNodes[1].childNodes[4].textContent= 'Create New Template';
    //     }
    //     else{
    //         $(".togglebutton")[0].childNodes[1].childNodes[4].textContent= 'Update Template';
    //         $("#temp_name").val(te_name);
    //     }
    // })
    
    $("#fo_le").val($("#ad_ti")[0].offsetLeft);
    $("#fo_to").val($("#ad_ti")[0].offsetTop);
    $("#up_im").click(function(){
        var fd = new FormData(document.getElementById('upload_form'));
        // fd.append('label','UPLOAD');
        $.ajax({
            url:'update_ad/do_upload',
            // secureuri: false,
            type:'post',
            data : fd,
            processData :false,
            contentType : false,
            // dataType:'JSON',
            success:function(res){
                if(res == "Error uploading file!"){
                    $("#error_noti_text")[0].textContent = "file size too big or Select the image!";
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#messageNotification_error").jqxNotification("open");
                }
                else if(res == "Format not allowed or file size too big!"){
                    $("#error_noti_text")[0].textContent = "Format not allowed or file size too big!";
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#messageNotification_error").jqxNotification("open");
                }
                else{
                    var res = JSON.parse(res);
                    // $("#ad_ti")[0].textContent = res[0].ad_con;
                    // var img_path = res.slice(16);
                    $(".close").click();
                    $("#ad_ti")[0].textContent = $('#exampleFormControlTextarea1').val();
                    $("#up_img")[0].src="assets/upload/"+res[0].cre_date+res[0].name;
                    
                    // image
                    $("#tmp_wi").val($("#up_img")[0].width);
                    $("#tmp_he").val($("#up_img")[0].height);
                    $("#tmp_le").val($("#ca_ti")[0].offsetLeft);
                    $("#tmp_to").val($("#ca_ti")[0].offsetTop);
                    $("#tmp_wi").focus();
                    // $("#drop").jqxDropDownList('updateBoundData');
                    $("#noti_text")[0].style.fontSize = '20px';
                    $("#noti_text")[0].textContent = "Success!";
                    $("#messageNotification").jqxNotification("open");
                    // font
                    // $("#tmp_wi").val($("#up_img")[0].width);
                    // $("#tmp_he").val($("#up_img")[0].height);
                }
            }
        });
        return false;
    })
    // Control of the template settings
    // Image

    $("#tmp_wi").keyup(function(event){
        $("#up_img")[0].style.width = $("#tmp_wi").val() +"px";
    })
    $("#tmp_he").keyup(function(event){
        $("#up_img")[0].style.height = $("#tmp_he").val() +"px";
    })
    $("#tmp_le").keyup(function(event){
        $("#ca_ti")[0].style.left = $("#tmp_le").val() +"px";
    })
    $("#tmp_to").keyup(function(event){
        $("#ca_ti")[0].style.top = $("#tmp_to").val() +"px";
    })
    // font
    $("#fo_si").keyup(function(event){
        $("#ad_ti")[0].style.fontSize = $("#fo_si").val() +"px";
    })
    $("#fo_we").keyup(function(event){
        $("#ad_ti")[0].style.fontWeight = $("#fo_we").val();
    })
    $("#fo_co").change(function(event){
        $("#ad_ti")[0].style.color = $("#fo_co").val();
    })
    $("#fo_le").keyup(function(event){
        $("#ad_ti")[0].style.left = $("#fo_le").val() +"px";
    })
    $("#fo_to").keyup(function(event){
        $("#ad_ti")[0].style.top = $("#fo_to").val() +"px";
    })
    $("#fo_ri").keyup(function(event){
        $("#ad_ti")[0].style.right = $("#fo_ri").val() +"px";
    })
    $('#combobox').on('change', function (event) 
    {
        var args = event.args;
        if (args) {
            // index represents the item's index.                          
            var index = args.index;
            var item = args.item;
            // get item's label and value.
            var label = item.label;
            // alert(label);
            $("#ad_ti")[0].style.textAlign = label;
        }
    }); 
    // End of the template settings
    $("#sh").click(function(){
        $("#dis")[0].style.display = 'inline-block';
    })
    $("#send_sugg").click(function(){
        var sugg_cont = $("#sugg_cont").val();
        $.ajax({
            url:'update_ad/insert_sug',
            method:'post',
            data:{
                sugg_cont:sugg_cont
            },
            dataType:'JSON',
            success:function(res){
                $("#sugg_cont").val("");
                $("#noti_text_sugg")[0].style.fontSize = '20px';
                $("#noti_text_sugg")[0].textContent = "Thank you for your suggestion. We appreciate the idea and the fact you spent time helping us improve this site and our services.";
                $("#messageNotification_sugg")[0].style.width = '850px';
                $("#messageNotification_sugg").jqxNotification("open");
                // alert('Success');
            }
        })
    })
    var source =
    {
        dataType: 'json',
        dataFields: [
            { name: 'id', type: 'number' },
            { name: 'tbl_id', type: 'number' },
            { name: 'bg_url', type: 'string' },
            { name: 'bus_name', type: 'string' },
            { name: 'cr_date', type: 'string' },
            { name: 'em_status', type: 'number' },
            { name: 'temp_name', type: 'string' }
        ], 
        id: 'id',
        url:'add_template/get_temp1'
    };
    var rows_det = "";
    var dataAdapter = new $.jqx.dataAdapter(source, {
        formatData: function(data) {
            data["busi_name"] = busi_name;
            return data;
        },
        loadComplete: function () {
            // $("#dataTable").jqxDataTable('getRows');

            rows_det = $("#dataTable").jqxDataTable('getRows');
            // data is loaded.
        }
    });
    $("#dataTable").jqxDataTable(
    {
        source: dataAdapter,
        width : "100%",
        pageable: true,
        altRows: true,
        editable : false,
        filterable: true,
        pagerMode: 'advanced',
        // filterMode: 'advanced',
        rendered: function () {
            if ($(".canc").length > 0) {
                $(".canc").click(function (event) {
                    var rowIndex = parseInt(event.currentTarget.getAttribute('data-row'));
                    if (isNaN(rowIndex)) {
                        return;
                    }
                    $.ajax({
                        url:'add_template/delete_temp',
                        method:'post',
                        data:{
                            tbl_id:rows_det[rowIndex].tbl_id,
                            bg_url:rows_det[rowIndex].bg_url
                        },
                        dataType:'JSON',
                        success:function(res){
                            get_bg();
                            $("#noti_text")[0].style.fontSize = '20px';
                            $("#noti_text")[0].textContent = "DELETE SUCCESS!";
                            $("#messageNotification").jqxNotification("open");
                            $("#dataTable").jqxDataTable("updateBoundData");
                        }
                    })
                    $("#dataTable").jqxDataTable('endRowEdit', rowIndex, true);
                });
            }
            if ($(".checkbox1").length > 0) {
                $(".checkbox1").change(function (event) {
                    var rowIndex = parseInt(event.currentTarget.getAttribute('data-row'));
                    if (isNaN(rowIndex)) {
                        return;
                    }
                    if(rows_det[rowIndex].em_status == 1){
                        var mark = 0;
                    }
                    if(rows_det[rowIndex].em_status == 0){
                        var mark = 1;
                    }
                    $.ajax({
                        url:'add_template/update_tem_em',
                        method:'post',
                        data:{
                            mark : mark,
                            tbl_id:rows_det[rowIndex].tbl_id
                        },
                        dataType:'JSON',
                        success:function(res){
                            $("#dataTable").jqxDataTable("updateBoundData");
                            $("#noti_text")[0].style.fontSize = '20px';
                            $("#noti_text")[0].textContent = "Emergency Status Operation Success!";
                            $("#messageNotification").jqxNotification("open");
                        }
                    })
                    $("#dataTable").jqxDataTable('endRowEdit', rowIndex, true);
                });
            }
        },
        columns: [
            { text: '', cellsAlign: 'center', align: 'center', dataField: 'id', width: "5%" ,filterable:false},
            { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'tbl_id', width: "5%" ,filterable:false},
            { text: 'Background Image', cellsAlign: 'center', align: 'center', dataField: 'bg_url', width: "29%" ,filterable:false,
                cellsRenderer: function (row, column, value, rowData) {
                    var image = "<div style='margin: 5px; margin-bottom: 3px;'>";
                    var imgurl = rowData.bg_url;
                    var img = '<img width="100%" height="200" style="display: block;" src="' + imgurl + '"/>';
                    image += img;
                    image += "</div>";
                    return image;
                }
            },
            { text: 'Template Name', cellsAlign: 'center', align: 'center', dataField: 'temp_name', width: "20%" },
            { text: 'Business Name', cellsAlign: 'center', align: 'center', dataField: 'bus_name', width: "15%" },
            { text: 'Date/Time', cellsAlign: 'center', align: 'center', dataField: 'cr_date', width: "15%" ,cellsFormat: 'd' },
            { text: 'EM', cellsAlign: 'center', align: 'center', dataField: 'em_status', width: "10%" ,
                cellsRenderer: function (row, column, value, rowData) {
                    if(rowData['em_status'] == 1){
                        var checkBox1  = "<input type = 'checkbox' checked class='checkbox1' data-row='" + row + "'>";
                        return checkBox1;
                    }
                    else{
                        var checkBox1  = "<input type = 'checkbox' class='checkbox1' data-row='" + row + "'>";
                        return checkBox1;
                    }
                }
            },
            { text: '', cellsAlign: 'center', align: 'center', dataField: '', width: "6%" ,
                renderer: function (text, align, height) {
                    // var checkBox  = "<i class='material-icons'>close</i>"
                    // return checkBox;
                },
                cellsRenderer: function (row, column, value, rowData) {
                    // console.log(rowData);
                    var checkBox  = "<span class='canc' data-row='" + row + "'><i class='material-icons' style='cursor:pointer'>close</i></span>";
                    return checkBox;
                }
            }
        ]
    });
})
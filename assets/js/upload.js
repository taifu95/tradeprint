
$(document).ready(function(){
    var body_left = 0;
    body_left = (window.innerWidth - 1200) / 2;
    $(".wrapper").css("marginLeft",body_left);
    function reportWindowSize() {
        body_left = (window.innerWidth - 1200) / 2;
        $(".wrapper").css("marginLeft",body_left);
    }
    window.onresize = reportWindowSize;
    var pageSize = 10;
    
    var max_width =  0;
    var max_height = 0;

    $("#messageNotification").jqxNotification({
        width: 550, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "success"
    });
    $("#messageNotification_sugg").jqxNotification({
        width: 850, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "success"
    });
    $("#messageNotification_error").jqxNotification({
        width: 550, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "error"
    });
    // Business
    var busi_name = "";
    var mark_dis = "false";

    $(".togglebutton").on("change",function(){
        if($(".togglebutton").find('input').prop("checked") == true){
            mark_dis = "false";
            // $("#right_text").text('Show all Ads');
            $("#right_text").css('fontWeight',600);
            $("#left_text").css('fontWeight',200);
            $("#dataTable").jqxDataTable('updateBoundData');
        }
        else{
            mark_dis = "true";
            // $("#left_text").text('Show only Activated Ads');
            $("#left_text").css('fontWeight',600);
            // $("#right_text").text('');
            $("#right_text").css('fontWeight',200);
            $("#dataTable").jqxDataTable('updateBoundData');
        }
    })
    var bus_source =
    {
        datatype: "json",
        datafields: [
            { name: 'id' },
            { name: 'temp_num' },
            { name: 'business_name' }
        ],
        id: 'id',
        url: 'add_template/get_business'
    };
    var dataAdapter_bus = new $.jqx.dataAdapter(bus_source);
    $("#business_name").jqxComboBox({source: dataAdapter_bus, displayMember: "business_name", valueMember: "business_name",
        multiSelect: false, width: "80%", height: 39, placeHolder:"BUSINESS NAME",
        renderer: function (index, label, value) {
            // console.log(dataAdapter_bus['loadedData'][index].temp_num);
            // var imgurl = '../../images/' + label.toLowerCase() + '.png';
            // var img = '<img height="50" width="45" src="' + imgurl + '"/>';
            var table = '<span>'+value+":  ("+dataAdapter_bus['loadedData'][index].temp_num+')</span>';
            return table;
        }
    }); 
    $("#business_name").on('select',function(event){
        var args = event.args;
        var index = args.index;
        var item = args.item;
        var value = item.value;
        busi_name = value;
        $("#sel_bus")[0].innerText = ": "+busi_name;
        // console.log(busi_name);
        $("#dataTable").jqxDataTable('updateBoundData');
        get_drop();
        get_chart();
        // sel_ind = value;
    })
    // End of Business
    var overlay_sta = 'false';
    $("#userfile").on("change",function(event){
        overlay_sta = 'true';
        var _URL = window.URL;
        var file, img;
        if ((file = this.files[0])) {
            img = new Image();
            img.onload = function () {
                // if(this.width > max_width || this.height>max_height){
                //     $("#error_noti_text")[0].style.fontSize = '20px';
                //     $("#error_noti_text")[0].textContent = "Overlay image width is " +max_width + " px and height is "+max_height+" px!";
                //     $("#messageNotification_error").jqxNotification("open");
                //     $("#up_im")[0].disabled = true;
                //     $("#up_im")[0].title = "Change your upload Image";
                //     // return;
                // }
                // else{
                //     $("#up_im")[0].disabled = false;
                //     $("#up_im")[0].title = "";
                // }
            };
            img.src = _URL.createObjectURL(file);
            $("#up_img")[0].src = img.src;
            $("#up_img1")[0].src = img.src;
        }
        $("#fi-ex")[0].innerText = "Change Overlay Image";
    })
    var sel_ind = 0;
    var prev_data = "";
    // Initial functions
    if($("#ul").val() == "Admin"){
        get_init();
    }
    if($("#ul").val() != "Admin"){
        get_data();
    }
    function get_init(){
        $(".img")[0].src= "img/Blank_Template.png";
        $("#up_img")[0].style.width = "30px";
        $("#up_img")[0].style.height = "30px";
        // $("#up_img")[0].style.marginLeft = "30px";
        // $("#up_img")[0].style.marginTop = "30px";
        // $("#ad_ti")[0].style.marginLeft = "0px";
        // $("#ad_ti")[0].style.marginTop = "0px";
        $("#ca_ti")[0].style.left = "30px";
        $("#ca_ti")[0].style.top = "30px";
        $("#ad_ti")[0].style.fontSize = "20px";
        $("#ad_ti")[0].style.fontWeight = "300";
        $("#ad_ti")[0].style.left = "0px";
        $("#ad_ti")[0].style.top = "0px";
        $("#ad_ti")[0].style.color = "#000000";
        $("#up_img")[0].src= "img/blank_overlay.png";

    }
    function get_data(){
        $.ajax({
            url:'add_template/get_temp',
            method:'post',
            data:{
                sel_ind : sel_ind
            },
            dataType:'JSON',
            success:function(res){
                prev_data = res;
                $('.img')[0].src = res[0].bg_url;
                $("#up_img")[0].style.width = res[0].tmp_wi +"px";
                $("#up_img")[0].style.height = res[0].tmp_he +"px";
                $("#ca_ti")[0].style.left = res[0].tmp_le +"px";
                $("#ca_ti")[0].style.top = res[0].tmp_to +"px";
                $("#ad_ti")[0].style.fontSize = res[0].fo_si +"px";
                $("#ad_ti")[0].style.fontWeight =res[0].fo_we;
                $("#ad_ti")[0].style.color = res[0].fo_co;
                $("#ad_ti")[0].style.left =res[0].fo_le +"px";
                $("#ad_ti")[0].style.right = res[0].fo_ri +"px";
                $("#ad_ti")[0].style.top = res[0].fo_to +"px";
                $("#ad_ti")[0].style.textAlign = res[0].fo_al;
                max_width = res[0].tmp_wi;
                max_height = res[0].tmp_he;
                $("#inner_Text")[0].innerText = "Your image can not be smaller than Width:" +  parseInt(res[0].tmp_wi) +"px; " + "Height:" + parseInt(res[0].tmp_he) +"px.";
                $("#up_img")[0].alt = "Width : " +  parseInt(res[0].tmp_wi) +"px; " + "Height : " + parseInt(res[0].tmp_he) +"px.";
               
               // Preview Image
                $("#up_img1")[0].style.width = res[0].tmp_wi +"px";
                $("#up_img1")[0].style.height = res[0].tmp_he +"px";
                $("#ca_ti1")[0].style.left = res[0].tmp_le +"px";
                $("#ca_ti1")[0].style.top = res[0].tmp_to +"px";
                $("#ad_ti1")[0].style.fontSize = res[0].fo_si +"px";
                $("#ad_ti1")[0].style.fontWeight =res[0].fo_we;
                $("#ad_ti1")[0].style.color = res[0].fo_co;
                $("#ad_ti1")[0].style.left =res[0].fo_le +"px";
                $("#ad_ti1")[0].style.right = res[0].fo_ri +"px";
                $("#ad_ti1")[0].style.top = res[0].fo_to +"px";
                $("#ad_ti1")[0].style.textAlign = res[0].fo_al;
               // End Of preview
            }
        });
    }
    get_drop();
    function get_drop(){
        var drp_source =
        {
            datatype: "json",
            datafields: [
                { name: 'id' },
                { name: 'tbl_id' },
                { name: 'player_id' },
                { name: 'temp_name' }
            ],
            data :{
                business_name : busi_name,
            },
            id: 'id',
            url: 'update_ad/get_temp_up'
            // url : 'add_template/get_temp_name'
        };
        // create a new instance of the jqx.dataAdapter.
        var dataAdapter_drp = new $.jqx.dataAdapter(drp_source);
        
        $("#drop").jqxDropDownList({ source: dataAdapter_drp, displayMember: "temp_name", valueMember: "tbl_id",selectedIndex:0, width: 250, height: 40})
    }
    $("#drop").on('bindingComplete', function (event) { 
        if(event.args.owner.source.loadedData.length>0){
            // $("#locat_title").text(event.args.owner.source.loadedData[0].player_id);
            var locat_arr = "";
            locat_arr  = event.args.owner.source.loadedData[0].player_id.split(',');
            var locat_str = "";
            if(locat_arr.length == 1){
                $("#top_con")[0].style.marginTop = '185px';
            }
            if(locat_arr.length == 2){
                $("#top_con")[0].style.marginTop = '210px';
            }
            if(locat_arr.length == 3){
                $("#top_con")[0].style.marginTop = '234px';
            }
            if(locat_arr.length == 4){
                $("#top_con")[0].style.marginTop = '259px';
            }
            if(locat_arr.length == 5){
                $("#top_con")[0].style.marginTop = '282px';
            }
            for(var i  = 0 ; i < locat_arr.length-1; i++){
                locat_str += "<li>"+locat_arr[i] + "</li>";
            }
            // $("#locat_title").text(locat_str);
            $("#locat_title")[0].innerHTML = locat_str;
        }
    });
    $("#drop").on('change',function(event){
        var args = event.args;
        if (args) {
        // index represents the item's index.                      
            var index = args.index;
            var item = args.item;
            var value = item.value;
            sel_ind = value;
            var locat_arr = "";
            locat_arr  = item.originalItem.player_id.split(',');
            if(locat_arr.length == 1){
                $("#top_con")[0].style.marginTop = '185px';
            }
            if(locat_arr.length == 2){
                $("#top_con")[0].style.marginTop = '210px';
            }
            if(locat_arr.length == 3){
                $("#top_con")[0].style.marginTop = '234px';
            }
            if(locat_arr.length == 4){
                $("#top_con")[0].style.marginTop = '259px';
            }
            if(locat_arr.length == 5){
                $("#top_con")[0].style.marginTop = '282px';
            }
            var locat_str = "";
            for(var i  = 0 ; i < locat_arr.length-1; i++){
                locat_str += "<li>"+locat_arr[i] + "</li>";
            }
            // $("#locat_title").text(locat_str);
            $("#locat_title")[0].innerHTML = locat_str;
        }
        get_data();
        
    })
    var imme = 'true';
    $("#imme")[0].checked= true;
    $("#imme").bind('click',function(){
        if($(this).prop('checked') == true){
            imme = 'true';
        }
        $("#effective").fadeOut('slow');
    })
    $("#manual").click('click',function(){
        if($(this).prop('checked') == true){
            imme = 'false';
        }
        $("#effective").fadeIn('slow');
    })
    var imme1 = 'true';

    $("#imme1").bind('click',function(){
        if($(this).prop('checked') == true){
            imme1 = 'true';
        }
        $("#effective1").fadeOut('slow');
    })
    $("#manual1").click('click',function(){
        if($(this).prop('checked') == true){
            imme1 = 'false';
        }
        $("#effective1").fadeIn('slow');
    })
    $("#days_week").find('.form-check-input').each(function(){
        $(this).on('change',function(e){
            var text = '';
            $("#days_week").find('.form-check-input').each(function(){
            // console.log($(this).prop('checked'));
            // console.log($(this).val());
                text += $(this).prop("checked")==true?$(this).val()+",":'';
            });
            $("#days").val(text);
        });
    })
    $("#up_im").click(function(){
        var s_ti = $("#start_time").val();
        var s_ti = s_ti.replace(" AM", "");
        var s_ti = s_ti.replace(" PM", "00");
        var e_ti = $("#end_time").val();
        var e_ti = e_ti.replace(" AM", "");
        var e_ti = e_ti.replace(" PM", "00");
        
        if(overlay_sta == 'false'){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "Select Overlay Image!";
            $("#messageNotification_error").jqxNotification("open");
            return false;
        }
        if($("#drop").val()== ""){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "Select Template!";
            $("#messageNotification_error").jqxNotification("open");
            $("#drop").focus();
            return false;
        }
        if($("#ad_con").val() == ""){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "Insert Text For Display!";
            $("#messageNotification_error").jqxNotification("open");
            $("#ad_con").focus();
            return false;
        }
        if(imme == "false"){
            if($("#days").val() == ""){
                $("#error_noti_text")[0].style.fontSize = '20px';
                $("#error_noti_text")[0].textContent = "You have to select at least one day!";
                $("#messageNotification_error").jqxNotification("open");
                return false;
            }
            if(Date.parse($("#start_date").val()) > Date.parse($("#end_date").val())){
                $("#error_noti_text")[0].style.fontSize = '20px';
                $("#error_noti_text")[0].textContent = "Select another End Date";
                $("#messageNotification_error").jqxNotification("open");
                return false;
            }
            if(Date.parse($("#start_date").val()) == Date.parse($("#end_date").val())){
                if(s_ti>=e_ti){
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#error_noti_text")[0].textContent = "Select another End Time";
                    $("#messageNotification_error").jqxNotification("open");
                    return false;
                }
            }
        }

        var fd = new FormData(document.getElementById('upload_form'));
        fd.append('ad_con',$("#ad_con").val());
        fd.append('temp',$("#drop").val());
        // Send the scheudle
        fd.append('imme',imme);
        fd.append('s_date',$("#start_date").val());
        fd.append('e_date',$("#end_date").val());
        fd.append('s_time',$("#start_time").val());
        fd.append('e_time',$("#end_time").val());
        fd.append('days',$("#days").val());
        fd.append('end_date_sta',end_date_sta);  end_date_sta      
        // Image
        fd.append('bg_url',prev_data[0].bg_url);
        fd.append('tmp_wi',prev_data[0].tmp_wi);
        fd.append('tmp_he',prev_data[0].tmp_he);
        fd.append('tmp_le',prev_data[0].tmp_le);
        fd.append('tmp_to',prev_data[0].tmp_to);
        // Text
        fd.append('fo_co',prev_data[0].fo_co);
        fd.append('fo_le',prev_data[0].fo_le);
        fd.append('fo_to',prev_data[0].fo_to);
        fd.append('fo_si',prev_data[0].fo_si);
        fd.append('fo_we',prev_data[0].fo_we);
        fd.append('fo_descr',$("#ad_con").val()); 
        fd.append('temp_label',$("#drop").jqxDropDownList('getSelectedItem').label);
         // Capture 
        // html2canvas(cap).then(function(canvas) {

        //     document.body.appendChild(canvas);
            
        //     // Get base64URL
        //     var base64URL = canvas.toDataURL('image/jpeg').replace('image/jpeg', 'image/octet-stream');
           
        //     // AJAX request
        //     $.ajax({
        //         url: 'ajaxfile',
        //         type: 'post',
        //         data: {image: base64URL},
        //         success: function(data){
        //             // console.log(data);
        //             fd.append('cap_name',data);
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
                                $("#error_noti_text")[0].style.fontSize = '20px';
                                $("#error_noti_text")[0].textContent = "file size too big or Select the image(Max Size is 300Kb)!";
                                $("#messageNotification_error").jqxNotification("open");
                            }
                            if(res == "file size too big!"){
                                $("#error_noti_text")[0].style.fontSize = '20px';
                                $("#error_noti_text")[0].textContent = "file size too big(Max Size is 300Kb)!";
                                $("#messageNotification_error").jqxNotification("open");
                            }
                            if(res == "Format not allowed or file size too big!"){
                                $("#error_noti_text")[0].style.fontSize = '20px';
                                $("#error_noti_text")[0].textContent = "Format not allowed or file size too big(Max Size is 300Kb)!";
                                $("#messageNotification_error").jqxNotification("open");
                            }
                            else{
                                var res = JSON.parse(res);
                                $("#imme")[0].checked = true;
                                $("#ad_ti")[0].textContent = "Insert Title";
                                // $("#ad_ti")[0].innerText = res[0].ad_con;
                                // console.log($("#ad_ti"));
                                $("#up_img")[0].src="assets/upload/"+res[0].cre_date + res[0].name;
                                $("#dataTable").jqxDataTable("updateBoundData");
                                $("#noti_text")[0].style.fontSize = '20px';
                                $("#noti_text")[0].textContent = 'Your Ad and its schedule has been successfully saved. It will now be included in list below';
                                $("#messageNotification").jqxNotification("open");
                            }
                        }
                    });
                    return false;
        //         }
        //     })
        // })
    })
    $("#sh").click(function(){
        $("#dis")[0].style.display = 'inline-block';
    })
    $("#send").click(function(){
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
                // $("#messageNotification_sugg")[0].style.width = '850';
                $("#noti_text_sugg")[0].textContent = 'Thank you for your suggestion. We appreciate the idea and the fact you spent time helping us improve this site and our services.';
                $("#messageNotification_sugg").jqxNotification("open");
                // alert('Success');
            }
        })
    })
    var source =
    {
        dataType: 'json',
        // data: {
        //     mark_sta: mark_dis
        // },
        dataFields: [
            { name: 'id', type: 'number' },
            { name: 'tbl_id', type: 'number' },
            { name: 'ad_name', type: 'string' },
            { name: 'name', type: 'string' },
            { name: 'cr_date', type: 'string' },
            { name: 'mark', type: 'number' },
            { name: 'descr', type: 'string' },
            { name: 'dis_date', type: 'string' },
            // get_temp_proper
            { name: 'temp_name', type: 'string' },
            { name: 'bg_url', type: 'string' },
            { name: 'tmp_wi', type: 'number' },
            { name: 'tmp_he', type: 'number' },
            { name: 'tmp_le', type: 'number' },
            { name: 'tmp_to', type: 'number' },
            { name: 'fo_si', type: 'number' },
            { name: 'fo_we', type: 'number' },
            { name: 'fo_fo_co', type: 'number' },
            { name: 'fo_le', type: 'number' },
            { name: 'fo_to', type: 'number' },
            { name: 'fo_ri', type: 'number' },
            { name: 'player_id', type: 'string' },
            { name: 'fo_al', type: 'number' },
            { name: 's_date', type: 'string' },
            { name: 'e_date', type: 'string' },
            { name: 's_time', type: 'string' },
            { name: 'cr_date', type: 'string' },
            { name: 'result_img', type: 'string' },
            { name: 'ad_name', type: 'string' },
            { name: 'weeks', type: 'string' },
            { name: 'e_time', type: 'string' },
            { name: 'num', type: 'number' },
        ], 
        id: 'id',
        url:'update_ad/get_add'
    };
    var rows_det = "";
    var dataAdapter = new $.jqx.dataAdapter(source, {
        formatData: function(data) {
            data["mark_sta"] = mark_dis;
            data["busi_name"] = busi_name;
            return data;
        },
        loadComplete: function () {
            // $("#dataTable").jqxDataTable('getRows');
            rows_det = $("#dataTable").jqxDataTable('getRows');
            // data is loaded.
   //          if($("#ul").val() == "Primary TA" || $("#ul").val() == "Secondary TA"){
			// 	$("#dataTable").jqxDataTable('hideColumn','dd');
			// 	$("#dataTable").jqxDataTable('setColumnProperty', 'descr', 'width', "20%");
			// }
        }
    });
    // Inner HTML
    var ordersSource1 =
    {
        dataType: 'json',
        dataFields: [
            { name: 'id', type: 'number' },
            { name: 'tbl_id', type: 'number' },
            { name: 's_date', type: 'string' },
            { name: 'e_date', type: 'string' },
            { name: 's_time', type: 'string' },
            { name: 'cr_date', type: 'string' },
            { name: 'ad_name', type: 'string' },
            { name: 'result_img', type: 'string' },
            { name: 'weeks', type: 'string' },
            { name: 'e_time', type: 'string' }
        ], 
        root: "Orders",
        record: "Order",
        id: 'id',
        async: false,
        url:'update_ad/get_add'
    };
    var ordersDataAdapter1 = new $.jqx.dataAdapter(ordersSource1, { autoBind: true });
    orders1 = ordersDataAdapter1.loadedData;
    var nestedTables = new Array();
    var initRowDetails1 = function (id, row, element, rowinfo) {
        element.append($("<div style='margin: 10px;'></div>"));
        var nestedDataTable = $(element.children()[0]);
        var filterGroup = new $.jqx.filter();
        var filter_or_operator = 1;
        var filterValue = id;
        var filterCondition = 'equal';
        var filter = filterGroup.createfilter('stringfilter', filterValue, filterCondition);
        // fill the orders depending on the id.
        var ordersbyid = [];
        for (var m = 0; m < orders1.length; m++) {
            // var result = filter.evaluate(orders[m]["user_id"]);
            if (row.tbl_id == orders1[m]["tbl_id"])
                ordersbyid.push(orders1[m]);
        }
        var ordersSource1 = { dataFields: [
            { name: 'id', type: 'number' },
            { name: 'tbl_id', type: 'number' },
            { name: 's_date', type: 'string' },
            { name: 'e_date', type: 'string' },
            { name: 's_time', type: 'string' },
            { name: 'cr_date', type: 'string' },
            { name: 'result_img', type: 'string' },
            { name: 'ad_name', type: 'string' },
            { name: 'e_time', type: 'string' }
        ],
            id: 'OrderID',
            localdata: ordersbyid
        }
        if (nestedDataTable != null) {
            var nestedDataTableAdapter = new $.jqx.dataAdapter(ordersSource1);
            nestedDataTable.jqxDataTable({
                // pageable: true,
                source: nestedDataTableAdapter, width: "97%", height: "200px",
                columns: [
                    { text: '', cellsAlign: 'center', align: 'center', dataField: 'id', width: "5%" ,filterable:false},
                    { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'tbl_id', width: "5%" ,filterable:false},
                    { text: 'Start_date', cellsAlign: 'center', align: 'center', dataField: 's_date', width: "15%" },
                    { text: 'Start_time', cellsAlign: 'center', align: 'center', dataField: 's_time', width: "15%" },
                    { text: 'End_date', cellsAlign: 'center', align: 'center', dataField: 'e_date', width: "15%" },
                    { text: 'End_time', cellsAlign: 'center', align: 'center', dataField: 'e_time', width: "20%" },
                    { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'cr_date', width: "5%" ,filterable:false},
                    { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'ad_name', width: "5%" ,filterable:false},
                    { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'result_img', width: "5%" ,filterable:false},
                    { text: 'Converted Image', cellsAlign: 'center', align: 'center', dataField: '', width: "30%" ,filterable:false,
                        cellsRenderer: function (row, column, value, rowData) {
                            var image = "<div style='margin: 5px; margin-bottom: 3px;'>";
                            var imgurl = rowData.result_img;
                            var img = '<img width="100%" height="130" style="display: block;" src="' + imgurl + '"/>';
                            image += img;
                            image += "</div>";
                            return image;
                        }
                    },
                ]
            });
            // store the nested Data Tables and use the Employee ID as a key.
            nestedTables[id] = nestedDataTable;
        }
    }
    // End of 
    var up_id = 0;
    var up_manual = 'false';
    $("#dataTable").jqxDataTable(
    {
        source: dataAdapter,
        width : "100%",
        pageable: true,
        altRows: true,
        editable : false,
        filterable: true,
        // initRowDetails: initRowDetails1,
        // rowDetails: true,
        pagerMode: 'advanced',
        // groups: ['id'],
        // groupsRenderer: function(value, rowData, level)
        // {
        //     console.log(rowData.data);
        //     return "Location: " + rowData.data.player_id;
        // },
        // filterMode: 'advanced',
        rendered: function () {
            if ($(".canc").length > 0) {
                $(".canc").click(function (event) {
                    var rowIndex = parseInt(event.currentTarget.getAttribute('data-row'));
                    if (isNaN(rowIndex)) {
                        return;
                    }
                    $.ajax({
                        url:'update_ad/delete_mark',
                        method:'post',
                        data:{
                            tbl_id:rows_det[rowIndex].tbl_id
                        },
                        dataType:'JSON',
                        success:function(res){
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
                    if(rows_det[rowIndex].temp_name == "Primary Ad"){
                        $(this)[0].checked = true;
                        $("#error_noti_text")[0].textContent = "You cann't change the Primary Ad Activation!";
                        $("#error_noti_text")[0].style.fontSize = '20px';
                        $("#messageNotification_error").jqxNotification("open");
                        return;
                    }
                    if(rows_det[rowIndex].mark == 1){
                        if(rows_det[rowIndex].num == 1 && rows_det[rowIndex].e_date == ""){
                            $(this)[0].checked = true;
                            $("#error_noti_text")[0].textContent = "You have at least one Immediately schedule!";
                            $("#error_noti_text")[0].style.fontSize = '20px';
                            $("#messageNotification_error").jqxNotification("open");
                            return;
                        }
                        else{
                            var mark = 0;
                        }
                    }
                    if(rows_det[rowIndex].mark == 0){
                        var mark = 1;
                    }
                    // console.log(rows_det[rowIndex].mark);
                    $.ajax({
                        url:'update_ad/update_mark',
                        method:'post',
                        data:{
                            mark : mark,
                            tbl_id:rows_det[rowIndex].tbl_id
                        },
                        dataType:'JSON',
                        success:function(res){
                            $("#noti_text")[0].style.fontSize = '20px';
                            if(rows_det[rowIndex].mark == 0){
                                $("#noti_text")[0].textContent = "Successful Activation";
                            }
                            else{
                                $("#noti_text")[0].textContent = "You have removed this Ad from Activated list";
                            }
                            $("#messageNotification").jqxNotification("open");
                            $("#dataTable").jqxDataTable("updateBoundData");
                        }
                    })
                    get_chart();
                    $("#dataTable").jqxDataTable('endRowEdit', rowIndex, true);
                });
            }
            if ($(".edit").length > 0) {
                $(".edit").on('click',function (event) {
                    var rowIndex = parseInt(event.currentTarget.getAttribute('data-row'));
                    if (isNaN(rowIndex)) {
                        return;
                    }
                    if($("#u_level").val()!= "Admin"){
                        if(rows_det[rowIndex].temp_name == "Primary Ad"){
                            $("#error_noti_text")[0].textContent = "You cann't edit the Primary Ad!";
                            $("#error_noti_text")[0].style.fontSize = '20px';
                            $("#messageNotification_error").jqxNotification("open");
                            return;
                        }
                    }
                    up_id = rows_det[rowIndex].tbl_id;
                    $("#manual1")[0].disabled = false;        
                    if(rows_det[rowIndex].s_date!= ""){
                        up_manual = "true";
                        $("#manual1").click();
                        $("#start_date1").jqxDateTimeInput('setDate',new Date(rows_det[rowIndex].s_date));
                        $("#end_date1").jqxDateTimeInput('setDate',new Date(rows_det[rowIndex].e_date));
                        $("#start_time1").jqxDropDownList('selectItem', rows_det[rowIndex].s_time ); 
                        $("#end_time1").jqxDropDownList('selectItem', rows_det[rowIndex].e_time ); 
                        if(rows_det[rowIndex].e_date == ""){
                            $("#end_date1").jqxDateTimeInput('setDate',new Date());
                            $("#no_end1")[0].checked  = true;
                            end_date_sta1 = 'false';
                            $("#hid_date1").css('display','none');
                            $("#end_date1").css('display','none');
                            $("#hid_time1").css('display','none');
                            $("#end_time1").css('display','none');
                        }
                        if(rows_det[rowIndex].weeks != ""){
                            var week_arr = rows_det[rowIndex].weeks.split(',');
                            for(var i = 0; i< week_arr.length-1 ; i++){
                                $("#days_week1").find('.form-check-input')[week_arr[i]-1].checked = true;
                                $("#days1").val(rows_det[rowIndex].weeks);
                            }
                        }
                        if(rows_det[rowIndex].weeks == ""){
                            $("#days_week1").find('.form-check-input').each(function(){
                                $(this)[0].checked = false;                            
                                $("#days1").val("");
                            });
                        }
                    }
                    if(rows_det[rowIndex].s_date == ""){
                        if(rows_det[rowIndex].num == '1' && rows_det[rowIndex].mark == '1'){
                            $("#manual1")[0].disabled = true;
                        }
                        $("#imme1").click();
                        up_manual = "false";

                        $("#start_date1").jqxDateTimeInput('setDate',new Date());
                        $("#end_date1").jqxDateTimeInput('setDate',new Date());
                        $("#start_time1").jqxDropDownList('selectIndex', 0 ); 
                        $("#end_time1").jqxDropDownList('selectIndex', 0 ); 
                        $("#days_week1").find('.form-check-input').each(function(){
                            $(this)[0].checked = false;
                        });
                        
                    }
                    $("#edit_sch").click();
                    // $.ajax({
                    //     url:'update_ad/update_mark',
                    //     method:'post',
                    //     data:{
                    //         mark : mark,
                    //         tbl_id:rows_det[rowIndex].tbl_id
                    //     },
                    //     dataType:'JSON',
                    //     success:function(res){
                    //         $("#noti_text")[0].style.fontSize = '20px';
                    //         if(rows_det[rowIndex].mark == 0){
                    //             $("#noti_text")[0].textContent = "Successful Activation";
                    //         }
                    //         else{
                    //             $("#noti_text")[0].textContent = "You have removed this Ad from Activated list";
                    //         }
                    //         $("#messageNotification").jqxNotification("open");
                    //         $("#dataTable").jqxDataTable("updateBoundData");
                    //     }
                    // })
                    $("#dataTable").jqxDataTable('endRowEdit', rowIndex, true);
                });
            }
            if ($(".img_modal").length > 0) {
                $(".img_modal").on('click',function (event) {
                    var rowIndex = parseInt(event.currentTarget.getAttribute('data-row'));
                    if (isNaN(rowIndex)) {
                        return;
                    }
                    // console.log()
                    $("#pr_bg1")[0].src = rows_det[rowIndex].result_img;
                    $("#preview_list").click();
                    $("#dataTable").jqxDataTable('endRowEdit', rowIndex, true);
                });
            }
        },
        columnGroups: 
        [
            { text: 'Template Used', align: 'center', name: 'OrderDetails' },
            { text: 'Ad Text', align: 'center', name: 'OrderDetails1' },
            { text: 'Agent', align: 'center', name: 'OrderDetails2' },
            { text: 'Created', align: 'center', name: 'OrderDetails3' }
        ],
        columns: [
            { text: '', cellsAlign: 'center', align: 'center', dataField: 'id', width: "5%" ,filterable:false},
            { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'tbl_id', width: "5%" ,filterable:false},
            { text: 'Template Used', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'temp_name', width: "5%" ,filterable:true},
            { text: 'descr', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'descr', width: "5%" ,filterable:false},
            { text: 's_time', cellsAlign: 'center', align: 'center',hidden:true, dataField: 's_time', width: "5%" ,filterable:false},
            { text: 'Created', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'dis_date', width: "5%" ,filterable:true},
            { text: 'e_time', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'e_time', width: "5%" ,filterable:false},
            { text: 'Weekdays', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'weeks', width: "5%" ,filterable:false},
            { text: 'num', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'num', width: "5%" ,filterable:false},
            { text: 'Billboard Location(s)', cellsAlign: 'left', align: 'center', dataField: 'player_id', width: "21%" ,columngroup: 'OrderDetails',
                cellsRenderer: function (row, column, value, rowData) {
                    var container = '<div style="width: 100%; height: 130px;">'
                    var leftcolumn = '<div style="float: left; width: 100%;height:55px">';
            
                    if(rowData.player_id != ""){
                        var firstname = "<div style='margin: 10px;height:60%'>" + rowData.temp_name + "</div>";
                        var lastname = "<div style='border-top:1px solid #ddd;height:5px'></div><div style='margin-top: 10px;margin:0.3125rem 1px;font-size:.75rem;Background-color:grey;padding:10px 20px ;color:white'>"+
                                        "" + rowData.player_id + "</div>";
                    }
                    else{
                        var firstname = "<div style='margin: 10px;height:60%'>" + rowData.temp_name + "</div>";
                        var lastname = "<div style='margin-top: 20px;border-top:1px solid #ddd;color:#00acc1'></div>";
                    }
                    leftcolumn += firstname;
                    leftcolumn += lastname;
                    leftcolumn += "</div>";
                    container += leftcolumn;
                    container += "</div>";
                    return container;
                }
            },
            { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'result_img', width: "5%" ,filterable:false},
            { text: 'Ad Image', cellsAlign: 'center', align: 'center', dataField: '', width: "20%" ,filterable:false,
                cellsRenderer: function (row, column, value, rowData) {
                    var image = "<div style='margin: 5px; margin-bottom: 3px;' class='img_modal' style='' data-row='" + row + "'>";
                    var imgurl = rowData.result_img;
                    var img = '<img width="100%" height="130" style="display: block;color:#00acc1;cursor:pointer" src="' + imgurl + '"  data-row="' + row + '"/>';
                    image += img;
                    image += "</div>";
                    return image;
                }
            },
            // { text: 'Background Image', cellsAlign: 'center', align: 'center', dataField: 'bg_url', width: "20%" ,filterable:false,
            //     cellsRenderer: function (row, column, value, rowData) {
            //         var image = "<div style='margin: 5px; margin-bottom: 3px;'>";
            //         var imgurl = rowData.bg_url;
            //         var img = '<img width="100%" height="130" style="display: block;" src="' + imgurl + '"/>';
            //         image += img;
            //         image += "</div>";
            //         return image;
            //     }
            // },
            // { text: 'Overlay Image', cellsAlign: 'center', align: 'center', dataField: 'ad_name', width: "13%" ,filterable:false,
            //     cellsRenderer: function (row, column, value, rowData) {
            //         var image = "<div style='margin: 5px; margin-bottom: 3px;'>";
            //         var imgurl = 'assets/upload/' + rowData.cr_date+rowData.ad_name;
            //         var img = '<img width="100%" height="100" style="display: block;" src="' + imgurl + '"/>';
            //         image += img;
            //         image += "</div>";
            //         return image;
            //     }
            // },
            { text: 'Start Date | Start Time', cellsAlign: 'left', align: 'center', dataField: 's_date', width: "15%",columngroup: 'OrderDetails1',filterable:false,
                cellsRenderer: function (row, column, value, rowData) {
                    var container = '<div style="width: 100%; height: 130px;">'
                    var leftcolumn = '<div style="float: left; width: 100%; height: 55px">';
            
                    var firstname = "<div style='margin: 10px;height:60%'>" + rowData.descr + "</div>";
                    if(rowData.s_date != ""){
                        var lastname = "<div style='margin-top: 20px;border-top:1px solid #ddd;color:#00acc1'>"+
                                        "<button class='btn btn-success' style='width:48%;padding:12px 12px 12px 5px;Background-color:grey'>" + rowData.s_date + "</button>"+
                                        "<button class='btn btn-success' style='width:48%;padding:12px 12px 12px 0px;Background-color:grey'> "+ rowData.s_time + "</button>"+
                                        "</div>";
                    }
                    else{
                        var event = new Date(rowData.dis_date);
                        var month = event.getMonth() + 1;
                        var new_disdate = month + '/'  + event.getDate() + '/' +  event.getFullYear()  ;
                        var lastname = "<div style='margin-top: 20px;border-top:1px solid #ddd;color:#00acc1'>"+
                                        "<button class='btn btn-success' style='width:48%;padding:12px 12px 12px 5px;Background-color:grey'>" + new_disdate + "</button>"+
                                        "<button class='btn btn-success' style='width:48%;padding:12px 12px 12px 0px;Background-color:grey'> 12 AM</button>"+
                                         "</div>";
                    }
                    leftcolumn += firstname;
                    leftcolumn += lastname;
                    leftcolumn += "</div>";
                    container += leftcolumn;
                    container += "</div>";
                    return container;
                }
            },
            { text: 'End Time | End Date', cellsAlign: 'left', align: 'center', dataField: 'e_date', width: "15%" ,cellsFormat: 'd' ,columngroup: 'OrderDetails3',filterable:false,
                cellsRenderer: function (row, column, value, rowData) {
                    var container = '<div style="width: 100%; height: 130px;">'
                    var leftcolumn = '<div style="float: left; width: 100%; height: 55px">';
            
                    var firstname = "<div style='margin: 10px; height: 60%'>" + rowData.dis_date + "</div>";
                    if(rowData.e_date != ""){
                        var lastname = "<div style='margin-top: 20px;border-top:1px solid #ddd;color:#00acc1'>" +
                                        "<button class='btn btn-success' style='width:48%;padding:12px 12px 12px 5px;Background-color:grey'>" + rowData.e_time + "</button>"+
                                        "<button class='btn btn-success' style='width:48%;padding:12px 12px 12px 0px;Background-color:grey'> "+rowData.e_date+"</button>"+
                                        "</div>";
                                        // "<button class='btn btn-success' style='width:100%;Background-color:grey'>" + rowData.e_time + " "+rowData.e_date + " </button></div>";
                    }
                    else{
                         var lastname = "<div style='margin-top: 20px;border-top:1px solid #ddd;color:#00acc1'>" +
                                        "<button class='btn btn-success' style='width:48%;padding:12px 12px 12px 5px;Background-color:grey'>12 AM</button>"+
                                        "<button class='btn btn-success' style='width:48%;padding:12px 12px 12px 0px;Background-color:grey'>No End Date</button>"+
                                        "</div>";
                                    // "<button class='btn btn-success' style='width:100%;Background-color:grey'>No End Date</button></div>";
                    }
                
                    leftcolumn += firstname;
                    leftcolumn += lastname;
                    leftcolumn += "</div>";
                    container += leftcolumn;
                    container += "</div>";
                    return container;
                }
            },
            { text: 'Weekdays', cellsAlign: 'left', align: 'center', dataField: 'name', width: "12%",columngroup: 'OrderDetails2',filterable:false,
                cellsRenderer: function (row, column, value, rowData) {
                    var w_array = [];
                    var w_str= '';
                    w_array  = rowData.weeks.split(',');
                    for(var i = 0; i< w_array.length ; i++){
                        if(w_array[i] == 1){
                            w_str += 'Mo,';
                        }
                        if(w_array[i] == 2){
                            w_str += 'Tu,';
                        }
                        if(w_array[i] == 3){
                            w_str += 'We,';
                        }
                        if(w_array[i] == 4){
                            w_str += 'Th,';
                        }
                        if(w_array[i] == 5){
                            w_str += 'Fr,';
                        }
                        if(w_array[i] == 6){
                            w_str += 'Sa,';
                        }
                        if(w_array[i] == 7){
                            w_str += 'Su,';
                        }
                    }
                    var container = '<div style="width: 100%; height: 130px;">'
                    var leftcolumn = '<div style="float: left; width: 100%;height:55px;">';
                
                    var firstname = "<div style='margin: 10px;height:60%'>" + rowData.name + "</div>";
                    if(w_str != ""){
                        var lastname = "<div style='padding-top:2px;border-top:1px solid #ddd;margin-top:20px'><div style='box-shadow:0 2px 2px 0 rgba(76, 175, 80, 0.14), 0 3px 1px -2px rgba(76, 175, 80, 0.2), 0 1px 5px 0 rgba(76, 175, 80, 0.12);border-radius:0.2rem;margin-top: 4px;padding-top:5px;font-size:.75rem;Background-color:grey;padding:10px 0px 15px 5px ;color:white;text-align:center'>"+
                                        "" + w_str + "</div></div>";
                    }
                    else{
                        var lastname = "<div style='padding-top:2px;border-top:1px solid #ddd;margin-top:20px'><div style='box-shadow:0 2px 2px 0 rgba(76, 175, 80, 0.14), 0 3px 1px -2px rgba(76, 175, 80, 0.2), 0 1px 5px 0 rgba(76, 175, 80, 0.12);border-radius:0.2rem;margin-top: 4px;min-height:40px;height100%;padding-top:5px;font-size:.75rem;Background-color:grey;padding:10px 10px 10px 30px ;color:white'>Every Day</div></div>";
                    }
                    // if(w_str != ""){
                    //     var lastname = "<div style='margin-top: 20px;border-top:1px solid #ddd;color:#00acc1'>" +
                    //                     "<button class='btn btn-success' style='width:100%'>" +w_str +"</button></div>";
                    // }
                    // else{
                    //     var lastname = "<div style='margin-top: 20px;border-top:1px solid #ddd;color:#00acc1'></div>";
                    // }
                
                    leftcolumn += firstname;
                    leftcolumn += lastname;
                    leftcolumn += "</div>";
                    container += leftcolumn;
                    container += "</div>";
                    return container;
                }
            },
            { text: 'Date/Time', cellsAlign: 'left', align: 'center', dataField: 'cr_date', width: "15%" ,cellsFormat: 'd' ,hidden : true,filterable:false},
            { text: 'Activate', cellsAlign: 'center', align: 'center', dataField: 'mark', width: "6%" ,filterable:false,
                cellsRenderer: function (row, column, value, rowData) {
                    if(rowData['mark'] == 1){
                        var checkBox1  = "<input type = 'checkbox' checked class='checkbox1' data-row='" + row + "'>";
                        return checkBox1;
                    }
                    else{
                        var checkBox1  = "<input type = 'checkbox' class='checkbox1' data-row='" + row + "'>";
                        return checkBox1;
                    }
                }
            },
            { text: '', cellsAlign: 'center', align: 'center', dataField: 'dd', width: "6%" ,
                renderer: function (text, align, height) {
                    // var checkBox  = "<i class='material-icons'>close</i>"
                    // return checkBox;
                },
                cellsRenderer: function (row, column, value, rowData) {
                    // console.log(rowData);
                    if($("#u_level").val() == "Admin"){
                        var checkBox  = "<span class='edit' data-row='" + row + "'><i class='material-icons' style='cursor:pointer;'>edit</i></span>"+
                                            "<span class='canc' data-row='" + row + "'><i class='material-icons' style='cursor:pointer'>close</i></span>";
                        return checkBox;
                    }
                    else{
                        var checkBox  = "<span class='edit' data-row='" + row + "'><i class='material-icons' style='cursor:pointer;'>edit</i></span>";                                          
                        return checkBox;
                    }
                }
            }

        ]
    });
    $("#days_week1").find('.form-check-input').each(function(){
        $(this).on('change',function(e){
            var text1 = '';
            $("#days_week1").find('.form-check-input').each(function(){
                text1 += $(this).prop("checked")==true?$(this).val()+",":'';
            });
            $("#days1").val(text1);
        });
    })
    $("#manual1").click(function(){
        up_manual = "true";        
    })
    $("#imme1").click(function(){
        up_manual = "false";        
    })
    $("#update").click(function(){
        if(up_manual == "true" && $("#days1").val() == ""){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "You have to select at least one day!";
            $("#messageNotification_error").jqxNotification("open");
            return false;
        }
        $.ajax({
            url:'update_ad/update_sch',
            method:'post',
            data:{
                tbl_id : up_id,
                up_manual : up_manual,
                s_date:$("#start_date1").val(),
                e_date:$("#end_date1").val(),
                s_time:$("#start_time1").val(),
                e_time:$("#end_time1").val(),
                days : $("#days1").val(),
                end_date_sta1 : end_date_sta1
            },
            dataType:'JSON',
            success:function(res){
                $("#noti_text")[0].style.fontSize = '20px';
                $("#noti_text")[0].textContent = "Update Schedule Success.";
                $("#messageNotification").jqxNotification("open");
                $("#dataTable").jqxDataTable('updateBoundData');
            }
        })
    })
    $("#disp").click(function(){
        $.ajax({
            url:'update_ad/create_xml',
            method:'post',
            dataType:'JSON',
            success:function(res){
                $("#noti_text")[0].style.fontSize = '20px';
                $("#noti_text")[0].textContent = "Your Activated Ad(s) will be delivered to INEX Billboards.";
                $("#messageNotification").jqxNotification("open");
                $("#dataTable").jqxDataTable("updateBoundData");
            }
        })
    })
    var cap = document.getElementById('cap_body');
    $("#preview").click(function(){
        if(overlay_sta == 'false'){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "Select Overlay Image!";
            $("#messageNotification_error").jqxNotification("open");
            return false;
        }
        if($("#ad_con").val() == ""){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "Insert Text for display!";
            $("#messageNotification_error").jqxNotification("open");
            $("#ad_con").focus();
            return false;
        }
        if(prev_data.length == 0){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "Select Business or Template";
            $("#messageNotification_error").jqxNotification("open");
            return false;
        }
        // $("#ad_ti1").text($("#ad_con").val());
        $("#ad_ti1").css('display','none');
        var fd = new FormData(document.getElementById('upload_form'));
        // console.log(prev_data[0]);

        fd.append('temp',$("#drop").val());
        // Image
        fd.append('bg_url',prev_data[0].bg_url);
        fd.append('tmp_wi',prev_data[0].tmp_wi);
        fd.append('tmp_he',prev_data[0].tmp_he);
        fd.append('tmp_le',prev_data[0].tmp_le);
        fd.append('tmp_to',prev_data[0].tmp_to);
        // Text
        fd.append('fo_co',prev_data[0].fo_co);
        fd.append('fo_le',prev_data[0].fo_le);
        fd.append('fo_to',prev_data[0].fo_to);
        fd.append('fo_si',prev_data[0].fo_si);
        fd.append('fo_we',prev_data[0].fo_we);
        fd.append('fo_al',prev_data[0].fo_al);

        fd.append('fo_descr',$("#ad_con").val()); 
        // Capture 
        // html2canvas(cap).then(function(canvas) {

        //     document.body.appendChild(canvas);
            
        //     // Get base64URL
        //     var base64URL = canvas.toDataURL('image/jpeg').replace('image/jpeg', 'image/octet-stream');
           
        //     // AJAX request
        //     $.ajax({
        //         url: 'ajaxfile',
        //         type: 'post',
        //         data: {image: base64URL},
        //         success: function(data){
        //             // console.log(data);
        //             fd.append('cap_name',data);
                    $.ajax({
                        url:'update_ad/prev_ad',
                        // secureuri: false,
                        type:'post',
                        data : fd,
                        processData :false,
                        contentType : false,
                        // dataType:'JSON',
                        success:function(res){
                            if(res == "Error uploading file!"){
                                $("#error_noti_text")[0].style.fontSize = '20px';
                                $("#error_noti_text")[0].textContent = "file size too big or Select the image(Max Size is 9MB)!";
                                $("#messageNotification_error").jqxNotification("open");
                            }
                            if(res == "file size too big!"){
                                $("#error_noti_text")[0].style.fontSize = '20px';
                                $("#error_noti_text")[0].textContent = "file size too big(Max Size is 9MB)!";
                                $("#messageNotification_error").jqxNotification("open");
                            }
                            if(res == "Format not allowed or file size too big!"){
                                $("#error_noti_text")[0].style.fontSize = '20px';
                                $("#error_noti_text")[0].textContent = "Format not allowed or file size too big(Max Size is 9MB)!";
                                $("#messageNotification_error").jqxNotification("open");
                            }
                            else{
                                // var res = JSON.parse(res);
                                $('#pr_bg')[0].src = res;
                                $("#up_img1").css('display','none');
                                $("#prev_test").click();
                            }
                        }
                    })
        //         }
        //     });
        // });
        // End of Capture
        
    })
    $("#pre_close").click(function(){
        $('#pr_bg')[0].src = "";        
    })
    var end_date_sta = 'true';
    var end_date_sta1 = 'true';
    $("#no_end").change(function(e){
        if($(this)[0].checked== true){
            end_date_sta = 'false';
            // $("#hid_date").css('display','none');
            // $("#end_date").css('display','none');
            // $("#hid_time").css('display','none');
            // $("#end_time").css('display','none');
        }
        else{
            end_date_sta = 'true';
            // $("#hid_date").css('display','block');
            // $("#end_date").css('display','block');
            // $("#hid_time").css('display','block');
            // $("#end_time").css('display','block');
        }
    })
    $("#no_end1").change(function(e){
        if($(this)[0].checked== true){
            end_date_sta1 = 'false';
            $("#hid_date1").css('display','none');
            $("#end_date1").css('display','none');
            $("#hid_time1").css('display','none');
            $("#end_time1").css('display','none');
        }
        else{
            end_date_sta1 = 'true';
            $("#hid_date1").css('display','block');
            $("#end_date1").css('display','block');
            $("#hid_time1").css('display','block');
            $("#end_time1").css('display','block');
        }
    })
    // Get Chart Data
    var hour_c = 'false';
    var week_c = 'false';
    $("#hour_c").click(function(){
        hour_c = 'true';
        week_c = 'false';
        $("#sch_today").css('display','block');
        get_chart();
    })
    $("#week_c").click(function(){
        $("#sch_today").css('display','block');
        // $("#sch_today").css('display','none');
        hour_c = 'false';
        week_c = 'true';
        get_chart();
    })
    $("#daily_c").click(function(){
        $("#sch_today").css('display','none');
        hour_c = 'false';
        week_c = 'false';
        get_chart();
    })
    var event_d = new Date();//Hourly Today
    var today = new Date();//Weeekly Today
    $("#sch_today").jqxDateTimeInput({ width: '100%', height: '25px',formatString: "MM/dd/yyyy" });
    $('#sch_today').on('change', function (event) 
    {  
        var jsDate = event.args.date; 
        var type = event.args.type; // keyboard, mouse or null depending on how the date was selected.
        // console.log(jsDate);
        event_d = jsDate;
        today = jsDate;
        // hour_c = 'true';
        get_chart();        
    }); 
    get_chart();
    function get_chart(){
        $.ajax({
            url:'update_ad/get_add',
            // method:'post',
            data:{
                mark_sta : mark_dis,
                busi_name : busi_name
            },
            dataType:'JSON',
            success:function(res){
                var c_dis = [];
                var c_temp = [];
                var c_num = [];
                var j = 0;
                if(hour_c == 'true'){
                    var month = event_d.getMonth() + 1;
                    hour_title_date = month +'/'+ event_d.getDate() + '/' + event_d.getFullYear();
                    hour_title = 'Current Activated Ad Schedule by Hour on '+ hour_title_date;
                    for(var i = 0; i < res.length ; i++){
                        if(res[i].mark == "1"){
                            c_temp = [];
                            var new_disdate = event_d.getFullYear() +','+ month+',30';
                            // c_temp.push(res[i].temp_name);
                            var temp_dis = new Object();
                            var s_utcDate = new Date(res[i].c_sdate);                    
                            if(res[i].e_date == ""){
                                // var e_utcDate = new Date(new_disdate);
                                var e_utcDate = new Date('2099,11,31');
                            }
                            if(res[i].e_date != ""){
                                var e_utcDate = new Date(res[i].c_edate);
                            }
                            // if((Date.parse(s_utcDate)<=Date.parse(event_d) && Date.parse(event_d) <= Date.parse(e_utcDate)+86400000) || (Date.parse(s_utcDate)<=Date.parse(event_d) && Date.parse(s_utcDate) == Date.parse(e_utcDate))){
                            if(Date.parse(s_utcDate)<=Date.parse(event_d) && Date.parse(event_d) <= Date.parse(e_utcDate)+56400000){
                                
                                if(res[i].cs_time == ""){
                                    c_temp.push(parseInt("0"));
                                }
                                if(res[i].cs_time != ""){
                                    c_temp.push(parseInt(res[i].cs_time));                              
                                }
                                if(res[i].ce_time == ""){
                                    c_temp.push(parseInt("24"));
                                }
                                if(res[i].ce_time != ""){
                                    c_temp.push(parseInt(res[i].ce_time));                              
                                }
                                // temp_dis.x2 = res[i].ce_time;
                                // c_temp.push(parseInt(res[i].ce_time));
                                var ind = i+1;
                                c_num.push("Ad " + ind);
                                c_dis.push(c_temp);
                                j++;
                            }
                        }
                    }
                    // hour_c = 'false';
                    Highcharts.chart('sch_chart', {
                        chart: {
                            type: 'columnrange',
                            inverted: true
                        },

                        title: {
                            text: hour_title
                        },

                        subtitle: {
                            text: ''
                        },

                        xAxis: {
                            categories: c_num,

                        },

                        yAxis: {
                            title: {
                                text: 'Hourly'
                            },
                            min: 0,
                            max: 24
                        },

                        tooltip: {
                            valueSuffix: ''
                        },

                        plotOptions: {
                            columnrange: {
                                dataLabels: {
                                    enabled: true,
                                    format: '{y}'
                                }
                            }
                        },

                        legend: {
                            enabled: false
                        },

                        series: [{
                            name: 'Hours',
                            data: c_dis,
                            dataLabels: {
                                enabled: true
                            }
                        }]
                    });
                }
                if(week_c == 'true'){
                    today.setHours(0, 0, 0, 0);

                    function getBef(d) {
                        d = new Date(d);
                        var day = d.getDay(),
                          diff = d.getDate() - day + (day == 0 ? -6:1) - 1; // adjust when day is sunday
                        return new Date(d.setDate(diff));
                    }
                    var bef_d =  Date.parse(getBef(today)); // Moday - 1

                    function getNext(d) {
                        d = new Date(d);
                        var day = d.getDay(),
                          diff = d.getDate() - day + (day == 0 ? -6:1) + 7; // adjust when day is sunday
                        return new Date(d.setDate(diff));
                    }
                    var next_d =  Date.parse(getNext(today)); // Moday

                    function getMonday(d) {
                        d = new Date(d);
                        var day = d.getDay(),
                          diff = d.getDate() - day + (day == 0 ? -6:1); // adjust when day is sunday
                        return new Date(d.setDate(diff));
                    }
                    var mon_d = getMonday(today);
                    var mon =  Date.parse(getMonday(today)); // Moday

                    function getT(d) {
                        d = new Date(d);
                        var day = d.getDay(),
                          diff = d.getDate() - day + (day == 0 ? -6:1) + 1; // adjust when day is sunday
                        return new Date(d.setDate(diff));
                    }

                    var tue = Date.parse(getT(today)); // Tues
                    
                    function getW(d) {
                        d = new Date(d);
                        var day = d.getDay(),
                          diff = d.getDate() - day + (day == 0 ? -6:1) + 2; // adjust when day is sunday
                        return new Date(d.setDate(diff));
                    }

                    var wed =  Date.parse(getW(today)); // Mon Nov 08 2010

                    function getTu(d) {
                        d = new Date(d);
                        var day = d.getDay(),
                          diff = d.getDate() - day + (day == 0 ? -6:1) + 3; // adjust when day is sunday
                        return new Date(d.setDate(diff));
                    }

                    var th =  Date.parse(getTu(today)); // Mon Nov 08 2010

                    function getF(d) {
                        d = new Date(d);
                        var day = d.getDay(),
                          diff = d.getDate() - day + (day == 0 ? -6:1) + 4; // adjust when day is sunday
                        return new Date(d.setDate(diff));
                    }

                    var fri = Date.parse(getF(today)); // Mon Nov 08 2010

                    function getS(d) {
                        d = new Date(d);
                        var day = d.getDay(),
                          diff = d.getDate() - day + (day == 0 ? -6:1) + 5; // adjust when day is sunday
                        return new Date(d.setDate(diff));
                    }

                    var sat = Date.parse(getS(today)); // Mon Nov 08 2010

                    function getSu(d) {
                        d = new Date(d);
                        var day = d.getDay(),
                          diff = d.getDate() - day + (day == 0 ? -6:1) + 6; // adjust when day is sunday
                        return new Date(d.setDate(diff));
                    }
                    var sun_d = getSu(today);
                    var sun = Date.parse(getSu(today)); // Mon Nov 08 2010

                    // Weekly Title
                    var s_month = mon_d.getMonth() + 1;
                    var e_month = sun_d.getMonth() + 1;
                    weel_s_date = s_month +'/'+ mon_d.getDate() + '/' + mon_d.getFullYear();
                    weel_e_date = e_month +'/'+ sun_d.getDate() + '/' + sun_d.getFullYear();
                    week_title = 'Proposed Activated Ad Schedule for a Week starting '+ weel_s_date +" - "+ weel_e_date;
                    // End of weekly title

                    for(var i = 0; i < res.length ; i++){
                        if(res[i].mark == "1"){
                            // console.log(i+1);
                            var ind = i+1;
                            c_num.push("Ad " + ind);
                            var month = event_d.getMonth() + 1;
                            var new_disdate = event_d.getFullYear() +','+ month+',30';
                            // c_temp.push(res[i].temp_name);
                            var temp_dis = new Object();
                            var s_utcDate = new Date(res[i].c_sdate);                    
                            if(res[i].e_date == ""){
                                // var e_utcDate = new Date(new_disdate);
                                var e_utcDate = new Date('2099,11,31');
                            }
                            if(res[i].e_date != ""){
                                var e_utcDate = new Date(res[i].c_edate);
                            }
                            if((mon-56400000)<=Date.parse(s_utcDate) && Date.parse(s_utcDate) <= (sun+56400000) || (mon-56400000)<=Date.parse(e_utcDate) ) {
                                var temp_dis = new Object();
                                if(res[i].weeks == ""){
                                    for(var p  = 1; p<8; p++){
                                       if(p == "1"){
                                            var temp_dis = new Object();
                                            temp_dis.x = mon;
                                            temp_dis.x2 = tue;
                                            temp_dis.y = j;
                                            // c_num.push(i+1);
                                            c_dis.push(temp_dis);
                                        }
                                        if(p == "2"){
                                            var temp_dis = new Object();
                                            temp_dis.x = tue;
                                            temp_dis.x2 = wed;
                                            temp_dis.y = j;
                                            // c_num.push(i+1);
                                            c_dis.push(temp_dis);
                                        }
                                        if(p == "3"){
                                            var temp_dis = new Object();
                                            temp_dis.x = wed;
                                            temp_dis.x2 = th;
                                            temp_dis.y = j;
                                            // c_num.push(i+1);
                                            c_dis.push(temp_dis);
                                        }
                                        if(p == "4"){
                                            var temp_dis = new Object();
                                            temp_dis.x = th;
                                            temp_dis.x2 = fri;
                                            temp_dis.y = j;
                                            // c_num.push(i+1);
                                            c_dis.push(temp_dis);
                                        }
                                        if(p == "5"){
                                            var temp_dis = new Object();
                                            temp_dis.x = fri;
                                            temp_dis.x2 = sat;
                                            temp_dis.y = j;
                                            // c_num.push(i+1);
                                            c_dis.push(temp_dis);
                                        }
                                        if(p == "6"){
                                            var temp_dis = new Object();
                                            temp_dis.x = sat;
                                            temp_dis.x2 = sun;
                                            temp_dis.y = j;
                                            // c_num.push(i+1);
                                            c_dis.push(temp_dis);
                                        }
                                        if(p == "7"){
                                            var temp_dis = new Object();
                                            temp_dis.x = sun;
                                            temp_dis.x2 = next_d;
                                            temp_dis.y = j;
                                            // c_num.push(i+1);
                                            c_dis.push(temp_dis);
                                        }
                                    }
                                    j++;
                                }
                                else{
                                    var week_arr = res[i].weeks.split(',');
                                    for(var p = 0; p<week_arr.length-1 ; p++){
                                        if(week_arr[p] == "1"){
                                            var temp_dis = new Object();
                                            temp_dis.x = mon;
                                            temp_dis.x2 = tue;
                                            temp_dis.y = j;
                                            // c_num.push(i+1);
                                            c_dis.push(temp_dis);
                                        }
                                        if(week_arr[p] == "2"){
                                            var temp_dis = new Object();
                                            temp_dis.x = tue;
                                            temp_dis.x2 = wed;
                                            temp_dis.y = j;
                                            // c_num.push(i+1);
                                            c_dis.push(temp_dis);
                                        }
                                        if(week_arr[p] == "3"){
                                            var temp_dis = new Object();
                                            temp_dis.x = wed;
                                            temp_dis.x2 = th;
                                            temp_dis.y = j;
                                            // c_num.push(i+1);
                                            c_dis.push(temp_dis);
                                        }
                                        if(week_arr[p] == "4"){
                                            var temp_dis = new Object();
                                            temp_dis.x = th;
                                            temp_dis.x2 = fri;
                                            temp_dis.y = j;
                                            // c_num.push(i+1);
                                            c_dis.push(temp_dis);
                                        }
                                        if(week_arr[p] == "5"){
                                            var temp_dis = new Object();
                                            temp_dis.x = fri;
                                            temp_dis.x2 = sat;
                                            temp_dis.y = j;
                                            // c_num.push(i+1);
                                            c_dis.push(temp_dis);
                                        }
                                        if(week_arr[p] == "6"){
                                            var temp_dis = new Object();
                                            temp_dis.x = sat;
                                            temp_dis.x2 = sun;
                                            temp_dis.y = j;
                                            // c_num.push(i+1);
                                            c_dis.push(temp_dis);
                                        }
                                        if(week_arr[p] == "7"){
                                            var temp_dis = new Object();
                                            temp_dis.x = sun;
                                            temp_dis.x2 = next_d;
                                            temp_dis.y = j;
                                            // c_num.push(i+1);
                                            c_dis.push(temp_dis);
                                        }
                                    }
                                    j++;
                                }      
                            }                      
                        }
                    }

                    Highcharts.chart('sch_chart', {
                        chart: {
                            type: 'xrange'
                        },
                        title: {
                            text: week_title
                        },
                        xAxis: {
                            type: 'datetime',
                            dateTimeLabelFormats: {
                               day: '%d %b %a'    //ex- 01 Jan 2016
                            },
                            min: mon-56400000,
                            max: sun,
                        },
                        yAxis: {
                            title: {
                                text: ''
                            },
                            categories: c_num,
                            reversed: true
                        },

                        series: [{
                            name : '',
                            // pointPadding: 0,
                            // groupPadding: 0,
                            borderColor: 'gray',
                            pointWidth: 20,
                            data : c_dis,
                            dataLabels: {
                                enabled: false
                            }
                        }]
                    });
                }
                if(week_c == 'false' && hour_c == 'false'){
                // else{
                    for(var i = 0; i < res.length ; i++){
                        if(res[i].mark == "1"){
                            var event = new Date();
                            var month = event.getMonth() + 1;
                            var new_disdate = event.getFullYear() +','+ month+',30';
                            c_temp.push(res[i].temp_name);
                            var temp_dis = new Object();
                            var s_utcDate = new Date(res[i].c_sdate);                    
                            if(res[i].e_date == ""){
                                var e_utcDate = new Date(new_disdate);
                            }
                            if(res[i].e_date != ""){
                                var e_utcDate = new Date(res[i].c_edate);
                            }
                            if(Date.parse(s_utcDate) == Date.parse(e_utcDate)){
                                temp_dis.x = Date.parse(s_utcDate);
                                temp_dis.x2 = Date.parse(e_utcDate)+86400000;
                            }
                            if(Date.parse(s_utcDate) != Date.parse(e_utcDate)){                                
                                temp_dis.x = Date.parse(s_utcDate);
                                temp_dis.x2 = Date.parse(e_utcDate);
                            }
                            temp_dis.y = j;
                            j++;
                            var ind = i+1;
                            c_num.push("Ad " + ind);
                            c_dis.push(temp_dis);
                        }
                    }

                    Highcharts.chart('sch_chart', {
                        chart: {
                            type: 'xrange'
                        },
                        title: {
                            text: 'Proposed Activated Ad Schedule(2 Weeks)'
                        },
                        xAxis: {
                            type: 'datetime',
                            dateTimeLabelFormats: {
                               day: '%d %b'    //ex- 01 Jan 2016
                            },
                            min: Date.parse(today)-96400000,
                            max : Date.parse(today)+86400000*13,
                            
                        },
                        yAxis: {
                            
                            title: {
                                text: ''
                            },
                            categories: c_num,
                            reversed: true
                        },

                        series: [{
                            name : '',
                            // pointPadding: 0,
                            // groupPadding: 0,
                            borderColor: 'gray',
                            pointWidth: 20,
                            data : c_dis,
                            dataLabels: {
                                enabled: false
                            }
                        }]
                    });
                }
                
                // Highcharts.chart('sch_chart', {
                //     chart: {
                //         type: 'columnrange',
                //         inverted: true
                //     },

                //     title: {
                //         text: 'Schedule Gantt'
                //     },

                //     subtitle: {
                //         text: '4 Weeks'
                //     },

                //     xAxis: {
                //         type : 'datetime',
                //         categories: c_temp
                //     },

                //     yAxis: {
                //         title: {
                //             text: 'Date'
                //         }
                //     },

                //     tooltip: {
                //         // valueSuffix: ''
                //         formatter: function() {
                //             return 'The value for <b>' + this.x + '</b> is <b>' + this.series.text + '</b>, in series '+ this.series.name;
                //         }
                //     },

                //     plotOptions: {
                //         columnrange: {
                //             dataLabels: {
                //                 enabled: true,
                //                 text : c_sdate
                //                 // format: '{y}'
                //                 // format: '{c_sdate}'
                //             }
                //         }
                //     },

                //     legend: {
                //         enabled: false
                //     },

                //     series: [{
                //         // name: 'Temperatures',
                //         // text : c_sdate,
                //         // colorByPoint: true,
                //         // data: diff
                //             name: 'Project 1',
                //             // pointPadding: 0,
                //             // groupPadding: 0,
                //             borderColor: 'gray',
                //             pointWidth: 20,
                //             data: [{
                //                 x: Date.UTC(2014, 10, 21),
                //                 x2: Date.UTC(2014, 11, 2),
                //                 y: 0,
                //                 partialFill: 0.25
                //             }, {
                //                 x: Date.UTC(2014, 11, 2),
                //                 x2: Date.UTC(2014, 11, 5),
                //                 y: 1
                //             }, {
                //                 x: Date.UTC(2014, 11, 8),
                //                 x2: Date.UTC(2014, 11, 9),
                //                 y: 2
                //             }, {
                //                 x: Date.UTC(2014, 11, 9),
                //                 x2: Date.UTC(2014, 11, 19),
                //                 y: 1
                //             }, {
                //                 x: Date.UTC(2014, 11, 10),
                //                 x2: Date.UTC(2014, 11, 23),
                //                 y: 2
                //             }],
                //             dataLabels: {
                //                 enabled: true
                //             }
                //     }]

                // });
            }
        })
    }
    // End of Get chart data
})
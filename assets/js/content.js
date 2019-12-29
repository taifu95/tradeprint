
$(document).ready(function(){
    var body_left = 0;
    body_left = (window.innerWidth - 1200) / 2;
    $(".wrapper").css("marginLeft",body_left);
    function reportWindowSize() {
        body_left = (window.innerWidth - 1200) / 2;
        $(".wrapper").css("marginLeft",body_left);
    }
    window.onresize = reportWindowSize;
    
    $("#messageNotification").jqxNotification({
        width: 550, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "success"
    });
    $("#messageNotification_error").jqxNotification({
        width: 550, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "error"
    });
    // Business
    $("#sh").click(function(){
        $("#dis")[0].style.display = 'inline-block';
    })
    // This is the suggestin part
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
                $("#noti_text")[0].style.fontSize = '20px';
                $("#messageNotification")[0].style.width = '850';
                
                $("#noti_text")[0].textContent = 'Thank you for your suggestion. We appreciate the idea and the fact you spent time helping us improve this site and our services.';
                $("#messageNotification").jqxNotification("open");
                // alert('Success');
            }
        })
    })
    
    // Slide Manage
    var slide_update = 'false';//when fileunput is true:true
    var sup_flag = 'false';//row Double click
    var slide_name = "";
    var tbl_id = "";
    $("#userfile").on("change",function(event){
        sup_flag = 'true';
        var _URL = window.URL;
        var file, img;
        if ((file = this.files[0])) {
            img = new Image();
            img.onload = function () {
            };
            img.src = _URL.createObjectURL(file);
        }
        $("#dis").css('display','none');
    })

    $("#dis").click(function(){
        $("#userfile").click();
    })
    $("#ddis").click(function(){
        $("#userfile").click();
    })
    var source_sli =
    {
        dataType: 'json',
        dataFields: [
            { name: 'id', type: 'number' },
            { name: 'tbl_id', type: 'number' },
            { name: 'slide_name', type: 'string' },
            { name: 'cre_date', type: 'string' },
            { name: 'sli_title', type: 'string' },
            { name: 'sli_text', type: 'string' }
        ], 
        id: 'id',
        url:'content/get_slide'
    };
    var rows_det = "";
    var dataAdapter_sli = new $.jqx.dataAdapter(source_sli, {
        formatData: function(data) {
            // data["mark_sta"] = mark_dis;
            // return data;
        },
        loadComplete: function () {
            // $("#dataTable").jqxDataTable('getRows');
            rows_det = $("#dataTable").jqxDataTable('getRows');
        }
    });
    $("#dataTable").jqxDataTable(
    {
        source: dataAdapter_sli,
        width : "100%",
        pageable: true,
        altRows: true,
        editable : false,
        filterable: true,
        pagerMode: 'advanced',
        pageSize : 3,
        // filterMode: 'advanced',
        rendered: function () {
            if ($(".canc").length > 0) {
                $(".canc").click(function (event) {
                    var rowIndex = parseInt(event.currentTarget.getAttribute('data-row'));
                    if (isNaN(rowIndex)) {
                        return;
                    }
                    $.ajax({
                        url:'content/delete_slide',
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
                    if(rows_det[rowIndex].mark == 1){
                        var mark = 0;
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
                            $("#dataTable").jqxDataTable("updateBoundData");
                        }
                    })
                    $("#dataTable").jqxDataTable('endRowEdit', rowIndex, true);
                });
            }
        },
        columns: [
            { text: '', cellsAlign: 'center', align: 'center', dataField: 'id', width: "5%" ,filterable:false},
            { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'tbl_id', width: "5%" ,filterable:false},
            { text: 'Slide Image', cellsAlign: 'center', align: 'center', dataField: 'slide_name', width: "50%" ,filterable:false,
                cellsRenderer: function (row, column, value, rowData) {
                    var image = "<div style='margin: 5px; margin-bottom: 3px;'>";
                    // var imgurl = 'assets/img/slide/'  +rowData.slide_name;
                    var imgurl = 'assets/img/slide/' +rowData.cre_date +rowData.slide_name;
                    var img = '<img width="100%" height="130" style="display: block;" src="' + imgurl + '"/>';
                    image += img;
                    image += "</div>";
                    return image;
                }
            },
            { text: 'Title', cellsAlign: 'left', align: 'center', dataField: 'sli_title', width: "20%" },
            { text: 'Text', cellsAlign: 'left', align: 'center', dataField: 'sli_text', width: "20%" },
            { text: 'Text', cellsAlign: 'left', align: 'center', dataField: 'cre_date', width: "20%" ,filterable:false,hidden:true},
            { text: '', cellsAlign: 'center', align: 'center', dataField: 'dd', width: "5%" ,
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
    $('#dataTable').on('rowDoubleClick', function (event)
    {
        slide_update = true;
        var args = event.args;
        var row = args.row;
        slide_name = row.slide_name;
        tbl_id = row.tbl_id;
        $("#sli_title").val(row.sli_title);
        $("#sli_text").val(row.sli_text);
    });
    $("#new_slide").on('click',function(){
        if(sup_flag == "false" && slide_update == "false"){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "Please insert the slide Image!";
            $("#messageNotification_error").jqxNotification("open");
            return false;
        }
        if($("#sli_title").val() == ""){
            $("#sli_title").focus();
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "file size too big or Select the image(Max Size is 3MB)!";
            $("#messageNotification_error").jqxNotification("open");
            return false;
        }
        var sf = new FormData(document.getElementById('slide_form'));
        sf.append('sli_title',$("#sli_title").val());
        sf.append('sli_text',$("#sli_text").val());
        sf.append('slide_update',slide_update);
        sf.append('sup_flag',sup_flag);
        sf.append('tbl_id',tbl_id);
        sf.append('slide_name',slide_name);
        $.ajax({
            url:'content/update_slide',
            // secureuri: false,
            type:'post',
            data : sf,
            processData :false,
            contentType : false,
            // dataType:'JSON',
            success:function(res){
                if(res == "Error uploading file!"){
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#error_noti_text")[0].textContent = "file size too big or Select the image(Max Size is 10MB)!";
                    $("#messageNotification_error").jqxNotification("open");
                }
                if(res == "file size too big!"){
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#error_noti_text")[0].textContent = "file size too big(Max Size is 10MB)!";
                    $("#messageNotification_error").jqxNotification("open");
                }
                if(res == "Format not allowed or file size too big!"){
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#error_noti_text")[0].textContent = "Format not allowed or file size too big(Max Size is 10MB)!";
                    $("#messageNotification_error").jqxNotification("open");
                }
                if(res == "Success"){
                    sup_flag = "false";
                    slide_update = 'false';
                    
                    $("#sli_title").val("");
                    $("#sli_text").val("");
                    $("#dataTable").jqxDataTable("updateBoundData");
                    $("#noti_text")[0].style.fontSize = '20px';
                    $("#noti_text")[0].textContent = 'Success';
                    $("#messageNotification").jqxNotification("open");
                }
            }
        });
        return false;
    })
    // About about
    var about_flg = "false";
    $("#dis1").click(function(){
        $("#userfile1").click();
    })
    $("#ddis1").click(function(){
        $("#userfile1").click();
    })
    $("#userfile1").on("change",function(event){
        about_flg = 'true';
        var _URL = window.URL;
        var file, img;
        if ((file = this.files[0])) {
            img = new Image();
            img.onload = function () {
            };
            img.src = _URL.createObjectURL(file);
        }
        $("#dis1").css('display','none');
    })

    var source_abo =
    {
        dataType: 'json',
        dataFields: [
            { name: 'id', type: 'number' },
            { name: 'tbl_id', type: 'number' },
            { name: 'abo_img', type: 'string' },
            { name: 'title', type: 'string' },
            { name: 'text', type: 'string' }
        ], 
        id: 'id',
        url:'content/get_about'
    };
    var rows_abo = "";
    var tbl_about_id = 0;
    var dataAdapter_abo = new $.jqx.dataAdapter(source_abo, {
        formatData: function(data) {
            // data["mark_sta"] = mark_dis;
            // return data;
        },
        loadComplete: function () {
            // $("#dataTable").jqxDataTable('getRows');
            rows_abo = $("#dataTable_abo").jqxDataTable('getRows');
        }
    });
    $("#dataTable_abo").jqxDataTable(
    {
        source: dataAdapter_abo,
        width : "100%",
        pageable: true,
        altRows: true,
        editable : false,
        // filterable: true,
        // pagerMode: 'advanced',
        pageSize : 4,
        // filterMode: 'advanced',
        columns: [
            { text: '', cellsAlign: 'center', align: 'center', dataField: 'id', width: "5%" ,filterable:false},
            { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'tbl_id', width: "5%" ,filterable:false},
            { text: 'Slide Image', cellsAlign: 'center', align: 'center', dataField: 'abo_img', width: "45%" ,filterable:false,
                cellsRenderer: function (row, column, value, rowData) {
                    var image = "<div style='margin: 5px; margin-bottom: 3px;'>";
                    // var imgurl = 'assets/img/slide/'  +rowData.slide_name;
                    var imgurl = 'assets/img/about/' +rowData.abo_img;
                    var img = '<img width="100%" height="130" style="display: block;" src="' + imgurl + '"/>';
                    image += img;
                    image += "</div>";
                    return image;
                }
            },
            { text: 'Title', cellsAlign: 'left', align: 'center', dataField: 'title', width: "20%" },
            { text: 'Text', cellsAlign: 'left', align: 'center', dataField: 'text', width: "30%" }
        ]
    });
    $('#dataTable_abo').on('rowDoubleClick', function (event)
    {
        // slide_update = true;
        var args = event.args;
        var row = args.row;
        // slide_name = row.slide_name;
        tbl_about_id = row.tbl_id;
        $("#abo_title").val(row.title);
        $("#abo_text").val(row.text);
    });
    $("#up_about").click(function(){
        // if(about_flg == "false"){
        //     $("#error_noti_text")[0].style.fontSize = '20px';
        //     $("#error_noti_text")[0].textContent = "Please Insert About Image!";
        //     $("#messageNotification_error").jqxNotification("open");
        //     return false;
        // }
        if($("#abo_title").val() == ""){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "Please Insert About Title!";
            $("#messageNotification_error").jqxNotification("open");
            $("#abo_title").focus();
            return false;
        }
        if($("#abo_text").val() == ""){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "Please Insert About Text!";
            $("#messageNotification_error").jqxNotification("open");
            $("#abo_text").focus();
            return false;
        }
        var sf1 = new FormData(document.getElementById('slide_form1'));
        sf1.append('abo_title',$("#abo_title").val());
        sf1.append('abo_text',$("#abo_text").val());
        sf1.append('tbl_id',tbl_about_id);

        $.ajax({
            url:'content/update_about',
            // secureuri: false,
            type:'post',
            data : sf1,
            processData :false,
            contentType : false,
            // dataType:'JSON',
            success:function(res){
                if(res == "Error uploading file!"){
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#error_noti_text")[0].textContent = "file size too big or Select the image(Max Size is 10MB)!";
                    $("#messageNotification_error").jqxNotification("open");
                }
                if(res == "file size too big!"){
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#error_noti_text")[0].textContent = "file size too big(Max Size is 10MB)!";
                    $("#messageNotification_error").jqxNotification("open");
                }
                if(res == "Format not allowed or file size too big!"){
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#error_noti_text")[0].textContent = "Format not allowed or file size too big(Max Size is 10MB)!";
                    $("#messageNotification_error").jqxNotification("open");
                }
                if(res == "success"){
                    // sup_flag = "false";
                    // slide_update = 'false';
                    
                    $("#sli_title").val("");
                    $("#sli_text").val("");
                    $("#dataTable_abo").jqxDataTable("updateBoundData");
                    $("#noti_text")[0].style.fontSize = '20px';
                    $("#noti_text")[0].textContent = 'Success';
                    $("#messageNotification").jqxNotification("open");
                }
            }
        });
        return false;
    })
    // End of About
    // Service
    var source_service =
    {
        dataType: 'json',
        dataFields: [
            { name: 'id', type: 'number' },
            { name: 'tbl_id', type: 'number' },
            { name: 's_title', type: 'string' },
            { name: 's_text', type: 'string' }
        ], 
        id: 'id',
        url:'content/get_serive'
    };
    var rows_ser = "";
    var tbl_service_id = 0;
    var tbl_tid = 0;
    var service_update = 'false';
    var dataAdapter_service = new $.jqx.dataAdapter(source_service, {
        formatData: function(data) {
            // data["mark_sta"] = mark_dis;
            // return data;
        },
        loadComplete: function () {
            // $("#dataTable").jqxDataTable('getRows');
            rows_ser = $("#dataTable_ser").jqxDataTable('getRows');
        }
    });
    $("#dataTable_ser").jqxDataTable(
    {
        source: dataAdapter_service,
        width : "100%",
        pageable: true,
        altRows: true,
        editable : true,
        filterable: true,
        // pagerMode: 'advanced',
        pageSize : 4,
        // filterMode: 'advanced',
        rendered: function () {
            
        },
        columns: [
            { text: '', cellsAlign: 'center', align: 'center', dataField: 'id', width: "5%" ,filterable:false,editable:false},
            { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'tbl_id', width: "5%" ,filterable:false},
            { text: 'Title', cellsAlign: 'left', align: 'center', dataField: 's_title', width: "20%" },
            { text: 'Content', cellsAlign: 'left', align: 'center', dataField: 's_text', width: "75%" },
            // { text: '', cellsAlign: 'center', align: 'center', dataField: 'dd', width: "5%" ,
            //     renderer: function (text, align, height) {
            //         // var checkBox  = "<i class='material-icons'>close</i>"
            //         // return checkBox;
            //     },
            //     cellsRenderer: function (row, column, value, rowData) {
            //         // console.log(rowData);
            //         var checkBox  = "<span class='canc' data-row='" + row + "'><i class='material-icons' style='cursor:pointer'>close</i></span>";
            //         return checkBox;
            //     }
            // }
        ]
    });
    $('#dataTable_ser').on('rowDoubleClick', function (event)
    {
        service_update = "true";
        var args = event.args;
        var row = args.row;
        // slide_name = row.slide_name;
        tbl_service_id = row.tbl_id;
        tbl_tid = row.id;
    });
    $("#update_ser").click(function(){
        if(service_update == 'false'){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "Please select the item";
            $("#messageNotification_error").jqxNotification("open");
            return false;
        }
        else{
            $.ajax({
                url:'content/update_service',
                // secureuri: false,
                method:'post',
                data : {
                    s_text : rows_ser[tbl_tid-1]['s_text'],
                    s_title : rows_ser[tbl_tid-1]['s_title'],
                    tbl_id : tbl_service_id
                },
                dataType:'JSON',
                success:function(res){
                    if(res == "success"){
                        service_update = 'false';
                        
                        $("#dataTable_ser").jqxDataTable("updateBoundData");
                        $("#noti_text")[0].style.fontSize = '20px';
                        $("#noti_text")[0].textContent = 'Success';
                        $("#messageNotification").jqxNotification("open");
                    }
                }
            });
            return false;
        }
    })
    // End of Service
    // Team part
    // About about
    var team_flg = "false";
    $("#dis2").click(function(){
        $("#userfile2").click();
    })
    $("#ddis2").click(function(){
        $("#userfile2").click();
    })
    $("#userfile2").on("change",function(event){
        team_flg = 'true';
        var _URL = window.URL;
        var file, img;
        if ((file = this.files[0])) {
            img = new Image();
            img.onload = function () {
            };
            img.src = _URL.createObjectURL(file);
        }
        $("#dis2").css('display','none');
    })

    var source_team =
    {
        dataType: 'json',
        dataFields: [
            { name: 'id', type: 'number' },
            { name: 'tbl_id', type: 'number' },
            { name: 'img_url', type: 'string' },
            { name: 't_name', type: 'string' },
            { name: 't_text', type: 'string' }
        ], 
        id: 'id',
        url:'content/get_team'
    };
    var rows_team = "";
    var tbl_team_id = 0;
    var dataAdapter_team = new $.jqx.dataAdapter(source_team, {
        formatData: function(data) {
            // data["mark_sta"] = mark_dis;
            // return data;
        },
        loadComplete: function () {
            // $("#dataTable").jqxDataTable('getRows');
            rows_team = $("#dataTable").jqxDataTable('getRows');
        }
    });
    $("#dataTable_team").jqxDataTable(
    {
        source: dataAdapter_team,
        width : "100%",
        pageable: true,
        altRows: true,
        editable : false,
        // filterable: true,
        // pagerMode: 'advanced',
        pageSize : 4,
        // filterMode: 'advanced',
        columns: [
            { text: '', cellsAlign: 'center', align: 'center', dataField: 'id', width: "5%" ,filterable:false},
            { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'tbl_id', width: "5%" ,filterable:false},
            { text: 'Album', cellsAlign: 'center', align: 'center', dataField: 'img_url', width: "45%" ,filterable:false,
                cellsRenderer: function (row, column, value, rowData) {
                    var image = "<div style='margin: 5px; margin-bottom: 3px;'>";
                    // var imgurl = 'assets/img/slide/'  +rowData.slide_name;
                    var imgurl = 'assets/img/team/' +rowData.img_url;
                    var img = '<img width="100%" height="130" style="display: block;" src="' + imgurl + '"/>';
                    image += img;
                    image += "</div>";
                    return image;
                }
            },
            { text: 'Name', cellsAlign: 'left', align: 'center', dataField: 't_name', width: "20%" },
            { text: 'Text', cellsAlign: 'left', align: 'center', dataField: 't_text', width: "30%" }
        ]
    });
    $('#dataTable_team').on('rowDoubleClick', function (event)
    {
        // slide_update = true;
        var args = event.args;
        var row = args.row;
        // slide_name = row.slide_name;
        tbl_team_id = row.tbl_id;
        $("#team_title").val(row.t_name);
        $("#team_text").val(row.t_text);
    });
    $("#up_team").click(function(){
        // if(about_flg == "false"){
        //     $("#error_noti_text")[0].style.fontSize = '20px';
        //     $("#error_noti_text")[0].textContent = "Please Insert About Image!";
        //     $("#messageNotification_error").jqxNotification("open");
        //     return false;
        // }
        if($("#team_title").val() == ""){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "Please Insert About Title!";
            $("#messageNotification_error").jqxNotification("open");
            $("#team_title").focus();
            return false;
        }
        if($("#team_text").val() == ""){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "Please Insert About Text!";
            $("#messageNotification_error").jqxNotification("open");
            $("#team_text").focus();
            return false;
        }
        var sf2 = new FormData(document.getElementById('slide_form2'));
        sf2.append('team_title',$("#team_title").val());
        sf2.append('team_text',$("#team_text").val());
        sf2.append('tbl_id',tbl_team_id);

        $.ajax({
            url:'content/update_team',
            // secureuri: false,
            type:'post',
            data : sf2,
            processData :false,
            contentType : false,
            // dataType:'JSON',
            success:function(res){
                if(res == "Error uploading file!"){
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#error_noti_text")[0].textContent = "file size too big or Select the image(Max Size is 10MB)!";
                    $("#messageNotification_error").jqxNotification("open");
                }
                if(res == "file size too big!"){
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#error_noti_text")[0].textContent = "file size too big(Max Size is 10MB)!";
                    $("#messageNotification_error").jqxNotification("open");
                }
                if(res == "Format not allowed or file size too big!"){
                    $("#error_noti_text")[0].style.fontSize = '20px';
                    $("#error_noti_text")[0].textContent = "Format not allowed or file size too big(Max Size is 10MB)!";
                    $("#messageNotification_error").jqxNotification("open");
                }
                if(res == "success"){
                    // sup_flag = "false";
                    // slide_update = 'false';
                    
                    $("#team_title").val("");
                    $("#team_text").val("");
                    $("#dataTable_team").jqxDataTable("updateBoundData");
                    $("#noti_text")[0].style.fontSize = '20px';
                    $("#noti_text")[0].textContent = 'Success';
                    $("#messageNotification").jqxNotification("open");
                }
            }
        });
        return false;
    })
    // End of Team
    // Facts
    var source_fact =
    {
        dataType: 'json',
        dataFields: [
            { name: 'id', type: 'number' },
            { name: 'tbl_id', type: 'number' },
            { name: 'f_title', type: 'string' },
            { name: 'f_text', type: 'string' }
        ], 
        id: 'id',
        url:'content/get_fact'
    };
    var rows_fact = "";
    var tbl_fact_id = 0;
    var tbl_fid = 0;
    var fact_update = 'false';
    var dataAdapter_fact = new $.jqx.dataAdapter(source_fact, {
        formatData: function(data) {
            // data["mark_sta"] = mark_dis;
            // return data;
        },
        loadComplete: function () {
            // $("#dataTable").jqxDataTable('getRows');
            rows_fact = $("#dataTable_fact").jqxDataTable('getRows');
        }
    });
    $("#dataTable_fact").jqxDataTable(
    {
        source: dataAdapter_fact,
        width : "100%",
        pageable: true,
        altRows: true,
        editable : true,
        filterable: true,
        pagerMode: 'advanced',
        pageSize : 5,
        // filterMode: 'advanced',
        rendered: function () {
            
        },
        columns: [
            { text: '', cellsAlign: 'center', align: 'center', dataField: 'id', width: "5%" ,filterable:false,editable:false},
            { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'tbl_id', width: "5%" ,filterable:false},
            { text: 'Title', cellsAlign: 'left', align: 'center', dataField: 'f_title', width: "20%" },
            { text: 'Content', cellsAlign: 'left', align: 'center', dataField: 'f_text', width: "75%" },
            // { text: '', cellsAlign: 'center', align: 'center', dataField: 'dd', width: "5%" ,
            //     renderer: function (text, align, height) {
            //         // var checkBox  = "<i class='material-icons'>close</i>"
            //         // return checkBox;
            //     },
            //     cellsRenderer: function (row, column, value, rowData) {
            //         // console.log(rowData);
            //         var checkBox  = "<span class='canc' data-row='" + row + "'><i class='material-icons' style='cursor:pointer'>close</i></span>";
            //         return checkBox;
            //     }
            // }
        ]
    });
    $('#dataTable_fact').on('rowDoubleClick', function (event)
    {
        fact_update = "true";
        var args = event.args;
        var row = args.row;
        // slide_name = row.slide_name;
        tbl_fact_id = row.tbl_id;
        tbl_fid = row.id;
    });
    $("#update_fact").click(function(){
        if(fact_update == 'false'){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "Please select the item";
            $("#messageNotification_error").jqxNotification("open");
            return false;
        }
        else{
            $.ajax({
                url:'content/update_fact',
                // secureuri: false,
                method:'post',
                data : {
                    f_text : rows_fact[tbl_fid-1]['f_text'],
                    f_title : rows_fact[tbl_fid-1]['f_title'],
                    tbl_id : tbl_fact_id
                },
                dataType:'JSON',
                success:function(res){
                    if(res == "success"){
                        fact_update = 'false';
                        
                        $("#dataTable_fact").jqxDataTable("updateBoundData");
                        $("#noti_text")[0].style.fontSize = '20px';
                        $("#noti_text")[0].textContent = 'Success';
                        $("#messageNotification").jqxNotification("open");
                    }
                }
            });
            return false;
        }
    })
    // End of Service
    // Contact US
    var source_con =
    {
        dataType: 'json',
        dataFields: [
            { name: 'id', type: 'number' },
            { name: 'tbl_id', type: 'number' },
            { name: 'c_title', type: 'string' },
            { name: 'c_text', type: 'string' }
        ], 
        id: 'id',
        url:'content/get_con'
    };
    var rows_con = "";
    var tbl_con_id = 0;
    var tbl_cid = 0;
    var con_update = 'false';
    var dataAdapter_con = new $.jqx.dataAdapter(source_con, {
        formatData: function(data) {
            // data["mark_sta"] = mark_dis;
            // return data;
        },
        loadComplete: function () {
            // $("#dataTable").jqxDataTable('getRows');
            rows_con = $("#dataTable_con").jqxDataTable('getRows');
        }
    });
    $("#dataTable_con").jqxDataTable(
    {
        source: dataAdapter_con,
        width : "100%",
        pageable: true,
        altRows: true,
        editable : true,
        filterable: true,
        pagerMode: 'advanced',
        pageSize : 4,
        // filterMode: 'advanced',
        rendered: function () {
            
        },
        columns: [
            { text: '', cellsAlign: 'center', align: 'center', dataField: 'id', width: "5%" ,filterable:false,editable:false},
            { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'tbl_id', width: "5%" ,filterable:false},
            { text: 'Title', cellsAlign: 'left', align: 'center', dataField: 'c_title', width: "20%" },
            { text: 'Content', cellsAlign: 'left', align: 'center', dataField: 'c_text', width: "75%" },
            // { text: '', cellsAlign: 'center', align: 'center', dataField: 'dd', width: "5%" ,
            //     renderer: function (text, align, height) {
            //         // var checkBox  = "<i class='material-icons'>close</i>"
            //         // return checkBox;
            //     },
            //     cellsRenderer: function (row, column, value, rowData) {
            //         // console.log(rowData);
            //         var checkBox  = "<span class='canc' data-row='" + row + "'><i class='material-icons' style='cursor:pointer'>close</i></span>";
            //         return checkBox;
            //     }
            // }
        ]
    });
    $('#dataTable_con').on('rowDoubleClick', function (event)
    {
        con_update = "true";
        var args = event.args;
        var row = args.row;
        // slide_name = row.slide_name;
        tbl_con_id = row.tbl_id;
        tbl_cid = row.id;
    });
    $("#update_con").click(function(){
        if(con_update == 'false'){
            $("#error_noti_text")[0].style.fontSize = '20px';
            $("#error_noti_text")[0].textContent = "Please select the item";
            $("#messageNotification_error").jqxNotification("open");
            return false;
        }
        else{
            $.ajax({
                url:'content/update_con',
                // secureuri: false,
                method:'post',
                data : {
                    c_text : rows_con[tbl_cid-1]['c_text'],
                    c_title : rows_con[tbl_cid-1]['c_title'],
                    tbl_id : tbl_con_id
                },
                dataType:'JSON',
                success:function(res){
                    if(res == "success"){
                        fact_update = 'false';
                        
                        $("#dataTable_con").jqxDataTable("updateBoundData");
                        $("#noti_text")[0].style.fontSize = '20px';
                        $("#noti_text")[0].textContent = 'Success';
                        $("#messageNotification").jqxNotification("open");
                    }
                }
            });
            return false;
        }
    })
    // End of Contact US
})
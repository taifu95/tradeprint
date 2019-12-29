$(document).ready(function(){
	var body_left = 0;
    body_left = (window.innerWidth - 1200) / 2;
    $(".wrapper").css("marginLeft",body_left);
    window.onresize = reportWindowSize;
	if(window.innerHeight<800){
		$("#hi_na")[0].style.padding = "0px";
		$("#pwd_hi")[0].style.padding = "0px";
		$("#for_pa")[0].style.padding = "0px";
		
	}
	if(window.innerHeight>800){
		$("#hi_na")[0].style.padding = "2rem 0 0 0";
		$("#pwd_hi")[0].style.padding = "2rem 0 0 0";
		$("#for_pa")[0].style.padding = "0px";
	}
	var log_sc = document.querySelector('#log_sc');
	var card_he = document.querySelector('#car_im');
	// var widthOutput = document.querySelector('#width');
	// document.width;
	function reportWindowSize() {
		body_left = (window.innerWidth - 1200) / 2;
        $(".wrapper").css("marginLeft",body_left);
		if(window.innerHeight<800){
			$("#hi_na")[0].style.padding = "0px";
			$("#pwd_hi")[0].style.padding = "0px";
			$("#for_pa")[0].style.padding = "0px";
			
		}
		if(window.innerHeight>800){
			$("#hi_na")[0].style.padding = "2rem 0 0 0";
			$("#pwd_hi")[0].style.padding = "2rem 0 0 0";
			$("#for_pa")[0].style.padding = "0px";
		}
		// console.log(window.innerWidth);
		// if(window.innerWidth<1200){
		// 	$("#log")[0].style.padding = "1rem 1rem";
		// 	$("#forget")[0].style.padding = "1rem 1rem";
		// }
		// else{			
		// 	$("#log")[0].style.padding = "1.125rem 2.25rem";
		// 	$("#forget")[0].style.padding = "1.125rem 2.25rem";
		// }
	}

	window.onresize = reportWindowSize;
	$("#messageNotification").jqxNotification({
        width: 650, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 15000, template: "success"
    });
    $("#messageNotification_error").jqxNotification({
        width: 650, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 15000, template: "error"
    });
	$("#name").focus();
	var name = "";
	var pwd = "";
	var ver_pwd = 0;
	$("#name").val("");
	$("#pwd").val("");
	$("#email").val("");
	$("#log").on('click',function(event){
		name = $("#name").val();
		pwd = $("#pwd").val();		
		if($("#name").val() == ""){
			$("#name").focus();
			return;
		}
		if($("#pwd").val() == ""){
			$("#pwd").focus();
			return;
		}
		$.ajax({
			url:'login/log',
			method:'post',
			data:{
				name:name,
				pwd:pwd
			},
			dataType:'JSON',
			success:function(res){
				if(res == 'success'){						
					$("#name").val("");
					$("#pwd").val("");
					$("#email").val("");
					document.location = "update_ad";
				}
				if(res == "user_locked"){
					$("#error_noti_text")[0].textContent = "Your account is locked,Please contact support@inex.net or call 405-414-7120 for help";
					$("#error_noti_text")[0].style.fontSize = '20px';
					$("#messageNotification_error").jqxNotification("open");
				}
				if(res == "fail"){
					$("#error_noti_text")[0].textContent = "Wrong User name or Password.";
					$("#error_noti_text")[0].style.fontSize = '20px';
					$("#messageNotification_error").jqxNotification("open");
					$("#name").focus();
				}

			}
		})
	})
	$("#name").keypress(function(event){
		name = $("#name").val();
		pwd = $("#pwd").val();
		if ( event.which == 13 ) {			
			if($("#name").val() == ""){
				$("#name").focus();
				return;
			}
			if($("#pwd").val() == ""){
				$("#pwd").focus();
				return;
			}
			$.ajax({
				url:'login/log',
				method:'post',
				data:{
					name:name,
					pwd:pwd
				},
				dataType:'JSON',
				success:function(res){
					if(res == 'success'){
						$("#name").val("");
						$("#pwd").val("");
						$("#email").val("");
		 				document.location = "update_ad";
					}
					if(res == "user_locked"){
						$("#error_noti_text")[0].textContent = "Your account is locked,Please contact support@inex.net or call 405-414-7120 for help";
						$("#error_noti_text")[0].style.fontSize = '20px';
						$("#messageNotification_error").jqxNotification("open");
					}
					if(res == "fail"){
						$("#error_noti_text")[0].textContent = "Wrong User name or Password.";
						$("#error_noti_text")[0].style.fontSize = '20px';
						$("#messageNotification_error").jqxNotification("open");
						$("#name").focus();
					}

				}
			})
		}
	})
	$("#pwd").keypress(function(event){
		name = $("#name").val();
		pwd = $("#pwd").val();		
		if ( event.which == 13 ) {
			if($("#name").val() == ""){
				$("#name").focus();
				return;
			}
			if($("#pwd").val() == ""){
				$("#pwd").focus();
				return;
			}
			$.ajax({
				url:'login/log',
				method:'post',
				data:{
					name:name,
					pwd:pwd
				},
				dataType:'JSON',
				success:function(res){
					if(res == 'success'){						
		 				$("#name").val("");
						$("#pwd").val("");
						$("#email").val("");
		 				document.location = "update_ad";
					}
					if(res == "user_locked"){
						$("#error_noti_text")[0].textContent = "Your account is locked, email support @inex.net or call 405-414-7120 for help";
						$("#error_noti_text")[0].style.fontSize = '20px';
						$("#messageNotification_error").jqxNotification("open");
					}
					if(res == 'fail'){
						$("#error_noti_text")[0].textContent = "Wrong User name or Password.";
						$("#error_noti_text")[0].style.fontSize = '20px';
						$("#messageNotification_error").jqxNotification("open");
						$("#name").focus();
					}

				}
			})
		}
	})
	$("#email_ver").click(function(){
		var ver_mail = $("#email").val();
		if(ver_mail == ""){
			$("#email").focus();
			return;
		}
		ver_pwd = Math.floor(Math.random()*100000);
		$.ajax({
			url:'email/send_mail',
			method:'post',
			data:{
				ver_mail : ver_mail,
				ver_pwd : ver_pwd
			},
			dataType:'JSON',
			success:function(res){
				if(res == "fail"){
					$("#email").focus();
				}
				else{
					document.location = "update_ad";
				}
			}
		});
		$("#noti_text")[0].textContent = "Email Sent with temporary Password.";
		$("#noti_text")[0].style.fontSize = '20px';
		$("#messageNotification").jqxNotification("open");
		$("#new_log")[0].style.display = "inline-block";
		// $("#pwd").focus();
	})
	// $("#new_log").click(function(){
	// 	if(ver_pwd != $("#pwd").val()){
	// 		$("#pwd").focus();
	// 		return;
	// 	}
	// 	$.ajax({
	// 		url:'login/update_pwd',
	// 		method:'post',
	// 		data:{
	// 			email:$("#email").val(),
	// 			ver_pwd:ver_pwd
	// 		},
	// 		dataType:'JSON',
	// 		success:function(res){
	// 			if(res == "fail"){
	// 				$("#email").focus();
	// 			}
	// 			else{
	// 				document.location = "update_ad";
	// 			}
	// 		}
	// 	})
	// })
	$("#forget").on('click',function(event){
		$("#hi_na")[0].style.display = "none";
		$("#forget")[0].style.display = "none";
		$("#for_pa")[0].style.display = "none";
		$("#send_pa")[0].style.display = "inline-block";
		$("#pwd_hi")[0].style.display= "none";
		$("#ema")[0].style.display = "flex";
		$("#email_ver")[0].style.display = "inline-block";
		$("#pwd").val("");
		$("#email").focus();
	})
	$("#new_log").on('click',function(event){
		$("#hi_na")[0].style.display = "flex";
		$("#forget")[0].style.display = "inline-block";
		$("#for_pa")[0].style.display = "inline-block";
		$("#pwd_hi")[0].style.display= "flex";
		$("#send_pa")[0].style.display = "none";
		$("#ema")[0].style.display = "none";
		$("#email_ver")[0].style.display = "none";
		$("#name").val($("#email").val());
		$("#name").focus();
	})

	var source_sli =
    {
        dataType: 'json',
        dataFields: [
            { name: 'id', type: 'number' },
            { name: 'tbl_id', type: 'number' },
            { name: 'img_url', type: 'string' },
            { name: 'cre_date', type: 'string' },
            { name: 'p_name', type: 'string' },
            { name: 'p_text', type: 'string' }
        ], 
        id: 'id',
        url:'content/get_port'
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
        // altRows: true,
        // editable : false,
        // filterable: true,
        pagerMode: 'advanced',
        pageSize : 3,
        // filterMode: 'advanced',
        // rendered: function () {
        //     if ($(".canc").length > 0) {
        //         $(".canc").click(function (event) {
        //             var rowIndex = parseInt(event.currentTarget.getAttribute('data-row'));
        //             if (isNaN(rowIndex)) {
        //                 return;
        //             }
        //             $.ajax({
        //                 url:'content/delete_slide',
        //                 method:'post',
        //                 data:{
        //                     tbl_id:rows_det[rowIndex].tbl_id
        //                 },
        //                 dataType:'JSON',
        //                 success:function(res){
        //                     $("#noti_text")[0].style.fontSize = '20px';
        //                     $("#noti_text")[0].textContent = "DELETE SUCCESS!";
        //                     $("#messageNotification").jqxNotification("open");
        //                     $("#dataTable").jqxDataTable("updateBoundData");
        //                 }
        //             })
        //             $("#dataTable").jqxDataTable('endRowEdit', rowIndex, true);
        //         });
        //     }
        //     if ($(".checkbox1").length > 0) {
        //         $(".checkbox1").change(function (event) {
        //             var rowIndex = parseInt(event.currentTarget.getAttribute('data-row'));
        //             if (isNaN(rowIndex)) {
        //                 return;
        //             }
        //             if(rows_det[rowIndex].mark == 1){
        //                 var mark = 0;
        //             }
        //             if(rows_det[rowIndex].mark == 0){
        //                 var mark = 1;
        //             }
        //             // console.log(rows_det[rowIndex].mark);
        //             $.ajax({
        //                 url:'update_ad/update_mark',
        //                 method:'post',
        //                 data:{
        //                     mark : mark,
        //                     tbl_id:rows_det[rowIndex].tbl_id
        //                 },
        //                 dataType:'JSON',
        //                 success:function(res){
        //                     $("#dataTable").jqxDataTable("updateBoundData");
        //                 }
        //             })
        //             $("#dataTable").jqxDataTable('endRowEdit', rowIndex, true);
        //         });
        //     }
        // },
        columns: [
            { text: '', cellsAlign: 'center', align: 'center', dataField: 'id', width: "5%" ,filterable:false},
            { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'tbl_id', width: "5%" ,filterable:false},
            { text: 'Slide Image', cellsAlign: 'center', align: 'center', dataField: 'slide_name', width: "50%" ,filterable:false,
                cellsRenderer: function (row, column, value, rowData) {
                    var image = "<div style='margin: 5px; margin-bottom: 3px;'>";
                    // var imgurl = 'assets/img/slide/'  +rowData.slide_name;
                    var imgurl = 'assets/img/portfolio/' +rowData.cre_date +rowData.img_url;
                    var img = '<img width="100%" height="130" style="display: block;" src="' + imgurl + '"/>';
                    image += img;
                    image += "</div>";
                    return image;
                }
            },
            { text: 'Title', cellsAlign: 'left', align: 'center', dataField: 'p_name', width: "20%" },
            { text: 'Text', cellsAlign: 'left', align: 'center', dataField: 'p_text', width: "25%" },
            { text: 'Text', cellsAlign: 'left', align: 'center', dataField: 'cre_date', width: "20%" ,filterable:false,hidden:true},
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
})

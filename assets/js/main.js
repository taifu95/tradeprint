$(document).ready(function(){
	// page resize
    body_left = (window.innerWidth - 1200) / 2;
    $(".wrapper").css("marginLeft",body_left);
    function reportWindowSize() {
        body_left = (window.innerWidth - 1200) / 2;
        $(".wrapper").css("marginLeft",body_left);
    }
    window.onresize = reportWindowSize;
    // end of resize
	$("#messageNotification").jqxNotification({
        width: 650, position: "top-right", opacity: 0.9,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "success"
    });
    $("#messageNotification_error").jqxNotification({
        width: 650, position: "top-right", opacity: 0.9,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "error"
	});

    var up_flag = false;
	var source =
    {
        dataType: 'json',
        dataFields: [
       		{ name: 'id', type: 'number' },
       		{ name: 'tbl_id', type: 'number' },
       		{ name: 'business_name', type: 'string' },
            { name: 'name', type: 'string' },
			{ name: 'real_name', type: 'string' },
			{ name: 'phone', type: 'string' },
			{ name: 'lock', type: 'number' },
			{ name: 'num', type: 'number' },
            { name: 'level', type: 'string' },
            { name: 'bus_active', type: 'number' },
            { name: 'em_status', type: 'number' }
        ], 
        id: 'id',
        url:'main/get_data'
	};
	var rows_det = "";
    var dataAdapter = new $.jqx.dataAdapter(source, {
        loadComplete: function () {
			rows_det = $("#dataTable").jqxDataTable('getRows');
			if($("#use_le").val() != "Admin"){
				$("#dataTable").jqxDataTable('setColumnProperty', 'name', 'width', "35%");
				$("#dataTable").jqxDataTable('setColumnProperty', 'business_name', 'width', "35%");

				$("#dataTable").jqxDataTable('hideColumn', 'lock');
				$("#dataTable").jqxDataTable('hideColumn', 'bus_lock');
				$("#dataTable").jqxDataTable('hideColumn', 'bus_active');
				$("#dataTable").jqxDataTable('hideColumn', 'em_status');

			}
            // data is loaded.
        }
    });
    // var drop_source =
    // [
    //     'Primary TA',
    //     'Secondary TA',
    //     'Admin'
    // ];
    var drop_source =
    [
        'Primary TA',
        'Secondary TA',
        'Admin'
    ];
    $("#drop").jqxDropDownList({source:drop_source,selectedIndex:0,width:'100%',height:'40px'});
    // create jqxDataTable.
    $("#dataTable").jqxDataTable(
    {
        source: dataAdapter,
        width : "100%",
        pageable: true,
        altRows: true,
        // editable : true,
        filterable: true,
		rendered: function () {
            if ($(".canc").length > 0) {
                $(".canc").click(function (event) {
                    var rowIndex = parseInt(event.currentTarget.getAttribute('data-row'));
                    if (isNaN(rowIndex)) {
                        return;
					}
					if($("#use_le").val() == "Primary TA"){
						if(rows_det[rowIndex].level == "Primary TA"){
							$("#error_noti_text")[0].style.fontSize = '20px';
							$("#error_noti_text")[0].textContent = "You can't delete another Primary TA!";
							$("#messageNotification_error").jqxNotification("open");
							return;
						}
					}
					if($("#use_le").val() == "Secondary TA"){
						$("#error_noti_text")[0].style.fontSize = '20px';
						$("#error_noti_text")[0].textContent = "You can't delete another users!";
						$("#messageNotification_error").jqxNotification("open");
						return;
					}
					$.ajax({
						url:'main/delete_user',
						method:'post',
						data:{
							tbl_id:rows_det[rowIndex].tbl_id,
							level:rows_det[rowIndex].level,
							business_name:rows_det[rowIndex].business_name
						},
						dataType:'JSON',
						success:function(res){
							if(res == "success"){
								up_flag = false;
								$("#user_name").val("");
								// $("#pwd").val("");
								$("#email").val("");
								$("#tbl_id").focus();
								$("#dataTable").jqxDataTable('updateBoundData');
								$("#noti_text")[0].style.fontSize = '20px';
								$("#noti_text")[0].textContent = "Delete user Success!";
								$("#messageNotification").jqxNotification("open");
							}
							if(res == 'fail'){
								$("#error_noti_text")[0].style.fontSize = '20px';
								$("#error_noti_text")[0].textContent = "He has Secondary TAs.You must delete the Secondary TA first!";
								$("#messageNotification_error").jqxNotification("open");
							}
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
                    var mark = 0;
                    if(rows_det[rowIndex].lock == 1){
                        mark = 0;
                    }
                    if(rows_det[rowIndex].lock == 0){
                        mark = 1;
                    }
                    $.ajax({
                        url:'main/update_lock',
                        method:'post',
                        data:{
                            mark : mark,
                            tbl_id:rows_det[rowIndex].tbl_id
                        },
                        dataType:'JSON',
                        success:function(res){
							if(mark == 0){
                   				$("#noti_text")[0].textContent = "Lockout removed, the client will be able to login now.";
								$("#noti_text")[0].style.fontSize = '20px';
								$("#messageNotification").jqxNotification("open");
                   			}
                   			if(mark == 1){
                   				$("#noti_text")[0].textContent = "Lock was successful, they will be unable to login.";
								$("#noti_text")[0].style.fontSize = '20px';
								$("#messageNotification").jqxNotification("open");
                   			}
							$("#dataTable").jqxDataTable("updateBoundData");
                        }
                    })
                    $("#dataTable").jqxDataTable('endRowEdit', rowIndex, true);
                });
            }
            if ($(".checkbox12").length > 0) {
                $(".checkbox12").change(function (event) {
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
                        url:'main/update_em_status',
                        method:'post',
                        data:{
                            mark : mark,
                            business_name:rows_det[rowIndex].business_name
                            // tbl_id:rows_det[rowIndex].tbl_id
                        },
                        dataType:'JSON',
                        success:function(res){
							$("#noti_text")[0].style.fontSize = '20px';
							if(rows_det[rowIndex].em_status == 1){
                   				$("#noti_text")[0].textContent = "Emergency Broadcast Capability removed!";
                   			}
                   			if(rows_det[rowIndex].em_status == 0){
                   				$("#noti_text")[0].textContent = "Emergency Broadcast Capability enabled!";
                   			}
							$("#messageNotification").jqxNotification("open");
							$("#dataTable").jqxDataTable("updateBoundData");
                        }
                    })
                    $("#dataTable").jqxDataTable('endRowEdit', rowIndex, true);
                });
            }
            if ($(".checkbox_bus").length > 0) {
                $(".checkbox_bus").change(function (event) {
                    var rowIndex = parseInt(event.currentTarget.getAttribute('data-row'));
                    if (isNaN(rowIndex)) {
                        return;
                    }
                    if(rows_det[rowIndex].bus_active == 1){
                        var mark = 0;
                    }
                    if(rows_det[rowIndex].bus_active == 0){
                        var mark = 1;
                    }
                    $.ajax({
                        url:'main/update_bus_active',
                        method:'post',
                        data:{
                            mark : mark,
                            business_name:rows_det[rowIndex].business_name
                        },
                        dataType:'JSON',
                        success:function(res){
							$("#dataTable").jqxDataTable("updateBoundData");
							$("#noti_text")[0].style.fontSize = '20px';
                   			$("#noti_text")[0].textContent = "Business Active Operation Success!";
							$("#messageNotification").jqxNotification("open");
                        }
                    })
                    $("#dataTable").jqxDataTable('endRowEdit', rowIndex, true);
                });
            }
        },
        columns: [
    		{ text: '', cellsAlign: 'left', align: 'center', dataField: 'id', width: "5%" ,filterable:false},
    		{ text: 'id', cellsAlign: 'left', align: 'center',hidden:true, dataField: 'tbl_id', width: "5%" ,filterable:false},
    		{ text: 'num', cellsAlign: 'left', align: 'center',hidden:true, dataField: 'num', width: "5%" ,filterable:false},
    		{ text: 'Business', cellsAlign: 'left', align: 'center', dataField: 'business_name', width: "20%" },
			{ text: 'User Level', cellsAlign: 'left', align: 'center', dataField: 'level', width: "20%" ,filterable:false},
			// { text: 'Real Name', cellsAlign: 'left', align: 'center', dataField: 'real_name', width: "15%" ,filterable:false},
			{ text: 'User name/Email Address', cellsAlign: 'left', align: 'center', dataField: 'name', width: "20%" },
          	// { text: 'password', cellsAlign: 'center', align: 'center', dataField: 'password', width: "15%" ,filterable:false},
          	// { text: 'Email', dataField: 'email', cellsAlign: 'center', align: 'center', width: "15%" ,filterable:false},
			// { text: 'Phone', cellsAlign: 'left', align: 'center', dataField: 'phone', width: "15%" ,filterable:false},
			{ text: 'Current', cellsAlign: 'center', align: 'center', dataField: 'bus_active', width: "10%",
                cellsRenderer: function (row, column, value, rowData) {
                    // if(rowData.num != 0){
	                    if(rowData['bus_active'] == 1){
	                        var checkBox_bus  = "<input type = 'checkbox' checked class='checkbox_bus' data-row='" + row + "'>";
	                        return checkBox_bus;
	                    }
	                    else{
	                        var checkBox_bus  = "<input type = 'checkbox' class='checkbox_bus' data-row='" + row + "'>";
	                        return checkBox_bus;
	                    }
	     //            }
	     //            else{
						// var checkBox_bus  = "<input type = 'checkbox' class='checkbox_bus' disabled data-row='" + row + "'>";
      //                   return checkBox_bus;
	     //            }
                }
            },
			{ text: 'EM', cellsAlign: 'center', align: 'center', dataField: 'em_status', width: "10%",
                cellsRenderer: function (row, column, value, rowData) {
                    if(rowData['em_status'] == 1){
                        var checkBox12  = "<input type = 'checkbox' checked class='checkbox12' data-row='" + row + "'>";
                        return checkBox12;
                    }
                    else{
                        var checkBox12  = "<input type = 'checkbox' class='checkbox12' data-row='" + row + "'>";
                        return checkBox12;
                    }
                }
            },
			{ text: 'Lockout', cellsAlign: 'center', align: 'center', dataField: 'lock', width: "10%",
                cellsRenderer: function (row, column, value, rowData) {
                    if(rowData['lock'] == 1){
                        var checkBox1  = "<input type = 'checkbox' checked class='checkbox1' data-row='" + row + "'>";
                        return checkBox1;
                    }
                    else{
                        var checkBox1  = "<input type = 'checkbox' class='checkbox1' data-row='" + row + "'>";
                        return checkBox1;
                    }
                }
            },
			{ text: '', cellsAlign: 'center', align: 'center', dataField: '', width: "5%" ,
                renderer: function (text, align, height) {
                },
                rendered: function (element, align, height) {
                },
                cellsRenderer: function (row, column, value, rowData) {
                    var checkBox  = "<span class='canc' data-row='" + row + "'><i class='material-icons' style='cursor:pointer'>close</i></span>";
                    return checkBox;
                }
            }
        ]
    });
	$('#dataTable').on('filter',function (event){
		var args = event.args;
		var filters = args.filters;
	})
	$("#business_name").keyup(function(event){
		if(event.keyCode ==222){
			$("#business_name").focus();
			$("#error_noti_text")[0].style.fontSize = '20px';
			$("#error_noti_text")[0].textContent = "You couldn't input apostrophe";
			$("#messageNotification_error").jqxNotification("open");
			return;
		}
	})
    $("#add").click(function(){
		var name = $("#user_name").val();
		var business_name = $("#business_name").val();
		if($("#business_name").val().search("'")>0){
			$("#error_noti_text")[0].style.fontSize = '20px';
			$("#error_noti_text")[0].textContent = "You couldn't input apostrophe";
			$("#messageNotification_error").jqxNotification("open");
			return false;
		}
		
		if(name == "" || name == null){
			$("#user_name").focus();
			return false;
		}
		if((business_name == "" || business_name == null) && $("#use_le").val() == "Admin"){
			$("#business_name").focus();
			return false;
		}
		if($("#use_le").val() == "Primary TA"){
			level = "Secondary TA";
		}
		if( $("#use_le").val() == "Admin"){
			var level = $("#drop").val();
		}
		$.ajax({
			url:'main/add_user',
			method:'post',
			data:{
				name:name,
				// pwd:pwd,
				// email:email,
				business_name:business_name,
				level:level
			},
			dataType:'JSON',
			success:function(res){
				if(res == "User already exits"){
					$("#error_noti_text")[0].style.fontSize = '20px';
					$("#error_noti_text")[0].textContent = "User already exits! Input another name or email";
					$("#messageNotification_error").jqxNotification("open");
				}
				else{
					$("#user_name").val("");
					// $("#pwd").val("");
					$("#drop").val();
					$("#business_name").val("");
					// $("#email").val("");
					$("#user_name").focus();
					$("#noti_text")[0].style.fontSize = '20px';
           			$("#noti_text")[0].textContent = "You have successfully added a new Trusted Agent!";
					$("#messageNotification").jqxNotification("open");
					$("#dataTable").jqxDataTable('updateBoundData');
				}

			}
		})
	})
	var bus_name = "";
	var user_level = "";
	$('#dataTable').on('rowDoubleClick', function (event)
	{
	    up_flag = true;
	    $("#update")[0].style.display = 'inline-block';
	    $("#delete")[0].style.display = 'inline-block';
	    $("#drop")[0].style.display = 'inline-block';
	    var args = event.args;
	    var row = args.row;
	    $("#user_name").val(row.name);
	    // $("#pwd").val(row.password);
	    // $("#email").val(row.email);
	    $("#tbl_id").val(row.tbl_id);
		$("#business_name").val(row.business_name);
		bus_name = row.business_name;
		user_level = row.level;
	    if(row.level == 'Secondary'){
	    	$("#drop").jqxDropDownList({selectedIndex:0});
	    }
	    if(row.level == 'Primary'){
	    	$("#drop").jqxDropDownList({selectedIndex:1});
	    }
	    if(row.level == 'Admin'){
	    	$("#drop").jqxDropDownList({selectedIndex:2});
	    }
	});
	$("#update").click(function(){
		if(up_flag == false){
			$("#messageNotification_error").jqxNotification("open");
			return;
		}
		var name = $("#user_name").val();
		// var pwd = $("#pwd").val();
		// var email = $("#email").val();
		var business_name = $("#business_name").val();
		var level = $("#drop").val();

		if(name == "" || name == null){
			$("#user_name").focus();
			return;
		}
		// if(pwd == "" || pwd == null){
		// 	$("#pwd").focus();
		// 	return;
		// }
		// if(email == "" || email == null){
		// 	$("#email").focus();
		// 	return;
		// }
		if(business_name == "" || business_name == null){
			$("#business_name").focus();
			return;
		}
		$.ajax({
			url:'main/update_user',
			method:'post',
			data:{
				tbl_id:$("#tbl_id").val(),
				name:$("#user_name").val(),
				business_name:$("#business_name").val(),
				// pwd:$("#pwd").val(),
				level:$("#drop").val()
				// email:$("#email").val()
			},
			dataType:'JSON',
			success:function(res){
				up_flag = false;
				$("#user_name").val("");
				$("#drop").jqxDropDownList({selectedIndex:0});
				// $("#pwd").val("");
				// $("#email").val("");
				$("#business_name").val("");
				$("#email").val("");
				$("#tbl_id").focus();
				$("#dataTable").jqxDataTable('updateBoundData');
				$("#noti_text")[0].style.fontSize = '20px';
				$("#noti_text")[0].textContent = "Update Success";
				$("#messageNotification").jqxNotification("open");

			}
		})
	})
	$("#delete").click(function(){
		if(up_flag == false){
			$("#messageNotification_error").jqxNotification("open");
			return;
		}
		$.ajax({
			url:'main/delete_user',
			method:'post',
			data:{
				tbl_id:$("#tbl_id").val(),
				business_name : bus_name,
				level : user_level
			},
			dataType:'JSON',
			success:function(res){
				if(res == "success"){
					up_flag = false;
					$("#user_name").val("");
					// $("#pwd").val("");
					$("#email").val("");
					$("#tbl_id").focus();
					$("#dataTable").jqxDataTable('updateBoundData');
					$("#noti_text")[0].style.fontSize = '20px';
					$("#noti_text")[0].textContent = "Delete user Success!";
					$("#messageNotification").jqxNotification("open");
				}
				if(res == 'fail'){
					$("#error_noti_text")[0].style.fontSize = '20px';
					$("#error_noti_text")[0].textContent = "He has Secondary TAs.You must delete the Secondary TA first!";
					$("#messageNotification_error").jqxNotification("open");
				}
			}
		})
	})
	$("#sign_out").click(function(){
		document.location = "login";
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
				$("#noti_text")[0].style.fontSize = '20px';
				$("#noti_text")[0].textContent = "Thank you for your suggestion. We appreciate the idea and the fact you spent time helping us improve this site and our services.";
                $("#messageNotification")[0].style.width = '850';
                $("#messageNotification").jqxNotification("open");
                // alert('Success');
            }
        })
    })
})
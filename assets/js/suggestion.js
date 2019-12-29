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
        width: 650, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "success"
    });
    $("#messageNotification_error").jqxNotification({
        width: 450, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "error"
    });
    $("#messageNotification_sugg").jqxNotification({
        width: 850, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "success"
    });
    var source =
    {
        dataType: 'json',
        dataFields: [
       		{ name: 'id', type: 'number' },
            { name: 'tbl_id', type: 'number' },
       		{ name: 'cbeck_sta', type: 'number' },
            { name: 'business_name', type: 'string' },
            { name: 'sug_date', type: 'string' },
            { name: 'check_sta', type: 'string' },
            { name: 'suggest', type: 'string' }
        ], 
        id: 'id',
        url:'sugg/get_sugg'
    };
    var rows_det = "";
    var dataAdapter = new $.jqx.dataAdapter(source, {
        loadComplete: function () {
            // data is loaded.
            $("#dataTable").jqxDataTable('getRows');

			rows_det = $("#dataTable").jqxDataTable('getRows');
			
			if($("#ul").val() != "Admin"){
                $("#dataTable").jqxDataTable('hideColumn','dd');
				$("#dataTable").jqxDataTable('hideColumn','check_sta');
                // $("#dataTable").jqxDataTable('setColumnProperty', 'business_name', 'width', "25%");
				$("#dataTable").jqxDataTable('setColumnProperty', 'business_name', 'width', "25%");
			}
         
        }
	});
    $("#dataTable").jqxDataTable(
    {
        source: dataAdapter,
        width : "100%",
        pageable: true,
        altRows: true,
        editable : true,
        editSettings: { saveOnPageChange: true, saveOnBlur: true, saveOnSelectionChange: false, cancelOnEsc: true, saveOnEnter: true, editOnDoubleClick: false, editOnF2: false },
        filterable: true,
		pageSize  : 20,
		columnsResize: true,
        rendered: function () {
            if ($(".canc").length > 0) {
                $(".canc").click(function (event) {
                    var rowIndex = parseInt(event.currentTarget.getAttribute('data-row'));
                    if (isNaN(rowIndex)) {
                        return;
                    }
                    $.ajax({
                        url:'sugg/delete_sugg',
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
            if ($(".checkbox12").length > 0) {
                $(".checkbox12").change(function (event) {
                    var rowIndex = parseInt(event.currentTarget.getAttribute('data-row'));
                    if (isNaN(rowIndex)) {
                        return;
                    }
                    var mark = 0;
                    // console.log(rows_det[rowIndex].check_sta);
                    if(rows_det[rowIndex].check_sta == 1){
                        mark = 0;
                    }
                    if(rows_det[rowIndex].check_sta == 0){
                        mark = 1;
                    }
                    $.ajax({
                        url:'sugg/active',
                        method:'post',
                        data:{
                            mark : mark,
                            tbl_id:rows_det[rowIndex].tbl_id
                        },
                        dataType:'JSON',
                        success:function(res){
                            if(mark == 0){
                                $("#noti_text")[0].textContent = "Inactivated.";
                                $("#noti_text")[0].style.fontSize = '20px';
                                $("#messageNotification").jqxNotification("open");
                            }
                            if(mark == 1){
                                $("#noti_text")[0].textContent = "Activate.";
                                $("#noti_text")[0].style.fontSize = '20px';
                                $("#messageNotification").jqxNotification("open");
                            }
                            $("#dataTable").jqxDataTable("updateBoundData");
                        }
                    })
                    $("#dataTable").jqxDataTable('endRowEdit', rowIndex, true);
                });
            }
        },
        columns: [
            { text: 'id', cellsAlign: 'center', align: 'center', dataField: 'id', width: "5%" ,filterable:false},
            { text: 'id', cellsAlign: 'center', align: 'center',hidden:true, dataField: 'tbl_id', width: "5%" ,filterable:false},
            { text: 'Client Suggestion', cellsAlign: 'left', align: 'center', dataField: 'suggest', width: "55%" },
            { text: 'Business', cellsAlign: 'left', align: 'center', dataField: 'business_name', width: "15%" },
            { text: 'Date', cellsAlign: 'left', align: 'center', dataField: 'sug_date', width: "15%" },
            { text: 'Active', cellsAlign: 'center', align: 'center', dataField: 'check_sta', width: "5%",
                cellsRenderer: function (row, column, value, rowData) {
                    if(rowData['check_sta'] == 1){
                        var checkBox12  = "<input type = 'checkbox' checked class='checkbox12' data-row='" + row + "'>";
                        return checkBox12;
                    }
                    else{
                        var checkBox12  = "<input type = 'checkbox' class='checkbox12' data-row='" + row + "'>";
                        return checkBox12;
                    }
                }
            },
            { text: '', cellsAlign: 'center', align: 'center', dataField: 'dd', width: "5%" ,
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
				$("#noti_text_sugg")[0].textContent = 'Thank you for your suggestion. We appreciate the idea and the fact you spent time helping us improve this site and our services.';
                $("#messageNotification_sugg").jqxNotification("open");
                $("#dataTable").jqxDataTable("updateBoundData");
                // alert('Success');
            }
        })
    })
})

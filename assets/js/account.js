$(document).ready(function(){
	var tbl_id = 0;
	var old_pwd = "";
	var body_left = 0;
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
        width: 450, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "success"
    });
    $("#messageNotification1").jqxNotification({
        width: 850, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "success"
    });
    $("#messageNotification_error").jqxNotification({
        width: 450, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "error"
    });
	$.ajax({
		url:'account/get_account',
		method:'post',
		data:{
			// name:name,
			// pwd:pwd,
			// email:email
		},
		dataType:'JSON',
		success:function(res){
			$("#business_name").val(res[0].business_name);
			$("#first_name").val(res[0].first_name);
			$("#last_name").val(res[0].last_name);
			$("#email").val(res[0].email);
			tbl_id = res[0].tbl_id;
			old_pwd = res[0].password;
			$("#old_pwd").val(res[0].password);
			$("#phone").val(res[0].phone);
			$("#service").val(res[0].service);
			$("#first_name").focus();
			// $("#dataTable").jqxDataTable('updateBoundData');

		}
	})
	$("#update").click(function(){
		if($("#new_pwd").val()!= $("#con_pwd").val()){
			$("#con_pwd")[0].dataset.toggle = "popover";
			$("#con_pwd")[0].dataset.container = "body";
			$("#con_pwd")[0].dataset.content = "same";
			// $('#con_pwd').popover({
			//   	trigger: 'focus'
			// });
			$("#con_pwd").focus();
			return;
		}

		$.ajax({
			url:'account/update_account',
			method:'post',
			data:{
				tbl_id : tbl_id,
				first_name : $("#first_name").val(),
				last_name : $("#last_name").val(),
				email : $("#email").val(),
				new_pwd : $("#new_pwd").val(),
				phone:$("#phone").val(),
				service:$("#service").val()
			},
			dataType:'JSON',
			success:function(res){
				$("#first_name").val(res[0].first_name);
				$("#last_name").val(res[0].last_name);
				$("#phone").val(res[0].phone);
				$("#new_pwd").val("");
				$("#con_pwd").val("");
				$("#noti_text")[0].style.fontSize = '20px';
				$("#noti_text")[0].textContent = 'Success';
                $("#messageNotification").jqxNotification("open");
				// document.location = "account";
			}
		})
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
				$("#noti_text1")[0].style.fontSize = '20px';
				$("#noti_text1")[0].textContent = 'Thank you for your suggestion. We appreciate the idea and the fact you spent time helping us improve this site and our services.';
                // $("#messageNotification1")[0].style.width = '850';
                $("#messageNotification1").jqxNotification("open");
                // alert('Success');
            }
        })
	})
	$("#phone").keypress(function(event){
		if(event.target.value ==""){
			event.target.value = "(" + event.target.value;
		}
		if(event.target.selectionEnd == 4){
			event.target.value  = event.target.value + ")";
		}
		if(event.target.selectionEnd == 8){
			event.target.value  = event.target.value + "-";
		}
	})
	$("#sign_out").click(function(){
		document.location = "login";
	})
})

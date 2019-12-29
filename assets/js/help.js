function sel_sub(id){
	$(".list").fadeOut('fast');
	$("#dis_ti")[0].innerHTML = "Sub Categories";
	$.ajax({
		url:'help_c/get_sub_cat',
		method:'post',
		data:{
			tbl_id:id
		},
		dataType:'JSON',
		success:function(res){
			$("#sub_list")[0].innerHTML = "";
			for(var i = 0;  i< res.length ; i++){
				$("#sub_list")[0].innerHTML += '<div class="num" onclick="sel_an('+res[i].tbl_id+')">'+
										      		'<h3>'+res[i].text+'</h3>'+
										    	'</div>';
			}
			// $("#dataTable").jqxDataTable('updateBoundData');

			$("#sub_list").fadeIn("slow");
		}
	})
}
function sel_an(id){
	$("#sub_list").fadeOut("fast");
	$.ajax({
		url:'help_c/get_an',
		method:'post',
		data:{
			tbl_id:id
		},
		dataType:'JSON',
		success:function(res){
			$("#ans")[0].innerHTML = "";
			for(var i = 0;  i< res.length ; i++){
				$("#ans")[0].innerHTML += '<div class="blockquote-wrapper">'+
											  	'<div class="blockquote">'+
												    '<h1>'+res[i]['answer']+'</span>'+
												    '</h1>'+
												    '<h4><em>'+res[i]['question']+'</h4>'+
											  	'</div>'+
											'</div>';
			}
			// $("#dataTable").jqxDataTable('updateBoundData');

			$("#ans").fadeIn("slow");
		}
	})
	
}
$('#main_cat').click(function(){
	$(".list").fadeIn("slow");
	$("#sub_list").fadeOut('fast');
	$("#ans").fadeOut("fast");	
	$("#dis_ti")[0].innerHTML = "Main Categories";
})
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
    $("#messageNotification_error").jqxNotification({
        width: 450, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "error"
    });
	$.ajax({
		url:'help_c/get_main_cat',
		method:'post',
		// data:{
			// name:name,
			// pwd:pwd,
			// email:email
		// },
		dataType:'JSON',
		success:function(res){
			console.log(res);
			$(".list")[0].innerHTML = "";
			for(var i = 0;  i< res.length ; i++){
				$(".list")[0].innerHTML += '<div class="num" onclick="sel_sub('+res[i].tbl_id+')">'+
										      		'<h3>'+res[i].text+'</h3>'+
										    	'</div>';
			}
			// $("#dataTable").jqxDataTable('updateBoundData');

		}
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
                $("#messageNotification")[0].style.width = '850';
				$("#noti_text")[0].textContent = 'Thank you for your suggestion. We appreciate the idea and the fact you spent time helping us improve this site and our services.';
                $("#messageNotification").jqxNotification("open");
                // alert('Success');
            }
        })
	})
	$("#sign_out").click(function(){
		document.location = "login";
	})
})

// This is the suggestin part
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
	autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 5000, template: "success"
});
$("#messageNotification_error").jqxNotification({
	width: 550, position: "top-right", opacity: 0.9,height :75,
	autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 5000, template: "error"
});
// This is slide part
var sli_data = "";
var slide_update = 'false';//when fileunput is true:true
var sup_flag = 'false';//row Double click
var slide_name = "";
var tbl_id = "";
function del_sli(id){
	
	$.ajax({
		url:'content/delete_slide',
		method:'post',
		data:{
			tbl_id:sli_data[id].tbl_id
		},
		dataType:'JSON',
		success:function(res){
			get_slide();
			$("#noti_text")[0].style.fontSize = '20px';
			$("#noti_text")[0].textContent = "DELETE SUCCESS!";
			$("#messageNotification").jqxNotification("open");
		}
	})
}
function edit_sli(id){
	$("#new_sli").css('display','none');
	$("#save").css('display','block');
	slide_update = 'true';
	$(".modal-title").text("Update : "+sli_data[id].sli_title);
	tbl_id = sli_data[id].tbl_id;
	$("#sli_title").val(sli_data[id].sli_title);
	$("#sli_text").val(sli_data[id].sli_text);
	$("#mod").click();
}
function insert_sli(){
	$("#new_sli").css('display','block');
	$("#save").css('display','none');
	$("#mod").click();
	$(".modal-title").text("Insert Slide");
}
get_slide();
function get_slide(){
	$.ajax({
		url:'content/get_slide',
		method:'post',
		// data:{
		//     sugg_cont:sugg_cont
		// },
		dataType:'JSON',
		success:function(res){
			sli_data = res;
			$("#slide_con")[0].innerHTML = "";
			for(var i = 0; i<res.length; i++){
				$("#slide_con")[0].innerHTML += 
					"<figure class='snip1273'>"+
						"<img src='assets/img/slide/"+res[i].cre_date+res[i].slide_name+"' alt='sample72'/>"+
						"<figcaption>"+
							"<h6><a sli_num="+i+"></a></h6>"+
							"<h3>"+res[i].sli_title+"</h3>"+
							"<h4>"+res[i].sli_text+"</h4>"+
							"<div class='row'><a style='display:content;position:inherit''><i class='material-icons' onclick='edit_sli("+i+")'>edit</i></a>"+
							"<a href='#' style='display:content;position:inherit'><i class='material-icons' onclick='del_sli("+i+")'>cancel</i></a></div>"+
						"</figcaption>"+
						// "<div class='row'><a href='#'><i class='material-icons' onclick='del_sli("+i+")'>cancel</i></a><a><i class='material-icons' onclick='edit_sli("+i+")'>edit</i></a></div>"+
					"</figure>";
			}
			$("#slide_con")[0].innerHTML += 
					"<figure class='snip1273' onclick='insert_sli()'>"+
						"<img src='img/add.jpg' alt='sample72'/ style='1px solid cadetblue'>"+
						"<figcaption>"+
							"<h6></h6>"+
							"<h3>New Slide</h3>"+
							"<h4></h4>"+
							"<div class='row'></div>"+
						"</figcaption>"+
					"</figure>";
		}
	})
}
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

$("#save").on('click',function(){			
	if($("#sli_title").val() == ""){
		$("#sli_title").focus();
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Insert the title";
		$("#messageNotification_error").jqxNotification("open");
		return false;
	}
	var sf = new FormData(document.getElementById('slide_form'));
	sf.append('sli_title',$("#sli_title").val());
	sf.append('sli_text',$("#sli_text").val());
	sf.append('slide_update',slide_update);
	sf.append('sup_flag',sup_flag);
	sf.append('tbl_id',tbl_id);
	// sf.append('slide_name',slide_name);
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
				$('.close').click();
				sup_flag = "false";
				slide_update = 'false';
				
				$("#sli_title").val("");
				$("#sli_text").val("");
				get_slide();
				var status = 'Update Success';
				var type = 'top-right';
				$("#noti_text")[0].style.fontSize = '20px';
				$("#noti_text")[0].textContent = "Update SUCCESS!";
				$("#messageNotification").jqxNotification("open");
				// $("#dataTable").jqxDataTable("updateBoundData");
				// $("#noti_text")[0].style.fontSize = '20px';
				// $("#noti_text")[0].textContent = 'Success';
				// $("#messageNotification").jqxNotification("open");
			}
		}
	});
	return false;
})
$("#new_sli").on('click',function(){	
	if(sup_flag == 'false'){
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Insert the Image";
		$("#messageNotification_error").jqxNotification("open");
		return false;
	}		
	if($("#sli_title").val() == ""){
		$("#sli_title").focus();
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Insert the title";
		$("#messageNotification_error").jqxNotification("open");
		return false;
	}
	var sf = new FormData(document.getElementById('slide_form'));
	sf.append('sli_title',$("#sli_title").val());
	sf.append('sli_text',$("#sli_text").val());
	// sf.append('slide_name',slide_name);
	$.ajax({
		url:'content/insert_slide',
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
				$('.close').click();
				sup_flag = "false";
				
				$("#sli_title").val("");
				$("#sli_text").val("");
				get_slide();
				var status = 'Update Success';
				var type = 'top-right';
				$("#noti_text")[0].style.fontSize = '20px';
				$("#noti_text")[0].textContent = "Update SUCCESS!";
				$("#messageNotification").jqxNotification("open");
			}
		}
	});
	return false;
})
// About Page
var abo_data = "";
var abo_iner = "";
var tbl_about_id = 0;
var about_flg = "false";
function del_abo(id){
	$.ajax({
		url:'content/delete_about',
		method:'post',
		data:{
			tbl_id:abo_data[id]['tbl_id']
		},
		dataType:'JSON',
		success:function(res){
			get_about();
			$("#noti_text")[0].style.fontSize = '20px';
			$("#noti_text")[0].textContent = "DELETE SUCCESS!";
			$("#messageNotification").jqxNotification("open");
		}
	})
}
function edit_abo(id){
	$("#update_abo").css('display','block');
	$("#new_abo").css('display','none');
	tbl_about_id = abo_data[id]['tbl_id'];
	$("#abo_mo_ti").text("Update "+abo_data[id]['title']);
	$("#abo_text").val(abo_data[id]['text']);
	$("#abo_title").val(abo_data[id]['title']);
	$("#mod_abo").click();
}
function add_abo(){
	$("#mod_abo").click();
	$("#abo_mo_ti").text("New About ");
	$("#update_abo").css('display','none');
	$("#new_abo").css('display','block');
}
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


get_about();

function get_about(){
	$.ajax({
		url:'content/get_about',
		method:'post',
		dataType:'JSON',
		success:function(res){
			abo_data = res;
			$("#about_con")[0].innerHTML = "";
			abo_iner = "";
			abo_iner = '<div class="row about-cols">';
			for(var i = 0; i<res.length; i++){
				abo_iner += 
					"<div class='col-md-3'>"+
							"<div class='about-col'>"+
								"<div class='img' style='cursor:pointer'>"+
									"<img src='assets/img/about/"+res[i].cre_date+res[i].abo_img+"' alt='' class='img-fluid'>"+
								"</div>"+
								"<h2 class='title'><a href='#'>"+res[i].title+"</a></h2>"+
								"<p>"+res[i].text+"</p>"+
								"<div class='row'><p><i class='material-icons' onclick='edit_abo("+i+")'>edit</i></p>"+
								"<p><i class='material-icons' onclick='del_abo("+i+")'>cancel</i></p>"+
							"</div></div>"+
						"</div>";
			}
			abo_iner += '<div class="col-md-3" style="cursor:pointer" onclick="add_abo()">'+
								'<div class="about-col">'+
									'<div class="img" style="cursor:pointer">'+
										'<img src="img/add.jpg" alt="" class="img-fluid">'+
									'</div>'+
									'<h2 class="title">New Title</h2>'+
									'<p>New Text</p>'+
									'<div class="row" style="padding:15px"></div>'+
								'</div>'+
							'</div>'+								
						'</div>';
			$("#about_con")[0].innerHTML = abo_iner;
		}
	})
}
$("#update_abo").click(function(){
	if($("#abo_title").val() == ""){
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Please Insert Title!";
		$("#messageNotification_error").jqxNotification("open");
		$("#abo_title").focus();
		return false;
	}
	if($("#abo_text").val() == ""){
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Please Insert Text!";
		$("#messageNotification_error").jqxNotification("open");
		$("#abo_text").focus();
		return false;
	}
	var sf1 = new FormData(document.getElementById('slide_form1'));
	sf1.append('abo_title',$("#abo_title").val());
	sf1.append('abo_text',$("#abo_text").val());
	sf1.append('tbl_id',tbl_about_id);
	sf1.append('about_flg',about_flg);

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
				$('.close').click();
				get_about();
				about_flg = 'false';
				$("#abo_title").val("");
				$("#abo_text").val("");
				$("#noti_text")[0].style.fontSize = '20px';
				$("#noti_text")[0].textContent = 'Success';
				$("#messageNotification").jqxNotification("open");
			}
		}
	});
	return false;
})
$("#new_abo").click(function(){
	if(about_flg =='false'){
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Please Insert New Image!";
		$("#messageNotification_error").jqxNotification("open");
		return false;
	}
	if($("#abo_title").val() == ""){
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Please Insert Title!";
		$("#messageNotification_error").jqxNotification("open");
		$("#abo_title").focus();
		return false;
	}
	if($("#abo_text").val() == ""){
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Please Insert Text!";
		$("#messageNotification_error").jqxNotification("open");
		$("#abo_text").focus();
		return false;
	}
	var sf1 = new FormData(document.getElementById('slide_form1'));
	sf1.append('abo_title',$("#abo_title").val());
	sf1.append('abo_text',$("#abo_text").val());

	$.ajax({
		url:'content/insert_about',
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
				$('.close').click();
				get_about();
				about_flg = 'false';
				$("#abo_title").val("");
				$("#abo_text").val("");
				$("#noti_text")[0].style.fontSize = '20px';
				$("#noti_text")[0].textContent = 'Success';
				$("#messageNotification").jqxNotification("open");
			}
		}
	});
	return false;
})
// This si portfolio
var port_data = "";
var port_iner = "";
var tbl_port_id = 0;
var port_flg = "false";
function del_port(id){
	$.ajax({
		url:'content/delete_port',
		method:'post',
		data:{
			tbl_id:port_data[id]['tbl_id']
		},
		dataType:'JSON',
		success:function(res){
			get_port();
			$("#noti_text")[0].style.fontSize = '20px';
			$("#noti_text")[0].textContent = "DELETE SUCCESS!";
			$("#messageNotification").jqxNotification("open");
		}
	})
}
function edit_port(id){
	$("#update_port").css('display','block');
	$("#new_port").css('display','none');
	tbl_port_id = port_data[id]['tbl_id'];
	$("#port_mo_ti").text("Update "+port_data[id]['p_name']);
	$("#port_text").val(port_data[id]['p_text']);
	$("#port_title").val(port_data[id]['p_name']);
	$("#mod_port").click();
}
function add_port(){
	$("#port_mo_ti").text("New Login ");
	$("#mod_port").click();
	$("#update_port").css('display','none');
	$("#new_port").css('display','block');
}
$("#dis3").click(function(){
	$("#userfile3").click();
})
$("#ddis3").click(function(){
	$("#userfile3").click();
})
$("#userfile3").on("change",function(event){
	port_flg = 'true';
	var _URL = window.URL;
	var file, img;
	if ((file = this.files[0])) {
		img = new Image();
		img.onload = function () {
		};
		img.src = _URL.createObjectURL(file);
	}
	$("#dis3").css('display','none');
})


get_port();

function get_port(){
	$.ajax({
		url:'content/get_port',
		method:'post',
		dataType:'JSON',
		success:function(res){
			port_data = res;
			$("#port_con")[0].innerHTML = "";
			port_iner = "";
			port_iner = '<div class="row about-cols">';
			for(var i = 0; i<res.length; i++){
				port_iner += 
					"<div class='col-md-3'>"+
							"<div class='about-col'>"+
								"<div class='img' style='cursor:pointer'>"+
									"<img src='assets/img/portfolio/"+res[i].cre_date+res[i].img_url+"' alt='' class='img-fluid'>"+
								"</div>"+
								"<h2 class='title'><a href='#'>"+res[i].p_name+"</a></h2>"+
								"<p>"+res[i].p_text+"</p>"+
								"<div class='row'><p><i class='material-icons' onclick='edit_port("+i+")'>edit</i></p>"+
								"<p><i class='material-icons' onclick='del_port("+i+")'>cancel</i></p>"+
							"</div></div>"+
						"</div>";
			}
			port_iner += '<div class="col-md-3" style="cursor:pointer" onclick="add_port()">'+
								'<div class="about-col">'+
									'<div class="img" style="cursor:pointer">'+
										'<img src="img/add.jpg" alt="" class="img-fluid">'+
									'</div>'+
									'<h2 class="title">New Title</h2>'+
									'<p>New Text</p>'+
									'<div class="row" style="padding:15px"></div>'+
								'</div>'+
							'</div>'+								
						'</div>';
			$("#port_con")[0].innerHTML = port_iner;
		}
	})
}
$("#update_port").click(function(){
	if($("#port_title").val() == ""){
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Please Insert Title!";
		$("#messageNotification_error").jqxNotification("open");
		$("#port_title").focus();
		return false;
	}
	if($("#port_text").val() == ""){
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Please Insert Text!";
		$("#messageNotification_error").jqxNotification("open");
		$("#port_text").focus();
		return false;
	}
	var sf3 = new FormData(document.getElementById('slide_form3'));
	sf3.append('port_title',$("#port_title").val());
	sf3.append('port_text',$("#port_text").val());
	sf3.append('tbl_id',tbl_port_id);
	sf3.append('port_flg',port_flg);

	$.ajax({
		url:'content/update_port',
		// secureuri: false,
		type:'post',
		data : sf3,
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
				$('.close').click();
				get_port();
				port_flg = 'false';
				$("#port_title").val("");
				$("#port_text").val("");
				$("#noti_text")[0].style.fontSize = '20px';
				$("#noti_text")[0].textContent = 'Success';
				$("#messageNotification").jqxNotification("open");
			}
		}
	});
	return false;
})
$("#new_port").click(function(){
	if(port_flg =='false'){
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Please Insert New Image!";
		$("#messageNotification_error").jqxNotification("open");
		return false;
	}
	if($("#port_title").val() == ""){
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Please Insert Title!";
		$("#messageNotification_error").jqxNotification("open");
		$("#port_title").focus();
		return false;
	}
	if($("#port_text").val() == ""){
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Please Insert Text!";
		$("#messageNotification_error").jqxNotification("open");
		$("#port_text").focus();
		return false;
	}
	var sf3 = new FormData(document.getElementById('slide_form3'));
	sf3.append('port_title',$("#port_title").val());
	sf3.append('port_text',$("#port_text").val());

	$.ajax({
		url:'content/insert_port',
		// secureuri: false,
		type:'post',
		data : sf3,
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
				$('.close').click();
				get_port();
				port_flg = 'false';
				$("#port_title").val("");
				$("#port_text").val("");
				$("#noti_text")[0].style.fontSize = '20px';
				$("#noti_text")[0].textContent = 'Success';
				$("#messageNotification").jqxNotification("open");
			}
		}
	});
	return false;
})
// End of portfolio


// This is team part
var team_data = "";
var team_update = 'false';//when fileunput is true:true
var team_flag = 'false';//row Double click
var tbl_team_id = 0;
function del_team(id){
	// console.log(sli_data[id].tbl_id);
	$.ajax({
		url:'content/delete_team',
		method:'post',
		data:{
			tbl_id:team_data[id].tbl_id
		},
		dataType:'JSON',
		success:function(res){
			get_team();
			$("#noti_text")[0].style.fontSize = '20px';
			$("#noti_text")[0].textContent = "DELETE SUCCESS!";
			$("#messageNotification").jqxNotification("open");
		}
	})
}
function edit_team(id){
	$("#new_team").css('display','none');
	$("#update_team").css('display','block');
	team_update = 'true';
	$("#team_mo_ti").text("Update : "+team_data[id].t_name);
	tbl_team_id = team_data[id].tbl_id;
	$("#team_title").val(team_data[id].t_name);
	$("#team_text").val(team_data[id].t_text);
	$("#mod_team").click();
}
function insert_team(){
	$("#new_team").css('display','block');
	$("#update_team").css('display','none');
	$("#mod_team").click();
	$("#team_mo_ti").text("Insert Team Member");
}
get_team();
function get_team(){
	$.ajax({
		url:'content/get_team',
		method:'post',
		// data:{
		//     sugg_cont:sugg_cont
		// },
		dataType:'JSON',
		success:function(res){
			team_data = res;
			$("#team_con")[0].innerHTML = "";
			for(var i = 0; i<res.length; i++){
				$("#team_con")[0].innerHTML += 
					"<figure class='snip1273'>"+
						"<img src='assets/img/team/"+res[i].cre_date+res[i].img_url+"' alt='sample72'/>"+
						"<figcaption>"+
							"<h6><a team_num="+i+"></a></h6>"+
							"<h3>"+res[i].t_name+"</h3>"+
							"<h4>"+res[i].t_text+"</h4>"+
							"<div class='row'><a style='display:content;position:inherit''><i class='material-icons' onclick='edit_team("+i+")'>edit</i></a>"+
							"<a href='#' style='display:content;position:inherit'><i class='material-icons' onclick='del_team("+i+")'>cancel</i></a></div>"+
						"</figcaption>"+
						// "<div class='row'><a href='#'><i class='material-icons' onclick='del_sli("+i+")'>cancel</i></a><a><i class='material-icons' onclick='edit_sli("+i+")'>edit</i></a></div>"+
					"</figure>";
			}
			$("#team_con")[0].innerHTML += 
					"<figure class='snip1273' onclick='insert_team()'>"+
						"<img src='img/man.png' alt='sample72'/ style='1px solid cadetblue'>"+
						"<figcaption>"+
							"<h6></h6>"+
							"<h3>New Member</h3>"+
							"<h4></h4>"+
							"<div class='row'></div>"+
						"</figcaption>"+
					"</figure>";
		}
	})
}
$("#userfile4").on("change",function(event){
	team_flag = 'true';
	var _URL = window.URL;
	var file, img;
	if ((file = this.files[0])) {
		img = new Image();
		img.onload = function () {
		};
		img.src = _URL.createObjectURL(file);
	}
	$("#dis4").css('display','none');
})

$("#dis4").click(function(){
	$("#userfile4").click();
})
$("#ddis4").click(function(){
	$("#userfile4").click();
})

$("#update_team").on('click',function(){			
	if($("#team_title").val() == ""){
		$("#team_title").focus();
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Insert the title";
		$("#messageNotification_error").jqxNotification("open");
		return false;
	}
	var sf4 = new FormData(document.getElementById('slide_form4'));
	sf4.append('team_title',$("#team_title").val());
	sf4.append('team_text',$("#team_text").val());
	sf4.append('team_flag',team_flag);
	sf4.append('tbl_id',tbl_team_id);
	// sf.append('slide_name',slide_name);
	$.ajax({
		url:'content/update_team',
		// secureuri: false,
		type:'post',
		data : sf4,
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
				$('.close').click();
				team_flag = "false";
				team_update = 'false';
				
				$("#team_title").val("");
				$("#team_text").val("");
				get_team();
				$("#noti_text")[0].style.fontSize = '20px';
				$("#noti_text")[0].textContent = "Update SUCCESS!";
				$("#messageNotification").jqxNotification("open");
				// $("#dataTable").jqxDataTable("updateBoundData");
				// $("#noti_text")[0].style.fontSize = '20px';
				// $("#noti_text")[0].textContent = 'Success';
				// $("#messageNotification").jqxNotification("open");
			}
		}
	});
	return false;
})
$("#new_team").on('click',function(){	
	if(team_flag == 'false'){
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Insert the Image";
		$("#messageNotification_error").jqxNotification("open");
		return false;
	}		
	if($("#team_title").val() == ""){
		$("#team_title").focus();
		$("#error_noti_text")[0].style.fontSize = '20px';
		$("#error_noti_text")[0].textContent = "Insert the title";
		$("#messageNotification_error").jqxNotification("open");
		return false;
	}
	var sf4 = new FormData(document.getElementById('slide_form4'));
	sf4.append('team_title',$("#team_title").val());
	sf4.append('team_text',$("#team_text").val());
	// sf.append('slide_name',slide_name);
	$.ajax({
		url:'content/insert_team',
		// secureuri: false,
		type:'post',
		data : sf4,
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
				$('.close').click();
				team_flag = "false";
				
				$("#team_title").val("");
				$("#team_text").val("");
				get_team();
				$("#noti_text")[0].style.fontSize = '20px';
				$("#noti_text")[0].textContent = "Update SUCCESS!";
				$("#messageNotification").jqxNotification("open");
			}
		}
	});
	return false;
})
// End of team

// This is the part of the price
var price_data = "";
var price_inner = "";
var tbl_price_id = 0;

function save_price(id){
	tbl_price_id = price_data[id].tbl_id;
	var price_input = $(".plan").find('input');
	var input_start = id * 6;
	var input_end = input_start+6;
	// for(var i = input_start; i<input_end;i++){
	// 	console.log(price_input[i].value);
	// }
	$.ajax({
        url:'content/update_price',
        method:'post',
        data : {
            sp_text1 : price_input[input_start+1].value,
            sp_text2 : price_input[input_start+3].value,
            sp_text3 : price_input[input_start+4].value,
            sp_text4 : price_input[input_start+5].value,
            sp_price : price_input[input_start+2].value,
            sp_title : price_input[input_start].value,
            tbl_id : tbl_price_id
        },
        dataType:'JSON',
        success:function(res){
            if(res == "success"){ 
				get_price();
				tbl_price_id = 0;
                $("#noti_text")[0].style.fontSize = '20px';
                $("#noti_text")[0].textContent = 'Success';
                $("#messageNotification").jqxNotification("open");
            }
        }
    });
}
function delete_price(id){
	tbl_price_id = price_data[id].tbl_id;
	$.ajax({
        url:'content/delete_price',
        method:'post',
        data : {
			tbl_id : tbl_price_id
		},
        dataType:'JSON',
        success:function(res){
            if(res == "success"){ 
				get_price();
				tbl_price_id = 0;
                $("#noti_text")[0].style.fontSize = '20px';
                $("#noti_text")[0].textContent = 'Success';
                $("#messageNotification").jqxNotification("open");
            }
        }
    });
}
function new_price(){
	$.ajax({
        url:'content/insert_price',
        method:'post',
        data : {
            sp_text1 : $("#p_text1").val(),
            sp_text2 : $("#p_text2").val(),
            sp_text3 : $("#p_text3").val(),
            sp_text4 : $("#p_text4").val(),
            sp_price : $("#p_price").val(),
            sp_title : $("#p_title").val()
        },
        dataType:'JSON',
        success:function(res){
            if(res == "success"){ 
				get_price();
				tbl_price_id = 0;    
                $("#noti_text")[0].style.fontSize = '20px';
                $("#noti_text")[0].textContent = 'Success';
                $("#messageNotification").jqxNotification("open");
            }
        }
    });
}

get_price();
// price_con
function get_price(){
	$.ajax({
		url:'content/get_price',
		method:'post',
		// data:{
		//     sugg_cont:sugg_cont
		// },
		dataType:'JSON',
		success:function(res){
			price_data = res;
			$("#price_con")[0].innerHTML = "";
			price_inner = '<div class="row">';
			for(var i = 0; i<res.length; i++){
				price_inner += 
					'<div class="col-lg-3" data-wow-delay=".5s">'+
							'<div class="plan text-center">'+
								'<span class="plan-name"><input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" value="'+res[i]['p_title']+'" ><small><input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" value="'+res[i]['p_text1']+'"> </small></span>'+
								'<p class="plan-price"><sup class="currency">$</sup><strong><input type="number" class="form-control" id="p_price" aria-describedby="emailHelp" placeholder="" value="'+res[i]['p_price']+'"></strong><sub></sub></p>'+
								'<ul class="list-unstyled">'+
									'<li><input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" value="'+res[i]['p_text2']+'"></li>'+
									'<li><input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" value="'+res[i]['p_text3']+'"></li>'+
									'<li><input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" value="'+res[i]['p_text4']+'"></li>'+
								'</ul>'+
								'<a class="btn btn-primary" onclick="save_price('+i+')">Save</a>'+
								'<a class="btn btn-primary" onclick="delete_price('+i+')">Delete</a>'+
							'</div>'+
						'</div>';
			}
			price_inner +='<div class="col-lg-3" data-wow-delay=".5s">'+
							'<div class="plan text-center featured">'+
								'<span class="plan-name"><input type="text" class="form-control" aria-describedby="emailHelp" placeholder="New Price" id="p_title"> <small>'+
								'<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="" id="p_text1"></small></span>'+
								'<p class="plan-price"><sup class="currency">$</sup><strong><input type="number"  id="p_price" class="form-control" aria-describedby="emailHelp" placeholder=""></strong><sub></sub></p>'+
								'<ul class="list-unstyled">'+
									'<li><input type="text" id="p_text2" class="form-control" aria-describedby="emailHelp" placeholder=""></li>'+
									'<li><input type="text" id="p_text3" class="form-control" aria-describedby="emailHelp" placeholder=""></li>'+
									'<li><input type="text" id="p_text4" class="form-control" aria-describedby="emailHelp" placeholder=""></li>'+
								'</ul>'+
								'<a class="btn btn-primary" onclick="new_price()">New</a>'+
							'</div>'+
						'</div>'
			price_inner +='</div>';
			$("#price_con")[0].innerHTML = price_inner;
		}
	})
}
// End of the price
// Service
var service_data = "";
var service_inner = "";
var tbl_service_id = 0;

function save_service(id){
	tbl_service_id = service_data[id].tbl_id;
	var service_input = $(".plan1").find('textarea');
	var service_start = id * 2;
	var service_end = service_start+2;
	// for(var i = service_start; i<service_end;i++){
	// 	console.log(service_input[i].value);
	// }

	$.ajax({
        url:'content/update_service',
        method:'post',
        data : {
            s_title : service_input[service_start].value,
            s_text : service_input[service_start+1].value,
            tbl_id : tbl_service_id
        },
        dataType:'JSON',
        success:function(res){
            if(res == "success"){ 
				get_service();
				tbl_service_id = 0;
                $("#noti_text")[0].style.fontSize = '20px';
                $("#noti_text")[0].textContent = 'Success';
                $("#messageNotification").jqxNotification("open");
            }
        }
    });
}
function delete_service(id){
	tbl_service_id = service_data[id].tbl_id;
	$.ajax({
        url:'content/delete_service',
        method:'post',
        data : {
			tbl_id : tbl_service_id
		},
        dataType:'JSON',
        success:function(res){
            if(res == "success"){ 
				get_service();
				tbl_service_id = 0;
                $("#noti_text")[0].style.fontSize = '20px';
                $("#noti_text")[0].textContent = 'Success';
                $("#messageNotification").jqxNotification("open");
            }
        }
    });
}
function new_service(){
	$.ajax({
        url:'content/insert_service',
        method:'post',
        data : {
            s_text : $("#s_text").val(),
            s_title : $("#s_title").val()
        },
        dataType:'JSON',
        success:function(res){
            if(res == "success"){ 
				get_service();
				tbl_service_id = 0;    
                $("#noti_text")[0].style.fontSize = '20px';
                $("#noti_text")[0].textContent = 'Success';
                $("#messageNotification").jqxNotification("open");
            }
        }
    });
}

get_service();
// price_con
function get_service(){
	$.ajax({
		url:'content/get_serive',
		method:'post',
		// data:{
		//     sugg_cont:sugg_cont
		// },
		dataType:'JSON',
		success:function(res){
			service_data = res;
			$("#service_con")[0].innerHTML = "";
			service_inner = '<div class="row">';
			for(var i = 0; i<res.length; i++){
				service_inner += 
					'<div class="col-lg-3" data-wow-delay=".5s">'+
							'<div class="plan1 text-center">'+
								'<span class="plan1-name"><textarea rows="3" class="form-control" aria-describedby="emailHelp" placeholder="">'+res[i]['s_title']+'</textarea><small>'+
								'<textarea rows="15" class="form-control" aria-describedby="emailHelp" placeholder="" >'+res[i]['s_text']+'</textarea> </small></span>'+
								'<a class="btn btn-primary" onclick="save_service('+i+')">Save</a>'+
								'<a class="btn btn-primary" onclick="delete_service('+i+')">Delete</a>'+
							'</div>'+
						'</div>';
			}
			service_inner +='<div class="col-lg-3" data-wow-delay=".5s">'+
							'<div class="plan1 text-center featured">'+
								'<span class="plan1-name"><textarea rows="3" class="form-control" aria-describedby="emailHelp" placeholder="" id="s_title"></textarea> <small>'+
								'<textarea rows="15" class="form-control" aria-describedby="emailHelp" placeholder="" id="s_text"></textarea></small></span>'+
								'<a class="btn btn-primary" onclick="new_service()">New</a>'+
							'</div>'+
						'</div>'
			service_inner +='</div>';
			$("#service_con")[0].innerHTML = service_inner;
		}
	})
}
// ENd of service
// Fact
var fact_data = "";
var fact_inner = "";
var tbl_fact_id = 0;

function save_fact(id){
	tbl_fact_id = fact_data[id].tbl_id;
	var fact_input = $(".plan2").find('textarea');
	var fact_start = id * 2;
	var fact_end = fact_start+2;
	// for(var i = service_start; i<service_end;i++){
	// 	console.log(service_input[i].value);
	// }

	$.ajax({
        url:'content/update_fact',
        method:'post',
        data : {
            f_title : fact_input[fact_start].value,
            f_text : fact_input[fact_start+1].value,
            tbl_id : tbl_fact_id
        },
        dataType:'JSON',
        success:function(res){
            if(res == "success"){ 
				get_fact();
				tbl_fact_id = 0;
                $("#noti_text")[0].style.fontSize = '20px';
                $("#noti_text")[0].textContent = 'Success';
                $("#messageNotification").jqxNotification("open");
            }
        }
    });
}
function delete_fact(id){
	tbl_fact_id = fact_data[id].tbl_id;
	$.ajax({
        url:'content/delete_fact',
        method:'post',
        data : {
			tbl_id : tbl_fact_id
		},
        dataType:'JSON',
        success:function(res){
            if(res == "success"){ 
				get_fact();
				tbl_fact_id = 0;
                $("#noti_text")[0].style.fontSize = '20px';
                $("#noti_text")[0].textContent = 'Success';
                $("#messageNotification").jqxNotification("open");
            }
        }
    });
}
function new_fact(){
	$.ajax({
        url:'content/insert_fact',
        method:'post',
        data : {
            f_text : $("#f_text").val(),
            f_title : $("#f_title").val()
        },
        dataType:'JSON',
        success:function(res){
            if(res == "success"){ 
				get_fact();
				tbl_fact_id = 0;    
                $("#noti_text")[0].style.fontSize = '20px';
                $("#noti_text")[0].textContent = 'Success';
                $("#messageNotification").jqxNotification("open");
            }
        }
    });
}

get_fact();
// price_con
function get_fact(){
	$.ajax({
		url:'content/get_fact',
		method:'post',
		// data:{
		//     sugg_cont:sugg_cont
		// },
		dataType:'JSON',
		success:function(res){
			fact_data = res;
			$("#fact_con")[0].innerHTML = "";
			fact_inner = '<div class="row">';
			for(var i = 0; i<res.length; i++){
				fact_inner += 
					'<div class="col-lg-3" data-wow-delay=".5s">'+
							'<div class="plan2 text-center">'+
								'<span class="plan2-name"><textarea class="form-control" rows="3" class="form-control" aria-describedby="emailHelp" placeholder="">'+res[i]['f_title']+'</textarea><small>'+
								'<textarea class="form-control" rows="15" aria-describedby="emailHelp" placeholder="">'+res[i]['f_text']+' </textarea></small></span>'+
								'<a class="btn btn-primary" onclick="save_fact('+i+')">Save</a>'+
								'<a class="btn btn-primary" onclick="delete_fact('+i+')">Delete</a>'+
							'</div>'+
						'</div>';
			}
			fact_inner +='<div class="col-lg-3" data-wow-delay=".5s">'+
							'<div class="plan2 text-center featured">'+
								'<span class="plan2-name"><textarea class="form-control" rows="3" aria-describedby="emailHelp" placeholder="" id="f_title"> </textarea><small>'+
								'<textarea class="form-control" rows="15" aria-describedby="emailHelp" placeholder="" id="f_text"></textarea></small></span>'+
								'<a class="btn btn-primary" onclick="new_fact()">New</a>'+
							'</div>'+
						'</div>'
			fact_inner +='</div>';
			$("#fact_con")[0].innerHTML = fact_inner;
		}
	})
}
// ENd of Fact
// This is the contact us part
var cont_data = "";
var cont_inner = "";
var tbl_cont_id = 0;

function save_cont(id){
	tbl_cont_id = cont_data[id].tbl_id;
	var cont_input = $(".plan3").find('textarea');
	var cont_start = id * 2;
	var cont_end = cont_start+2;
	// for(var i = service_start; i<service_end;i++){
	// 	console.log(service_input[i].value);
	// }

	$.ajax({
        url:'content/update_con',
        method:'post',
        data : {
            c_title : cont_input[cont_start].value,
            c_text : cont_input[cont_start+1].value,
            tbl_id : tbl_cont_id
        },
        dataType:'JSON',
        success:function(res){
            if(res == "success"){ 
				get_cont();
				tbl_cont_id = 0;
                $("#noti_text")[0].style.fontSize = '20px';
                $("#noti_text")[0].textContent = 'Success';
                $("#messageNotification").jqxNotification("open");
            }
        }
    });
}
function delete_cont(id){
	tbl_cont_id = cont_data[id].tbl_id;
	$.ajax({
        url:'content/delete_con',
        method:'post',
        data : {
			tbl_id : tbl_cont_id
		},
        dataType:'JSON',
        success:function(res){
            if(res == "success"){ 
				get_cont();
				tbl_cont_id = 0;
                $("#noti_text")[0].style.fontSize = '20px';
                $("#noti_text")[0].textContent = 'Success';
                $("#messageNotification").jqxNotification("open");
            }
        }
    });
}
function new_cont(){
	$.ajax({
        url:'content/insert_con',
        method:'post',
        data : {
            c_text : $("#c_text").val(),
            c_title : $("#c_title").val()
        },
        dataType:'JSON',
        success:function(res){
            if(res == "success"){ 
				get_cont();
				tbl_cont_id = 0;    
                $("#noti_text")[0].style.fontSize = '20px';
                $("#noti_text")[0].textContent = 'Success';
                $("#messageNotification").jqxNotification("open");
            }
        }
    });
}

get_cont();
// price_con
function get_cont(){
	$.ajax({
		url:'content/get_con',
		method:'post',
		// data:{
		//     sugg_cont:sugg_cont
		// },
		dataType:'JSON',
		success:function(res){
			cont_data = res;
			$("#cont_con")[0].innerHTML = "";
			cont_inner = '<div class="row">';
			for(var i = 0; i<res.length; i++){
				cont_inner += 
					'<div class="col-lg-3" data-wow-delay=".5s">'+
							'<div class="plan3 text-center">'+
								'<span class="plan3-name"><textarea rows="3" class="form-control" aria-describedby="emailHelp" placeholder=""  >'+res[i]['c_title']+'</textarea><small>'+
								'<textarea rows="15" class="form-control" aria-describedby="emailHelp" placeholder="" >'+res[i]['c_text']+'</textarea></small></span>'+
								'<a class="btn btn-primary" onclick="save_cont('+i+')">Save</a>'+
								'<a class="btn btn-primary" onclick="delete_cont('+i+')">Delete</a>'+
							'</div>'+
						'</div>';
			}
			cont_inner +='<div class="col-lg-3" data-wow-delay=".5s">'+
							'<div class="plan3 text-center featured">'+
								'<span class="plan3-name"><textarea rows="3" class="form-control" aria-describedby="emailHelp" placeholder="" id="c_title"> </textarea><small>'+
								'<textarea rows="15" class="form-control" aria-describedby="emailHelp" placeholder="" id="c_text"></textarea></small></span>'+
								'<a class="btn btn-primary" onclick="new_cont()">New</a>'+
							'</div>'+
						'</div>'
			cont_inner +='</div>';
			$("#cont_con")[0].innerHTML = cont_inner;
		}
	})
}
// $(document).ready(function(){
	

// })
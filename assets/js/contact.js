$(document).ready(function(){
    // page resize
    body_left = (window.innerWidth - 1200) / 2;
    $(".wrapper").css("marginLeft",body_left);
    function reportWindowSize() {
        body_left = (window.innerWidth - 1200) / 2;
        $(".wrapper").css("marginLeft",body_left);
    }
    window.onresize = reportWindowSize;
    
    $("#messageNotification").jqxNotification({
        width: 450, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "success"
    });
    $("#messageNotification1").jqxNotification({
        width: 650, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "success"
    });
    $("#messageNotification_error").jqxNotification({
        width: 450, position: "top-right", opacity: 0.9,height :75,
        autoOpen: false, animationOpenDelay: 800, autoClose: true, autoCloseDelay: 10000, template: "error"
    });
    if($("#temp").val() == "true"){        
        $("#noti_text")[0].textContent = "We will contact you shortly regarding your request.";
        $("#noti_text")[0].style.fontSize = '20px';
        $("#messageNotification").jqxNotification("open");
    }
    $("#send").click(function(){
        $.ajax({
            url : "Test/index",
            method :'post',
            dataType :'JSON',
            success : function(res){
                console.log(res);
            }
        })
		// $.ajax({
		// 	url:'Contact/send_mail',
		// 	method:'post',
		// 	dataType:'JSON',
		// 	data:{
		// 		user_name : $("#user_name").val(),
  //               email : $("#email").val(),
  //               subject : $("#subject").val(),
  //               message : $("#message").val()
		// 	},
		// 	success:function(res){
		// 	}
  //       })
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
                $("#messageNotification1")[0].style.width = '850';
                
                $("#noti_text1")[0].textContent = "Thank you for your suggestion. We appreciate the idea and the fact you spent time helping us improve this site and our services.";
                $("#messageNotification1").jqxNotification("open");
                // alert('Success');
            }
        })
    })
});
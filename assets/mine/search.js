var base_url = "";
if (window.location.protocol == "https:") {
    base_url = "https://"+window.location.host;
}
else{
    base_url = "http://"+window.location.host;
}
$("#pro_search").on("keyup",function(){
    var s_width = $(".search-form").width();
    if($(this).val().length <= 1){
        $(".search-result")[0].innerHTML = "";
        $(".search-result").css("padding","0px");
        $(".search-result").css("border","none");
        return false;
    }
    $.ajax({
        url : base_url+"/home/get_search",
        data : {
            input : $(this).val()
        },
        type : "POST",
        success : function(res){
            $(".search-result").css("padding","0px");
            $(".search-result").css("border","none");
            var res = JSON.parse(res);
            $(".search-result")[0].innerHTML = "";
            s_result = "";
            if(res.length < 1){
                $(".search-result")[0].innerHTML = "";
            }
            else{
                for(var i = 0; i < res.length; i++){
                    // $(".search-result").
                    s_result += "<p><a href='"+base_url+"/home/f_cate_view?id="+res[i].id+"'>"+res[i]['c_name']+"</a></p>";
                }
                $(".search-result").css("width",s_width);
                $(".search-result").css("borderTop","2px solid #26bce9");
                $(".search-result").css("padding","10px");
                $(".search-result").append(s_result);
            }
        }
    })
})
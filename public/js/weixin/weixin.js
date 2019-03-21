var openid = $("#openid").val();

setInterval(function(){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url     :   '/weichat/get_msg?openid=' + openid + '&pos=' + $("#msg_pos").val(),
        type    :   'get',
        dataType:   'json',
        success :   function(d){
            if(d.errno==0){     //服务器响应正常
                //数据填充
                var msg_str = '<blockquote>' + d.data.openid +
                    '<p>' + d.data.msg + '</p>' +
                    '</blockquote>';

                $("#chat_div").append(msg_str);
                $("#msg_pos").val(d.data.id)
                //console.log(d);
            }else{

            }
        }
    });
},5000);

// 客服发送消息 begin
$("#send_msg_btn").click(function(e){
    e.preventDefault();
    var send_msg = $("#send_msg").val().trim();
    var msg_str = '<p style="color: mediumorchid"> 内容： '+send_msg+'</p>';
    $("#chat_div").append(msg_str);
    $("#send_msg").val("");
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url     :   '/weichat/getmessage',
        type    :   'get',
        data:{openid:openid,send_msg:send_msg},
        success :   function(d){
            if(d.errno==0){     //服务器响应正常
                console.log(d);
            }else{

            }
        }
    });
});
// 客服发送消息 end

var node_host = 'https://vchatjs.tienganh123.com';
var sendInfo ={};
if(typeof infoMember.username != 'undefined'){
	sendInfo ={id:mem_id,course:course,username :infoMember['username'],avatar: infoMember['avatar'],vip:infoMember['vip'],is_teacher: infoMember['is_teacher'],level:infoMember['level'], level_star:infoMember['level_star']};
}
var _htmlQues = '', id_answer = 0, is_delete = 0, is_edited = 0;
var hd_timeout = null;
var socket_hd = io.connect(node_host,{query:"type=hoi_dap&member_data="+JSON.stringify(sendInfo),reconnection :false});
if(typeof filter_chat =='undefined'){
    var filter_chat = new Filter();
}
$(document).ready(function(){
	$('#my-nick-name').text(infoMember.username);
	$('#my-avatar').attr('src',infoMember.avatar);
	if(!infoMember['is_teacher']){
		$('#box_send_question').show();
	}else{
		$('#hd_ques').text('Câu hỏi chưa được trả lời.');
		$('#my_questions').hide().prev().hide();
	}
});

socket_hd.on('new-my-question',function(list){
    $('#my_questions').html('');
    for(var i =0;i< list.length;i++){
        list[i]['username']= infoMember.username;
        list[i]['avatar'] = infoMember.avatar;
        if(list[i].teacher_id){
            _htmlQues = returnHtmlQuestion(list[i],true);
        }else{
            _htmlQues = returnHtmlQuestion(list[i],false);
        }
        $('#my_questions').append(_htmlQues);
    }
   
});
/* nodejs return
socket_hd.on('list-question-other',function(data){    
    $('#other_questions').html('');
    for(var i =0;i< data.list.length;i++){
        _htmlQues = returnHtmlQuestion(data.list[i],true);
        $('#other_questions').append(_htmlQues);
    }
    if(data.showMore){
        $('#box_show_more').show();
    }
});
*/
socket_hd.on('question-yet-anwser',function(list){
    $('#questions_gv_0').html('');
    for(var i =0;i< list.length;i++){
        _htmlQues = returnHtmlQuestion(list[i],false);
        $('#questions_gv_0').append(_htmlQues);
    } 
});
socket_hd.on('no-question',function(){
    $('#questions_gv_0').html('<i class="not-question">Đã hết câu hỏi</i>');
});
socket_hd.on('new-question',function(){
    $('#show_alert_question').html('<strong>Học sinh vừa gửi câu hỏi </strong>');
	$('#show_alert_question').hide().animate({height:'toggle'},350);
    //if($('#questions_gv_0 .question').length == 0){
        $('#questions_gv_0').html('<i class="not-question">Đang load câu hỏi</i>');
        socket_hd.emit('get-new-question');
   // }
    if(hd_timeout){
        clearTimeout(hd_timeout);
        hd_timeout = null;
    }
    hd_timeout = setTimeout(function(){
        $('#show_alert_question').hide();  
    },5000);
});
socket_hd.on('new-answer',function(data){
    if($('#question_'+data.id).length ==1){
        $('#question_'+data.id).remove();
    }
    $('.has-answer').removeClass('has-answer');
    id_answer = data.id;
    _htmlQues = returnHtmlQuestion(data,true);
    if(data.mem_id == mem_id){
        $('#my_questions').prepend(_htmlQues);
    }else{
        $('#other_questions').prepend(_htmlQues);
    }
    $('#quesion_'+data.id).addClass('has-answer');
	$('#show_alert_answer').hide().animate({height:'toggle'},350);
    if(hd_timeout){
        clearTimeout(hd_timeout);
        hd_timeout = null;
    }
    hd_timeout = setTimeout(function(){
        $('#show_alert_answer').hide();  
    },5000);
});
socket_hd.on('delete-question',function(id){
    if($('#question_'+id).length ==1){
        $('#question_'+id).remove();
        $('#show_alert_question').html('<strong>Học sinh vừa xóa câu hỏi </strong>');
		$('#show_alert_question').hide().animate({height:'toggle'},350);
        if(hd_timeout){
            clearTimeout(hd_timeout);
            hd_timeout = null;
        }
        hd_timeout = setTimeout(function(){
            $('#show_alert_question').hide();  
        },5000);
    }
});
socket_hd.on('is-delete-question',function(id){
	 if($('#question_'+id).length ==1){
		$('#question_'+id).remove(); 
		$('#show_alert_question').html('<strong>Bạn có câu hỏi không hợp lệ, Bạn hãy gửi câu hỏi khác nhé.</strong>');
		$('#show_alert_question').hide().animate({height:'toggle'},350);
		 hd_timeout = setTimeout(function(){
            $('#show_alert_question').hide();  
        },5000);
	 }
});
function gotoQuestion(){
    $('#question_'+id_answer).find('.answer').removeClass('elmHide');
    gotoElm($('#question_'+id_answer));
} 
function sendQuestion(){
    if(typeof filter_chat =='undefined'){
        var filter_chat = new Filter();
    }
    var question = $('#txt-question').val();
    question =$.trim(question);
    //question = filter_chat.clean(question);
    socket_hd.emit('send-question',{question:question,id: is_edited},function(data){
        var alertTxt ='';
        switch(data.err){
            case 0 :{
                $('#txt-question').val('');
                $('#my_questions').find('.not-question').remove();
                break;
            }
            case 1 :{
                sendQuestion();
                break;
            }
            case 2 :{
                break;
            }
            case 3 :{
                break;
            }
            case 4 :{
                $('#question_'+is_edited).find('.text_question_item').text(question);
                is_edited = 0;
                $('#txt-question').val('');
                break;
            }
        }
         $('#alert_success').text(data.msg);
    });    
}
function returnHtmlQuestion(data,replied){
    var htmlAnswer ='';
    if(replied){
        if(infoMember.is_teacher){
            htmlAnswer ='<div class="answer elmHide"><div class="angle-up"></div><div class="info-member floatLeft"><img  class="avt" src="/file/common/lesson/vchat/images/gv_avatar.jpg" /><div class="nick-name">Giáo Viên<br /></div></div><div class="text"><textarea class="txt-answer">'+data.answer+'</textarea><button type="button" class=" btn-lesson btn-submit" onclick="sendAnswer(this,'+data.id+')" edit ="true" >submit</button></div></div>';
        }else{
            htmlAnswer ='<div class="answer elmHide"><div class="angle-up"></div><div class="info-member floatLeft"><img  class="avt" src="/file/common/lesson/vchat/images/gv_avatar.jpg" /><div class="nick-name">Giáo Viên<br /></div></div><div class="text"><p>'+data.answer+'</p></div>';
        }
        data['status_question'] ='<div class="show-answer" onclick="showAnswer(this)"><span class="fa fa-msg">&#xf27a;</span> <span class="alert-answer"><span class="number-ques">1</span> trả lời</span></div><div class="clear"></div>';
    }else{
        if(infoMember.is_teacher){
            htmlAnswer ='<div class="answer elmHide"><div class="angle-up"></div><div class="info-member floatLeft"><img  class="avt" src="/file/common/lesson/vchat/images/gv_avatar.jpg" /><div class="nick-name">Giáo Viên<br /></div></div><div class="text"><textarea class="txt-answer"></textarea><button type="button" class=" btn-lesson btn-submit" onclick="sendAnswer(this,'+data.id+')">submit</button></div></div>';
            data['status_question'] ='<div class="show-answer" onclick="showAnswer(this)"><span class="alert-answer"><span class="fa">&#xf14d;</span> trả lời</span></div><div class="clear"></div>';
        }else{
            data['status_question'] ='<span class="text_note font12">(Chờ trả lời)</span> <button class="btn-edit font12" onclick="editQuestion('+data.id+')"><span class="fa">&#xf044;</span> Sửa</button> <button class="btn-edit font12"  onclick="deleteQuestion('+data.id+')"><span class="fa">&#xf1f8;</span> Xóa</button>';        
        }    
    }
    var cls ='';
    if(typeof data.inc !='undefined'){
        cls ='elmHide';
    }
    var str ='<div class="question '+cls+'" id="question_'+data.id+'" username ="'+data.username+'"><div class="info-member floatLeft"><img  class="avt" src="'+data.avatar+'" /><div class="nick-name">'+data.username+'<br /><img src ="https://data.tienganh123.com/images/v2/home/vip_new.png" /></div></div><div class="text"><div class="text_question_item">'+data.question+'</div><br />'+data.status_question+'</div>'+htmlAnswer+'</div>';
    return str;
}
function showAnswer(elm){
    $(elm).parents('.question').siblings().find('.answer').addClass('elmHide');
	$(elm).parents('.question').find('.answer').toggleClass('elmHide');
}
function loadMoreQuestion(elm){
    if($('#other_questions .question.elmHide').length>0){
		var _topQues =  $(elm).offset().top - 40;
        $('#other_questions .question.elmHide:lt(5)').removeClass('elmHide');
		$('html,body').animate({scrollTop:_topQues},500);
    }else{
        if($('#load_from_csdl').length ==1){
            $(elm).parent().hide();
            $('#load_from_csdl').show();
            socket_hd.emit('load-more-question',function(data){
                if(data){
                    var inc = 0;
                    for(var i =0;i< data.list.length;i++){
                        if(data.list[i].mem_id != mem_id){
                            inc ++;
                            if(inc >1){
                                data.list[i]['clsHide'] = 'elmHide';
                            }
                            _htmlQues = returnHtmlQuestion(data.list[i],true);
                            $('#other_questions').append(_htmlQues);
                        }
                    }
                }else{
                    $(elm).parent().remove();
                }
            });
        }else{
            $(elm).parent().remove();
        }    
    }    
}
function sendAnswer(elm,question_id){
    var answer = $(elm).prev().val();
    answer =$.trim(answer);
    if(typeof filter_chat =='undefined'){
        var filter_chat = new Filter();
    }
    var username = $('#question_'+question_id).attr('username');
    var avatar = $('#question_'+question_id).find('.avt').attr('src');
    var n_question = $('#other_questions .question').length;
    socket_hd.emit('replied-question',{answer:answer,question_id:question_id,username:username, avatar:avatar,n_question:n_question},function(data){
        if(!data){
            sendAnswer(elm,question_id);
        }else{
            if(!$(elm).attr('edit')){
                $('#question_'+question_id).remove();
            }else{
                $(elm).parents('.answer').addClass('elmHide');
            }
        }
        if($('#questions_gv_0 .question').length ==0){
            $('#questions_gv_0').html('<p><i>Chưa có thêm câu hỏi mới</i></p>');
        }
    });
}
function deleteQuestion(id){
    if(!is_delete){
        is_delete = 1;
        $('#question_'+id +' .text').append('<p style="color:#009688" class="alert">hệ thông đang thực hiện xóa ...</p>');
        socket_hd.emit('delete-question',{id:id},function (data){
            if(data){
                $('#question_'+id).remove();
            }else{                              
               $('#question_'+id +' .alert').text('Lỗi xóa câu hỏi');
            }
            is_delete = 0;
        });
    }
}
function editQuestion(id){
    if(!is_edited){
        is_edited = id;
        var txt = $('#question_'+id).find('.text_question_item').text();
        $('#txt-question').val(txt);
        gotoElm($('#hoi-dap'));
        $('#txt-question').focus();
    }
}
function gotoElm(ElementTo){
    var postCm = ElementTo.offset();	
	$('html,body').animate({scrollTop:postCm.top},500);
}
function getQuestionCurrent(val){
    val = parseInt(val);
    if(val){
        $('#questions_gv_0').hide();
        if($('#questions_gv_1').length ==1){
            $('#questions_gv_1').show();
        }else{
             $('#questions_gv_0').after('<div id="questions_gv_1"><p>Loading ....</p></div>');
             socket_hd.emit('load-more-replied',function(data){
                if(data){
                    $('#questions_gv_1').html('');
                    for(var i =0;i< data.list.length;i++){
                     _htmlQues = returnHtmlQuestion(data.list[i],true);
                        $('#questions_gv_1').append(_htmlQues);
                    }
                    if(data.showMore && $('#box_show_more').length ==0){
                        $('#questions_gv_1').parent().append('<div id="box_show_more"><button onclick="loadMoreReplied(this)">Xem thêm câu hỏi</button></div>');
                    }
                }else{
                    $('#questions_gv_1').html('Chưa có câu hỏi được trả lời');
                }
            });
        }
    }else{
      $('#questions_gv_0').show();
      $('#questions_gv_1').hide();
    }
}
function loadMoreYetReplied(elm){
    $('#questions_gv_1').append('<center id ="loading_ques_next">LOADING ...</center>');
    socket_hd.emit('load-more-yet-replied',function(data){
        $('#loading_ques_next').remove();
        if(data){
            for(var i =0;i< data.list.length;i++){
                _htmlQues = returnHtmlQuestion(data.list[i],true);
                $('#questions_gv_0').append(_htmlQues);
            }
            if(!data.showMore){
                $(elm).parent().remove();
            }
        }else{
            $(elm).parent().remove();
        }
    });
}
function loadMoreReplied(elm){
    $('#questions_gv_1').append('<center id ="loading_ques_next">LOADING ...</center>');
    socket_hd.emit('load-more-replied',function(data){
        $('#loading_ques_next').remove();
        if(data){
            for(var i =0;i< data.list.length;i++){
                _htmlQues = returnHtmlQuestion(data.list[i],true);
                $('#questions_gv_1').append(_htmlQues);
            }
            if(!data.showMore){
                $(elm).parent().remove();
            }
        }else{
            $(elm).parent().remove();
        }
        
    });
}


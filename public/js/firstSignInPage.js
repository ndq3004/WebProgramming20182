$(document).ready(function(){
    dialogJS.init_event();
    ValidateJSFunc.checkToken();
});

class DialogJS{
    constructor(){
        this.initShowMulticheckForm();
    }
    init_event(){
        
    }

    initShowMulticheckForm(){
        $('#multicheck-form').dialog({
            autoOpen: false,
            modal: true,
            width: 700,
            title: "TEST",
            // maxHeight: 500,
            position: { my: 'top', at: 'top+100' },
            // resizable: false,
            show: {
                effect: "blind",
                duration: 300
            },
            hide: {
                effect: "explode",
                duration: 1000
            },
            buttons: {
                Submit: function(){
                    dialogJS.submitAnswer();
                },
                Cancel: function() {
                    $('#multicheck-form').dialog( "close" );
                }
            }
        }).prev('.ui-dialog-titlebar').css('background','#2D96C8');
        $('.open-form').click(function(){
            var element = $(this);
            console.log(element.html());
            var maxHeight = $( "#multicheck-form" ).dialog( "option", "maxHeight" );
            $('#multicheck-form').dialog("option", "maxHeight", 500);
            // $('#multicheck-form').dialog("option" ,"position", { my: 'top', at: 'top+80' });
            $('#multicheck-form').html("");
            $('#multicheck-form').dialog('open');
            $(".ui-dialog").draggable({
                // disabled: true
            });
            
            dialogJS.bindDataToMultiCheckForm(element);
            
        });
    }

    bindDataToMultiCheckForm(element){
        if(element == null) return;
            var type = element.attr('type-t');
            var level = element.attr('level');
            var topicid = element.attr('topicid');
        
        $.ajax({
            method: 'get',
            contentType:'appication/json',
            url: host.Config.localhost + '/getlession/'+ type + "/" + level + "/" + topicid,
            success: function(response){
                debugger
                for(var i = 0; i < response.length; i++) {
                    dialogJS.appendDataToDialog(response[i], i);
                }     
            },
            error: function(){
                console.log("load data error");
            }
        })
        
    }

    appendDataToDialog(question, index){
        $('#multicheck-form').append(
            '<div class="multicheck">' +
                '<div class="form-question flex-style">'+
                    '<div class="form-question-number"><b>Question ' + (index+1) + ':</b></div>'+
                    '<div class="form-question-title">' + question.content + '</div>'+
                '</div>'+
                '<div class="form-answer" questionid="' + question.question_id + '">'+
                    '<input answer="A" name="answer-question' + index +'" type="radio" value="'+ question.ansA +'">'+
                        '<b>' + question.ansA + '</b><br>' +
                    '<input answer="B" name="answer-question' + index +'" type="radio" value="'+ question.ansB +'">'+
                    '<b>' + question.ansB + '</b><br>' +  
                    '<input answer="C" name="answer-question' + index +'" type="radio" value="'+ question.ansC +'">'+
                    '<b>' + question.ansC + '</b><br>' +
                    '<input answer="D" name="answer-question' + index +'" type="radio" value="'+ question.ansD +'">'+
                    '<b>' + question.ansD + '</b><br>' +
                '</div>'+
            '</div>'
        );
    }

    submitAnswer(){
        var submitAnswers = [];
        for(var i = 0; i < 10; i++){
            var element = $('input[name="answer-question' + i + '"]:checked');
            var eachQuestion = {
                "questionid": element.parent('div').attr('questionid'),
                "answer"    : element.attr("answer")
            }
            if(element.length != 0){
                submitAnswers.push(eachQuestion);
            }  
        }
        var returnObj = {submitAnswers:submitAnswers};
        if(submitAnswers.length == 0) return;
        console.log(returnObj);
        $.ajax({
            method:'post',
            url: host.Config.localhost + '/checkAnswer',
            headers:{
                'token': localStorage.getItem('token')
            },
            contentType:'application/json', 
            data: JSON.stringify(returnObj),
            success: function(data){
                //mở box thông báo điểm
                dialogJS.showPoint(data);
            },
            error: function(){

            }
        });
    }
    initShowPointDialog(){
        $('.show-point').dialog({
            autoOpen: false,
            modal: true,
            title: 'Thông báo!',
            buttons: {
                close: function(){
                    $('.show-point').dialog('close');
                    $('#multicheck-form').dialog( "close" );
                }
            }
        });
    }
    showPoint(point){
        $('.show-point').html('');
        var strPoint = 'Bạn đã hoàn thành với số điểm là ' + point +'<br>';
        // $('.show-point').html('Bạn đã hoàn thành với số điểm là ' + point);
        if(point >= 8) {
            strPoint += 'Bạn rất xuất sắc! Hãy tiếp tục với thử thách mới nào!';
        }
        else if(point >= 6) {
            strPoint += 'Khá tốt! Tuy nhiên bạn nên luyện tập thêm phần này!';
        }
        else{
            strPoint += 'Oh! Có vẻ bạn nên luyện tập nhiều hơn nữa. Đừng nản lòng, hãy cố gắng nhé!';
        }
        $('.show-point').html(strPoint);
        dialogJS.initShowPointDialog();
        $('.show-point').dialog('open');

    }
}

var ValidateJSFunc = {
    checkToken: function(){
        var token = localStorage.getItem('token');
        if(token.length < 10){
            window.location.href=host.Config.localhost;
        }
        else{
            $.ajax({
                method:'get',
                url: host.Config.localhost + '/user-info',
                headers: {
                    'token': token
                },
                success: function(data, status, xhr){
                    var name = data.name;
                    
                    // var emailName = (data.email).split("@");
                    $('#user-name').html(name);
                    $('#user-name-rank').html(name);
                },
                error: function(error){
                    window.location.href=host.Config.localhost;
                }
            });
        }

    }
}

var dialogJS = new DialogJS();

var host=host || {}

host.Config={
    localhost:"http://localhost:8000"
}
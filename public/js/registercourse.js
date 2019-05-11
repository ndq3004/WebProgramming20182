$(document).ready(function(){
    dialogJS.bindListVideo();
    ValidateJSFunc.checkToken();
});

class DialogJS{
    constructor(){
        // this.initShowMulticheckForm();
    }
    init_event(){
        
    }

    bindListVideo(){
        for(var i = 1; i < 12; i++){
            dialogJS.appendALessonToList();
        }
    }

    appendALessonToList(imageUrl, title, describe, demoContent){
        $('.list-video-lesson').append(
            '<li class="lesson_item">'+
                '<div class="avt">'+
                    '<a href="/videolession" title="Unit 1: First Greetings">'+  
                    '<img src="/courses_files/cach-chao-hoi-lan-dau-gap.jpg" width="190px"'+
                    'height="106px" alt="Unit 1: First Greetings"></a>'+ 
                '</div>'+
                '<div class="cont">'+
                    '<h3 class="title font-bold">'+
                        '<a href="/videolession" id="lesson_name" title="Unit 1: First Greetings">'+
                            '<span class="colorOrange">Unit 1: </span>'+ 
                            '<span class="color222"></span> First Greetings'+
                        '</a>'+
                    '</h3>'+
                    '<div class="font-regular font14 color555">'+
                        'Học cách chào hỏi cho lần đầu tiên gặp ai đó'+
                    '</div>'+
                    '<div class="font-regular font13 colorAcac">Hello, Hi, I\'m ..., '+
                        'Nice to meet you, Nice to meet you too'+
                    '</div>'+
                '</div>'+
                '<div class="lesson-status">'+
                    '<div class="">Hoàn thành</div>'+
                    '<div class=" colorAcac font12">'+
                        '<span class="far fa-circle-right"></span> Lý thuyết</div>'+
                    '<div class=" colorAcac font12"><span class=" far fa-circle-right"></span> Bài tập</div>'+
                    '<div class=" colorAcac font12"><span class="far fa-circle-right"></span> Video chat</div>'+
                '</div>'+
            '</li>'
        );
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
                    debugger
                    // var emailName = (data.email).split("@");
                    $('#user-name').html(name);
                    
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
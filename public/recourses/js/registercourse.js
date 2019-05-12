$(document).ready(function(){
    ValidateJSFunc.checkToken();
    dialogJS.bindListVideo();
    dialogJS.getVideoInfo();
});

class DialogJS{
    constructor(){
        // this.initShowMulticheckForm();
    }
    init_event(){
        
    }

    bindListVideo(){
        //get data of video course
        var courseid = localStorage.getItem("courseid");
        $.ajax({
            method: "get",
            url: host.Config.localhost + "/getCourseVideo/" + courseid,
            headers:{
                'token': localStorage.getItem('token')
            },
            success: function(data){
                $.each(data, function(key, value){
                    dialogJS.appendALessonToList(key,value);
                });
            },
            error: function(){

            }
        });
        
    }

    appendALessonToList(key, value){
        var nameSplit = value.video_name.split(":");
        $('.list-video-lesson').append(
            '<li class="lesson_item" videoid="'+value.video_id+'">'+
                '<div class="avt">'+
                    '<a href="/videolession" title="'+value.video_name+'">'+  
                    '<img src="/courses_files/image/'+ value.course_id + '/' + value.video_id +'.jpg" width="190px"'+
                    'height="106px" alt="'+value.video_name+'"></a>'+ 
                '</div>'+
                '<div class="cont">'+
                    '<h3 class="title font-bold">'+
                        '<a href="/videolession" id="lesson_name" title="'+value.video_name+'">'+
                            '<span class="colorOrange">'+nameSplit[0]+': </span>'+ 
                            '<span class="color222"></span>' + nameSplit[1]+
                        '</a>'+
                    '</h3>'+
                    '<div class="font-regular font14 color555">'+
                        value.describe +
                    '</div>'+
                    '<div class="font-regular font13 colorAcac">'+
                        value.demo_content+
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

    getVideoInfo(){
        // $('.lesson_item').click(function(){
        //     alert("haha");
        // })
        $('.lesson_item').on('click', function(){
            alert("haha");
            localStorage.setItem('courseid', $(this).attr('courseid'));
            console.log(this);
            if($(this).attr('videoid') != ""){

                localStorage.setItem('videoid', $(this).attr('videoid'));    
            }
            else{

            }
            
            window.location.href="/videolession";
        });
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
                    // debugger
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
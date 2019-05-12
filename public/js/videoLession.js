$(document).ready(function(){
    dialogJS.init_event();
    dialogJS.getVideoLessonInfo();
    dialogJS.bindVideo();
    ValidateJSFunc.checkToken();
});
var host=host || {}

host.Config={
    localhost:"http://localhost:8000"
}
class DialogJS{
    constructor(){
        this.bindVideo();    }
    init_event(){
    }

    bindVideo(){
        var courseid=localStorage.getItem("courseid");
        var videoid=localStorage.getItem("videoid");
        console.log(courseid + videoid);
        //bind video info
        $.ajax({
            method:"get",
            url: host.Config.localhost + "/getVideoLessonInfo/" + courseid + "/" + videoid,
            headers:{
                'token': localStorage.getItem('token')
            },
            success: function(data){
                $('#course-name').html(data.course.discription);
                $('#video-name').html(data.video.video_name);
            },
            error: function(){

            }
        });

        //append video area
        $('.video-area').append(
            '<video width="900" height="540" style="padding-top: 30px;" controls>'+
                '<source id="video-link" src="video/'+ courseid + '/' + videoid + '.mp4" type="video/mp4">'+
            '</video>' 
        );
          // $("source").attr("src", "/video/" + courseid + "/" + videoid + ".mp4"); 
    }

    getVideoLessonInfo(){
        var url = host.Config.localhost + "/getVideoInfo"
                                        // + "/" + localStorage.getItem('courseid')
                                        + "/" + localStorage.getItem('videoid');
        $.ajax({
            method:"get",
            url: url,
            headers: {
                token: localStorage.getItem('token')
            },
            success: function (videoInfo) {
                debugger
                $('#lesson-name').text(videoInfo);
            },
            error: function(){

            }
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



// var host=host || {}

// host.Config={
//     localhost:"http://localhost:8000"
// }
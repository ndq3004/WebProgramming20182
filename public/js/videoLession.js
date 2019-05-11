$(document).ready(function(){
    dialogJS.init_event();
    dialogJS.bindVideo();
    ValidateJSFunc.checkToken();
});

class DialogJS{
    constructor(){
        // this.initShowMulticheckForm();
    }
    init_event(){
        
    }

    bindVideo(){
        var courseid=localStorage.getItem("courseid");
        var videoid=localStorage.getItem("videoid");
        console.log(courseid + videoid);
        $('.video-area').append(
            '<video width="900" height="540" style="padding-top: 30px;" controls>'+
                '<source id="video-link" src="video/'+ courseid + '/' + videoid + '.mp4" type="video/mp4">'+
            '</video>' 
        );
          // $("source").attr("src", "/video/" + courseid + "/" + videoid + ".mp4"); 
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
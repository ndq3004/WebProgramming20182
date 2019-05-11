$(document).ready(function(){
    dialogJS.getVideoInfo();
    // dialogJS.init_event();
    ValidateJSFunc.checkToken();
});

class DialogJS{
    constructor(){
        // this.initShowMulticheckForm();
    }
    init_event(){
        
    }

    getVideoInfo(){
        // $('.lesson_item').click(function(){
        //     alert("haha");
        // })
        $('.lesson_item').on('click', function(){
            // alert("haha");
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
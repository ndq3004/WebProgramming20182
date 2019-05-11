$(document).ready(function(){
    dialogJS.init_event();
    ValidateJSFunc.checkToken();
});

class DialogJS{
    constructor(){
        // this.initShowMulticheckForm();
    }
    init_event(){
        
    }
}
<<<<<<< HEAD
=======

>>>>>>> bbb2e839d0b2eb09419ccf5bf2a423b72d52c826
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
$(document).ready(function(){
    init_event();
    
})
var loginSignupJS = {   
    login: function(){
        var data = {
            "email":$('#email1').val(),
            "password": $('#password1').val()
        }
        console.log(data);
        //send data to login
        $.ajax({
            method:"post",
            url:host.Config.localhost + "/auth/login",
            contentType:'application/json',
            data: JSON.stringify(data),
            success: function(response){
                localStorage.setItem("token", response.token);
                window.location.href=host.Config.localhost + "/mainpage";
            },
            error: function(error){
                alert('error');
            }
        });
    },
    register: function(){
        var data={'name':$('#first_name2').val(),
                    'email':$('#email2').val(),
                    'password': $('#password2').val()};
        console.log(data);
        $.ajax({
            method:'post',
            url: host.Config.localhost + '/auth/register',
            contentType:'application/json',
            data: JSON.stringify(data),
            success: function(data){
                
            },
            error: function(){
                alert('error');
            }
        })
    }
}

function init_event(){
    $('#submit1').click(function(){loginSignupJS.login();});
    $('#submit2').click(function(){loginSignupJS.register();});
}

var host=host || {}

host.Config={
    localhost:"http://localhost:8000"
}
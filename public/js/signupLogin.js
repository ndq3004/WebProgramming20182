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
                if(typeof response.reason === 'undefined'){
                    commonJS.noticeBox('success','Đăng nhập thành công!');
                    $('#dang-nhap').trigger('click');
                    localStorage.setItem("token", response.token);
                    setTimeout(function(){
                        window.location.href=host.Config.localhost + "/mainpage";
                    },2000)
                    
                }
                else{
                    commonJS.noticeBox('error', 'Đăng nhập lỗi!');
                }
                
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
                commonJS.noticeBox('success', 'Đăng kí thành công! Mời đăng nhập');
                $('#dang-ki').trigger('click');
            },
            error: function(xhr){
                commonJS.noticeBox('error', 'Đăng kí lỗi!')
            }
        })
    },
    checkIsLogin: function(){
        if(localStorage.getItem('token') != null || localStorage.getItem('token') != ''){
           $.ajax({
               method:'get',
               url: host.Config.localhost + '/checkAuthen',
               headers: {
                   'token': localStorage.getItem('token')
               },
               success: function(data){
                //    alert(data);
                    if(data === 'success'){
                        window.location.href = host.Config.localhost + '/mainpage';
                    }
               },
               error: function(){
                    console.log('authen error');
               }   
            }) 
        }
    } 
}

function init_event(){
    loginSignupJS.checkIsLogin();
    $('#submit1').click(function(){loginSignupJS.login();});
    $('#submit2').click(function(){loginSignupJS.register();});
}

var host=host || {}

host.Config={
    localhost:"http://localhost:8000"
}
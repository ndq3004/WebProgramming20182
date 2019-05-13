$(document).ready(function(){
    dialogJS.init_event();
    // $('.detailcourse-form').dialog('open');
    ValidateJSFunc.checkToken();

});

class DialogJS{
    constructor(){
        this.initShowDetailcourseForm();
        this.initShowCourseregisterForm();
        this.registered='false';
    }
    init_event(){ $('.open-form').click(function(){
                var courseid = $(this).attr("course-id");
                localStorage.setItem("courseid", courseid);
            // debugger
            // var element = $(this);
            // console.log(element.html());
            // var maxHeight = $( "#detailcourse-form" ).dialog( "option", "maxHeight" );
            // $('#detailcourse-form').dialog("option", "maxHeight", 500);
            // $('#detailcourse-form').dialog("option" ,"position", { my: 'top', at: 'top+80' });
            // $('#detailcourse-form').html("");
            // debugger
            $('.detailcourse-form').dialog('open');// cái này là form1
            // $(".ui-dialog").draggable({
            //     // disabled: true
            // });
            
            // dialogJS.bindDataToDetailCourseForm(element);
            
        });
    }
    

    initShowDetailcourseForm(){
        $('.detailcourse-form').dialog({
            autoOpen: false,
            modal: true,
            width: 500,
            height: 500,
            title: "Thông tin khóa học",
            maxHeight: 300,
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
                Register: function(){
                    
                    //lấy thông tin khóa học đang xem
                    var coursePrice;
                    var creditAmount;
                    $.ajax({
                        method:"get",
                        url: host.Config.localhost + "/getCourseInfo/" + localStorage.getItem('courseid'),
                        headers: {
                            'token': localStorage.getItem('token')
                        },
                        success: function(data){
                            coursePrice = data.price;
                            $('#coursePrice').val(coursePrice);
                            //lấy thông tin số dư tài khoản của user
                            $.ajax({
                                method:"get",
                                url: host.Config.localhost + "/userProfile",
                                headers: {
                                    'token': localStorage.getItem('token')
                                },
                                success: function(data){
                                    creditAmount = data.user.credit;
                                    $('#creditAmount').val(creditAmount);
                                    $('#creditAmountLeft').val(creditAmount-coursePrice);
                                },
                                error: function(){

                                }
                            });
                            //check xem user đã đăng kí khóa học này hay chưa
                            $.ajax({
                                method:"get",
                                headers:{
                                    'token': localStorage.getItem('token')
                                },
                                url: host.Config.localhost + "/checkIfUserRegisteredCourse/" 
                                                            + localStorage.getItem('courseid'),
                                success: function(response){
                                    $('.message-course-alert').html(response.message);
                                    $('.message-course-alert').css('color','green');
                                    dialogJS.registered = response.status;
                                    $('.courseregister-form').dialog("open"); 
                                    
                                },
                                error: function(){

                                }
                            });   
                        },
                        error: function(){

                        }
                    });
                    
                    
                                    
                     
                     
                },
                Cancel: function() {
                    $('.detailcourse-form').dialog( "close" ); 
                }
            }
        }).prev('.ui-dialog-titlebar').css('background','#2D96C8');
        
    }

    setTimeoutJS(url){
        setTimeout(function(){
            window.location.href = url;
        }, 11000);
    }

    initShowCourseregisterForm(){
        $('.courseregister-form').dialog({
            autoOpen: false,
            modal: true,
            width: 500,
            height: 500,
            title: "Đăng ký khóa học",
            maxHeight: 300,
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
                Accept: function(){
                    //update user credit amount
                    if(dialogJS.registered == 'false'){
                        var coursePrice = $('#coursePrice').val();
                        $.ajax({
                            method:"post",
                            contentType: 'application/json',
                            url: host.Config.localhost + '/updateRegisterCourse',
                            headers:{
                                'token': localStorage.getItem('token')
                            },
                            data: JSON.stringify({payPrice: coursePrice, 
                                                    courseRegister: localStorage.getItem('courseid')}),
                            success: function(response){
                                if(response.status != "422"){
                                    window.location.href = 'http://localhost:8000/course';
                                }           
                            }, 
                            error: function(xhr){
                                alert('thanh toán lỗi');
                                // window.location.href = 'http://localhost:8000/course';
                            }
                        });
                    }
                    else{
                        debugger
                        dialogJS.registered = 'false';
                        window.location.href = '/course';

                    }
                    
                },
                Cancel: function() {
                    $('.courseregister-form').dialog( "close" );
                }
            }
        }).prev('.ui-dialog-titlebar').css('background','#2D96C8');
        
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
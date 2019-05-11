$(document).ready(function(){
    dialogJS.init_event();
    // $('.detailcourse-form').dialog('open');
    ValidateJSFunc.checkToken();

});

class DialogJS{
    constructor(){
        this.initShowDetailcourseForm();
        this.initShowCourseregisterForm();
    }
    init_event(){ $('.open-form').click(function(){
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
                     //$('.detailcourse-form').dialog( "close" );
                     $('.courseregister-form').dialog("open");
                },
                Cancel: function() {
                    $('.detailcourse-form').dialog( "close" ); 
                }
            }
        }).prev('.ui-dialog-titlebar').css('background','#2D96C8');
        
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

                    window.location.href = 'http://localhost:8000/course';
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
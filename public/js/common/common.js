$(document).ready(function(){
    // commonJS.showDialog('hello', 'success');
});
class CommonJS{
    constructor(){
        this.logout();
    }
    init_events(){

    }
    appendDIVWithTitle(title, status){
        if(status == 'success'){
            $('body').append('<div id="noticeDialog" class="alert alert-success">' + title + '</div>');            
        }
        else{
            $('body').append('<div id="noticeDialog" class="alert alert-warning">' + title + '</div>');
        }
        
    }
    showDialog(title, status){
        if(!$('body').find('#noticeDialog').length){
            commonJS.appendDIVWithTitle(title, status);
        }
        $('#noticDialog').dialog({
            model: true,
            resizeable: false,
            width: 350,
            title: "thông báo"
        });
        $('#noticDialog').dialog('open');
        setTimeout(function(){
            $('#noticDialog').dialog('close');
        },2000);
    }

    logout(){
        $('.logout-menu').click(function(){
            localStorage.setItem('token','');
            window.location.href = '/';
        });
    }
}
var commonJS = new CommonJS();
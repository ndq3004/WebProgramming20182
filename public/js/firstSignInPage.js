$(document).ready(function(){
    dialogJS.init_event();
    ValidateJSFunc.checkToken();
});

class DialogJS{
    constructor(){
        this.initShowMulticheckForm();
    }
    init_event(){
        
    }

    initShowMulticheckForm(){
        $('#multicheck-form').dialog({
            autoOpen: false,
            modal: true,
            width: 700,
            // maxHeight: 500,
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
                Submit: function(){
                    $('#multicheck-form').dialog( "close" );
                },
                Cancel: function() {
                    $('#multicheck-form').dialog( "close" );
                }
            }
        }).prev('.ui-dialog-titlebar').css('background','#2D96C8');
        $('.open-form').click(function(){
            var element = $(this);
            var maxHeight = $( "#multicheck-form" ).dialog( "option", "maxHeight" );
            $('#multicheck-form').dialog("option", "maxHeight", 500);
            // $('#multicheck-form').dialog("option" ,"position", { my: 'top', at: 'top+80' });
            $('#multicheck-form').dialog('open');
            $(".ui-dialog").draggable({
                // disabled: true
            });
            dialogJS.bindDataToMultiCheckForm(element);
            
        });
    }

    bindDataToMultiCheckForm(element){
        if(element == null) return;
            var type = element.attr('type-t');
            var level = element.attr('level');
            var topicid = element.attr('topicid');
        
        $.ajax({
            method: 'get',
            contentType:'appication/json',
            url: host.Config.localhost + '/getlession/'+ type + "/" + level + "/" + topicid,
            success: function(response){
                for(var i = 0; i < 10; i++) {
                    dialogJS.appendDataToDialog(response[0], i);
                }     
            },
            error: function(){

            }
        })
        
    }

    appendDataToDialog(question, index){
        $('#multicheck-form').append(
            '<div class="multicheck">' +
                '<div class="form-question flex-style">'+
                    '<div class="form-question-number">Question ' + (index+1) + ':</div>'+
                    '<div class="form-question-title">' + question.content + '</div>'+
                '</div>'+
                '<div class="form-answer">'+
                    '<div class="form-check">'+
                        '<input class="form-check-input" type="radio" name="ansA" id="ansA" value="ansA">'+
                        '<label class="form-check-label" for="exampleRadios1">'+
                            question.ansA +
                        '</label>'+
                    '</div>'+
                    '<div class="form-check">'+
                        '<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">'+
                        '<label class="form-check-label" for="exampleRadios2">'+
                            question.ansB +
                        '</label>'+
                    '</div>'+
                    '<div class="form-check">'+
                        '<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option3">'+
                        '<label class="form-check-label" for="exampleRadios1">'+
                            question.ansC +
                        '</label>'+
                    '</div>'+
                    '<div class="form-check">'+
                        '<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option4">'+
                        '<label class="form-check-label" for="exampleRadios2">'+
                            question.ansD+
                        '</label>'+
                    '</div>'+
                '</div>'+
            '</div>'
        );
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
$(document).ready(function(){
    dialogJS.init_event();
    
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
        });
        $('.open-form').click(function(){
            var element = $(this);
            alert(element.val());
            bindDataToMultiCheckForm();
            $('#multicheck-form').dialog('open');
        });
    }

    bindDataToMultiCheckForm(element){
        // var data = {
            var type = element.attr('type-t'),
            var level = element.attr('level'),
            var topicid = element.attr('topicid')
        // };
        
        $.ajax({
            method: 'get',
            contentType:'appication/json',
            url: host.Config.localhost + '/getlession/'+ type + "/" + level + "/" + topicid,
            data: JSON.stringify(data),
            success: function(){

            },
            error: function(){

            }
        })
        
    }
}

var dialogJS = new DialogJS();

var host=host || {}

host.Config={
    localhost:"http://localhost:8000"
}
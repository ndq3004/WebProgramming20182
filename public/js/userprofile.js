$(document).ready(function(){
    Profile.getProfile();
    $('#updateBtn').click(function(){
        Profile.updateProfile();
    })
});
var Profile = {
    getProfile: function(){
        $.ajax({
            method: "get",
            url: host.Config.localhost + "/userProfile",
            headers:{
                'token': localStorage.getItem('token')
            },
            success: function(data){
                $('#account-name').val(data.user.name);
                $('#email').text(data.user.email);
                if(data.user.phone.length > 0){
                    $('#phone-number').val(data.user.phone);
                }
                if(data.user.address.length){
                    $('#address').val(data.user.address);
                }
                
                if(data.course.length > 0){
                    (data.course).forEach(element => {
                        $('#join-courses').append('<li><b>'+ "- " + element.name +'</b></li>');
                    });
                }
            },
            error: function(){
                alert('error');
            }
        });
    },
    updateProfile: function(){
        
        var profile = {
            'name': $('#account-name').val(),
            'address': $('#address').val(),
            'phone': $('#phone-number').val()
        }
        console.log(profile);
        $.ajax({
            method:"put",
            url: host.Config.localhost + '/updateProfile',
            headers: {
                'token': localStorage.getItem('token')
            },
            contentType:'application/json',
            data: JSON.stringify(profile),
            success:function(data){
                // alert(data);
                console.log(data);
            },
            error: function(){
                alert('error');
            }
        });
    }
    
}
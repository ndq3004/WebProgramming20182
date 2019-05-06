$(document).ready(function(){
    Profile.getProfile();
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
                console.log(data);
                $('#account-name').text(data.user.name);
                $('#email').text(data.user.email);
                // $('#phone-number').val();

            },
            error: function(){
                alert('error');
            }
        });
    }
}
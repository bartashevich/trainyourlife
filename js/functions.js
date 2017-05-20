/**
 * REGISTER
 */

// HANDLE FIRST FORM
$("#register_button").click(function(){

    var myData = {};
    myData['full_name'] = $('#full_name').val();
    myData['username'] = $('#username').val();
    myData['email'] = $('#email').val();
    myData['password'] = $('#password').val();
    myData['password_again'] = $('#password_again').val();

    $.ajax({
        url: 'lib/php/classes/register_account.php',
        type: "POST",
        data: $("#register").serialize(),
        success: function(result){
            if(result == 'true'){
                $('#register_success').show('slow').delay(3000).hide('slow');

                $('#full_name').val("");
                $('#username').val("");
                $('#email').val("");
                $('#password').val("");
                $('#password_again').val("");

                setTimeout(function(){ window.location = "/"; }, 3000);
            }
            else if(result == 'notsamepass'){
                $('#register_notsamepass').show('slow').delay(3000).hide('slow');
            }
            else{
                $('#register_fail').show('slow');
            }
        }
    });
});
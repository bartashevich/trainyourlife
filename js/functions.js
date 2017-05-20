/**
 * REGISTER
 */
function register(){

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
}

/**
 * LOGIN
 */
function login(){

    $.ajax({
        url: 'lib/php/classes/login_account.php',
        type: "POST",
        data: $("#login").serialize(),
        success: function(result){
            if(result == 'true'){
                window.location = "/index.php?p=home";
            }
            else{
                $('#login_fail').show('slow');
            }
        }
    });
}
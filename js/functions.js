/**
 * REGISTER
 */
function register(){
    if($('#password').val() != $('#password_again').val()){
        $('#register_fail span').text("Passwords are not the same");
        $('#register_fail').show('slow').delay(3000).hide('slow');
    }
    else if(($('#password').val()).length < 6){
        $('#register_fail span').text("Password length should be more than 5 characters");
        $('#register_fail').show('slow').delay(3000).hide('slow');
    }
    else{
        $.ajax({
            url: 'lib/php/classes/register_account.php',
            type: "POST",
            data: $("#register").serialize(),
            success: function(result){
                console.log(result);
                if(result == '0'){
                    $('#register_success').show('slow').delay(3000).hide('slow');

                    $('#full_name').val("");
                    $('#username').val("");
                    $('#email').val("");
                    $('#password').val("");
                    $('#password_again').val("");

                    setTimeout(function(){ window.location = "/"; }, 3000);
                }
                else if(result == '1'){
                    $('#register_fail span').text("Username already exits");
                    $('#register_fail').show('slow').delay(3000).hide('slow');
                }
                else if(result == '2'){
                    $('#register_fail span').text("Email already exits");
                    $('#register_fail').show('slow').delay(3000).hide('slow');
                }
                else if(result == '3'){
                    $('#register_fail span').text("Password same as email");
                    $('#register_fail').show('slow').delay(3000).hide('slow');
                }
                else if(result == '4'){
                    $('#register_fail span').text("Password same as username");
                    $('#register_fail').show('slow').delay(3000).hide('slow');
                }
                else if(result == '5'){
                    $('#register_fail span').text("Password length should be more than 5 characters");
                    $('#register_fail').show('slow').delay(3000).hide('slow');
                }
                else if(result == '6'){
                    $('#register_fail span').text("Email format is not correct");
                    $('#register_fail').show('slow').delay(3000).hide('slow');
                }
                else if(result == '7'){
                    $('#register_fail span').text("Username length should be more than 2 characters");
                    $('#register_fail').show('slow').delay(3000).hide('slow');
                }
                else{
                    $('#register_fail span').text("A problem has occured!");
                    $('#register_fail').show('slow').delay(3000).hide('slow');
                }
            }
        });
    }
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
            console.log(result);
            if(result == '0'){
                window.location = "/index.php?p=home";
            }
            if(result == '1'){
                $('#login_fail span').text("Email/Username or Password are wrong!");
                $('#login_fail').show('slow').delay(3000).hide('slow');
            }
            else{
                $('#login_fail span').text("Login error");
                $('#login_fail').show('slow').delay(3000).hide('slow');
            }
        }
    });
}

function logout_button(){
    $.ajax({
        url: 'lib/php/classes/logout_account.php',
        type: "POST",
        success: function(result){
            window.location = "/index.php?p=login";
        }
    });
}

function delete_food(object){
    if(getConfirmation($.trim($(object).closest("#object_name").text()))){
        var myData = {};

        myData['food_id'] = $(object).closest( "li" ).attr('data-id');

        $.ajax({
            url: 'lib/php/classes/remove_food.php',
            type: "POST",
            data: myData,
            success: function(result){
                console.log(result);
                if(result == '0'){
                    location.reload();
                    //$(object).closest( "li" ).remove();
                }
                else{
                    console.log('error');
                }
            }
        });
    }
}

function getConfirmation(name){
    var retVal = confirm("Do you want to remove " + name + " from your list?");

    if( retVal == true ){
        return true;
    }
    else{
        return false;
    }
}

//ADD MEAL TO DATABASE
$(document).on("click","#add_meal",function() {
    $.ajax({
        url: 'lib/php/classes/add_meal.php',
        type: "POST",
        data: $("#add_meal_form").serialize(),
        success: function(result){
            console.log(result);
            if(result == '0'){
                location.reload();
            }
            else if(result == '1'){
                $('#add_meal_fail span').text("Error, try to logout and login");
                $('#add_meal_fail').show('slow').delay(3000).hide('slow');
            }
            else if(result == '2'){
                $('#add_meal_fail span').text("Meal with that hour already exists");
                $('#add_meal_fail').show('slow').delay(3000).hide('slow');
            }
            else{
                $('#add_meal_fail span').text("error");
                $('#add_meal_fail').show('slow').delay(3000).hide('slow');
            }
        }
    });
});

//REMOVE MEAL FROM DATABASE
$(document).on("click","#remove_meal",function() {
    if(getConfirmation($('#remove_meal_select option:selected').text())){
        $.ajax({
            url: 'lib/php/classes/remove_meal.php',
            type: "POST",
            data: $("#remove_meal_form").serialize(),
            success: function(result){
                console.log(result);
                location.reload();
            }
        });
    }
});

//ADD FOOD MEAL TO DATABASE
$(document).on("click","#add_food_meal",function() {
    $.ajax({
        url: 'lib/php/classes/add_food_meal.php',
        type: "POST",
        data: $("#add_food_form").serialize(),
        success: function(result){
            console.log(result);
            if(result == '0'){
                location.reload();
            }
            else{
                $('#add_food_fail span').text("Error, please reload page.");
                $('#add_food_fail').show('slow').delay(3000).hide('slow');
            }
        }
    });
});
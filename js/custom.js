//DROPDOWM MENU
$(document).on("click","#diet-menu",function() {
    if($($(this).attr('data-target')).is(':visible'))
    {
        $($(this).attr('data-target')).hide('slow');
    }
    else{
        $('div[id*="eat"]').hide();
        $($(this).attr('data-target')).show('slow');
    }
});

//DROPDOWM MENU EXERCISE
$(document).on("click","#exercise-menu",function() {
    if($($(this).attr('data-target')).is(':visible'))
    {
        $($(this).attr('data-target')).hide('slow');
    }
    else{
        $('div[id*="activiy"]').hide();
        $($(this).attr('data-target')).show('slow');
    }
});

//GET FOOD FROM DATABASE
$(document).on("change","#food_from_database",function() {
    if($('#food_from_database').val() != ''){
        var myData = {};

        myData['food_id'] = $('#food_from_database').val();

        $.ajax({
            url: 'lib/php/classes/get_food_by_id.php',
            type: "POST",
            data: myData,
            success: function(result){
                if(result == '1'){
                    console.log('error');
                    location.reload();
                }
                else{
                    var obj = JSON.parse(result);

                    $('#food_name').val(obj['name']);
                    $('#food_unit').val(obj['unit']);
                    $('#food_protein').val(obj['protein']);
                    $('#food_carbs').val(obj['carbs']);
                    $('#food_fat').val(obj['fat']);
                    $('#food_calories').val(obj['calories']);
                }
            }
        });
    }
});

//GET EXERCISE FROM DATABASE BY GROUP
$(document).on("change","#exercise_group_from_database",function() {
    if($('#exercise_group_from_database').val() != '0'){
        var myData = {};

        myData['exercise_id'] = $('#exercise_group_from_database').val();

        $.ajax({
            url: 'lib/php/classes/get_exercise_by_group.php',
            type: "POST",
            data: myData,
            success: function(result){
                $('#exercise_name_from_database').html('<option value="0">Choose...</option>');
                if(result == '1'){
                    console.log('no_exercises');
                }
                else{
                    var obj = JSON.parse(result);

                    for($i = 0; $i < obj.length; $i++){
                        $('#exercise_name_from_database')
                            .append($("<option></option>")
                                .attr("value",obj[$i]['id'])
                                .attr("data-unit",obj[$i]['unit'])
                                .text(obj[$i]['name']));
                    }
                }
            }
        });
    }
    else{
        $('#exercise_name_from_database').html("");
    }
});

//GET EXERCISE FROM DATABASE
$(document).on("change","#exercise_name_from_database",function() {
    if($('#exercise_name_from_database').val() != '' && $('#exercise_name_from_database').val() != '0'){
        var myData = {};

        myData['exercise_unit'] = $('#exercise_name_from_database option:selected').attr('data-unit');
        myData['exercise_name'] = $('#exercise_name_from_database option:selected').text();

        $('#exercise_unit').val(myData['exercise_unit']);
        $('#exercise_name').val(myData['exercise_name']);
    }
});

//GET EXERCISE HISTORY
$(document).on("change","#exercise_history",function() {
    if($('#exercise_history').val() != '' && $('#exercise_history').val() != '0'){
        var myData = {};

        myData['exercise_name'] = $('#exercise_history option:selected').text();

        $.ajax({
            url: 'lib/php/classes/get_exercise_history.php',
            type: "POST",
            data: myData,
            success: function(result){
                if(result == '1'){
                    $('#weight_container').html('<table class="weight"> <tr> <th>Date</th> <th>Exercise</th> <th>Quanty</th> </tr></table>');
                }
                else{
                    $('#weight_container').html(result);
                }
            }
        });
    }
});

//ADD FOOD BUTTON
$(document).on("click","#add_food",function() {
    $('#add_food_modal').attr('class','modal active');
    $('#add_food_modal_header').text('Add food to '+$(this).attr('data-time'));
    $('#food_menu').val($(this).attr('data-time'));
});

//ADD EXERCISE BUTTON
$(document).on("click","#add_exercise",function() {
    $('#add_exercise_modal').attr('class','modal active');
    $('#add_exercise_modal_header').text('Add exercise to '+$(this).attr('data-name'));
    $('#exercise_plan').val($(this).attr('data-name'));
});

//REMOVE MEAL BUTTON
$(document).on("click","#remove_meal_button",function() {
    $('#remove_meal_modal').attr('class','modal active');
});

//REMOVE PLAN BUTTON
$(document).on("click","#remove_plan_button",function() {
    $('#remove_plan_modal').attr('class','modal active');
});

//ADD MEAL BUTTON
$(document).on("click","#add_meal_button",function() {
    $('#add_meal_modal').attr('class','modal active');
});

//ADD PLAN BUTTON
$(document).on("click","#add_plan_button",function() {
    $('#add_plan_modal').attr('class','modal active');
});

function dailyWeight() {
    $('#weight_container').hide();
    $('#container').show();

    $current_year = new Date().getFullYear();
    $current_month = new Date().getMonth()+1;

    var monthNames = ["January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];

    var myData = {};
    myData['year'] = $current_year;
    myData['month'] = $current_month;

    $.ajax({
        url: 'lib/php/classes/get_daily_weight.php',
        type: "POST",
        data: myData,
        success: function(result){
            var data = JSON.parse(result);
            if(result == '1'){
                location.reload();
            }
            else{
                Highcharts.chart('container', {
                    title: {
                        text: monthNames[$current_month-1]
                    },
                    yAxis: {
                        title: {
                            text: 'Weight (Kg)'
                        }
                    },

                    xAxis: {
                        title: {
                            text: 'Days'
                        }
                    },

                    plotOptions: {
                        series: {
                            pointStart: 1
                        }
                    },

                    series: [{
                        name: 'Weight',
                        data: data
                    }]

                });
            }
        }
    });
}

function monthlyWeight() {
    $('#weight_container').hide();
    $('#container').show();

    $current_year = new Date().getFullYear();

    var myData = {};
    myData['year'] = $current_year;

    $.ajax({
        url: 'lib/php/classes/get_monthly_weight.php',
        type: "POST",
        data: myData,
        success: function(result){
            var data = JSON.parse(result);
            if(result == '1'){
                location.reload();
            }
            else{
                Highcharts.chart('container', {
                    title: {
                        text: $current_year
                    },
                    yAxis: {
                        title: {
                            text: 'Weight (Kg)'
                        }
                    },

                    xAxis: {
                        title: {
                            text: 'Months'
                        }
                    },

                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle'
                    },

                    plotOptions: {
                        series: {
                            pointStart: 1
                        }
                    },

                    series: [
                        {
                            name: 'min',
                            data: data[0]
                        },
                        {
                            name: 'avg',
                            data: data[2]
                        },
                        {
                            name: 'max',
                            data: data[1]
                        }
                    ]
                });
            }
        }
    });
}
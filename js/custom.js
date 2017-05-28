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
    Highcharts.chart('container', {
        title: {
            text: 'May'
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
            data: [50, 50, 55, 55, 50, 55, 60, 65, 50, 50, 55, 55, 50, 55, 60, 65, 50, 50, 55, 55, 50, 55, 60, 65, 50, 50, 55, 55, 50, 55, 60]
        }]

    });
}

function monthlyWeight() {
    Highcharts.chart('container', {
        title: {
            text: '2017'
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
                data: [44, 45, 46, 45, 50, 44, 45, 46, 45, 50, 49, 48]
            },
            {
                name: 'avg',
                data: [50, 50, 55, 55, 50, 55, 60, 65, 50, 55, 60, 65]
            },
            {
                name: 'max',
                data: [60, 65, 70, 80, 75, 60, 65, 70, 80, 75, 80, 85]
            }
        ]
    });
}

function allWeight(){
    $('#container').html('<table class="weight"> <tr> <th>Date</th> <th>Weight</th> </tr> <tr> <td>05/09/2017</td> <td>50 kg</td> </tr> <tr> <td>06/09/2017</td> <td>55 kg</td> </tr> </table>');
}


Highcharts.chart('muscle_spider_chart', {

    chart: {
        polar: true,
        type: 'line'
    },

    title: {
        text: 'Muscle training',
        x: -80
    },

    pane: {
        size: '80%'
    },

    xAxis: {
        categories: ['Abs', 'Butt', 'Arm', 'Leg',
            'Chest', 'Back'],
        tickmarkPlacement: 'on',
        lineWidth: 0
    },

    yAxis: {
        gridLineInterpolation: 'polygon',
        lineWidth: 0,
        min: 0
    },

    tooltip: {
        shared: true,
        pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f}%</b><br/>'
    },

    legend: {
        align: 'right',
        verticalAlign: 'top',
        y: 70,
        layout: 'vertical'
    },

    series: [{
        name: 'Musle Training (%)',
        data: [20, 5, 5, 20, 30, 20],
        pointPlacement: 'on'
    }]

});
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

//ADD FOOD BUTTON
$(document).on("click","#add_food",function() {
    $('#add_food_modal').attr('class','modal active');
    $('#add_food_modal_header').text($(this).attr('data-parent'));
    $('#food_menu').val($(this).attr('data-parent'));
    //console.log($(this).attr('data-parent'));
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

function edit_food_plan(){
    if($('#edit_button').attr('class') == 'btn btn-block btn-positive'){
        $('div[id="add_food_button"]').show();
        $('#edit_button').text("Confirm plan");
        $("#edit_button").attr('class', 'btn btn-block btn-negative');
        $('a[id="navigate_right"]').attr('class', 'disable-a');
        $('p[id="delete_food"]').show();
    }
    else if($('#edit_button').attr('class') == 'btn btn-block btn-negative'){
        $('div[id="add_food_button"]').hide();
        $('#edit_button').text("Edit plan");
        $("#edit_button").attr('class', 'btn btn-block btn-positive');
        $('a[id="navigate_right"]').attr('class', 'navigate-right');
        $('p[id="delete_food"]').hide();
    }
}

function edit_exercise_plan(){
    if($('#edit_button2').attr('class') == 'btn btn-block btn-positive'){
        $('div[id="add_exercise_button"]').show();
        $('#edit_button2').text("Confirm plan");
        $("#edit_button2").attr('class', 'btn btn-block btn-negative');
        $('a[id="navigate_right"]').attr('class', 'disable-a');
        $('p[id="delete_food"]').show();
    }
    else if($('#edit_button2').attr('class') == 'btn btn-block btn-negative'){
        $('div[id="add_exercise_button"]').hide();
        $('#edit_button2').text("Edit plan");
        $("#edit_button2").attr('class', 'btn btn-block btn-positive');
        $('a[id="navigate_right"]').attr('class', 'navigate-right');
        $('p[id="delete_food"]').hide();
    }
}
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
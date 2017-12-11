//DATATABLE LOG
// $(document).ready( function () {
//     $('#log_id').DataTable();
// } );
//$(document).ready(function() {
//    $('#dataTable-body').DataTable();
//} );


//PROGRESS BAR
$(function () {
    var myChart = Highcharts.chart('progressBar', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'My Weekly Progress'
        },
        xAxis: {
            categories: ['MyLog']
        },
        yAxis: {
            title: {
                text: 'Point Total'
            }
        },
        plotOptions: {
        series: {
            stacking: 'normal'
          }
        },
        series: [{
            name: 'Waste',
            data: [1]
        }, {
            name: 'Offsets',
            data: [5]
        }]


    });
});

//PULSE
Highcharts.chart('pulse-container', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Your Activity'
    },
    xAxis: {
        type: 'datetime',
        dateTimeLabelFormats: { // don't display the dummy year
            month: '%e. %b',
            year: '%b'
        },
        title: {
            text: 'Date'
        }
    },
    yAxis: {
        min: 0
    },
    tooltip: {
        headerFormat: '<b>{series.name}</b><br>',
        pointFormat: '{point.x:%e. %b}: {point.y:.2f} m'
    },

    plotOptions: {
        spline: {
            marker: {
                enabled: false
            }
        }
    },

    series: [{
        name: '',
        // Define the data points. All series have a dummy year
        // of 1970/71 in order to be compared on the same x axis. Note
        // that in JavaScript, months start at 0 for January, 1 for February etc.
        data: [
            [Date.UTC(2016, 5, 21), 0],
            [Date.UTC(2016, 10, 4), 0.1],
            [Date.UTC(2016, 11, 4), 0],
            [Date.UTC(2016, 12, 4), 0],
            [Date.UTC(2017, 1, 9), 0.1],
            [Date.UTC(2017, 2, 27), 0.1],
            [Date.UTC(2017, 2, 2), 0.1],
            [Date.UTC(2017, 3, 2), 0],
            [Date.UTC(2017, 4, 2), 0],
            [Date.UTC(2017, 5, 2), 0],
            [Date.UTC(2017, 6, 2), 0],
            [Date.UTC(2017, 5, 26), 0.1]
        ]
    }]
});

$('#progress-bar')
  .progress('set progress', 50)
;
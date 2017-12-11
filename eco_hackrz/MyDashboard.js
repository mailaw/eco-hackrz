//DATATABLE LOG
// $(document).ready( function () {
//     $('#log_id').DataTable();
// } );
$(document).ready(function() {
    $('#dataTable-body').DataTable();
} );


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
$.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=usdeur.json&callback=?', function (data) {

    Highcharts.chart('pulse-container', {
        chart: {
            zoomType: 'x'
        },
        xAxis: {
            type: 'datetime'
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            area: {
                fillColor: {
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 1
                    },
                    stops: [
                        [0, Highcharts.getOptions().colors[0]],
                        [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                    ]
                },
                marker: {
                    radius: 3
                },
                lineWidth: 0.5,
                states: {
                    hover: {
                        lineWidth: 0
                    }
                },
                threshold: null
            }
        },

        series: [{
            type: 'area',
            name: 'Activity',
            data: data
        }]
    });
});

$('#progress-bar')
  .progress('set progress', 50)
;
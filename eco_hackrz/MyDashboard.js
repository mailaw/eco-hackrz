//DATATABLE LOG
// $(document).ready( function () {
//     $('#log_id').DataTable();
// } );



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

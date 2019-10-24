<script src="https://code.highcharts.com/highcharts.js"></script>

<div id="chart1" style="width:100%; height:auto; margin: 0 auto;padding: 0;"></div>

<script>
Highcharts.chart('chart1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Acertos por disciplinas'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Matemática',
            y: 39
        }, {
            name: 'Língua Portuguesa',
            y: 37
        }, {
            name: 'Física',
            y: 41
        }, {
            name: 'Química',
            y: 38
        }, {
            name: 'Biologia',
            y: 20
        }, {
            name: 'Filosofia',
            y: 9
        }, {
            name: 'Sociologia',
            y: 14
        }]
    }]
});
</script>
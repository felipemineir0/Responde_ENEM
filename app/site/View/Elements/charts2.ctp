<div id="chart2" style="width:100%; height:auto; margin: 0 auto;padding: 0;"></div>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/variable-pie.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
    //chart2 com % de acertos
Highcharts.chart('chart2', {
    chart: {
        type: 'variablepie'
    },
    title: {
        text: '% de acertos de cada disciplina'
    },
    tooltip: {
        headerFormat: '',
        pointFormat: '<span style="color:{point.color}">\u25CF</span> <b> {point.name}</b><br/>' +
            'Questões feitas: <b>{point.y}</b><br/>' +
            'Acertos: <b>{point.z}</b><br/>'
    },
    series: [{
        minPointSize: 10,
        innerSize: '20%',
        zMin: 0,
        name: 'countries',
        data: [ {
            name: 'Matemática',
            y: 70,
            z: 39
        }, {
            name: 'Língua Portuguesa',
            y: 80,
            z: 37
        }, {
            name: 'Física',
            y: 50,
            z: 41
        }, {
            name: 'Química',
            y: 40,
            z: 38
        }, {
            name: 'Biologia',
            y: 40,
            z: 20
        }, {
            name: 'Filosofia',
            y: 10,
            z: 9
        }, {
            name: 'Sociologia',
            y: 20,
            z: 14
        }]
    }]
});
</script>
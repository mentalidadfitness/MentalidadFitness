<div class="">
<div id="chart_div" style="width: 100%; height: 400px;"></div>
<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Mes', 'Usuarios Registrados','Usuarios Inactivos', 'Usuarios Bloqueados'],
        ['Enero',  3000, 400, 300],
        ['Febrero',1170, 10, 100],
        ['Marzo',  660, 20, 300],
        ['Abril',  1030, 50, 400],
        ['Mayo',   2, 60, 350],
        ['Junio',  3, 80, 250],
        ['Julio',  4, 90, 220],
        ['Agosto', 200, 100, 210],
        ['Septiembre', 300, 10, 100],
        ['Octubre', 10, 20, 300],
        ['Noviembre', 400, 30, 400],
        ['Diciembre', 1000, 40, 110]
    ]);
    var options = {title: 'Oda chicos',hAxis: {title: 'Año',  titleTextStyle: {color: '#333'}},
        vAxis: {minValue: 0}
    };
    var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}
</script>
</div>

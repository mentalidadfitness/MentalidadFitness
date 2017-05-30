
<div class="bgb_meses">
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
      var options = {title: 'Usuarios',hAxis: {title: 'Año',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
      };
      var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
      chart.draw(data, options);
  }
  </script>
</div>

<div class="bgb_mapa">
  <div id="regions_div" style="width: 900px; height: 500px;"></div>
  <script>
  google.charts.load('current', {'packages':['geochart']});
  google.charts.setOnLoadCallback(drawRegionsMap);
  function drawRegionsMap() {
    var data = google.visualization.arrayToDataTable([
      ['Pais', 'Usuarios'],
      ['Colombia', 800],
      ['Brasil', 100],
      ['Panama', 200],
      ['Argentina', 300],
      ['Bolivia', 400],
      ['Chile', 500],
      ['Costa Rica', 600],
      ['Cuba', 700],
      ['Ecuador', 800],
      ['El Salvador', 100],
      ['Guatemala', 200],
      ['Haiti', 300],
      ['Honduras', 400],
      ['México', 500],
      ['Nicaragua', 600],
      ['Paraguay', 700],
      ['Peru', 800],
      ['Republica Dominicana', 100],
      ['Uruguay', 200],
      ['Venezuela', 300]
    ]);
    var options = {};
    var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
    chart.draw(data, options);
  }
  </script>
</div>

<div class="bgb_rutinas">
  <div id="piechart" style="width: 900px; height: 500px;"></div>
  <script>
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Pecho',     11],
      ['Pierna',      2],
      ['Brazo',  2],
      ['Antebrazo', 2]
    ]);
    var options = {
      title: 'Rutinas más utilizadas'
    };
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
  }
  </script>
</div>

<div class="bgb_dietas">
  <div id="donutchart" style="width: 900px; height: 500px;"></div>
  <script>
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Dieta1',     11],
      ['Dieta2',      2],
      ['Dieta3',  2],
      ['Dieta4', 2],
      ['Dieta5',    7]
    ]);
    var options = {
      title: 'Dietas más utilizadas',
      pieHole: 0.4,
    };
    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
    chart.draw(data, options);
  }
  </script>
</div>

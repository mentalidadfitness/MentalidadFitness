<div id="regions_div" style="width: 900px; height: 500px;"></div>
<script>
google.charts.load('current', {'packages':['geochart']});
google.charts.setOnLoadCallback(drawRegionsMap);
function drawRegionsMap() {
  var data = google.visualization.arrayToDataTable([
    ['Pais', 'Usuarios'],
    ['Colombia', 800],
    ['Brasil', 100],
    ['Panamá', 200],
    ['Argentina', 300],
    ['Bolivia', 400],
    ['Chile', 500],
    ['Costa Rica', 600],
    ['Cuba', 700],
    ['Ecuador', 800],
    ['El Salvador', 100],
    ['Guatemala', 200],
    ['Haití', 300],
    ['Honduras', 400],
    ['México', 500],
    ['Nicaragua', 600],
    ['Paraguay', 700],
    ['Perú', 800],
    ['República Dominicana', 100],
    ['Uruguay', 200],
    ['Venezuela', 300]
  ]);
  var options = {};
  var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
  chart.draw(data, options);
}
</script>

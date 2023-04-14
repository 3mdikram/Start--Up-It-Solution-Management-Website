<?= $this->extend('template/auth_layout'); ?>
<?= $this->section('title'); ?>
Home
<?= $this->endSection(); ?>
<?= $this->section('style'); ?>
<?= $this->endSection(); ?>
<?= $this->section('startitle'); ?>
Dashboard
<?= $this->endSection(); ?>
<?= $this->section('endtitle'); ?>
Dashboard
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<?php require_once('component\home_start_card.php'); ?>
<div class="row">
<?php require_once('component\subscription.php'); ?>
<?php require_once('component\line_chart.php'); ?>
</div>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['User',10],
          ['Plan',4],
          ['Service',7],
          ['Member',12]
        ]);
        var options = {
          title: '',
          is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
      //Line Chart
      google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawBackgroundColor);

function drawBackgroundColor() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'SPP');

      data.addRows([
        [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
        [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
        [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
        [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
        [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
        [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
        [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
        [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
        [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
        [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
        [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
        [66, 70], [67, 72], [68, 75], [69, 80]
      ]);

      var options = {
        hAxis: {
          title: 'Plan'
        },
        vAxis: {
          title: 'Popularity'
        },
        backgroundColor: 'white'
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>
<?= $this->endSection(); ?>
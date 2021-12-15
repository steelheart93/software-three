@extends('master')
@section('content')
    <h1 class="pt-2 text-center">Gráficos con Google Charts</h1>
    <div class="row">
        <div class="col-md-12 p-4">
            <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
        </div>

        <div class="col-md-12 p-4">
            {{ $departamentos }}
        </div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Estado', 'Cantidad'],
                ['Work', 11],
                ['Eat', 2],
                ['Commute', 2],
                ['Watch TV', 2],
                ['Sleep', 7]
            ]);

            var options = {
                title: 'My Daily Activities',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
@endsection

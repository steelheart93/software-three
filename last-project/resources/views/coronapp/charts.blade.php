@extends('master')
@section('content')
    <h1 class="pt-2 text-center">Gráficos con Google Charts</h1>
    <div class="row">
        <div class="col-md-6 p-4">
            <!--google-chart [title]="pieChart.title" [type]="pieChart.type" [columns]="pieChart.columnNames"
                    [data]="pieChart.data" [options]="pieChart.options"></google-chart-->
            {{ $estados }}
        </div>
        <div class="col-md-6 p-4">
            <!--google-chart [title]="columnChart.title" [type]="columnChart.type" [columns]="columnChart.columnNames"
                    [data]="columnChart.data"></google-chart-->
            {{ $departamentos }}
        </div>
    </div>

    <script></script>
@endsection

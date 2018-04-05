@extends ('layouts.master')

@section ('xdashboard')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>


    <canvas class="my-4" id="lineChart" width="90" height="38"></canvas>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
        var ctxL = document.getElementById("lineChart").getContext('2d');
        var myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [
                    {
                        label: "My First dataset",
                        fillColor: "rgba(220,220,220,0.2)",
                        strokeColor: "rgba(220,220,220,1)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                    {
                        label: "My Second dataset",
                        fillColor: "rgba(151,187,205,0.2)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(151,187,205,1)",
                        data: [28, 48, 40, 19, 86, 27, 90]
                    }
                ]
            },
            options: {
                responsive: true
            }    
        });
    </script>
    <script>
        window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            theme: "light1", // "light1", "light2", "dark1", "dark2"
            title:{
                text: "Simple Column Chart with Index Labels"
            },
            data: [{
                type: "column", //change type to bar, line, area, pie, etc
                //indexLabel: "{y}", //Shows y value on all Data Points
                indexLabelFontColor: "#5A5757",
                indexLabelPlacement: "outside",
                dataPoints: [
                    { x: 10, y: 71 },
                    { x: 20, y: 55 },
                    { x: 30, y: 50 },
                    { x: 40, y: 65 },
                    { x: 50, y: 92, indexLabel: "Highest" },
                    { x: 60, y: 68 },
                    { x: 70, y: 38 },
                    { x: 80, y: 71 },
                    { x: 90, y: 54 },
                    { x: 100, y: 60 },
                    { x: 110, y: 36 },
                    { x: 120, y: 49 },
                    { x: 130, y: 21, indexLabel: "Lowest" }
                ]
            }]
        });
        chart.render();

        }
    </script>
@endsection

@section ('content')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
      
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js">
    </script>
    <script type="text/javascript">
        $(document).ready( function () {
            $('#heilist').DataTable({
                "iDisplayLength" : 25
            });
        } );
    </script>

    <h2>HEIs</h2>
    <div class="table-responsive">
        <table class="table table-sm table-hover" id="heilist">
            <thead>
                <tr>
                    <th>UID</th>
                    <th>HEI</th>
             </tr>
            </thead>
            <tbody>
                @foreach ($heis as $hei)
                    <tr>
                        <td>{{ $hei->code }}</td>
                        <td>
                            <a href="/heis/{{ $hei->id }}">
                                {{ $hei->name }}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
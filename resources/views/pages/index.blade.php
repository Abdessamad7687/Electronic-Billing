@extends('layout.index')
@section('content')

<canvas id="myChart" width="400" height="200"></canvas>

<script>
        // Example data, replace this with your actual data
        var chartData = {
            labels: ['Phone', 'Tablette', 'Laptop'],
            datasets: [{
                label: 'Number of Items',
                data: [10, 5, 8], // Replace with your actual data
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        };

        // Chart Configuration
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@endsection
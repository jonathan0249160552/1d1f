<!DOCTYPE html>
<html>
<head>
    <title>Heatmap-like Bar Graph Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="heatmapChart" style="width: 80%; margin: auto;"></canvas>

    <script>
        var ctx = document.getElementById('heatmapChart').getContext('2d');

        var data = [
            { x: 'Pharmaceutical products', y1: 10, y2: 5 },
            { x: 'Category 2', y1: 20, y2: 15 },
            { x: 'Category 3', y1: 5, y2: 8 },
            // Add more data points...
        ];

        var chartData = {
            labels: data.map(item => item.x),
            datasets: [
                {
                    label: 'Value 1',
                    data: data.map(item => item.y1),
                    backgroundColor: 'rgba(255, 99, 132, 0.5)' // Customize the color
                },
                {
                    label: 'Value 2',
                    data: data.map(item => item.y2),
                    backgroundColor: 'rgba(54, 162, 235, 0.5)' // Customize the color
                }
            ]
        };

        var chartOptions = {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        var heatmapChart = new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: chartOptions
        });
    </script>
</body>
</html>

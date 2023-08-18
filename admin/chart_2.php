<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

  <div style="width: 100%; margin: auto;">
    <canvas id="myPieChart"></canvas>
  </div>

  <?php
    // Sample data
    $data = [
      'labels' => ['Projects', 'Companies', 'New factories', 'Existing factories'],
      'datasets' => [
        [
          'data' => [232, 76, 28, 48],
          'backgroundColor' => ['red', 'blue', 'green', 'yellow'],
        ],
      ],
    ];
  ?>

  <script>
    var ctx = document.getElementById('myPieChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
      type: 'pie',
      data: <?php echo json_encode($data); ?>,
      options: {
        // Customization options
      },
    });
  </script>
</body>
</html>

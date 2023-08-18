<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

  <div style="width: 100%; margin: auto;">
    <canvas id="myLineChart"></canvas>
  </div>

  <?php
    // Sample data
    $data = [
      'labels' => ['2017', '2018', '2020', '2022', '2023'],
      'datasets' => [
        [
          'label' => '1D1F projects',
          'data' => [20, 75, 86, 100, 150],
          'fill' => false,
          'borderColor' => 'blue',
          'borderWidth' => 2,
        ],
      ],
    ];
  ?>

  <script>
    var ctx = document.getElementById('myLineChart').getContext('2d');
    var myLineChart = new Chart(ctx, {
      type: 'line',
      data: <?php echo json_encode($data); ?>,
      options: {
        // Customization options
      },
    });
  </script>
</body>
</html>

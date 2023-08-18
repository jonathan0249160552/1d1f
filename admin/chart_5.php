<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

  <div style="width: 100%; margin: auto;">
    <canvas id="myChart"></canvas>
  </div>

  <?php
    // Assuming you've retrieved data from the database and formatted it as needed
    $data = [
      'labels' => ['Eastern Region', 'Ashanti Region', 'Greater Accra', 'Northern Region', '
      western  Region','Volta Region','Bono Region','Central Region','Upper West'],
      'datasets' => [
        [
          'label' => 'Employment Created',
          'data' => [6065, 5401, 19239, 5790, 4452,5200,3590,1404,210],
          'backgroundColor' => 'green',
          'borderColor' => 'green',
          'borderWidth' => 1,
        ],
      ],
    ];
  ?>

  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: <?php echo json_encode($data); ?>,
      options: {
        // Customization options
      },
    });
  </script>
</body>
</html>

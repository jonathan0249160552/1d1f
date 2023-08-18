<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title></title>
  <style>
    /* Custom styles for the dashboard */
    .dashboard {
      padding: 20px;
    }

    .card {
      height: 150px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 30px;
    }
  </style>
</head>
<?php require 'nav_bar.php'; ?>

<body>
  <div class="dashboard">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="border m-2 card  shadow">
          <div class="card bg-danger text-white">
            <i class="fas fa-info-circle"></i>
            <div class="card-body">
              User Management
            </div>
          </div>
          <a href="users.php">
            <p>Total users <?= $x_user->count("users") ?></p>
          </a>
        </div>

      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="border m-2 card  shadow">
          <div class="card bg-warning text-white">
            <i class="fas fa-users"></i>
            <div class="card-body">
              Customer Management
            </div>
          </div>
          <a href="customers.php">
            <p>Total customers <?= $x_user->count("admin_user") ?></p>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="border m-2 card  shadow">
          <div class="card bg-success text-white">
            <i class="fas fa-phone"></i>
            <div class="card-body">
              Contacted
            </div>
          </div>
          <a href="contact.php">
            <p>Total messages <?= $x_user->count("contact") ?></p>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 ">
        <div class=" bg-info text-white border  shadow">
          <!-- <i class="fas fa-search-location"></i> -->
          <div class="card-body rounded">
            Job Application
          </div>
          <hr>

        </div>
        <div class="bg-white  rounded"><a href="applicants.php">
            <p>Total applicants <?= $x_user->count("job") ?></p>
          </a></div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class=" bg-info text-white border  shadow">
          <!-- <i class="fas fa-search-location"></i> -->
          <div class="card-body rounded">
            Orders
          </div>
          <hr>

        </div>
        <div class="bg-white  rounded"><a href="orders.php">
            <p>Total orders <?= $x_user->count("admin_user") ?></p>
          </a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class=" bg-info text-white border  shadow">
          <!-- <i class="fas fa-search-location"></i> -->
          <div class="card-body rounded">
          Exhibitions
          </div>
          <hr>

        </div>
        <div class="bg-white  rounded"><a href="orders.php">
            <p>Total exhibitions <?= $x_user->count("exhibition") ?></p>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6 border rounded">
        <?php require 'chart_2.php' ?>
      </div>
      <div class="col-6 border rounded">
        <?php require 'chart_3.php' ?>
      </div>
    </div>
  </div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
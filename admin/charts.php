<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/style-freedom.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
<?php require 'nav_bar.php'?>
  <section class="w3l-feature-9">
    <div class="main-w3">
      <div class="wrapper">
        <div class="row justify-content-center mt-4">
          <div class="col-lg-10 mt-4">
            <div class=" mt-3">
              <div class="card-header border-success">
                <ul class="nav nav-tabs card-header-tabs">
                  <li class="nav-item">
                    <a href="#profile" class="nav-link active text-success font-weight-bold" data-toggle="tab">1D1F</a>
                  </li>
                  <li class="nav-item">

                    <a href="#editProfile" class="nav-link text-success  font-weight-bold" data-toggle="tab">Employment</a>
                  </li>
                  <li class="nav-item">
                    <a href="#changePass" class="nav-link text-success  font-weight-bold" data-toggle="tab">Projects</a>
                  </li>
                </ul>
              </div>

              <div class="card-body">
                <div class="tab-content">

                  <!-- profile tab content start -->
                  <div class="tab-pane container  active" id="profile">
                    <div id="verifyEmailAlert"></div>
                    <div class="card-deck">
                      <?php require 'chart_2.php' ?>

                    </div>
                  </div>

                  <!-- change password tab content start -->
                  <div class="tab-pane container" id="changePass">

                    <div class="card-deck">
                      <?php require 'chart_3.php' ?>

                    </div>
                  </div>

                  <!-- change password tab content end -->
                  <style>
                    .img {
                      object-fit: contain
                    }
                  </style>
                  <!-- edit profile tab content start -->
                  <div class="tab-pane container fade" id="editProfile">
                    <div class="card-deck">

                      <div class="card border-success">
                        <?php require 'Chart_5.php'?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <div>
    <script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
    <!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>


</body>

</html>

</body>

</html>
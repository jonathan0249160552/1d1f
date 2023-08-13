<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Service</title>
  <link rel="stylesheet" href="assets/css/style-freedom.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>


  <div class="modal card fade" id="AppointmentModal" style="background-color:rgba(0, 0, 0, 0);">
    <div class="modal-dialog modal-lg  modal-dialog-centered ">
      <div class="modal-content">
        <div class="">
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" style="background-color: #f9351b;">x</button>
          </div>
        </div>
        <div class="modal-body">
          <h4 class="  p-2 text-center font-weight-bold ">Details</h4>

          <div class="card-deck">
            <div class="card m-2 ">
              <div class="card-body ">
                
                  <div class="form-group displayDetails">

                  </div>



              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>

  <div class="w3l-headers-9">
    <?php require 'header.php' ?>
  </div>


  <!-- //features-7 -->

  <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
    <!---728x90--->

  </div>
  <section class="w3l-text-25-main">
    <div class="text-25">
      <div class="wrapper">
        <h5 class="heading">job vacancies</h5>
        <h3 class="heading">Available Jobs</h3>
        <div class="text-25-content">
          <div class="d-grid showJobs">

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--// text-25 -->


  <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
    <!---728x90--->

  </div>
  <!-- footer-28 block -->

  <!-- //footer-28 block -->
  <script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <script>
    displayJobs();
    //display all note of a user
    function displayJobs() {
      $.ajax({
        url: 'admin/assets/php/process.php',
        method: 'post',
        data: {
          action: 'displayJobs'
        },
        success: function(response) {
          $(".showJobs").html(response);;
        }
      });
    }

    $('body').on("click", ".more", function(e) {
      view = $(this).attr('id');
      $.ajax({
        url: 'admin/assets/php/process.php',
        method: 'post',
        data: {
          view: view
        },
        success: function(response) {
          console.log(response)
          $('.displayDetails').html(response);

        }
      });

    })
  </script>
</body>

</html>
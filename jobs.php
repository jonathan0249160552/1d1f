<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/style-freedom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="w3l-headers-9">
        <header>
            <?php require 'header.php'?>
        </header>      
    </div>
 
  
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
  <section class="w3l-text-25-main">
    <div class="text-25">
      <div class="wrapper">
        <h5 class="heading mt-4 pt-4">job vacancies</h5>
        <h3 class="heading">Available Jobs</h3>
        <div class="text-25-content">
          <div class="d-grid showJobs">

          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- footer-28 block -->
  <?php require 'footer.php' ?>
  <!-- //footer-28 block -->
  <script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
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

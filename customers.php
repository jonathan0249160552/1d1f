<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>

<body>

  <?php require 'nav_bar.php'; ?>

  <div style="margin-top: 40px;padding-bottom:40px;" class="card-body">
    <div class="table-responsive showUsers">

    </div>

  </div>
  </div>
  </div>

  <script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
  <!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>

 

  <script>
    $(document).ready(function() {
      displayCustomers();
      //display all note of a user
      function displayCustomers() {
        $.ajax({
          url: 'assets/php/process.php',
          method: 'post',
          data: {
            action: 'displayCustomers'
          },
          success: function(response) {
            $(".showUsers").html(response);
            
          }
        });
      }



      $('body').on("click", ".deleteBtn", function(e) {
        del_customer = $(this).attr('id');
        Swal.fire({
          title: 'Are you sure you want to delete?',
          text: "",
        
          showCancelButton: true,
          confirmButtonColor: '#b12828',
          cancelButtonColor: '#282ab1',
          confirmButtonText: 'Yes, Delete it'
        }).then((result) => {
          if (result.value) {
            $.ajax({
          url: 'assets/php/process.php',
          method: 'post',
          data:{del_customer: del_customer},
          success: function(response) {
            Swal.fire({
                      title: 'Deleted',
                      type: 'success'
                    });
           location.reload()
          }
        });

          }
        })

      
      });


    })
  </script>
</body>

</html>
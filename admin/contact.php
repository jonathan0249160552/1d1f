<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <style>
    @media (max-width: 850px) {


      .mySearch {
        margin-top: 6px;
      }
    }

    @media (max-width: 280px) {

      .searchBox {
        width: 150px;
      }

    }

    .searchBox {
      width: 230px;
    }


    @media (max-width: 850px) {
      .logo {
        float: right;
      }
    }

    @media (min-width: 850px) {
      .myNav {
        display: flex;
      }
    }

    .myNav {
      justify-content: space-between;
      /* position: fixed; */
      width: 100%;
      z-index: 100;
    }
  </style>

</head>

<body>

  <?php require 'nav_bar.php'; ?>

  <div style="margin-top: 40px;padding-bottom:40px;" class="card-body">
    <div class="toolbar displayContact table-responsive">

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
      displayContact();
      //display all note of a user
      function displayContact() {
        $.ajax({
          url: 'assets/php/process.php',
          method: 'post',
          data: {
            action: 'displayAllContact'
          },
          success: function(response) {
            $(".displayContact").html(response);

          }
        });
      }

      $('body').on("click", ".deleteBtn", function(e) {
        del_gallery = $(this).attr('id');
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
              data: {
                del_gallery: del_gallery
              },
              success: function(response) {
                Swal.fire({
                      title: 'Deleted',
                      type: 'success'
                    });
                console.log(response)
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
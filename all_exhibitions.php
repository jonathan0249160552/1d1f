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
    <div class="toolbar showAllExhibitions">

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




      // Facebook Pixel Code Don't Delete
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window,
        document, 'script', 'connect.facebook.net/en_US/fbevents.js');

      try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

      } catch (err) {
        console.log('Facebook Track Error:', err);
      }

    });
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />

  </noscript>

  <script>
    $(document).ready(function() {
      var Icon_next = '<i class="fas fa-chevron-circle-right fa-lg"></i>'
      var Icon_previous = '<i class="fas fa-chevron-circle-left fa-lg"></i>'
      var Icon_last = '<i class="	fas fa-angle-double-right fa-lg"></i>'
      var Icon_first = '<i class="	fas fa-angle-double-left fa-lg"></i>'
      $('#datatable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
          paginate: {
            next: "" + Icon_next + "",
            previous: "" + Icon_previous + "",
            last: "" + Icon_last + "",
            first: "" + Icon_first + ""
          }


        }



      });


      //   $('#datatable').dataTable( {
      // "language": {
      //     "paginate": {
      //     "next": "Next page"
      //     }
      // }
      // } );

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
          $tr = $tr.prev('.parent');
        }

        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        if ($($tr).hasClass('child')) {
          $tr = $tr.prev('.parent');
        }
        table.row($tr).remove().draw();
        e.preventDefault();
      });


      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      displayUsers();
      //display all note of a user
      function displayUsers() {
        $.ajax({
          url: 'assets/php/process.php',
          method: 'post',
          data: {
            action: 'showAllExhibitions'
          },
          success: function(response) {
            $(".showAllExhibitions").html(response);

          }
        });
      }

      $('body').on("click", ".deleteBtn", function(e) {
        del_exhibit = $(this).attr('id');
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
                del_exhibit: del_exhibit
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="assets/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/datatables/datatables.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link rel="stylesheet" href="assets/css/style-freedom.css">
</head>
<body>
     <!-- header -->
     <div class="w3l-headers-9">
        <header>
            <?php require 'header.php' ?>
        </header>
       
    </div>
    <div class="w3l-specifications-5">
        <!-- Specifications5 block -->
        <section id="specifications5-block">
            <div class="wrapper">
                <div class="d-grid align-specifications5-cols">
                    <div class="specifications5-left">
                        <h5 class="heading">Our Stats</h5>
                        <h3 class="heading">Some facts about 1D1F</h3>
                        <p>The President of Ghana created the One District One Factory (1D1F) initiative in 2017 to
                            change the nature of Ghana’s economy from one that is dependent on the export of raw
                            materials and the import of finished goods to one that is focused on manufacturing, value
                            addition, and the export of processed goods. </p>
                        <p>Key raw materials for this production often are
                            found in the districts of potential production and would have otherwise gone to waste <a
                                href="blog.php" style="color:green;">Know More</a></p>
                    </div>
                    <div class="specifications5-right">
                        <div class="d-grid grid-col-2">
                            <div class="specification">
                                <span class="fa fa-project-diagram"></span>
                                <h4>148</h4>
                                <p>Impending project</p>
                            </div>
                            <div class="specification">
                                <span class="fa fa-pie-chart"></span>
                                <h4>106</h4>
                                <p>Completed project</p>
                            </div>
                            <div class="specification spec-gap">
                                <span class="fa fa-certificate"></span>
                                <h4>278</h4>
                                <p>Commission</p>
                            </div>
                            <div class="specification spec-gap">
                                <span class="fa fa-users"></span>
                                <h4>150,975+</h4>
                                <p>Employment created</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="w3l-footer-28-main">
        <?php require 'footer.php' ?>
    </section>
    <script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- <script src="assets/js/bootstrap.bundle.min.js"></script>   -->
        <script src="assets/datatables/datatables.min.js"></script>
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
</body>
</html>
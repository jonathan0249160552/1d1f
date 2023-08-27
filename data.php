<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style-freedom.css">

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script> -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>

    <!-- <script type="text/javascript" src="assets/js/datatables.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script> -->
</head>
<body>
<body>
    <header>
        <?php require 'header.php' ?>
    </header>


    <section class="container pt-4">
        <div class="main-w3 pt-4">
            <div class="wrapper mt-4">
                <div class=" main-cont-wthree-fea">
                    <div class=" mt-4">
                        <div class=" mt-4">
                            <table id="datatable" class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Activity</th>
                                        <th>District</th>
                                        <th>Indirect</th>
                                        <th>Region</th>
                                        <th>Employment</th>
                                        <th>Direct</th>
                                        <th>Indirect</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Number</th>
                                        <th>Company</td>
                                        <th>Activity</th>
                                        <th>District</th>
                                        <th>Region</th>
                                        <th>Employment</th>
                                        <th>Direct</th>
                                        <th>Indirect</th>


                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Pam Pharmaceuticals Ltd. </td>
                                        <td>Manufacture of Pharmaceutical
                                            products</td>
                                        <td>Akwapim South</td>
                                        <td>Eastern</td>
                                        <td>590</td>
                                        <td>284</td>
                                        <td>306</td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Prefos Ghana Limited. </td>
                                        <td>Manufacture of street lights and
                                            poles including delivery of
                                            electrical and related services</td>
                                        <td>Ejisu Municipal</td>
                                        <td>Ashanti</td>
                                        <td>230</td>
                                        <td>230</td>
                                        <td>-</td>
                                    </tr>


                                    <tr>
                                        <td>3</td>
                                        <td>Brompton Portfolio</td>
                                        <td>Manufacturing toilet roll</td>
                                        <td>Akuapim South
                                            Municipal </td>
                                        <td>Eastern</td>
                                        <td>105</td>
                                        <td>25</td>
                                        <td>80</td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>Profad Glazing System Limited</td>
                                        <td>Manufacturing roofing sheet</td>
                                        <td>Adentan Municipal
                                            Assembly</td>
                                        <td>Greater Accra</td>
                                        <td>57</td>
                                        <td>57</td>
                                        <td>-</td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>Osiadan Concretes Products
                                            Ltd</td>
                                        <td>Manufacturing of concrete
                                            products</td>
                                        <td>Weija Gbawe</td>
                                        <td>Greater Accra</td>
                                        <td>15</td>
                                        <td>15</td>
                                        <td>-</td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Ankod Industries</td>
                                        <td>Manufacturing of concrete
                                            products</td>
                                        <td>Shai Osudoku</td>
                                        <td>Greater Accra</td>
                                        <td>120</td>
                                        <td>120</td>
                                        <td>-</td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>Golden Milan Limited</td>
                                        <td>Manufacturing of aluminum
                                            profile to support the
                                            construction industry</td>
                                        <td>Ningo Prampram</td>
                                        <td>Greater Accra</td>
                                        <td>65</td>
                                        <td>65</td>
                                        <td>-</td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>Zuriel Carbon</td>
                                        <td>Manufacturing of briquettes from
                                            saw dust for the export market</td>
                                        <td>Kwahu West</td>
                                        <td>Eastern</td>
                                        <td>91</td>
                                        <td>30</td>
                                        <td>-</td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>Skyline Steel Company Limited </td>
                                        <td>Manufacturing of steel roofing
                                            tiles</td>
                                        <td>Ejisu</td>
                                        <td>Ashanti</td>
                                        <td>45</td>
                                        <td>45</td>
                                        <td>-</td>
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>Springs and Bolts Company
                                            Limited
                                        </td>
                                        <td>Manufacturing Of U-Bolts and
                                            Leaf Springs and Trailor
                                            Suspension</td>
                                        <td>Kumasi Asokwa</td>
                                        <td>Ashanti</td>
                                        <td>65</td>
                                        <td>65</td>
                                        <td>-</td>
                                    </tr>

                                    <tr>
                                        <td>11</td>
                                        <td>LK International Co. Limited
                                            (Motor King)
                                        </td>
                                        <td>Assembling, distribution and
                                            maintenance of motor bikes,
                                            tricycles, bicycles etc</td>
                                        <td>Tamale Municipal</td>
                                        <td>Northern</td>
                                        <td>392</td>
                                        <td>45</td>
                                        <td>347</td>
                                    </tr>

                                    <tr>
                                        <td>12</td>
                                        <td>Shaba Enterprise
                                        </td>
                                        <td>Manufacture of cookers and
                                            other electricals</td>
                                        <td>Kwahu West</td>
                                        <td>Eastern</td>
                                        <td>392</td>
                                        <td>45</td>
                                        <td>347</td>
                                    </tr>

                                    <tr>
                                        <td>13</td>
                                        <td>B5 Plus Alloys
                                        </td>
                                        <td>Production of Steel and related
                                            products</td>
                                        <td>Ningo Prampram </td>
                                        <td>Greater Accra
                                        </td>
                                        <td>1900</td>
                                        <td>1900</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>B5 Plus Alloys
                                        </td>
                                        <td>Production of Steel and related
                                            products</td>
                                        <td>Tema Municipal</td>
                                        <td>Greater Accra
                                        </td>
                                        <td>850</td>
                                        <td>300</td>
                                        <td>550</td>
                                    </tr>

                                    <tr>
                                        <td>15</td>
                                        <td>KEDA Ceramics Company
                                            Limited.
                                        </td>
                                        <td>Production of Ceramic Tiles from
                                            clay</td>
                                        <td>Shame</td>
                                        <td>Western
                                        </td>
                                        <td>2792</td>
                                        <td>600</td>
                                        <td>2192</td>
                                    </tr>

                                    <tr>
                                        <td>16</td>
                                        <td>Kete Krachie Timber Recovery
                                            Limited.
                                        </td>
                                        <td>The company uses a robust
                                            underwater logging system to
                                            recover trees from the Volta Lake
                                            and proces it into wood and wood
                                            products </td>
                                        <td>Asuogyaman</td>
                                        <td>Eastern
                                        </td>
                                        <td>55</td>
                                        <td>15</td>
                                        <td>40</td>
                                    </tr>

                                    <tr>
                                        <td>17</td>
                                        <td>Volta Forest Products
                                            Company
                                        </td>
                                        <td>Wood processing </td>
                                        <td>Hohoe Municipal </td>
                                        <td>Volta
                                        </td>
                                        <td>4000</td>
                                        <td>85</td>
                                        <td>3915</td>
                                    </tr>

                                    <tr>
                                        <td>18</td>
                                        <td>Miro Forestry Limited

                                        </td>
                                        <td>Manufacturing of veneer and
                                            plywood</td>
                                        <td>Sekyere Afram Plains</td>
                                        <td>Ashanti
                                        </td>
                                        <td>150</td>
                                        <td>30</td>
                                        <td>120</td>
                                    </tr>

                                    <tr>
                                        <td>19</td>
                                        <td>Sunda Ghana Investment
                                            Company Ltd

                                        </td>
                                        <td>Production of Hardware e.g.
                                            Roofing Sheet, Iron rod and nails</td>
                                        <td>Ga South</td>
                                        <td>Greater Accra
                                        </td>
                                        <td>650</td>
                                        <td>300</td>
                                        <td>350</td>
                                    </tr>

                                    <tr>
                                        <td>20</td>
                                        <td>EKA Foods</td>
                                        <td>Agro-Processing</td>
                                        
                                        <td>Sunyani East
                                        </td>
                                        <td>Bono</td>
                                        <td>20</td>
                                        <td>20</td>
                                        <td>-</td>
                                    </tr>

                                    <tr>
                                        <td>21</td>
                                        <td>Kaskazini Ltd</td>
                                        <td>Processing of palm and kernel oil</td>
                                        
                                        <td>Ellembelle
                                        </td>
                                        <td>Western</td>
                                        <td>1660</td>
                                        <td>160</td>
                                        <td>1500</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
    </section>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
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
 
</body>
</html>
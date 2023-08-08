<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require 'nav_bar.php' ?>
    <div class="container">
        <div class="card">
            <div class="form-group">
                <div class="forms-17-form">
                    <div class="p-4">

                        <form action="#c" method="post" id="product_form" class="signin-form">
                            <label for="">Company name</label>
                            <div class="form-input m-2 p-2">
                                <input type="text" name="company_name" class="form-control">
                            </div>
                            <label for="">Select product type</label>
                            <div class="form-input m-2 p-2">
                                <select name="product_type" class="form-control">
                                    <option value="Food products">Food products</option>
                                    <option value="Electrical products">Electrical products</option>
                                    <option value="Wood products">Wood products</option>
                                    <option value="Leather products">Leather products</option>
                                    <option value="Spare products">Spare products</option>
                                    <option value="Construction production">Construction production</option>
                                    <option value="Paper and paper products">Paper and paper products</option>
                                    <option value="Title">Title products</option>



                                </select>
                            </div>
                            <div class="form-input m-2 p-2">
                                <input type="file" name="image" class="form-control"  required />
                            </div>


                            <div class="Alert"></div>

                            <div class="align-left-right">

                                <!-- <button  >login</button> -->
                                <input type="submit" class="btn-lg btn bg-success text-white" id="send_upload" value="Upload">

                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script>
        $("#product_form").submit(function (e) {
        e.preventDefault();
        // alert("Are you sure you want to Upload")
        $("#send_upload").val("Please wait...");

        $.ajax({
          url: "assets/php/process.php",
          method: "post",
          processData: false,
          contentType: false,
          cache: false,
          data: new FormData(this),


          success: function (response) {
            $("#send_upload").val("Upload");
            $('.Alert').html(response);
          },
        });
      });
</script>
</html>
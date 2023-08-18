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
        <div class="card m-4 p-4 shadow rounded">
            <div class="form-group">
                <form action="#" method="post" id="job_form">
                    <label for="">Product name</label>
                    <input type="text" name="product_name" class="form-control" id="" required> <br>
                    <label for="">Product price</label>
                    <input type="number" name="price" class="form-control" required> <br>
                    <label for="">Product picture</label>
                    <input type="file" class="form-control" name="product_image[]" required accept=".png,.jpeg,.jpg" multiple><br>
                    <label for="">Instruction</label>
                    <textarea name="instruction" class="form-control" cols="30" rows="10" ></textarea><br>
                    <label for="">Dimension</label>
                    <input type="text" name="dimension" class="form-control"><br>
                    <label for="">Package contain</label>
                    <textarea name="package_contain"  class="form-control" cols="30" rows="10" ></textarea><br>
                    <label for="">Warranty</label>
                    <input type="text" name="warranty" class="form-control" ><br>
                    <label for="">Color</label>
                    <input type="text" name="color" class="form-control" ><br>
                    
                    <input type="hidden" name="post_code" value="<?=  bin2hex(random_bytes(15))?>">
                    <input type="hidden" name="xid" value="<?=  $admin_id?>">
                    <div class="Alert"></div>
                    <input type="submit" class="btn btn-primary m-2" value="Post">

                </form>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        $("#job_form").submit(function(e) {
            e.preventDefault();
            $("#post").val("Please wait...");
            $.ajax({
                url: "assets/php/process.php",
                method: "post",
                processData: false,
                contentType: false,
                cache: false,
                data: new FormData(this),
                success: function(response) {
                    console.log(response);
                    $("#post").val("Post");
                    $('.Alert').html(response);
                },
            });
        });
    </script>
</body>

</html>
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
        <div class="card m-4 p-4 alert-success">
        <div class="form-group">
            <form action="#" method="post" id="gallery_form">
                <input type="text" name="title" placeholder="Title" class="form-control" id="" required> <br>
                <label for="">Content</label>
                <textarea name="content" class="form-control" id="" cols="30" rows="10" required></textarea>
                <label for="">Select Image</label>
                <input type="file" class="form-control" name="galleryImage" id="" required>
                <div class="Alert"></div>
                <input type="submit" class="btn btn-primary m-2" value="Post" >
                
            </form>
        </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
        $("#gallery_form").submit(function(e) {
            e.preventDefault();
            // alert("Are you sure you want to Upload")
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
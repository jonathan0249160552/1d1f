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
<?php require 'header.php' ?>

<div class="container p-4">
        <div style="margin-top: 200px;" class="card p-2">
        <h4>Please fill form to register factory</h4>
        <div class="form-group">
            <form action="#" method="post" id="job_form">
                <input type="text" name="company_name" placeholder="factory name" class="form-control" id=""> <br>
                <label for="">Brief Description of the factory</label>
                <textarea name="jobDescription" class="form-control" id="" cols="30" rows="10" required></textarea><br>

                <input type="text" name="jobTitle" class="form-control" id="" placeholder="location" required><br>
              
                <input type="number" name="contact" id="" placeholder="contact" class="form-control"><br>
                <input type="email" name="email" id="" placeholder="email" class="form-control"><br>
                <label for="">Factory license</label>
                <input type="file" class="form-control" name="jobImage" id="" required accept=".pdf"><br>
                <div class="Alert"></div>
                <input type="submit" class="btn btn-primary m-2" value="Register" ><br>
                
            </form>
        </div>
        </div>
    </div>
<?php require 'footer.php' ?>
</body>
</html>
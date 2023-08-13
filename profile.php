<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style-freedom.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div>
        <?php
        require 'header.php';

        ?>
    </div>

    <section class="w3l-feature-9">
        <div class="main-w3">
            <div class="wrapper">
                <div class="row justify-content-center mt-4">
                    <div class="col-lg-10 mt-4">
                        <div class="card rounded-0 mt-3 border-success">
                            <div class="card-header border-success">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a href="#profile" class="nav-link active text-success font-weight-bold" data-toggle="tab">Profile</a>
                                    </li>
                                    <li class="nav-item">

                                        <a href="#editProfile" class="nav-link text-success  font-weight-bold" data-toggle="tab">Edit Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#changePass" class="nav-link text-success  font-weight-bold" data-toggle="tab">Change Password</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <div class="tab-content">

                                    <!-- profile tab content start -->
                                    <div class="tab-pane container  active" id="profile">
                                        <div id="verifyEmailAlert"></div>
                                        <div class="card-deck">

                                            <div class="card  border-success">
                                                <div class="card-header bg-success text-white text-center font-weight-bold lead"><i class="fas fa-id-card-alt"></i>
                                                    User ID : <?= $cid; ?>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text text-dark p-2 m-1 rounded border border-success" ><b>Name : </b><?= $cname; ?></p>



                                                    <p class="card-text text-dark p-2 m-1 border-success rounded border" ><b>User name </b><?= $cuser_name; ?></p>

                                                    <p class="card-text text-dark p-2 m-1 rounded border-success border" ><b>E-Mail : </b><?= $cemail; ?></p>
                                         

                                                    <p class="card-text text-dark p-2 m-1 rounded border-success border" ><b>Registered On : </b><?= $reg_on; ?></p>


                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- change password tab content start -->
                                    <div class="tab-pane container" id="changePass">
                                        <div id="changepassAlert"></div>
                                        <div class="card-deck">
                                            <div class=" img-thumbnail img-fluid align-self-center align-self-center">
                                             
                                            </div>
                                            <div class="card border-sucess">
                                                <div class="card-header bg-success text-white text-center-lead ">
                                                    Change Password
                                                </div>
                                                <form action="#" method="post" class="px-3 mt-2" id="change-pass-form">
                                                    <div class="form-group">
                                                        <label for="cnewpass">Enter new Password</label>
                                                        <input type="password" name="curpass" placeholder="Current Password" class="form-control form-control-lg" id="curpass" require minleght="8" autocomplete="off">
                                                    </div>

                                                    <div class="form-group">

                                                        <input type="password" autocomplete="off" name="newpass" placeholder="New Password" class="form-control form-control-lg" id="newpass" require minleght="8">
                                                    </div>

                                                    <div class="form-group">

                                                        <input type="password" autocomplete="off" name="cnewpass" placeholder="Confirm Password" class="form-control form-control-lg" id="cnewpass" require minleght="8">
                                                    </div>
                                                    <div class="form-group">
                                                        <p id="changepassError" class="text-danger"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" name="changepass" value="Change Password" class="btn btn-success btn-block btn-lg " id="changePassBtn">

                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- change password tab content end -->
                                    <style>
                                        .img {
                                            object-fit: contain
                                        }
                                    </style>
                                    <!-- edit profile tab content start -->
                                    <div class="tab-pane container fade" id="editProfile">
                                        <div class="card-deck">
                                       
                                            <div class="card border-success">
                                                <form action="" method="post" class="px-3 mt-2" enctype="multipart/form-data" id="profile-update-form">
                                                   
                                                    <div class="form-group m-0">
       

                                                            <!-- <a href="#" id="deleteUserPic" class="mt-0 btn btn-danger  btn-block font-weight-bold">
                          <i class="fas fa-user-times"></i>&nbsp;Delete Profile Picture</a> -->
                                                    </div>

                                                    <div class="form-group m-1">
                                                        <label for="name" class="m-1"></label>
                                                        <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="<?= $cname; ?>">
                                                    </div>

                                                

                                                    <div class="form-group m-2">
                                                        <label for="phone" class="m-1"></label>
                                                        <input type="tel" id="phone" oninput="javascript: if (this.value.length > this.maxLength)
                           this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="10" placeholder="Phone" name="phone" value="<?= $cphone; ?>" class="form-control">
                                                    </div>

                                                    <div class="form-group m-2">
                                                        <label for="dob" class="m-1">Date of Birth</label>
                                                        <input type="date" id="dob" name="dob" value="<?= $cdob; ?>" class="form-control">
                                                    </div>

                                                    

                                                    <div class="form-group m-2">
                                                       


                                                        <div class="form-group mt-4">
                                                            <input type="submit" name="profile_update" value="Update Profile" class="btn btn-success  btn-block font-weight-bold" id="profileUpdateBtn">
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div>
	<script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
	<!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                // profile update ajax request
                $("#profile-update-form").submit(function(e) {
                    e.preventDefault();

                    $.ajax({
                        url: 'assets/php/process.php',
                        method: 'post',
                        processData: false,
                        contentType: false,
                        cache: false,
                        data: new FormData(this),
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                type: 'success',
                                title: 'Profile updated successfully',
                                timer: 3000,
                                closeOnConfirm: false
                            })
                            location.reload();
                        }



                    });
                });

                $('#scroll').click(function() {

                });
                // change Password Ajax Request
                $("#changePassBtn").click(function(e) {
                    if ($("#change-pass-form")[0].checkValidity()) {
                        e.preventDefault();
                        $("#changePassBtn").val('Please Wait...');
                        if ($("#newpass").val() != $("#cnewpass").val()) {
                            $("#changepassError").text('* Password did not match!');
                            $("#changePassBtn").val('Change Password');
                        } else {
                            $.ajax({
                                url: 'assets/php/process.php',
                                method: 'post',
                                data: $("#change-pass-form").serialize() + '&action=change_pass',
                                success: function(response) {
                                    $("#changepassAlert").html(response);
                                    $("#changePassBtn").val('Change Password');
                                    $("#changepassError").text('');
                                    $("#change-pass-form")[0].reset();
                                    notifyMe();
                                }
                            });
                        }
                    }
                });

                // Remove notification
                $("#deleteUserPic").click(function(e) {
                    e.preventDefault();
                    profilePic_id = $(this).attr('id');

                    $.ajax({
                        url: 'assets/php/process.php',
                        method: 'post',
                        data: {
                            profilePic_id: profilePic_id
                        },
                        success: function(response) {

                        }
                    })

                })
                // verify email ajax request

                $("#verify-email").click(function(e) {
                    e.preventDefault();
                    $(this).text('Please Wait...');

                    $.ajax({
                        url: 'assets/php/process.php',
                        method: 'post',
                        data: {
                            action: 'verify_email'
                        },
                        success: function(response) {
                            $("#verifyEmailAlert").html(response);
                            $("#verify-email").text('Verify Now');
                        }
                    })
                })

            });

            // check  notification 
            checkNotification();

            function checkNotification() {
                $.ajax({
                    url: 'assets/php/process.php',
                    method: 'post',
                    data: {
                        action: 'checkNotification'
                    },
                    success: function(response) {
                        $("#checkNotification").html(response);
                    }
                });
            }
        </script>


        <script>
            function filterFunction(that, event) {
                let container, input, filter, li, input_val;
                container = $(that).closest(".searchable");
                input_val = container.find("input").val().toUpperCase();

                if (["ArrowDown", "ArrowUp", "Enter"].indexOf(event.key) != -1) {
                    keyControl(event, container)
                } else {
                    li = container.find("ul li");
                    li.each(function(i, obj) {
                        if ($(this).text().toUpperCase().indexOf(input_val) > -1) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });

                    container.find("ul li").removeClass("selected");
                    setTimeout(function() {
                        container.find("ul li:visible").first().addClass("selected");
                    }, 100)
                }
            }

            function keyControl(e, container) {
                if (e.key == "ArrowDown") {

                    if (container.find("ul li").hasClass("selected")) {
                        if (container.find("ul li:visible").index(container.find("ul li.selected")) + 1 < container.find("ul li:visible").length) {
                            container.find("ul li.selected").removeClass("selected").nextAll().not('[style*="display: none"]').first().addClass("selected");
                        }

                    } else {
                        container.find("ul li:first-child").addClass("selected");
                    }

                } else if (e.key == "ArrowUp") {

                    if (container.find("ul li:visible").index(container.find("ul li.selected")) > 0) {
                        container.find("ul li.selected").removeClass("selected").prevAll().not('[style*="display: none"]').first().addClass("selected");
                    }
                } else if (e.key == "Enter") {
                    container.find("input").val(container.find("ul li.selected").text()).blur();
                    onSelect(container.find("ul li.selected").text())
                }

                container.find("ul li.selected")[0].scrollIntoView({
                    behavior: "smooth",
                });
            }

            function onSelect(val) {
                // alert(val)
            }

            $(".searchable input").focus(function() {
                $(this).closest(".searchable").find("ul").show();
                $(this).closest(".searchable").find("ul li").show();
            });
            $(".searchable input").blur(function() {
                let that = this;
                setTimeout(function() {
                    $(that).closest(".searchable").find("ul").hide();
                }, 300);
            });

            $(document).on('click', '.searchable ul li', function() {
                $(this).closest(".searchable").find("input").val($(this).text()).blur();
                onSelect($(this).text())
            });

            $(".searchable ul li").hover(function() {
                $(this).closest(".searchable").find("ul li.selected").removeClass("selected");
                $(this).addClass("selected");
            });
        </script>

</body>

</html>

</body>

</html>
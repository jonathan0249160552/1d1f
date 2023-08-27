<?php
require 'auths_admin.php';

$x_user = new Authenticates();


if (isset($_POST['action']) && $_POST['action'] == 'displayAllJobs') {
	$output = '';
	$data = $x_user->allJob();

	if ($data) {
		$output .= '<table class="table  table-bordered text-center  ">
		<thead>
			<tr>
				<th>Action</th>
				<th> Company name</th>	
				<th>Job title</th>
				<th>Job description </th>
				<th>Contact</th>
				<th>Email</th>
				<th>Cv</th>
				<th>Posted on</th>
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {

			$output .= '<tr >
			<td> <button class="btn text-danger deleteBtn" type="button" id="' . $row['id'] . '">
			<span class="glyphicon glyphicon-trash"></span> Delete</button></td>
			<td>' . $row['company_name'] . '</td>
			<td>' . $row['job_title'] . '</td>
			<td>' . $row['job_des'] . '</td>
			<td>' . $row['contact'] . '</td>
			<td>' . $row['email'] . '</td>
			<td>' . $row['pic'] . '</td>
			<td>' . $x_user->timeInAgo($row['posted_on']) . '</td>
			
			
		
		</tr>';
		}
		$output .= '</tbody>
					</table>';

		echo $output;
	} else {
		echo '<h4 class="text-center text-muted"> no job posted yet </h4>';
	}
}

if (isset($_POST['action']) && $_POST['action'] == 'displayUsers') {
	$output = '';
	$data = $x_user->allUsers();
	$path2 = 'assets/php/imagesuploadedf/';
	if ($data) {
		$output .= '<table class="table table-bordered text-center  ">
		<thead>
			<tr>
				<th>Action</th>
				<th> Name</th>	
				<th>Email</th>
				<th>Phone </th>
				<th>Created</th>
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {

			$output .= '<tr >
			<td> <button class="btn text-danger deleteBtn" type="button" id="' . $row['id'] . '">
			<span class="glyphicon glyphicon-trash"></span> Remove</button></td>
			<td>' . $row['full_name'] . '</td>
			<td>' . $row['email'] . '</td>
			<td>' . $row['phone'] . '</td>
			
			<td>' . $x_user->timeInAgo($row['created_on']) . '</td>
			
			
		
		</tr>';
		}
		$output .= '</tbody>
					</table>';

		echo $output;
	} else {
		echo '<h4 class="text-center text-muted"> no user yet </h4>';
	}
}



if (isset($_POST['action']) && $_POST['action'] == 'displayCustomers') {
	$output = '';
	$data = $x_user->allCustomers();
	$path2 = 'assets/php/imagesuploadedf/';
	if ($data) {
		$output .= '<table class="table table-striped table-bordered text-center  ">
		<thead>
			<tr>
				<th>Action</th>
				<th> Name</th>	
				<th>Email</th>
				<th>Phone </th>
				<th>Created</th>
				
			
			
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {

			$output .= '<tr >
			<td> <button class="btn text-danger deleteBtn" type="button" id="' . $row['id'] . '">
			<span class="glyphicon glyphicon-trash"></span> Remove</button></td>
			<td>' . $row['full_name'] . '</td>
			<td>' . $row['email'] . '</td>
			<td>' . $row['phone'] . '</td>
			
			<td>' . $x_user->timeInAgo($row['created_at']) . '</td>
			
			
		
		</tr>';
		}
		$output .= '</tbody>
					</table>';

		echo $output;
	} else {
		echo '<h4 class="text-center text-muted"> no customers yet </h4>';
	}
}


if (isset($_POST['action']) && $_POST['action'] == 'displayApplication') {
	$output = '';
	$data = $x_user->allApplication();
	$path2 = 'assets/php/imagesuploadedf/';
	if ($data) {
		$output .= '<table class="table table-striped table-bordered text-center  ">
		<thead>
			<tr>
				<th>Action</th>
				<th> Name</th>	
				<th>Email</th>
				<th>Phone </th>
				<th>Created</th>
				
			
			
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {

			$output .= '<tr >
			<td> <button class="btn text-danger deleteBtn" type="button" id="' . $row['id'] . '">
			<span class="glyphicon glyphicon-trash"></span> Remove</button></td>
			<td>' . $row['name'] . '</td>
			<td>' . $row['email'] . '</td>
			<td>' . $row['contact'] . '</td>
			
			<td>' . $x_user->timeInAgo($row['applied_on']) . '</td>
			
			
		
		</tr>';
		}
		$output .= '</tbody>
					</table>';

		echo $output;
	} else {
		echo '<h4 class="text-center text-muted"> no customers yet </h4>';
	}
}



if (isset($_POST['action']) && $_POST['action'] == 'showAllExhibitions') {
	$output = '';
	$data = $x_user->allExhibition();
	$path2 = 'assets/php/imagesuploadedf/';
	if ($data) {
		$output .= '<table class="table table-striped table-bordered text-center  ">
		<thead>
			<tr>
				<th>Action</th>
				<th>Company Name</th>	
				<th>Type</th>
				<th>Image</th>
				<th>Posted On</th>
				
			
			
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {

			$output .= '<tr >
			<td> <button class="btn text-danger deleteBtn" type="button" id="' . $row['id'] . '">
			<span class="glyphicon glyphicon-trash"></span> Delete</button></td>
			<td>' . $row['company_name'] . '</td>
			<td>' . $row['type'] . '</td>
			<td> <img class="productImage" width="100px" src="assets/php/media/' . $row['picture'] . '" alt=""></td>
			
			<td>' . $x_user->timeInAgo($row['created_on']) . '</td>
			
			
		
		</tr>';
		}
		$output .= '</tbody>
					</table>';

		echo $output;
	} else {
		echo '<h4 class="text-center text-muted">:no products yet </h4>';
	}
}



if (isset($_POST['action']) && $_POST['action'] == 'displayAllGallery') {
	$output = '';
	$data = $x_user->allGallery();
	$path2 = 'assets/php/imagesuploadedf/';
	if ($data) {
		$output .= '<table class="table table-striped table-bordered text-center  ">
		<thead>
			<tr>
				<th>Action</th>
				<th>Edit</th>
				<th>Title</th>	
				<th>Content</th>
				<th>Image</th>
				<th>Posted On</th>
				
			
			
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {

			$output .= '<tr>
			<td> <button class="btn text-danger deleteBtn" type="button" id="' . $row['id'] . '">
			<span class="glyphicon glyphicon-trash"></span> Delete</button></td>
			<td> <button class="btn text-primary deleteBtn" type="button" id="' . $row['id'] . '">
			<span></span> Edit</button></td>
			<td>' . $row['title'] . '</td>
			<td>' . $row['text'] . '</td>
			<td> <img class="productImage" width="100px" src="assets/php/media/' . $row['pic'] . '" alt=""></td>
			
			<td>' . $x_user->timeInAgo($row['posted_on']) . '</td>
			
			
		
		</tr>';
		}
		$output .= '</tbody>
					</table>';

		echo $output;
	} else {
		echo '<h4 class="text-center text-muted">:No gallery posted yet </h4>';
	}
}



if (isset($_POST['action']) && $_POST['action'] == 'displayAllContact') {
	$output = '';
	$data = $x_user->allContact();
	$path2 = 'assets/php/imagesuploadedf/';
	if ($data) {
		$output .= '<table class="table table-striped table-bordered text-center  ">
		<thead>
			<tr>
				<th>Action</th>
				<th>Name</th>
				<th>Email</th>	
				<th>phone</th>
				<th>Subject</th>
				<th>Message</th>
				<th>Contacted</th>
			
			
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {

			$output .= '<tr>
			<td> <button class="btn text-danger deleteBtn" type="button" id="' . $row['id'] . '">
			<span class="glyphicon glyphicon-trash"></span> Delete</button></td>
		
			<td>' . $row['name'] . '</td>
			<td>' . $row['email'] . '</td>
			<td>' . $row['phone'] . '</td>
			<td>' . $row['subject'] . '</td>
			<td>' . $row['message'] . '</td>
			
			<td>' . $x_user->timeInAgo($row['posteed_on']) . '</td>
			
			
		
		</tr>';
		}
		$output .= '</tbody>
					</table>';

		echo $output;
	} else {
		echo '<h4 class="text-center text-muted">:No contacts </h4>';
	}
}



if (isset($_POST['action']) && $_POST['action'] == 'displayAllPost') {
	$output = '';
	$data = $x_user->allBlog();
	$path2 = 'assets/php/imagesuploadedf/';
	if ($data) {
		$output .= '<table class="table table-striped table-bordered text-center  ">
		<thead>
			<tr>
				<th>Action</th>
				<th>Title</th>
				<th>Content</th>	
				<th>Picture</th>
				
				<th>Posted on</th>
			
			
			</tr>
		</thead>
		<tbody>';
		foreach ($data as $row) {

			$output .= '<tr>
			<td> <button class="btn text-danger deleteBtn" type="button" id="' . $row['id'] . '">
			<span class="glyphicon glyphicon-trash"></span> Delete</button></td>
		
			<td>' . $row['title'] . '</td>
			<td>' . $row['content'] . '</td>
			<td><img src="assets/php/media/' . $row['picture'] . '" width="100px" class="img-responsive"
			alt="" /></td>
			
			
			<td>' . $x_user->timeInAgo($row['posted_on']) . '</td>
			
			
		
		</tr>';
		}
		$output .= '</tbody>
					</table>';

		echo $output;
	} else {
		echo '<h4 class="text-center text-muted">:No posts yet </h4>';
	}
}



if (isset($_POST['action']) && $_POST['action'] == 'displayExhibition') {
	$output = '';
	$data = $x_user->allExhibition();

	if ($data) {
		$output .= '';
		foreach ($data as $row) {

			$output .= ' <div class="features-top-left_sur">
            <span class="fa fa-cart-arrow-down"></span>
            <h4><a href="ecommerce.html">' . $row['company_name'] . '</a></h4>
            <h4><a href="ecommerce.html">' . $row['type'] . '</a></h4>
            <div class="">
               
                <img class="productImage" src="assets/php/media/' . $row['picture'] . '" alt="">
            </div>
        </div>';
		}


		echo $output;
	} else {
		echo '<h4 class="text-center text-muted">No products</h4>';
	}
}


if (isset($_POST['action']) && $_POST['action'] == 'displayGallery') {
	$output = '';
	$data = $x_user->allGallery();

	if ($data) {
		$output .= '';
		foreach ($data as $row) {

			$output .= '  <div class="product">
			<a href="portfolio-single.html"><img src="admin/assets/php/media/' . $row['pic'] . '" class="img-responsive"
					alt="" /></a>
			<div class="product-details text-center">
				<a href="#c" data-toggle="modal" id="' . $row['id'] . '" data-target="#GalleryModal" class="text more">Read more</a>
			</div>
		
		</div>';
		}


		echo $output;
	} else {
		echo '<h4 class="text-center text-muted">No products</h4>';
	}
}



if (isset($_POST['action']) && $_POST['action'] == 'displayJobs') {
	$output = '';
	$data = $x_user->allJob();

	if ($data) {
		$output .= '';
		foreach ($data as $row) {

			$output .= ' <div class="d-flex my-2">
			<div>
			<img  width="300px" src="assets/php/media/' . $row['pic'] . '" alt="">
            </div>
			<div class="column-two">
				<div class="box13">
					<h3><a href="#c">' . $row['job_title'] . '</a></h3>
					<p>' . $row['job_des'] . '</p>
					<a href="#c" data-toggle="modal" id="' . $row['id'] . '" data-target="#AppointmentModal" class="action more btn">View Details </a>
				</div>
			</div>
		</div>';
		}


		echo $output;
	} else {
		echo '<h4 class="text-center text-muted">No Job posted yet</h4>';
	}
}

if (isset($_POST['action']) && $_POST['action'] == 'displayBlog') {
	$output = '';
	$data = $x_user->allBlog();

	if ($data) {
		$output .= '';
		foreach ($data as $row) {

			$output .= ' 
			<div class="grids5-info m-2">
			<a href="gallery.php"><img src="admin/assets/php/media/' . $row['picture'] . '" alt="" /></a>
			<div class="blog-info">
				<h4><a href="gallery.php"><h4><a href="#c">' . $row['title'] . '</a></h4></a></h4>
				<p>' . $row['content'] . '</p>
				<ul class="blog-list">
					<li>
						<p><span class="fa fa-clock-o"></span> Sep 2019</p>
					</li>
					<li>
						<p><span class="fa fa-heart"></span> 20 </p>
					</li>
					<li>
						<p></span><span class="fa fa-comments"></span> 2 </p>
					</li>
				</ul>
			</div>
		</div>   

			';
		}


		echo $output;
	} else {
		echo '<h4 class="text-center text-muted">No Job posted yet</h4>';
	}
}









if (isset($_FILES['image'])) {
	// $uploadStatus = true;
	$file_name = ($_FILES['image']['name']);
	$file_size = ($_FILES['image']['size']);
	$file_tmp =  ($_FILES['image']['tmp_name']);
	$file_type = ($_FILES['image']['type']);
	$accept = ["jpg", "png", "jpeg"];
	$product_type  = ($_POST['product_type']);
	$company_name = ($_POST['company_name']);


	$ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

	if (in_array($ext, $accept)) {

		if ($file_size <= 1000000) {


			$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

			$new_file_name = uniqid() . '.' . $file_ext;

			if (move_uploaded_file($file_tmp, 'media/' . $new_file_name)) {

				$x_user->imageToDatabase($company_name, $product_type, $new_file_name);
				echo 'Posted Successfully';
			} else {

				echo  $x_user->showMessage('danger', 'Upload error');
			}
		} else {

			echo  $x_user->showMessage('danger', 'Files must be less than 1mb');
		}
	} else {

		echo  $x_user->showMessage('danger', 'Invalid image');
	}
}



if (isset($_FILES['blogImage'])) {
	// $uploadStatus = true;
	$file_name = ($_FILES['blogImage']['name']);
	$file_size = ($_FILES['blogImage']['size']);
	$file_tmp =  ($_FILES['blogImage']['tmp_name']);
	$file_type = ($_FILES['blogImage']['type']);
	$accept = ["jpg", "png", "jpeg"];
	$title  = ($_POST['title']);
	$content = ($_POST['blogContent']);


	$ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

	if (in_array($ext, $accept)) {

		if ($file_size <= 1000000) {


			$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

			$new_file_name = uniqid() . '.' . $file_ext;

			if (move_uploaded_file($file_tmp, 'media/' . $new_file_name)) {

				$x_user->postBlog($title, $content, $new_file_name);
				echo 'Posted Successfully';
			} else {

				echo  $x_user->showMessage('danger', 'Upload error');
			}
		} else {

			echo  $x_user->showMessage('danger', 'Files must be less than 1mb');
		}
	} else {

		echo  $x_user->showMessage('danger', 'Invalid image');
	}
}




if (isset($_POST['del_id'])) {
	$id = $_POST['del_id'];
	$x_user->deleteUser($id);
}

if (isset($_POST['del_customer'])) {
	$id = $_POST['del_customer'];
	$x_user->deleteCustomer($id);
}

if (isset($_POST['del_exhibit'])) {
	$id = $_POST['del_exhibit'];
	$x_user->deleteExhibition($id);
}


if (isset($_POST['del_job'])) {
	$id = $_POST['del_job'];
	$x_user->deleteJob($id);
}

if (isset($_POST['del_gallery'])) {
	$id = $_POST['del_gallery'];
	$x_user->deleteGallery($id);
}

if (isset($_POST['del_applicant'])) {
	$id = $_POST['del_applicant'];
	$x_user->deleteApplication($id);
}

if (isset($_POST['del_post'])) {
	$id = $_POST['del_post'];
	$x_user->deleteBlog($id);
}


if (isset($_POST['view'])) {
	$id = $_POST['view'];
	$output = '';
	$data = $x_user->allJobDetails($id);
	foreach ($data as $row) {

		$output .= ' <div class="">	
		<label>Company Name</label>
		<input type="text" id="company_name" class="form-control" value="' . $row['company_name'] . '" readonly>
		<label>Email</label>
		<input type="text" class="form-control " id="email" value="' . $row['email'] . '" readonly>
		<label>Contact</label>
        <input type="text" id="contact" class="form-control " value="' . $row['contact'] . '" readonly>
					</div>';
	}

	echo $output;
}

if (isset($_POST['gallery_view'])) {
	$id = $_POST['gallery_view'];
	// print_r($_POST);
	$output = '';
	$data = $x_user->allGalleryDetails($id);
	foreach ($data as $row) {

		$output .= ' <div class="">	
		
		<h4>' . $row['title'] . '</h4>
		<p>' . $row['text'] . '</p>
		
      
					</div>';
	}

	echo $output;
}

if (isset($_POST['jobDescription'])) {
	$jobTitle = $x_user->test_input($_POST['jobTitle']);
	$jobDescription = $x_user->test_input($_POST['jobDescription']);
	$email = $x_user->test_input($_POST['email']);
	$contact = $x_user->test_input($_POST['contact']);
	$company_name = ($_POST['company_name']);

	if (isset($_FILES['jobImage'])) {
		// $uploadStatus = true;
		$file_name = ($_FILES['jobImage']['name']);
		$file_size = ($_FILES['jobImage']['size']);
		$file_tmp =  ($_FILES['jobImage']['tmp_name']);
		$file_type = ($_FILES['jobImage']['type']);
		$accept = ["pdf"];
		// $product_type  = ($_POST['product_type']);


		$ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

		if (in_array($ext, $accept)) {

			if ($file_size <= 1000000) {


				$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

				$new_file_name = uniqid() . '.' . $file_ext;

				if (move_uploaded_file($file_tmp, 'media/' . $new_file_name)) {

					$x_user->postJob($company_name, $jobTitle, $jobDescription, $email, $contact, $new_file_name);
					echo 'Posted Successfully';
				} else {
					echo "Post Failed";
				}
			} else {

				echo "Image size should be less 1mb";
			}
		} else {

			echo "Invalid image format";
		}
	}
}


if (isset($_FILES['galleryImage'])) {
	// $uploadStatus = true;
	$file_name = ($_FILES['galleryImage']['name']);
	$file_size = ($_FILES['galleryImage']['size']);
	$file_tmp =  ($_FILES['galleryImage']['tmp_name']);
	$file_type = ($_FILES['galleryImage']['type']);
	$accept = ["jpg", "png", "jpeg"];
	$title = $x_user->test_input($_POST['title']);
	$content = $x_user->test_input($_POST['content']);
	// $product_type  = ($_POST['product_type']);


	$ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

	if (in_array($ext, $accept)) {

		if ($file_size <= 1000000) {


			$file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

			$new_file_name = uniqid() . '.' . $file_ext;

			if (move_uploaded_file($file_tmp, 'media/' . $new_file_name)) {

				$x_user->postGallery($title, $content, $new_file_name);
				echo 'Posted Successfully';
			} else {
				echo "Post Failed";
			}
		} else {

			echo "Image size should be less 1mb";
		}
	} else {

		echo "Invalid image format";
	}
}


if (isset($_FILES['product_image'])) {

	$file_name = ($_FILES['product_image']['name']);
	$file_size = ($_FILES['product_image']['size']);
	$file_tmp =  ($_FILES['product_image']['tmp_name']);
	$file_type = ($_FILES['product_image']['type']);

	$file_name_2 = ($_FILES['product_image']['name'][0]);
	$file_size_2 = ($_FILES['product_image']['size'][0]);
	$file_tmp_2 =  ($_FILES['product_image']['tmp_name'][0]);
	$file_type_2 = ($_FILES['product_image']['type'][0]);

	$accept = ["jpg", "png", "gif", "jpeg"];
	$product_name = $x_user->test_input($_POST['product_name']);
	$product_price = $x_user->test_input($_POST['price']);
	$instruction = $x_user->test_input($_POST['instruction']);
	$dimension = $x_user->test_input($_POST['dimension']);
	$package_contain = $x_user->test_input($_POST['package_contain']);
	$warranty = $x_user->test_input($_POST['warranty']);
	$color = $x_user->test_input($_POST['color']);
	$post_code = $_POST['post_code'];
	$x_id = $_POST['xid'];
	// $x_id ="0";
	$ext = strtolower(pathinfo($file_name_2, PATHINFO_EXTENSION));

	if (in_array($ext, $accept)) {

		if ($file_size_2 <= 1000000) {


			$file_ext = pathinfo($file_name_2, PATHINFO_EXTENSION);

			$new_file = uniqid() . '.' . $file_ext;
			move_uploaded_file($file_tmp_2, 'media/' . $new_file);
			$x_user->postProduct(
				$product_name,
				$product_price,
				$instruction,
				$dimension,
				$package_contain,
				$warranty,
				$color,
				$post_code,
				$x_id,
				$new_file
			);
		} else {

			
		}
	} else {

	}

	foreach ($file_name as $key => $file_names) {

		$ext = strtolower(pathinfo($file_name[$key], PATHINFO_EXTENSION));

		if (in_array($ext, $accept)) {

			if ($file_size[$key] <= 1000000) {

				$file_ext = pathinfo($file_name[$key], PATHINFO_EXTENSION);

				$new_file_name = uniqid() . '.' . $file_ext;

				move_uploaded_file($file_tmp[$key], 'media/' . $new_file_name);
				echo $x_user->showMessage('success','Post successfully');
					$x_user->postProductImage($post_code, $new_file_name);
			
			} else {

				echo $x_user->showMessage('danger','Image size should be less 1mb');
			}
		} else {

			echo $x_user->showMessage('danger','Invalid image format');
			
		}
	}
}
?>
	<script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
<script>
	     $(".formAddToCart").submit(function(e) {
            e.preventDefault();
            alert("Are you sure you want to Upload")
            // $("#post").val("Please wait...");

            $.ajax({
                url: "admin/assets/php/process.php",
                method: "post",
                processData: false,
                contentType: false,
                cache: false,
                data: new FormData(this),


                success: function(response) {
                    console.log(response);
                    // $("#post").val("Post");
                    $('.Alert').html(response);
                },
            });
        });

	// $(".cartBtn").click(function(e) {
	// 	alert("alert");
	// 	const data = {
	// 		post_id: GetId,
	// 		priceTag: priceTag,
	// 		price: price,
	// 		mateName: mateName,
	// 		mateContact: mateContact,
	// 		mateGender: mateGender,
	// 		mateOption: mateOption,
	// 		admin_id: admin_id

	// 	}
	// 	alert("alert");
	// 	// Sending data to the PHP script using AJAX
	// 	$.ajax({
	// 		type: 'POST',
	// 		url: 'assets/php/handle_rent.php',
	// 		data: JSON.stringify(data),
	// 		contentType: 'application/json',
	// 		success: function(response) {
	// 			$('.rentAlert').html(response);
	// 		},
	// 		error: function(xhr, status, error) {
	// 			console.error(xhr.responseText);
	// 		}
	// 	});


	// });
</script>
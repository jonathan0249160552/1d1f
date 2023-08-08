
<?php
require 'auths_admin.php';

$x_user = new Authenticates();



if(isset($_POST['action']) && $_POST['action'] == 'displayUsers' ){
	$output='';
	$data = $x_user->allUsers();
	$path2 = 'assets/php/imagesuploadedf/';
	if($data){
		$output.= '<table class="table table-striped table-bordered text-center  ">
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
		foreach ($data as $row){
			
			$output .='<tr >
			<td> <button class="btn text-danger deleteBtn" type="button" id="'.$row['id'].'">
			<span class="glyphicon glyphicon-trash"></span> Remove</button></td>
			<td>'.$row['full_name'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['phone'].'</td>
			
			<td>'.$x_user->timeInAgo($row['created_on']).'</td>
			
			
		
		</tr>';
		}
			$output.= '</tbody>
					</table>';
					
					echo $output;


	}
	else{
		echo '<h4 class="text-center text-muted"> no user yet </h4>';
	}


}



if(isset($_POST['action']) && $_POST['action'] == 'displayCustomers' ){
	$output='';
	$data = $x_user->allCustomers();
	$path2 = 'assets/php/imagesuploadedf/';
	if($data){
		$output.= '<table class="table table-striped table-bordered text-center  ">
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
		foreach ($data as $row){
			
			$output .='<tr >
			<td> <button class="btn text-danger deleteBtn" type="button" id="'.$row['id'].'">
			<span class="glyphicon glyphicon-trash"></span> Remove</button></td>
			<td>'.$row['full_name'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['phone'].'</td>
			
			<td>'.$x_user->timeInAgo($row['created_at']).'</td>
			
			
		
		</tr>';
		}
			$output.= '</tbody>
					</table>';
					
					echo $output;


	}
	else{
		echo '<h4 class="text-center text-muted"> no customers yet </h4>';
	}
}


if(isset($_POST['action']) && $_POST['action'] == 'showAllExhibitions' ){
	$output='';
	$data = $x_user->allExhibition();
	$path2 = 'assets/php/imagesuploadedf/';
	if($data){
		$output.= '<table class="table table-striped table-bordered text-center  ">
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
		foreach ($data as $row){
			
			$output .='<tr >
			<td> <button class="btn text-danger deleteBtn" type="button" id="'.$row['id'].'">
			<span class="glyphicon glyphicon-trash"></span> Delete</button></td>
			<td>'.$row['company_name'].'</td>
			<td>'.$row['type'].'</td>
			<td> <img class="productImage" width="100px" src="assets/php/media/'.$row['picture'].'" alt=""></td>
			
			<td>'.$x_user->timeInAgo($row['created_on']).'</td>
			
			
		
		</tr>';
		}
			$output.= '</tbody>
					</table>';
					
					echo $output;


	}
	else{
		echo '<h4 class="text-center text-muted">:no products yet </h4>';
	}
}


if(isset($_POST['action']) && $_POST['action'] == 'displayExhibition' ){
	$output='';
	$data = $x_user->allExhibition();

	if($data){
		$output.= '';
		foreach ($data as $row){
			
			$output .=' <div class="features-top-left_sur">
            <span class="fa fa-cart-arrow-down"></span>
            <h4><a href="ecommerce.html">'.$row['company_name'].'</a></h4>
            <h4><a href="ecommerce.html">'.$row['type'].'</a></h4>
            <div class="">
               
                <img class="productImage" src="assets/php/media/'.$row['picture'].'" alt="">
            </div>
        </div>';
		}
		
					
					echo $output;


	}
	else{
		echo '<h4 class="text-center text-muted">No products</h4>';
	}
}







if (isset($_FILES['image'])) {
    // $uploadStatus = true;
    $file_name = ($_FILES['image']['name']);
    $file_size = ($_FILES['image']['size']);
    $file_tmp =  ($_FILES['image']['tmp_name']);
    $file_type = ($_FILES['image']['type']);
    $accept = ["jpg", "png","jpeg"];
    $product_type  = ($_POST['product_type']);
    $company_name = ($_POST['company_name']);
  

        $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (in_array($ext, $accept)) {

            if ($file_size<= 1000000) {

               
                $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

                $new_file_name = uniqid() . '.' . $file_ext;

                if (move_uploaded_file($file_tmp, 'media/' . $new_file_name)) {
                  
                    $x_user->imageToDatabase($company_name, $product_type, $new_file_name);
                    echo 'Posted Successfully';
                } else {
                    echo "uploadErr";
                }
            } else {
                
                echo "imageSizeErr";
            }
        } else {
            
            echo "imageFormateErr";
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


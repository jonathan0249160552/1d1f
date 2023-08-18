<?php
require 'session.php';

$cuser = new Authenticates();

if (isset($_POST['action']) && $_POST['action'] == 'displayProduct') {
    $output = '';
    $data = $cuser->allProduct();

    if ($data) {
        $output .= '';
        foreach ($data as $row) {
            $price_1 = $row['product_price'];
            $price_2 =    $price_1 * 0.5;
            $output .= '    
			<div class="owl-item item col-lg-4 col-md-4 col-sm-6 col-xs-6">
			<div class="wpbProBlock proFlyBlock  multiple_image" data-price="12.00">
				<div class="proHImage">
					<a class="proFeaturedImage" href="#c">
						<span>
							<img class="img-responsive" width="" alt="Ford Boutique Cups" src="admin/assets/php/media/' . $row['file_name'] . '">
						</span>
						<img class="img-responsive imgFlyCart image-primay" alt="Ford Boutique Cups" src="admin/assets/php/media/' . $row['file_name'] . '">
					</a>
					<p class="proAttr instock hidden ">Many In Stock</p>
					<div  class=" justify-content-between btnButtonProduct">
						<div  class="productQuickView ">
							<a class=" btnProduct btnProductQuickview" href="ecommerce-single.html" data-handle="durable-alloy-work-lamp-1" title="Quick View">
								Quick View
								<span class="fa fa-info-circle"></span>
							</a>
						</div>
						<form action="#c" method="post" enctype="multipart/form-data" class="formAddToCart">
							<input type="hidden" name="myPrice" value="' . $price_1 . '">
							<input type="hidden" name="myProductName" value="' . $row['product_name'] . '">
							<input type="hidden" name="myInstruction" value="' . $row['instruction'] . '">
							<input type="hidden" name="myDimension" value="' . $row['dimension'] . '">
							<input type="hidden" name="myPackage" value="' . $row['package_contain'] . '">
							<input type="hidden" name="myWarranty" value="' . $row['warranty'] . '">
							<input type="hidden" name="myImage" value="' . $row['file_name'] . '">
							<input type="hidden" name="myColor" value="' . $row['color'] . '">
							<input type="hidden" name="cid" value="' . $cid . '">
                            <input type="hidden" name="post_code" value="' . $row['post_code'] . '">
							<button class="btnAddToCart  cartBtn"  value="Submit">
								Add to Cart
								<span class="fa fa-shopping-cart"></span>
							</button>
						</form>
					
					</div>
				</div>
				<div class="proContent">
					<h5 class="proName">
						<a href="ecommerce-single.html">' . $row['product_name'] . '</a>
					</h5>
					<div class="proPrice">
						<div class="priceProduct priceCompare">$' . $price_1 . ' </div>
						<div class="priceProduct priceSale">$' . $price_2 . '</div>
					</div>
				</div>
			</div>
		</div>
			';
        }


        echo $output;
    } else {
        echo '<h4 class="text-center text-muted">No products yet</h4>';
    }
}

if (isset($_POST['myPrice'])) {
    $product_price = $_POST['myPrice'];
    $product_name = $_POST['myProductName'];
    $instruction = $_POST['myInstruction'];
    $dimension = $_POST['myDimension'];
    $package_contain = $_POST['myPackage'];
    $warranty = $_POST['myWarranty'];
    $file_name = $_POST['myImage'];
    $color = $_POST['myColor'];
    $cid = $_POST['cid'];
    $post_code = $_POST['post_code'];
    $cuser->addCart($product_name, $product_price, $instruction, $dimension, $package_contain, $warranty, $color, $post_code, $cid, $file_name);
}



if (isset($_POST['action']) && $_POST['action'] == 'displayCart') {
    $output = '';
    $data = $cuser->allCart();
    $path2 = 'assets/php/imagesuploadedf/';
    if ($data) {
        $output .= '<div class="shopping-cart">
        <div class="column-labels">
            <label class="product-image">Items</label>
            <label class="product-details">Product</label>
            <label class="product-price">Price</label>
            <label class="product-quantity">Quantity</label>
            <label class="product-removal">Remove</label>
            <label class="product-line-price">Total</label>
        </div>';
        foreach ($data as $row) {
            $id = $row['id'];
            $price = $row['product_price'];
            $output .= '             
            <div class="product">
                <div class="product-image">
                    <a href="ecommerce-single.html"><img src="admin/assets/php/media/' . $row['file_name'] . '" alt="" class="img-responsive"></a>
                </div>
                <div class="product-details">
                    <div class="product-title"><a href="ecommerce-single.html">' . $row['product_name'] . '</a>
                    </div>
                    <p class="product-description"><b>Color:</b> ' . $row['color'] . '</p>
                </div>
                <div class="product-price product_price' . $id . '">' . $row['product_price'] . '</div>
                <div class="product-quantity">
                    <input type="number" id="quantity'.$id.'" onchange="price()" value="1" min="1" >
                </div>
                <div class="product-removal close">
                    <button class="remove-product" id="'.$id.'">
                        Remove
                    </button>
                </div>
                <div class="product-line-price "  id="priceDisplay'.$id.'">'.$price.'</div>
            </div>
           
            
            <div class="totals">
                <div class="totals-item">
                    <label>Subtotal</label>
                    <div class="totals-value" id="cart-subtotal">141.96</div>
                </div>
                <div class="totals-item">
                    <label>Tax (5%)</label>
                    <div class="totals-value" id="cart-tax">3.60</div>
                </div>
                <div class="totals-item">
                    <label>Shipping</label>
                    <div class="totals-value" id="cart-shipping">15.00</div>
                </div>
                <div class="totals-item totals-item-total">
                    <label>Grand Total</label>
                    <div class="totals-value" id="cart-total">160.56</div>
                </div>
            </div>
            <a href="login.html" class="checkout">Checkout</a>
        </div>
 <script>
 function price() {
    var quantity_price = document.getElementById("quantity'.$id.'").value;
    // alert(quantity_price)
    var priceDisplay = document.getElementById("priceDisplay'.$id.'")
   
    var total_price = quantity_price * '.$price.'
    priceDisplay.innerHTML = total_price
    // alert(total_price)
}
 </script>
';
        }
        $output .= '   </div>
        </div>';

        echo $output;
    } else {
        echo '<h4 class="text-center text-muted">Cart is empty </h4>';
    }
}

?>
<script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script>
    // price()
 
    $(".formAddToCart").submit(function(e) {
        e.preventDefault();
        alert("Are you sure you want to Upload")
        // $("#post").val("Please wait...");

        $.ajax({
            url: "assets/php/process.php",
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

    $('body').on("click", ".remove-product", function(e) {
        del_post = $(this).attr('id');
            $.ajax({
              url: 'assets/php/process.php',
              method: 'post',
              data: {
                del_post: del_post
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

       

      });
</script>
<script>
    var closebtns = document.getElementsByClassName("close");
    var i;

    for (i = 0; i < closebtns.length; i++) {
        closebtns[i].addEventListener("click", function() {
            this.parentElement.style.display = 'none';
        });
    }
</script>
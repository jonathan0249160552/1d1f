<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="assets/css/style-freedom.css">
</head>

<body>

    <!-- header -->
    <div class="w3l-headers-9">
        <header>
            <?php require 'header.php' ?>
        </header>
        <!-- //header -->
    </div>
    <section class="w3l-inner-banner">
        <div class="wrapper">
        </div>
    </section>
    <section class="w3l-ecom-cart">
        <div class="covers-main">
            <div class="wrapper ">
                <h1>Shopping Cart</h1>
               
                <div class="shopping-cart ">
                    
                    <div class="displayCart"></div>
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
            </div>
        </div>

        <!-- close script -->
        <script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script>
            var closebtns = document.getElementsByClassName("close");
            var i;

            for (i = 0; i < closebtns.length; i++) {
                closebtns[i].addEventListener("click", function() {
                    this.parentElement.style.display = 'none';
                });
            }
        </script>
        <!-- //close script -->
    </section>

    <div class="display-ad" style="margin: 8px auto;display: block;text-align: center;">
        <!---728x90--->

    </div>
    <!-- footer-28 block -->
    <section class="w3l-footer-28-main">
        <?php require 'footer.php' ?>
    </section>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-angle-up"></span>
    </button>

    <!-- /move top -->



    <div id="v-w3layouts"></div>
    <script>
        (function(v, d, o, ai) {
            ai = d.createElement('script');
            ai.defer = true;
            ai.async = true;
            ai.src = v.location.protocol + o;
            d.head.appendChild(ai);
        })(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');
    </script>


    <script>
        displayCart();
        //display all note of a user
        function displayCart() {
            $.ajax({
                url: 'assets/php/process.php',
                method: 'post',
                data: {
                    action: 'displayCart'
                },
                success: function(response) {
                    $(".displayCart").html(response);;
                }
            });
        }

        // $(".formAddToCart").submit(function(e) {
        //     e.preventDefault();

        //     $.ajax({
        //         url: "assets/php/process.php",
        //         method: "post",
        //         processData: false,
        //         contentType: false,
        //         cache: false,
        //         data: new FormData(this),
        //         success: function(response) {

        //             $('.Alert').html(response);
        //         },
        //     });
        // });
    </script>

</body>


</html>
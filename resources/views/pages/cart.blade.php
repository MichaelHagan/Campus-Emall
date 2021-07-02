<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Amado - Furniture Ecommerce Template | Cart</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles/bootstrap4/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link  rel="stylesheet" href=" {{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href=" {{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }} ">
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/core-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
</head>
<body>
     

        <!-- ##### Main Content Wrapper Start ##### -->
        <div class="main-content-wrapper d-flex clearfix">

           

            <!-- Header Area Start -->
            <header class="header-area clearfix">
                <!-- Close Icon -->
                <div class="nav-close">
                    <i class="fa fa-close" aria-hidden="true"></i>
                </div>
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('img/core-img/logo.png') }} " alt=""></a>
                </div>
               
                <!-- Cart Menu -->
                <div class="cart-fav-search mb-100">
                    <a href="cart.html" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Cart <span>(0)</span></a>
                    <a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favourite</a>
                    <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
                </div>
                <!-- Social Button -->
                <div class="social-info d-flex justify-content-between">
                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </header>
            <!-- Header Area End -->

            <div class="cart-table-area section-padding-100">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="cart-title mt-50">
                                <h2>Shopping Cart</h2>
                            </div>

                            <div class="cart-table clearfix">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
        <tbody>
            <tr>
                <td class="cart_product_img">
                    <a href="#"><img src="img/bg-img/cart1.jpg" alt="Product"></a>
                </td>
                <td class="cart_product_desc">
                     <h5>White Modern Chair</h5>
                </td>
                <td class="price">
                    <span>$130</span>
                </td>
                <td class="qty">
                        <div class="qty-btn d-flex">
                                <p>Qty</p>
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                            <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                            <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i>
                                            </span>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="cart_product_img">
                    <a href="#"><img src="img/bg-img/cart2.jpg" alt="Product"></a>
                </td>
                <td class="cart_product_desc">
                     <h5>Minimal Plant Pot</h5>
                </td>
                <td class="price">
                    <span>$10</span>
                </td>
                <td class="qty">
                    <div class="qty-btn d-flex">
                        <p>Qty</p>
                            <div class="quantity">
                                <span class="qty-minus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </span>
                                <input type="number" class="qty-text" id="qty2" step="1" min="1" max="300" name="quantity" value="1">
                                <span class="qty-plus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </span>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="cart_product_img">
                    <a href="#"><img src="img/bg-img/cart3.jpg" alt="Product"></a>
                </td>
                <td class="cart_product_desc">
                     <h5>Minimal Plant Pot</h5>
                </td>
                <td class="price">
                    <span>$10</span>
                </td>
                <td class="qty">
                    <div class="qty-btn d-flex">
                        <p>Qty</p>
                        <div class="quantity">
                            <span class="qty-minus" onclick="var effect = document.getElementById('qty3'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </span>
                            <input type="number" class="qty-text" id="qty3" step="1" min="1" max="300" name="quantity" value="1">
                            <span class="qty-plus" onclick="var effect = document.getElementById('qty3'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </span>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="cart-summary">
                                <h5>Cart Total</h5>
                                <ul class="summary-table">
                                    <li><span>subtotal:</span> <span>$140.00</span></li>
                                    <li><span>delivery:</span> <span>Free</span></li>
                                    <li><span>total:</span> <span>$140.00</span></li>
                                </ul>
                                <div class="cart-btn mt-100">
                                    <a href="cart.html" class="btn amado-btn w-100">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Main Content Wrapper End ##### -->

        

       
        
        <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="{{ asset('js/jquery-3.2.1.min.js ') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/popper.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    
    <!-- Plugins js -->
    <script src="{{ asset('js/plugins.js') }} "></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js') }} "></script>
</body> 
</html>
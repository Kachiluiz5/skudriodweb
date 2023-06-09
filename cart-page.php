<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Skudriod || Dynamic services</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css/common-style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body class="cart-page">
<div class="preloader"></div>

<?php
require_once("include/header.php");
?>



<section class="page-title center">
    <div class="container">
        <h2>cart page</h2>
        <ul>
            <li><a href="index.html">home</a></li>
            <li><a href="cart-page.html">cart</a></li>
        </ul>
    </div>
</section>



<!--Cart Section-->
<section class="cart-section">
    <div class="container">
        
        <!--Cart Outer-->
        <div class="cart-outer">
            <div class="table-outer">
                <table class="cart-table">
                    <thead class="cart-header">
                        <tr>
                            <th class="prod-column">Product</th>
                            <th>&nbsp;</th>
                            <th class="price">Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th class="remove"><a href="#" class="remove-btn"><span class="fa fa-trash-o"></span></a></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td colspan="2" class="prod-column">
                                <div class="column-box">
                                    <figure class="prod-thumb"><a href="#"><img src="images/product/13.jpg" alt=""></a></figure>
                                    <h3 class="prod-title padd-top-20">Stuffed soft sitting</h3>
                                </div>
                            </td>
                            <td class="price">$ 155</td>
                            <td class="qty"><input class="quantity-spinner" type="text" value="1" name="quantity"></td>
                            <td class="sub-total">$ 155</td>
                            <td class="remove"><a href="#" class="remove-btn"><span class="fa fa-times"></span></a></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            
            <div class="update-cart-box clearfix">
                <div class="pull-left">
                    <div class="apply-coupon clearfix">
                        <div class="form-group clearfix">
                            <input type="text" name="coupon-code" value="" placeholder="Your coupon code">
                        </div>
                        <div class="form-group clearfix">
                            <button type="button" class="thm-btn thm-blue-bg btn-style-one">Apply</button>
                        </div>
                    </div>
                </div>
                
                <div class="pull-right">
                    <button type="button" class="thm-btn update-cart btn-style-one">Update Cart</button> &nbsp;
                </div>
                
            </div>
            
            
            <div class="row clearfix">

                
                <div class="column cart-total col-md-6 col-sm-12 col-xs-12 col-md-offset-6">
                    <h3>Cart Totals</h3>
                    <!--Totals Table-->
                    <ul class="totals-table">
                        <li class="clearfix"><span class="col col-title">Sub Total</span><span class="col">$15.00</span></li>
                        <li class="clearfix total"><span class="col col-title">Order Total</span><span class="col">$15.00</span></li>
                    </ul>
                    
                    <div class="margin-top-30"><a href="checkout-page.html" class="thm-btn thm-blue-bg btn-style-one">Proceed to Checkout <span class="fa fa-long-arrow-right"></span></a></div>
                </div>
                
            </div>
            
            
        </div>
        
    </div>
</section>






<?php
require_once("include/footer.php");
?>








</body>

</html>

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

<body class="checkout-pages">
<div class="preloader"></div>

<?php
require_once("include/header.php");
?>


<section class="page-title center">
    <div class="container">
        <h2>checkout</h2>
        <ul>
            <li><a href="index.html">home</a></li>
            <li><a href="checkout-page.html">checkout</a></li>
        </ul>
    </div>
</section>



<div class="checkout-page">
    <div class="container">

        <!--Default Links-->
        <ul class="default-links">
            <li>Exisitng Customer? <a href="#">Click here to login</a></li>
        </ul>

        <div class="row clearfix">
            <div class="col-md-7 col-sm-12 col-xs-12">
                <!--Billing Details-->
                <div class="billing-details">
                    <div class="shop-form">
                        <form method="post" action="http://world5.commonsupport.com/html2/kindergarten/checkout.html">

                            <div class="default-title"><h2>Billing Details</h2></div>

                            <div class="row clearfix">

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">First name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Last name <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Company name </div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Address <sup>*</sup> </div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Town / City <sup>*</sup> </div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Postcode / Zip</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>


                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Email Address </div>
                                    <input type="email" name="field-name" value="" placeholder="">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">Phone <sup>*</sup></div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>



                                <!--Form Group-->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">Country <sup>*</sup> </div>
                                    <select name="country">
                                        <option>United Kingdom (UK)</option>
                                        <option>Pakistan</option>
                                        <option>USA</option>
                                        <option>CANADA</option>
                                        <option>INDIA</option>
                                    </select>
                                </div>

                               

                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="check-box"><input type="checkbox" name="shipping-option" id="account-option">   <label for="account-option">Creat an account?</label></div>
                                </div>

                            </div>
                        </form>

                    </div>

                </div><!--End Billing Details-->
            </div>

            <div class="col-md-5 col-sm-12 col-xs-12">
                <!--Your Order-->
                <div class="your-order">
                    <div class="default-title"><h2>Your Order</h2></div>
                    <!--Orders Table-->
                    <ul class="orders-table">
                        <li class="table-header clearfix"><div class="col">Product</div><div class="col">Total</div></li>
                        <li class="clearfix"><div class="col st-2"><div class="prod-box"><img src="images/product/6.jpg" width="45" height="60" alt=""> Grunge Fashion</div> </div><div class="col st-2">$15.00</div></li>
                        <li class="clearfix"><div class="col st-4">SubTotal</div><div class="col st-4">$15.00</div></li>
                        <li class="clearfix total"><div class="col st-3">Order Total</div><div class="col st-3">$15.00</div></li>
                    </ul>

                    <div class="coupon-code">
                        <div class="form-group">
                            <div class="field-group"><input type="text" name="code" value="" placeholder="Enter coupon code if have" required=""></div>
                            <div class="field-group btn-field"><button type="submit" class="theme-btn btn-style-one">Apply</button></div>
                        </div>
                    </div>

                </div><!--End Your Order-->


                <!--Place Order-->
                <div class="place-order">
                    <div class="default-title"><h2>Payment Method</h2></div>


                    <!--Payment Options-->
                    <div class="payment-options">
                        <ul>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-1">
                                    <label for="payment-1"><strong>Cheque Payment</strong><span class="small-text">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</span></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-3">
                                    <label for="payment-3"><strong>Paypal</strong></label>
                                </div>
                            </li>
                            <li>
                                <div class="radio-option">
                                    <input type="radio" name="payment-group" id="payment-2">
                                    <label for="payment-2"><strong>Direct Bank Transfer</strong></label>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <button type="button" class="theme-btn btn-style-one">Place Order <span class="fa fa-long-arrow-right"></span></button>

                </div><!--End Place Order-->
            </div>

        </div>

    </div>
</div>



<?php
require_once("include/footer.php");
?>







</body>

</html>

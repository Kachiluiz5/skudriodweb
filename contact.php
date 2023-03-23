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
<body class="contact-page">
<div class="preloader"></div>
<?php
require_once("include/header.php");
?>



<section class="map-section">
    <div class="google-map" id="contact-google-map" data-map-lat="37.668705" data-map-lng="-121.882048" data-map-title="Awesome Place" data-map-zoom="12">
        
    </div>
    <div class="container">
        <ul>
            <li><a href="index.html">home</a></li>
            <li><a href="about.html">contact us</a></li>
        </ul>
    </div>
</section>



<section class="contact-us">
    <!-- <div class="upper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="item center">
                        <div class="icon">
                            <span class="icon-location"></span>
                        </div>
                        <div class="content">
                            <h4><a href="#">Address</a></h4>
                            <p>Nashville 09 First Floor Downtown <br> st, Victoria, Australia - 0078</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="item center">
                        <div class="icon">
                            <span class="icon-technology-2"></span>
                        </div>
                        <div class="content">
                            <h4><a href="#">Phone number</a></h4>
                            <p></p>
                            <p>(+234)706 235 0036</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="item center">
                        <div class="icon">
                            <span class="icon-interface"></span>
                        </div>
                        <div class="content">
                            <h4><a href="#">Email id</a></h4>
                            <p>skudriod@consultant.com </p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div> -->
    <br><br><br>
    <div class="container">
        <div class="section-title center">
                <h2>Drop A <span>message</span></h2>
            </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-12">
                <div class="contact-box">

                    <form method="post" action="http://world5.commonsupport.com/html2/kindergarten/sendemail.php" class="contact-form" novalidate="novalidate">
                            
                        <div class="row clearfix">
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <input type="text" name="username" value="" placeholder="First Name*">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <input type="text" name="username" value="" placeholder="Last Name*">
                            </div>
                            
                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <input type="email" name="email" value="" placeholder="Email*">
                            </div>


                            <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                <input type="text" name="phone" value="" placeholder="Phone No">
                            </div>
                            
                            
                            <div class="form-group col-lg-12 col-sm-12 col-xs-12">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>

                            <div class="form-group col-lg-12 center">
                                <button type="submit" name="submit" class="btn-style-one center">Submit now</button>
                            </div>
                        </div>
                    </form>
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

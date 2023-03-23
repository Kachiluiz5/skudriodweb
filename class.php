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
<body class="class-page">
<div class="preloader"></div>

<?php
require_once("include/header.php");
?>



<section class="page-title center">
    <div class="container">
        <h2>classes</h2>
        <ul>
            <li><a href="index.html">home</a></li>
            <li><a href="class.html">classes</a></li>
        </ul>
    </div>
</section>



<section class="popular-class style-2">
    <div class="container">
        <div class="search clearfix">
            <div class="pull-left"><h3>Showing 1-9 of total 18 courses</h3></div>
            <div class="pull-right">
                <input type="search" name="search" value="" placeholder="Search">
                <button type="submit" name="submit"><span class="icon-magnifying-glass"></span></button>
            </div>
        </div>

        <div class="event-list row">
            <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="img-holder">
                        <figure><a href="#"><img src="images/resource/13.jpg" alt="Awesome Image"/></a></figure>
                        <div class="content bg-color-1">
                            <div class="inner-box">
                                <div class="class-name">Letter <br>Match Class</div>
                                <div class="class-time">
                                    <p>Mon - Sat</p>
                                    <div class="date">9.00 am to  4.00 pm</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div> -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="img-holder">
                        <figure><a href="#"><img src="images/resource/14.jpg" alt="Awesome Image"/></a></figure>
                        <div class="content bg-color-2">
                            <div class="inner-box">
                                <div class="class-name"> <br>Coding</div>
                                <div class="class-time">
                                    <p>Mon - Sat</p>
                                    <div class="date">9.00 am to  4.00 pm</div>
                                </div>
                            </div>
                                
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.7s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="img-holder">
                        <figure><a href="#"><img src="images/resource/15.jpg" alt="Awesome Image"/></a></figure>
                        <div class="content bg-color-3">
                            <div class="inner-box">
                                <div class="class-name"> <br>Robotics</div>
                                <div class="class-time">
                                    <p>Mon - Sat</p>
                                    <div class="date">9.00 am to  4.00 pm</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="img-holder">
                        <figure><a href="#"><img src="images/resource/13.jpg" alt="Awesome Image"/></a></figure>
                        <div class="content bg-color-1">
                            <div class="inner-box">
                                <div class="class-name">Cognitive <br> Learning</div>
                                <div class="class-time">
                                    <p>Mon - Sat</p>
                                    <div class="date">9.00 am to  4.00 pm</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
            <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="img-holder">
                        <figure><a href="#"><img src="images/resource/14.jpg" alt="Awesome Image"/></a></figure>
                        <div class="content bg-color-2">
                            <div class="inner-box">
                                <div class="class-name">Letter <br>Match Class</div>
                                <div class="class-time">
                                    <p>Mon - Sat</p>
                                    <div class="date">9.00 am to  4.00 pm</div>
                                </div>
                            </div>
                                
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.7s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="img-holder">
                        <figure><a href="#"><img src="images/resource/15.jpg" alt="Awesome Image"/></a></figure>
                        <div class="content bg-color-3">
                            <div class="inner-box">
                                <div class="class-name">Letter <br>Match Class</div>
                                <div class="class-time">
                                    <p>Mon - Sat</p>
                                    <div class="date">9.00 am to  4.00 pm</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="img-holder">
                        <figure><a href="#"><img src="images/resource/13.jpg" alt="Awesome Image"/></a></figure>
                        <div class="content bg-color-1">
                            <div class="inner-box">
                                <div class="class-name">Letter <br>Match Class</div>
                                <div class="class-time">
                                    <p>Mon - Sat</p>
                                    <div class="date">9.00 am to  4.00 pm</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="img-holder">
                        <figure><a href="#"><img src="images/resource/14.jpg" alt="Awesome Image"/></a></figure>
                        <div class="content bg-color-2">
                            <div class="inner-box">
                                <div class="class-name">Letter <br>Match Class</div>
                                <div class="class-time">
                                    <p>Mon - Sat</p>
                                    <div class="date">9.00 am to  4.00 pm</div>
                                </div>
                            </div>
                                
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="item wow fadeIn" data-wow-duration="2s" data-wow-delay="0.7s" data-wow-offset="0" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="img-holder">
                        <figure><a href="#"><img src="images/resource/15.jpg" alt="Awesome Image"/></a></figure>
                        <div class="content bg-color-3">
                            <div class="inner-box">
                                <div class="class-name">Letter <br>Match Class</div>
                                <div class="class-time">
                                    <p>Mon - Sat</p>
                                    <div class="date">9.00 am to  4.00 pm</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div> -->

        </div>

        <div class="link-btn center"><a href="#" class="theme-btn btn-style-one">load more</a></div>

    </div>
</section>

<?php
require_once("include/footer.php");
?>









</body>

</html>
